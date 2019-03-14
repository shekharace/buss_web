
 <?php ob_start();
 

$db['db_host'] = "localhost";
$db['db_user'] = "shekharx";
$db['db_pass'] = "ShekharK@321";
$db['db_name'] = "shekharx_jayshreetools";

foreach($db as $key => $value){

define(strtoupper($key), $value);

}

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME); 

$query ="SET NAMES utf8";
mysqli_query($connection, $query);
	 
/*

if($connection) {
   
echo "we are connected";

}

*/
	 
 
 
 
 
 
 
 
 
 ?>