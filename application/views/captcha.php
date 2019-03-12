<?php 
$text = rand(10000,99999); 
$_SESSION["vercode"] = $text; 
$height = 25; 
$width = 65; 
$image_p = imagecreate($width, $height); 
$black = imagecolorallocate($image_p, 0, 0, 0); 
$white = imagecolorallocate($image_p, 255, 255, 255); 
$font_size = 14; 
imagestring($image_p, $font_size, 5, 5, $text, $white); 
imagejpeg($image_p, null, 80); 

header("Cache-Control: no-cache, must-revalidate");
// header('Content-type: image/png');
?>

<form action="submit.php" method="post"> 
Comment: <textarea name="coment"></textarea> 
Enter Code <img src="captcha.php"><input type="text" name="vercode" /> 
<input type="submit" name="Submit" value="Submit" /> 
</form>




<?php
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
{
echo "Correct Code Entered";
//Do you stuff
}
else
{
die("Wrong Code Entered");
}
?>
