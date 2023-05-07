<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title> Document Management System </title>
        <link rel="stylesheet" href="CSS\DMS_ForgotPasswordPage.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;500&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class = "container" id= "container_forgotpasswordpage">
            <div class = "forgotpasswordform">
                <div class = "forgotpasswordform_titletxt"> Create Account </div>
                <div class = "forgotpasswordform_inputfields">
                    <div class = "forgotpasswordform_newpasswordinput">
                        <label> Enter New Password: </label>
                        <input type="password" name = "user_password" placeholder="Enter New Password" required>
                    </div>
                    <div class = "forgotpasswordform_confirmnewpasswordinput">
                        <label> Confirm New Password: </label>
                        <input type="password" name = "user_confirmpassword" placeholder="Confirm New Password" required>
                    </div>
                    <button>
                        <a href="DMS_LoginPage.html"style="text-decoration: none"> <span class="forgotpasswordpage_updatebtn"> Update </span> </a>
                    </button>
                </div>
            </div>
                <div class="forgotpasswordpage_dmsicon">
                    <img src="CSS\DMS_Icon.png" alt="Document Management System Icon">
                </div>
        </div>
    </body>
</html>