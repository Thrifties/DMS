<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title> Document Management System </title>
        <link rel="stylesheet" href="CSS\DMS_AdminAddStaffPage.css">
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
                  <li><a href="DMS_AdminStaffsPage.php" class="active"> Staffs </a></li>
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

        <div class="container" id="container_addstaffpage">
            <button id="addstaffbacktn"> 
                <a href="DMS_AdminHomepage.php"class="active" style="text-decoration: none"> <b>Back</b></a> 
            </button>
            
            <form action="toAddStaff.php" method="post" enctype="multipart/form-data">
    
                <div class="details" id="staffdetails">

                    <center><h3> Add Staff </h3></center>
    
                    <div class="fields">
                        
                        <div class="input-field">
                            <center><br><label> Staff ID: </label><br>
                            <input type="text" name = "staff_id" placeholder="Staff ID" required> </center>
                        </div>  

                        <div class="input-field">
                            <center><br><label> Staff Password: </label><br>
                            <input type="text" name = "staff_password" placeholder="Staff Password" required> </center>
                        </div> 

                        <div class="input-field">
                            <center><br><label> First Name: </label><br>
                            <input type="text" name = "staff_firstname" placeholder="First Name" required> </center>
                        </div>

                        <div class="input-field">
                            <center><br><label> Last Name: </label><br>
                            <input type="text" name = "staff_lastname" placeholder="Last Name" required>
                            </center>
                        </div>

                        <center><br>
                        <button type="submit" value="Upload" name="Upload" class="uploadbtn"> Add </button>
                        </center>
                        
    
                    </div>
                </div>
            </form>
        </div>
    </body>
    </html>