

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <title>File Manager</title>
</head>

<body>

<form method="post" action="" id="create_form">
 <input type="text" class="fadeIn second" name="file_name">
 <input type="submit" value="Create File" name="create_file">
</form>


<form method="post" action="" id="edit_form">
 <input type="text" name="file_name">
 <textarea name="edit_text"></textarea>
 <input type="submit" value="Edit File" name="edit_file">
</form>

<form method="post" action="" id="delete_form">
 <input type="text" name="file_name">
 <input type="submit" value="Delete File" name="delete_file">
</form>

</body>
</html>

<?php
if(isset($_POST['create_file']))
{
 $file_name=$_POST['file_name'];
 $folder="files/";
 $ext=".txt";
 $file_name=$folder."".$file_name."".$ext;
 $create_file = fopen($file_name, 'w');
 fclose($create_file);
}

if(isset($_POST['edit_file']))
{
 $file_name=$_POST['file_name'];
 $write_text=$_POST['edit_text'];
 $folder="files/";
 $ext=".txt";
 $file_name=$folder."".$file_name."".$ext;
 $edit_file = fopen($file_name, 'a+');
	
fwrite($edit_file, $write_text);
fclose($edit_file);
}


if(isset($_POST['delete_file']))
{
 $file_name=$_POST['file_name'];
 $folder="files/";
 $ext=".txt";
 $file_name=$folder."".$file_name."".$ext;
 unlink($file_name);
}
?>

<div class="list">
<?php

if ( $handle = opendir ('files')) {
    while ( false !== ( $entry = readdir ( $handle ))) {
        if ($entry == '.' || $entry == '..') {
            continue;
        }
       echo '<form method="get"> <input type="submit" name="edit_file" value="'.$entry.'"<br></form>';
    } 
  closedir ( $handle );
  }
?>
</div>

