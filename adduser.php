<?php
echo 'You enter following information about yourself:'.'<br>';
echo"<br>Name:</br>".$_GET['name']."<br>";
echo"<br>Surname:</br>".$_GET['surname']."<br>";
echo"<br>Address:</br>".$_GET['address']."<br>";
echo"<br>Nickname:</br>".$_GET['nickname']."<br>";

?>
	<?
echo'<b>File was save on server name</b>'.
	$_FILES['userfile']['tmp_name'].'<br>';
echo'<b>On your mashin he names:</b>'.
	$_FILES['userfile']['name'].'<br>';
echo'<b>File size is:</b>'.
	$_FILES['userfile']['size'].'<br>';
echo'<b>Mime type of file:</b>'.
	$_FILES['userfile']['type'].'<br>';
move_uploaded_file($_FILES['userfile']['tmp_name'],"images/".$_FILES['userfile']['name']);
?>