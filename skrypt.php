<?php
$nip = '5220002860';
$json = file_get_contents('http://api.mojepanstwo.pl/krs/podmioty?conditions%5Bnip%5D='.$nip);
$body = json_decode($json);
$nazwa = 'krs_podmioty.nazwa_skrocona';
echo 'Nazwa firmy o NIPie: '. $nip .' to: ' . $body->search->dataobjects[0]->data->$nazwa;
?>