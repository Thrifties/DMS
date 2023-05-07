<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title> Document Management System </title>
        <link rel="stylesheet" href="CSS\DMS_LoginPage.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;500&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class = "container" id= "container_loginpage">
            <div class = "loginform">
                <div class = "loginform_titletxt"> Welcome back! <br> Glad to see you again!</div>
                <div class = "loginform_inputfields">
                    <div class = "loginform_emailinput">
                        <label> Email Address: </label>
                        <input type="email" name = "user_emailadd" required>
                    </div>
                    <div class = "loginform_passwordinput">
                        <label> Password: </label>
                        <input type="password" name = "user_password" required>
                    </div>
                    <div class = "loginform_forgotpasswordtxt">
                        <a href="DMS_ForgotPasswordPage.php"style="text-decoration: none"> <p> Forgot Password? </p> </a>
                    </div>
                    <button>
                        <a href="DMS_UserHomepage.php"style="text-decoration: none"> <span class="loginpage_loginbtn"> Login </span></a>
                    </button>
                    <div class = "loginform_loginadmintxt">
                        <a href="DMS_AdminLogin.php"style="text-decoration: none"> <p> Login as Admin </p> </a>
                    </div>
                    <div class = "loginform_createacctxt">
                        <a href="DMS_RegistrationPage.php"style="text-decoration: none"> <span> Don't have an account? Create an Account </span> </a>
                    </div>
                </div>
            </div>
                <div class="landingpage_dmsicon">
                    <img src="CSS\DMS_Icon.png" alt="Document Management System Icon">
                </div>
        </div>
    </body>
</html>