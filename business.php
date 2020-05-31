<?php
use MongoDB\BSON\ObjectID;
function get_db()
{
    $mongo = new MongoDB\Client(
        "mongodb://localhost:27017/wai",
        [
            'username' => 'wai_web',
            'password' => 'w@i_w3b',
        ]);

    $db = $mongo->wai;

    return $db;
}

function add_user($user)
{
	$db = get_db();
	$db->users->insertOne($user);
}

function add_pic($picture)
{
	$db = get_db();
	$db->pictures->insertOne($picture);
}

function remove_gal($pictures)
{
	$db = get_db();
	foreach ($pictures as $picture)
	{
		$id = $picture['_id'];
		$db->pictures->deleteOne(['_id' => new ObjectID($id)]);
	}
}

function find_name($login)
{
	$db = get_db();
	$user = $db->users->findOne(['login'=>$login]);
	return $user;
}



?>