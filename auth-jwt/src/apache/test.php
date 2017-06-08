<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8" />
        <title>Test</title>
        
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    	<script src="/socket.io/socket.io.js"></script>
    </head>
    <body>
    <?php 
    
	include "./jwt.php";

/*
	$token = array();
	$token['id'] = "Isemety";
	$token['date'] = '25041996';

	$encode = JWT::encode($token, 'Imesety');

	echo $encode;
	
	echo $_POST['token'];

	$trad = JWT::decode($encode, 'Imesety');

	echo $trad->id;
	echo "<br/>";
	echo $trad->date;
*/
	?>
    	<h1>Connexion - web</h1>
		
	 	
    	
		<script language="JavaScript"> 
			console.log(document.cookie);
			
			function decodeToken(token){
				var playload = JSON.parse(atob(token.split('.')[1]));
				return playload;
			}
    
    		var token = decodeToken(document.cookie);
    		console.log(token);
		</script>
    </body>
</html>
