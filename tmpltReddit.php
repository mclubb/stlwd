<?php
/**
 * Template Name: Full Width Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
//Todo: http://www.huffingtonpost.com/feeds/verticals/good-news/index.xml

$base_url = 'https://www.reddit.com/r/happy/.rss';

$ch = curl_init($base_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$content = curl_exec($ch);
curl_close($ch);

$xml = new SimpleXmlElement($content);

echo "<div class='container'>";
echo "<h1>Reddit /r/happy</h1>";
foreach($xml->entry as $entry) {
	$href = $entry->link->attributes();
	echo "<div class='entry'>";
	echo "<span>". $entry->title . "</span>";
	echo "<div class='entry_content'>" . $entry->content . "</div>";
	echo "</div>";
}
echo "</div>";

echo <<<STYLE
<style>
	.container {
		margin-left: 25px;
		margin-right: 25px;
		padding: 0 10px;
	}
	.entry { 
		padding: 10px; 
		background-color: #f1f1f1;
		margin-bottom: 10px;
	}

	.entry_content {
		display:none;
		background-color: #fff;
		padding: 10px;
	}

	.entry span {
		font-weight: bold;
	}
</style>
STYLE;

echo <<<JAVASCRIPT
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script>
	$(document).ready(function() {
		$(".entry").click(function() {
			$(this).find('.entry_content').toggle();
		});
	});	
</script>
JAVASCRIPT;
