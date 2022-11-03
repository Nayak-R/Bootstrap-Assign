<?php
$host = "localhost";
$username = "root";
$password = "";

try 
{
    $conn = new PDO("mysql:host=$host;dbname=ampdata", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

$response = array('success' => false);

if(isset($_POST['namestore']) && $_POST['namestore']!='' && isset($_POST['mobstore']) && $_POST['mobstore']!='' && isset($_POST['emailstore']) && $_POST['emailstore']!='')
{
	$sql = "INSERT INTO emplist(Name, Email, Mobile, Company) VALUES('".addslashes($_POST['namestore'])."', '".addslashes($_POST['emailstore'])."', '".addslashes($_POST['mobstore'])."', '".addslashes($_POST['compstore'])."')";
	
	if($conn->query($sql))
	{
		$response['success'] = true;
	}
}

echo json_encode($response);