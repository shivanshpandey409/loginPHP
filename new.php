<?php
    session_start();
    if(time() > $_SESSION['expire']){
        echo "<a href='logout.php'> Login Again </a>";
    }
    else{
        echo "Hello " . $_SESSION['login_user'];
        echo "<a href='logout.php'> Logout </a>";
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<title>तूर्यनाद</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/e0cbc93328.js" crossorigin="anonymous"></script>
</head>
<body>
	
</body>
</html>
    