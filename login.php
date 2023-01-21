<?php
require_once "config.php";
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
$_SESSION['login_time_stamp'] = time();
$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$capt = mysqli_real_escape_string($conn,$_POST['capt']);
$textinput = mysqli_real_escape_string($conn,$_POST['textinput']);
?>
<?php
if(empty(trim($email)))
{
    $email_err = "email cannot be blank";
    ?>
    <script language="javascript">
    alert('Email cannot be blank'); 
    location.href="index.php#account";
    </script>;
    <?php
}
else if(empty(trim($password)))
{
    $password_err = "Password cannot be blank";
    ?>
    <script language="javascript">
    alert('Password cannot be blank'); 
    location.href="index.php#account";
    </script>;
    <?php
}
else
{
    $sql = "SELECT * from users where email = '$email'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $row_count = mysqli_num_rows($result);
    if($row_count==0)
    {
        $email_err = "You are not registered!! Kindly Register.";
        ?>
        <script language="javascript">
        alert('You are not registered!! Kindly Register.'); 
        location.href="index.php#account";
        </script>;
        <?php
    }
    else
    {
        if(password_verify($password,$row['password']))
        {
            if($capt == $textinput)
            {
                if($row['user_type']=="SELLER")
                {
                    $username = $row['company_name'];
                    $_SESSION["company_name"] = $username;
                    ?>
                    <script language="javascript">
                    alert('Seller Login Successfull'); 
                    location.href="seller.php";
                    </script>;
                    <?php
                }
                else
                {
                    $username = $row['company_name'];
                    $_SESSION["company_name"] = $username;
                    ?>
                    <script language="javascript">
                    alert('Buyer Login Successfull'); 
                    location.href="buyer.php";
                    </script>;
                    <?php
                }
            }
            else
            {
                ?>
                <script language="javascript">
                alert('Invalid Captcha'); 
                location.href="index.php#account";
                </script>;
                <?php
            }
        }
        else
        {
            ?>
            <script language="javascript">
            alert('Incorrect Password'); 
            location.href="index.php#account";
            </script>;
            <?php
        }
    }
}
mysqli_close($conn);
}
?>