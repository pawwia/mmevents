


<!DOCTYPE html>

<html lang="pl">
<head>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-X0F7EBDM55"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-X0F7EBDM55');
</script>

<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">



<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style/style.css">

<meta charset="UTF-8">
 <meta name="description" content="Wynajmij fotolustro na imprezy -  urodziny, wesela, studniówki,  konferencje, szkolenia i inne - Najkorzystniejsze pakiety - najlepsza jakość">
 <meta name="keywords" content="fotobudka, fotobudki, fotolustro, fotolustra, wynajem, wesela, wesele, imprezy, impreza, konferencja, szkolenie, konferencje, planowanie, organizacja, organizowanie, zdjęcia, zdjęcie, foto, szczecin, gorzów, wlkp, kołobrzeg, koszalin, goleniów,świdwin, świnoujscie, międzyzdroje, gryfice, gryfino ">
 <meta name="author" content="Paweł Wiatrak">


<title>Magic Moments Events - fotobudki fotolustra Szczecin Gorzów Wlkp</title>
<link rel="Shortcut icon" href="img/favicon.png" />
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '273507841402145');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=273507841402145&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>
<body>



<nav class="navbar navbar-inverse menu" >
  <div class="container">
    <div class="navbar-header" style="margin-right: 20px;">
      <button type="button" class="navbar-toggle przyc" onclick="sprawdz()" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     <a class="navbar-brand" href="index.html"><img  style="height:35px;" class="ban" src="img/baner.png" alt="logo" ></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
                <li ><a  class="col-sm-12 panel elm button" id="start" href='index.html'> Home</a></li>
			<li ><a  class="col-sm-12 panel elm button" id="start1" href='about.html'> O nas</a></li>
			 <li ><a  class="col-sm-12 panel elm button" id="start2" href='offer.html'> Cennik</a></li>
			 <li ><a  class="col-sm-12 panel elm button" id="start3" href='fotolustra.html'> Fotolustro </a></li>
			 <li ><a  class="col-sm-12 panel elm button" id="start4" href='fotodron.html'> FotoDron </a></li>
			 <li ><a  class="col-sm-12 panel elm button" id="start5" href='contact.html'> Kontakt</a></li>


			 <!-- <li ><<button  class="col-sm-12 panel elm button" id="start" onclick="window.location.href='index.html'"> Aktualności</button></li>
			 <li ><button  class="col-sm-12 panel elm button" id="start" onclick="window.location.href='about.html'"> O mnie</button></li>
			 <li ><button  class="col-sm-12 panel elm button" id="start" onclick="window.location.href='insurances.html'"> Ubezpieczenia</button></li>
			 <li ><button  class="col-sm-12 panel elm button" id="start" onclick="window.location.href='meeting.html'"> Na spotkaniu</button></li>
			 <li ><button  class="col-sm-12 panel elm button" id="start" onclick="window.location.href='contact.html'"> Kontakt</button></li>-->

             

              
            </ul>
    
    </div>
  </div>
</nav>







<div class="container-fulll">
<div class="row template">
<div class="col-lg-4 col-sm-12 col-xs-12 d"></div>

<div class="col-lg-4 col-sm-12 col-xs-12 d"  id="xdstart">


<div class="row justify-content-center">
<div class="logowanieokno">
<p class="napisgallog">MAGIC MOMENTS EVENTS</p>
<p class="napisgallog">Galeria zdjęć</p>
<p class="napisgallog">Podaj dane logowania aby wejść do galerii</p>
<?php 

$wiad=$_GET['wiad'];
if ($wiad==1){?>
<p class="napisgallog" style="color:red; font-weight:bold;">Hasło lub login są nieprawidłowe. Spróbuj jeszcze raz. Pamiętaj o wielkości liter</p>
<?php }?>
<form action="galerialog.php" method="post">

<input type='text' name='login' placeholder="Login"><br>

 <input type='password' name='pass' placeholder="Hasło" ><br>

<input type='submit' value='Zaloguj' >

</form>
</div>
</div>

<div class="col-lg-4 col-sm-12 col-xs-12 d"  >





</div>
<script>
		
	$(document).ready(function(){
	
	var tekst="";
	var ilosczdjec=130;
	var folder="20211204"
	for(var i=1;i<ilosczdjec;i++)
	{
	tekst=tekst+' <div class="col-sm-4 elemzdj">   <a href="galerypics/'+folder+'/0 ('+i+').jpg"  data-toggle="lightbox" data-gallery="example-gallery"   class=" ">                <img src="galerypics/'+folder+'/mini/0 ('+i+').jpg" style="width:100%; height:100%;" class="img-fluid"></a> <div class="linkgal"><a href="galerypics/'+folder+'/0 ('+i+').jpg" >Pobierz to zdjęcie</a> </div></div> ';
	}

	$("#miejsce").html(tekst);
	
	
	
	});
		
		</script>


</div>

<section id="cookie-warn">
    <p><strong>UWAGA!</strong> Niniejsza strona wykorzystuje pliki cookies. 
    Dane z nich pozyskane wykorzystywane są w celach statystycznych. Pozostając na stronie godzisz się na 
    ich zapisywanie w Twojej przeglądarce oraz akceptujesz Regulamin 
    <a href="javascript:void(0);" id="close-cookie-warn"
    >Zamknij ostrzeżenie</a>
	<a href="doc/regulamin.pdf"> Regulamin</a></p>
</section>

<footer class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
<img  style="height:35px;" class="ban" src="img/baner.png" alt="logo" >
</br>Tel:<a style="color:#fff; " href="tel:+575046074">+48 575 046 074</a><br>E-mail:<a style="color:#fff;" href="mailto:kontakt@mmevents.pl">kontakt@mmevents.pl</a>
<p>Copyright: 2018 Magic Moments Events  <div style="font-size:5px;">Icons made by www.freepik.com from www.flaticon.com is licensed by </div> <p>


<marquee>
Województwo Zachodniopomorskie
Szczecin
Centrum
Śródmieście
Zachód
Północ
Dąbie
Słoneczne
Niebuszewo
Warszewo
Gumieńce
I inne
Police
Stargard
Kamień Pomorski
Police
Świnoujście
Międzyzdroje
Kołobrzeg
Koszalin
Białogard
Pyrzyce
Choszczno
Drawsko Pomorskie
Myślibórz
Gryfino
Chojna
Chociwel
Nowogard
Goleniów
Trzebiatów
I inne
Województwo Lubuskie
Gorzów Wielkopolski
Siedlice
Zakanale
Zamoście
Karnin
Kostrzyn nad Odrą
Międzyrzecz
Świebodzin
Nowy Tomyśl
Dębno
Międzychód
Cedynia
Rzepin
Boczów
Skwierzyna
I inne
Województwo Wielkopolskie
Województwo Pomorskie
</marquee>
</footer>

</div>
</div>

</div>

</div>
</div>

 <script   src="js.js"></script>

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js" integrity="sha512-Y2IiVZeaBwXG1wSV7f13plqlmFOx8MdjuHyYFVoYzhyRr3nH/NMDjTBSswijzADdNzMyWNetbLMfOpIPl6Cv9g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha512-Velp0ebMKjcd9RiCoaHhLXkR1sFoCCWXNp6w4zj1hfMifYB5441C+sKeBl/T/Ka6NjBiRfBBQRaQq65ekYz3UQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js" integrity="sha512-YibiFIKqwi6sZFfPm5HNHQYemJwFbyyYHjrr3UT+VobMt/YBo1kBxgui5RWc4C3B4RJMYCdCAJkbXHt+irKfSA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>$(document).on('click', '[data-toggle="lightbox"]', function(event) {
                
				event.preventDefault();
                $(this).ekkoLightbox();
          

		   });
			

			
			
			
			
			
			
			
			
			</script>
</body>




</html>