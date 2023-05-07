<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title> Document Management System </title>
        <link rel="stylesheet" href="CSS\DMS_AdminLogin.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;500&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class = "container" id= "container_adminloginpage">
            <div class = "loginform">
                <div class = "loginform_titletxt"> Administrator Login</div>
                <div class = "loginform_inputfields">
                    <div class = "loginform_adminidinput">
                        <label> Administrator ID: </label>
                        <input type="email" name = "admin_id" required>
                    </div>
                    <div class = "loginform_passwordinput">
                        <label> Password: </label>
                        <input type="password" name = "admin_password" required>
                    </div>
                    <button>
                        <a href="DMS_AdminHomepage.php"style="text-decoration: none"> <span class="loginpage_loginbtn"> Login </span></a>
                    </button>
                </div>
            </div>
                <div class="landingpage_dmsicon">
                    <img src="CSS\DMS_Icon.png" alt="Document Management System Icon">
                </div>
        </div>
    </body>
</html>