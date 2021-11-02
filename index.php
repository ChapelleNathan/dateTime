<?php
$presentTime = new DateTime('NOW');
$destinationTime = new DateTime('NOW', new DateTimeZone('America/Toronto'));
$diff = $destinationTime->diff($presentTime, true);
echo nl2br($presentTime->format('m/d/Y H:i') . PHP_EOL);
echo nl2br($destinationTime->format('m/d/Y H:i') . PHP_EOL);
var_dump($diff);
echo 'Il y  a ' . $diff->m . ' mois, ' . $diff->d . ' années, ' . $diff->y . ' et ' . $diff->h . ' heures, ' . $diff->i . ' secondes de différences';
