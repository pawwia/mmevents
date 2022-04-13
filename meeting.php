<?php

  
  $title='Zapytanie o termin mmevents.pl';
$email='kontakt@mmevents.pl';
$tekst='Dzień dobry,  klient '.$_GET['imie'].' złożył zapytanie o dzień  Dnia: '.$_GET['prefden'].' 
o godzinie '.$_GET["prefgod"].' 
Kod pocztowy: '.$_GET["zipcode"].' 
Telefon: '.$_GET["tel"].' 
E-mail: '.$_GET["email"].' 
Ilość godzin:'.$_GET["prefilo"].'
Dodatkowe Informacje: '.$_GET["additional"].' 
Klient wyraził zgodę na przetwarzanie danych osobowych oraz zaakceptowal regulamin strony Pozdrawiamy';

$x=mail($email,$title,$tekst);
if ($x)
{
	echo "<div class='alert alert-success fade in'>Dziękujemy za zgłoszenie. Skontaktujemy się z Tobą najszybciej jak będzie to możliwe.</div>";
	
}

else{ echo "<div class='alert alert-danger fade in'>Nastąpił błąd. Proszę o kontakt telefoniczny lub e-mail.</div>";

}


?>