<?php

  
  $title='Prośba o szybki kontakt';
$email='kontakt@mmevents.pl';
$tekst='Dzień dobry,  klient '.$_GET['name'].' prosi o jak najszybszy kontakt pod numerem telefonu: '.
$_GET["tel"].'Kod pocztowy: '.$_GET["zip"].'Dodatkowe Informacje: '.$_GET["other"].' 
Klient wyraził zgodę na przetwarzanie danych osobowych oraz zaakceptowal regulamin strony Pozdrawiamy';

$x=mail($email,$title,$tekst);
if ($x)
{
	echo "<div class='alert alert-success fade in'>Dziękujemy za zgłoszenie. Skontaktujemy się z Tobą najszybciej jak będzie to możliwe.</div>";
	
}

else{ echo "<div class='alert alert-danger fade in'>Nastąpił błąd. Proszę o kontakt telefoniczny lub e-mail.</div>";

}


?>