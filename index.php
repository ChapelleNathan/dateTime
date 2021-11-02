<?php
$presentTime = new DateTime('NOW');
$destinationTime = new DateTime('yesterday 01:00');
echo nl2br($presentTime->format('m/d/Y H:i') . PHP_EOL);
echo nl2br($destinationTime->format('m/d/Y H:i') . PHP_EOL);
$diff = $destinationTime->diff($presentTime, true);
echo nl2br('Il y  a ' . $diff->m . ' mois, ' . $diff->d . ' jours, ' . $diff->y . ' années et ' . $diff->h . ' heures, ' . $diff->i . 
' secondes de différences par rapport a la fin du Zevent :\'(' . PHP_EOL);
$minutes = $diff->days * 24 * 60;
echo 'On a besoins de ' . floor($minutes / 1000) . ' litre(s) de carburant' . PHP_EOL;
