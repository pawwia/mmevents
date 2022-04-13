$("a[href^='#xd']").on('click',function(event) {$("a[href^='#xd']").scrollTop(300)});


/*$(".panel").mouseover( function() {
	const $ani=$(".panel");
		
		$ani.stop().animate({
			opacity: 0.8
		}, 800);
});

$(".panel").mouseout( function() {
	const $ani=$(".panel");
		
		$ani.stop().animate({
			opacity: 0.8
		}, 800);
});*/
 var clicked=false;
//$(document).ready(function(){
	

//$(".przyc").click(function()
function sprawdz()
{
	
	
	
	if (clicked==false)
	{clicked=true;
		$(".navbar").css("position","static");	
		$('.navbar').removeAttr("height");

		$('html, body').animate({	scrollTop: top}, 100);
		

		
	    $(".panel").css("marginBottom","0");	
		
	}
else if (clicked==true)
{


	clicked=false;
}

}
//);});

setInterval ( async function(){
	if (($(window).width())>736){
var scrollY2=window.pageYOffset;



	


if (scrollY2==0) {
	$(".navbar").css("position","static");
}
if ((scrollY2>0)) {
	
	$(".panel").mouseover( function() {
		
		$(".elm").mouseover( function() {
			$(this).stop().css({
				color: "#00405d"
			}, 600)
		})
	})
	
	$(".panel").mouseout( function() {
		
		$(".elm").mouseout( function() {
			$(this).stop().css({
				color: "white"
			}, 600)
		})
	});
}

}},300);

setInterval (function(){
var scrollY2=window.pageYOffset;
if (scrollY2>0)
{if (clicked==false)
 {
	$(".menu").css("position","fixed");
	$(".menu").css("top","0");
	$(".menu").css("left","0");
	$(".menu").css("right","0");
}
	//$(".menu").css("width","100%");
}
if (scrollY==0)
{
	$(".menu").css("position","static");
		
}

},100);
function przek(cid)
{
	var id=cid;

 $('html,body').animate({
        scrollTop: $(id).offset().top-87},
        'slow',);
	
	
    

	
}


/*
$(document).ready(function() { 
 
	$('a[href^="#xd"]').on('click', function(event) {
	
		//var target = $( $(this).attr('onclick') );

		if( target.length ) {
			event.preventDefault();
			$('html, body').animate({
				scrollTop: target.offset().top
			}, 1000);
		}
	});
 
});

*/



	
	
	
	
function sm() {
	
	

   if(document.getElementById("acceptemail").checked == true){ 

var from1=document.getElementById("kontakt").email.value;
	var main=document.getElementById("kontakt").main.value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("kontakt").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "send_message.php?from="+from1+"&mess="+main, true);
   xhttp.send();}
   else alert("Nie wyraziłeś zgód na przetwarzanie danych. Nie możesz wysłać maila");
   
   
   
   }
   
     function callut() {
	
	

   if(document.getElementById("rules").checked == true){ 
var kontrola=0;
var name=document.getElementById("wecalluform2").imie.value;
var tel=document.getElementById("wecalluform2").tel.value;
var zip=document.getElementById("wecalluform2").zipcode.value;
var other="- ";

 if (!zip.match(/[0-9]{2}\-[0-9]{3}/)) {
	
        alert("Wprowadzono błędny kod pocztowy");

    }else kontrola=kontrola+1;
	

if (kontrola==1){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("wecalluform2").innerHTML=this.responseText;
    }
  };
  xhttp.open("GET", "call.php?name="+name+"&tel="+tel+"&zip="+zip+"&other="+other, true);
   xhttp.send();}}
   else alert("Nie wyraziłeś zgód na przetwarzanie danych. Nie możesz się z Tobą skontaktować");
   
   
   
   }
   function callu() {
	
	

   if(document.getElementById("rules").checked == true){ 
var kontrola=0;
var name=document.getElementById("wecalluform").imie.value;
var tel=document.getElementById("wecalluform").tel.value;
var zip=document.getElementById("wecalluform").zipcode.value;
var other="- ";
var other=other+document.getElementById("wecalluform").additional.value;

 if (!zip.match(/[0-9]{2}\-[0-9]{3}/)) {
	
        alert("Wprowadzono błędny kod pocztowy");

    }else kontrola=kontrola+1;
	

if (kontrola==1){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("wecalluform").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "call.php?name="+name+"&tel="+tel+"&zip="+zip+"&other="+other, true);
   xhttp.send();}}
   else alert("Nie wyraziłeś zgód na przetwarzanie danych. Nie możesz się z Tobą skontaktować");
   
   
   
   }
   
   
   function checkdate() {
	
	

   if(document.getElementById("rulesacc").checked == true){ 
var kontrola=0
var imie=document.getElementById("findter").imie.value;
var email=document.getElementById("findter").email.value;
var tel=document.getElementById("findter").tel.value;
var zipcode=document.getElementById("findter").zipcode.value;
var meeting=document.getElementById("findter").meeting.value;

var prefden=document.getElementById("findter").prefden.value;
var prefgod=document.getElementById("findter").prefgod.value;
var prefilo=document.getElementById("findter").prefilo.value;

var additional=document.getElementById("findter").additional.value;

 if (!zipcode.match(/[0-9]{2}\-[0-9]{3}/)) {
        alert("Wprowadzono błędny kod pocztowy");
    }else kontrola=kontrola+1;
	
	
if (kontrola==1){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("findter").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET","meeting.php?imie="+imie+
  "&email="+email+
  "&tel="+tel+
  "&zipcode="+zipcode+
  "&meeting="+meeting+"&prefden="+prefden+"&prefgod="+prefgod+"&prefilo="+prefilo+"&additional="+additional,true);
   xhttp.send();}
   
   
   }
   else alert("Nie wyraziłeś zgód na przetwarzanie danych. Nie możesz wysłać maila");
   
   
   }  
   
   
   
     function landing() {
	
	

   if(document.getElementById("rulesacc").checked == true){ 
var kontrola=0
var imie=document.getElementById("findter").imie.value;
var tel=document.getElementById("findter").tel.value;
var additional=document.getElementById("findter").additional.value;

 if (tel=="" && imie=="") {
        alert("Wprowadzono błędny kod pocztowy");
    }else kontrola=kontrola+1;
	
	
if (kontrola==1){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("findter").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET","meeting.php?imie="+imie+"&tel="+tel+"&additional="+additional,true);
   xhttp.send();}
   
   
   }
   else alert("Nie wypełniłeś wymaganych pól. Spróbuj jeszcze raz :) ");
   
   
   }  
   
   $().ready(function() {
    var sName = "cookiesok";
    $("#close-cookie-warn").click(function(){
        var oExpire = new Date();
        oExpire.setTime((new Date()).getTime() + 3600000*24*365);
        document.cookie = sName + "=1;expires=" + oExpire;
        $("#cookie-warn").hide("slow");
    });
 
    var sStr = '; '+ document.cookie +';';
    var nIndex = sStr.indexOf('; '+ escape(sName) +'=');
    if (nIndex === -1) {
        $("#cookie-warn").show();
    }
});

$("#wynajmijbutton").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#findter").offset().top
    }, 2000);
});

$("#wynajmijbutton2").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#findter").offset().top
    }, 2000);
});

$("#wynajmijbutton3").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#findter").offset().top
    }, 2000);
});

$("#wynajmijbutton4").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#findter").offset().top
    }, 2000);
});

$("#wynajmijbutton5").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#findter").offset().top
    }, 2000);
});