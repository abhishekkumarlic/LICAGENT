<?php 
//variable setting
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

//check input fields
if (empty($name) || empty($email) || empty($message))
{
	echo "please fill all the fields";
}
else
{
	mail("abhishekmar1990@gmail.com", "LIC web message", $message, " from: $name <$email>");
	echo "<script type='text/javascript'>alert('your massage sent successfully');
    window.history.log(-1);
	</scripte>";
}
?>

