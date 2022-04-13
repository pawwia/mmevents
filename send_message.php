<?php

$email='kontakt@mmevents.pl';
$title='Formularz Kontaktowy - mmevents.pl';
$tekst=$_GET["from"]." ".$_GET["mess"];

$x=mail($email,$title,$tekst);
if ($x)
{
	echo "<div class='alert alert-success fade in'>Widomość została wysłana! Dziękujemy</div>";
	
}

else{ echo "<div class='alert alert-danger fade in'>Wiadomość nie mogła zostać wysłana. Spróbuj inną formę kontaktu </div>";

}


?>