<?php
require_once "config.php";

$email = $password = $confirm_password = "";
$email_err = $password_err = $confirm_password_err = "";

if($_SERVER['REQUEST_METHOD'] == "POST")
{
$address = $_POST['address'];
$pin_code = $_POST['pin_code'];
$contact_no = $_POST['contact_no'];
$company_name = $_POST['company_name'];
$gst = $_POST['gst'];
$user_type = $_POST['user_type'];
$email = $_POST['email'];
$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
if(empty(trim($email)))
{
$email_err = "email cannot be blank";
}
else
{
$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
if($stmt)
{
$stmt->bind_param("s", $param_email);
$param_email = trim($email);
if(mysqli_stmt_execute($stmt))
{
mysqli_stmt_store_result($stmt);
if(mysqli_stmt_num_rows($stmt) == 1)
{
$email_err = "This email is already taken"; 
}
else
{
$email = $_POST['email'];
}
}
else
{
echo "Something went wrong";
}
mysqli_stmt_close($stmt);
}
}
if(empty(trim($_POST['password'])))
{
$password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 7)
{
$password_err = "Password cannot be less than 7 characters";
}
else
{
$password = trim($_POST['password']);
}

if(trim($_POST['password']) !=  trim($_POST['confirm_password']))
{
    ?>
    <script language="javascript">
    alert('Passwords should match'); 
    location.href="index.php";
    </script>;
    <?php
}
if(empty($email_err) && empty($password_err) && empty($confirm_password_err))
{
$sql = "INSERT INTO users values ('$user_type', '$company_name', '$email', '$contact_no', '$address', '$pin_code', '$gst', '$hashed_password')";
$result = mysqli_query($conn, $sql);
?>
<script language="javascript">
alert('Registration Successfull'); 
location.href="index.php";
</script>;
<?php
}
mysqli_close($conn);
}
?>
