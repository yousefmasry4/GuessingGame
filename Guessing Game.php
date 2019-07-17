<html>
<head>
<title>Guessing Game by Yousseff</title>
</head>
<body>
<h1>Hello,Welcome to my guessing game</h1>
<p><?php
    $arr=array(5,9,77,22,10);
    shuffle($arr);
    $x=$arr[0];
	if( ! isset($_GET['guess']) ){
		echo "Missing guess parameter";
	} else {
        if($_GET['guess'] < $x)
            echo "Your guess is too short";
        elseif( ! is_numeric($_GET['guess']) ){
			echo "Your guess is not a number";
		} elseif ( $_GET['guess'] < $x) {
			echo "Your guess is too low";
		} elseif ( $_GET['guess'] > $x ) {
			echo "Your guess is too high";
		} else {
			echo "Congratulations - You are right";
		}
	}
?>
</p>
</body>
</html>