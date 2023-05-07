<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title> Document Management System </title>
        <link rel="stylesheet" href="CSS\DMS_AdminAddActivitiesPage.CSS">
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
                  <li><a href="DMS_AdminActivitiesPage.php" class="active"> Activities </a></li>
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

        <div class="container" id="container_addactivitiespage">
            
            <h3> Add Activities </h3>
            <button id="addactivitiesbacktn"> <a href="DMS_AdminHomepage.php"class="active" style="text-decoration: none"> <b>Back</b></a> </button>
            
            <form action="toAddActivities.php" method="post" enctype="multipart/form-data" id="activitiesdetails-form">
    
                <div class="details" id="activitiesdetails">
    
                    <div class="fields">
                        
                        <div class="input-field">
                            <center><br><label> Acitivity No. </label><br>
                            <input type="number" id="activities_number" name = "activities_number" placeholder="Activity No." required> </center>
                        </div>  

                        <div class="input-field">
                            <center><br><label> Description: </label><br>
                            <input type="text" name = "activities_description" placeholder="Description" required> </center>
                        </div> 

                        <div class="input-field">
                            <center><br><label> Topic: </label><br>
                            <input type="text" name = "activities_topic" placeholder="Topic" required> </center>
                        </div>

                        <div class="input-field">
                            <center><br><label> Date of Submission: </label><br>
                            <input type="date" name = "activities_datesubmission" required>
                            </center>
                        </div>

                        <div class="input-field">
                            <center><br><label> Uploaded by: </label><br>
                            <input type="text" name = "activities_uploader" placeholder="Uploaded by">
                            </center>
                        </div>

                        <div class="admin-uploadfile">
                        <center>
                        <label id="lbluploadfile"> Attachments </label><br>
                        <input type="file" name="activities_fileuploads" id="uploadfile" required/> <!-- requires  upload to prevent error-->
                        </center>
                        </div>
                        <center><button type="submit" value="Upload" name="Upload" class="uploadbtn"> Add Record </button></center>
                        
    
                    </div>
                </div>
            </form>
        </div>
    </body>
    </html>