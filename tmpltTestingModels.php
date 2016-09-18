<?php

/**
* Template Name: TESTING MODELS
*/

$post = new STLWD_Posts();
$posts = $post->all();


foreach($posts as $p)
{
	echo $p->id . " - " . $p->slug . "<br>";
}

$only_post = $post->get('14');

echo "<br><br>";
echo "The only post there is: " . $only_post->slug . "<br>";


?>
