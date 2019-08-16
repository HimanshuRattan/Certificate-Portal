
<!DOCTYPE html>
<html>
<head>
	<title>Certificates</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

	<h1>Download Certificate</h1>
	<form action="" method="post">    
        <div class="form-input">
        <div class="centered">
            <label>
                <input type="text" class="textfield" id="regno" name="regno" required>
                <span class="placeholder">Registration Number</span>
            </label>
            <br/>
            <input type="submit" value="Download" class="button" name="SubmitButton">
        </div>
        </div>
    </form>
    <p class="bottom-text">
    Some certificates available: RA1711003010400, RA1711003010111
    </p>
<?php
session_start();
$db_username = 'root';
$db_password = '';
$db_name = '';
$mysqli = new mysqli('localhost', $db_username, $db_password,$db_name);

if(isset($_POST['SubmitButton'])){
$name="{$_POST['regno']}";
$downlaod=$name.'.jpg';
$final='certis/'.$name.'.jpg';
if(file_exists($final)) {
    ?>
    <a href="<?php echo $final; ?>" class="download" download="<?php echo $downlaod; ?>">
				Download
	</a>
    <?php
}
else {
    $message = "Wrong Registration Number! Please check your number or contact us.";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
}
?>
</body>
</html>