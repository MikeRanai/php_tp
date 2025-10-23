<?php
include 'Voiture.php';

$voiture1 = new Voiture("Nissan","Micra",120);

$voiture1->avancer();

$voiture2 = new Voiture("Dacia", "Sendero", 110);

$voiture2->avancer();

$voitures = array($voiture1, $voiture2 , new Voiture("BMW", "Riche", 1200));

for($i=0; $i<3;$i++){
    $voitureCourante=$voitures[$i];
    $voitureCourante->setVitesse($voitureCourante->getVitesse()+1);

    $voitureCourante->avancer();
}

foreach ($voitures as $voiture) {
    $voiture->setVitesse($voiture->getVitesse()+1);
    $voiture->avancer();
}

phpinfo();