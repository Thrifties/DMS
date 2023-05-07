<?php
    include ('toUpdateAdmin.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title> Document Management System </title>
        <link rel="stylesheet" href="CSS\DMS_AdminAddAdminPage.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;500&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class= "navigationbar">
        <nav>
                <img id="navbardmsicon" src="CSS\DMS_Icon.png">
                <ul>
                  <li><a href="DMS_AdminHomepage.php"> Home </a></li>
                  <li><a href="DMS_AdminActivitiesPage.php"> Activities </a></li>
                  <li><a href="DMS_AdminStudentsPage.php"> Students </a></li>
                  <li><a href="DMS_AdminStaffsPage.php"> Staffs </a></li>
                  <li><a href="DMS_AdminAdminsPage.php" class="active"> Admins </a></li>
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

        <div class="container" id="container_addadminpage">
            <button id="addadminbacktn"> 
                <a href="DMS_AdminHomepage.php"class="active" style="text-decoration: none"> <b>Back</b></a> 
            </button>
            
            <form action="toUpdateAdmin.php" method="post" enctype="multipart/form-data">
    
                <div class="details" id="admindetails">

                    <center><h3> Edit Admin </h3></center>
    
                    <div class="fields">
                        
                        <div class="input-field">
                            <center><br><label> Admin ID: </label><br>
                            <input type="text" name = "admin_id" placeholder="Admin ID" value="<?php echo $admin_id; ?>"> </center>
                        </div>  

                        <div class="input-field">
                            <center><br><label> Admin Password: </label><br>
                            <input type="text" name = "admin_password" placeholder="Admin Password" value="<?php echo $admin_password; ?>"> </center>
                        </div> 

                        <div class="input-field">
                            <center><br><label> First Name: </label><br>
                            <input type="text" name = "admin_firstname" placeholder="First Name" value="<?php echo $admin_firstname; ?>"> </center>
                        </div>

                        <div class="input-field">
                            <center><br><label> Last Name: </label><br>
                            <input type="text" name = "admin_lastname" placeholder="Last Name" value="<?php echo $admin_lastname; ?>">
                            </center>
                        </div>

                        <center><br><button type="submit" class="submit" value="update" name="update_admin"> Update </button>
                        </center>
                        
    
                    </div>
                </div>
            </form>
        </div>
    </body>
    </html>