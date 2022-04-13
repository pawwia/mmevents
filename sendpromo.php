
<?php
$email=$_POST['email'];
  
 $title='Kod rabatowy MMEVENTS.PL - zarezerwuj fotolustro z rabatem';
$tekst="Dzień dobry, dziękujemy za zainteresowanie naszymi usługami. Podaj przy rezerwacji swojego terminu fotolustra kod: GALANETTO a otrzymasz 10% promocję od ceny usługi! \n Pozdrawiamy \n Zespół mmevents \n www.mmevents.pl" ;

$x=mail($email,$title,$tekst,'From: kontakt@mmevents.pl' . "\r\n" .'Reply-To: kontakt@mmevents.pl' );
$y=mail('kontakt@mmevents.pl','gala', $email);
if ($x)
{
	echo "<div class='alert alert-success fade in'>Dziękujemy za zainteresowanie naszą usługą. Na mailu powinieneś mieć kod rabatowy.</div>";
	
}

else{ echo "<div class='alert alert-danger fade in'>Nastąpił błąd. Skontaktuj się z nami telefoniczne lub mailowo aby otrzymać rabat :)</div>";

}


?>
