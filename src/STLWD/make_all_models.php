<?php
$db = 'stlwd';
$conn = mysqli_connect("localhost", "root", "", $db);

$sql = "SHOW tables";

$results = mysqli_query($conn, $sql);

while($object = mysqli_fetch_object($results)) 
{
	$object_field = 'Tables_in_' . $db;
	$table = $object->$object_field;
	
	
	$esc_table = ucfirst($table);
	$esc_table = str_replace("_", "", $esc_table);
	$file = fopen($esc_table . ".php", "w");
	fwrite($file, "<?php\n\nclass STLWD_$esc_table extends STLWD_BaseModel\n{\n\tprotected \$tableName = '$table';\n\n");

	$sql = "DESCRIBE $table";

	$dResults = mysqli_query($conn, $sql);
	while($dObject = mysqli_fetch_object($dResults))
	{
		fwrite($file, "\tpublic \$$dObject->Field;\n");
	}

	fwrite($file, "}");
	fclose($file);

