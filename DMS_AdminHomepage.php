<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title> Document Management System </title>
        <link rel="stylesheet" href="CSS\DMS_AdminHomepage.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;500&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class= "navigationbar">
        <nav>
                <img id="navbardmsicon" src="CSS\DMS_Icon.png">
                <ul>
                  <li><a href="DMS_AdminHomepage.php" class="active"> Home </a></li>
                  <li><a href="DMS_AdminActivitiesPage.php"> Activities </a></li>
                  <li><a href="DMS_AdminStudentsPage.php"> Students </a></li>
                  <li><a href="DMS_AdminStaffsPage.php"> Staffs </a></li>
                  <li><a href="DMS_AdminAdminsPage.php"> Admins </a></li>
                  <li><a href="DMS_LandingPage.php" onclick="logout()" style="text-decoration:none">Logout 
                          <script type="text/javascript">
                          function logout(){
                          var choice = confirm("Do you really want to log out?");
                              if(choice==true)
                              window.location = "toLogout.php";
                          }
                              </script>
                          </a></li>
                </ul>
              </nav>
        </div>
        <div class = "container" id="container_adminhomepage">
                <div class="admin_homepagetitle">
                    <h3>Document Management System</h3>
                </div>
            <div class= "admin_homepagebuttons">
                <div class = "buttons">
                    <button class="choosecontentbtn">
                    <a href="DMS_AdminActivitiesPage.php" style="text-decoration: none"> <span class="choosecontentbtn_text"> Activities </span> </a> </button>

                    <button class="choosecontentbtn">  
                    <a href="DMS_AdminStudentsPage.php" style="text-decoration: none"> <span class="choosecontentbtn_text"> Students </span> </a> </button>

                    <button class="choosecontentbtn">  
                    <a href="DMS_AdminStaffsPage.php" style="text-decoration: none"> <span class="choosecontentbtn_text"> Staffs </span> </a> </button>

                    <button class="choosecontentbtn">  
                    <a href="DMS_AdminAdminsPage.php" style="text-decoration: none"> <span class="choosecontentbtn_text"> Admins </span> </a> </button>
                </div>
            </div>
        </div>
    </body>
</html>