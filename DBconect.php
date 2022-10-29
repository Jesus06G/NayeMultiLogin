<?php
$db_host="buojhg5y2w2ultallhhc-mysql.services.clever-cloud.com"; //localhost server 
$db_user="uugunhd73cgyw7jr";	//database username
$db_password="eZ2WtjBrsUn9iloTHA2x";	//database password   
$db_name="buojhg5y2w2ultallhhc";	//database name

try
{
	$db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
	$e->getMessage();
}

?>



