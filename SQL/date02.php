<?php

setlocale(LC_ALL, 'fr_FR');

$nbrSecondEpoch = time();
echo "timeStamp : $nbrSecondEpoch  secondes depuis le 1/1/1970<br>";

$date = getdate();
print_r( $date );
echo "<br>";

$date_str = date( " Y - m - d H:i:s", $nbrSecondEpoch  );
echo "$date_str<br>";

echo date( 'Y', $nbrSecondEpoch  )."<br>";
echo date( 'd/m/Y' )."<br>";

echo "<br>";

// string to time
$time_noel = strtotime( "2020-12-25 12:30"  );
echo "$time_noel<br>";
echo date( 'd/m/Y H:i', $time_noel  )."<br>";

$time_noel += 60;
echo date( 'd/m/Y H:i', $time_noel  )."<br>";

for ( $time = strtotime( "2020-10-16 8:00" ); $time < strtotime( "2020-10-16 18:00" ) ; $time += 5400  )
{
    echo date( 'H:i', $time  )."<br>";
}

echo "<br>";
echo "<br>";

$time_stamp  = mktime( 0, 0, 0, 10, 16, 2020  );
echo date( 'D M d/m/Y H:i', $time_stamp  )."<br>";

$time_stamp  = mktime( 0, 0, 0, date('m'), date('d')+1, date('Y')  );
echo ">$time_stamp<br>";
echo date( 'D M d/m/Y H:i', $time_stamp  )."<br>";

$time_stamp  = mktime( 0, 0, 0, date('m')+1, date('d'), date('Y')  );
echo ">$time_stamp<br>";
echo date( 'D M d/m/Y H:i', $time_stamp  )."<br>";

$time_stamp  = mktime( 0, 0, 0, date('m')-1, date('d'), date('Y')  );
echo ">$time_stamp<br>";
echo date( 'D M d/m/Y H:i', $time_stamp  )."<br>";

$time_stamp  = mktime( 8, 10, 1, 5, 21, 1961  );
echo ">$time_stamp<br>";
echo date( 'D', $time_stamp  )."<br>";
echo date( 'Y-m-d h:i:s', $time_stamp  )."<br>";

echo date( 'D Y-m-d h:i:s', $time_stamp  )."<br>";

$jours = [ 'dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi' ];     
$mois = [ '', 'janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'decembre' ];     

echo "le ".$jours[ date('w',$time_stamp) ].date( ' d ', $time_stamp  ).$mois[ date('n',$time_stamp) ].date( ' Y', $time_stamp  )."<br>";






//DATE : stocke une date au format AAAA-MM-JJ (Année-Mois-Jour) ;
//TIME : stocke un moment au format HH:MM:SS (Heures:Minutes:Secondes) ;
//DATETIME : stocke la combinaison d'une date et d'un moment de la journée au format AAAA-MM-JJ HH:MM:SS. Ce type de champ est donc plus précis ;
//TIMESTAMP : stocke le nombre de secondes passées depuis le 1er janvier 1970 à 00 h 00 min 00 s ;
//YEAR : stocke une année, soit au format AA, soit au format AAAA.




?>