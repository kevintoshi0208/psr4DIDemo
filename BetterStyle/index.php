<?php
include_once __DIR__ . "/autoload.php";

$angry = new \libs\Angry();
$emotion = new \libs\Emotion($angry);
echo $emotion->feelAngry();

echo '<br>';

$mad = new \libs\Mad();
$emotion = new \libs\Emotion($mad);
echo $emotion->feelAngry();

?>