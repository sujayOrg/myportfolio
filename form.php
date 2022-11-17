<html>
<body>
<?php
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$to = "emailtome.org@gmail.com";

$header = "From : myportfolio.html";

$txt = "Name = ".$name."/r/n Email = ".$email."/r/n Message = ".$message;

mail($to,$subject,$txt,$header);
?>
</body>
</html>
