<?
	require_once('vendor/autoload.php'); 

	use Github\Client; 

	$client = new Client(); 

	$user = 'cicerosnt'; //user github

	$repositories = $client->api('user')->repositories($user); 	

	$followers = $client->api('user')->followers($user); 

	$show = $client->api('user')->show($user);
	
?>
<!DOCTYPE html>
<html>
<head>
<title>Page repositories GitHub</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/PTSans.css">
</head>
<body>