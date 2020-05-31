	 function zm()
	 {
		var div = document.getElementById("abc");
		if(div.classList == "info"){
		div.classList.remove("info");
		div.classList.add("info2");
		}
		else{
		div.classList.remove("info2");
		div.classList.add("info");
		}
	 }
	 
	 function po(){
		var div1 = document.createElement('div');
		var text = document.createTextNode('"Gry łączą, a nie dzielą"');
			div1.id = 'cytat'
			div1.style.width = '220px';
			div1.style.marginLeft = 'auto';
			div1.style.marginRight = 'auto';
			div1.style.marginTop = '10px';
			div1.style.marginBottom = '10px';
			div1.style.padding = '15px';
			div1.style.backgroundColor = '#000';
			div1.appendChild(text);
			document.getElementById("abc").appendChild(div1);
	 }
	 
	 function us(){
		 $( "#cytat" ).remove();
	}
	
	$( function() {
    $( "#datepicker" ).datepicker();
  } );
  
  $( function() {
    $( "#dialog" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
 
    $( "#opener" ).on( "click", function() {
      $( "#dialog" ).dialog( "open" );
    });
  } );
  
function form() {
    if (localStorage.click_count) {
        localStorage.click_count = Number(localStorage.click_count) + 1;
    } else {
        localStorage.click_count = 1;
    }
    var p = document.getElementById("wynik");
    p.innerHTML = "Ilość wysłanych formularzy: " +
        localStorage.click_count;} 

function zapisz()
	{
    sessionStorage.imie=document.getElementById("imie").value;
    sessionStorage.nazwisko=document.getElementById("nazwisko").value;
    sessionStorage.datepicker=document.getElementById("datepicker").value;
    sessionStorage.pole=document.getElementById("pole").value;

	}
	
function odczyt()
	{
    document.getElementById("imie").value=sessionStorage.imie;
    document.getElementById("nazwisko").value=sessionStorage.nazwisko;
    document.getElementById("datepicker").value=sessionStorage.datepicker;
    document.getElementById("pole").value=sessionStorage.pole;
	}