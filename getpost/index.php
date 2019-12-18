<?php 

// _dc($_GET);

// echo 'vardas yra: ' . $_GET['firstname'];
// echo '<br>';
// echo 'pavarde yra: ' . $_GET['lastname'];

if(isset($_GET['firstname'])) {
    echo 'vardas yra: ' . $_GET['firstname'];
}

// if(!empty($_GET)) {
//     echo 'vardas yra: ' . $_GET['firstname'];
// }

?>

<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="" method="POST">
  First name:<br>
  <input type="text" name="firstname" value="Mickey">
  <br>
  Last name:<br>
  <input type="text" name="lastname" value="Mouse">
  <br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>