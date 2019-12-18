<?php 
session_start();

if(isset($_SESSION['UserColor'])){

$Color = $_SESSION['UserColor'];

}

else{

$Color = "black";
}
?>
<html>
<head>
<title>My Colored Page</title>
</head>
<body>
<h1 style="color: <?php echo $Color; ?>;">Colored Text</h1>
<p style="color:<?php echo $Color; ?>;">Colored paragraph.</p>
</body>
</html>