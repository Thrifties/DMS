<?php
  include 'toShowActivity.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title> Document Management System </title>
        <link rel="stylesheet" href="CSS\DMS_ActivitiesPage.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;500&display=swap" rel="stylesheet">
    </head>

    <body>
      <div class = "navigationbar">
        <nav>
          <img id="navbardmsicon" src="CSS\DMS_Icon.png">
          <ul>
            <li><a href="DMS_UserHomepage.php"> Home </a></li>
            <li><a href="DMS_ActivitiesPage.php"class="active"> Activities </a></li>
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
            
        <h3> Activity Details </h3>
        <button id="addactivitiesbacktn"> <a href="DMS_UserHomepage.php"class="active" style="text-decoration: none"> <b>Back</b></a> </button>

            <div class="details" id="activitiesdetails">

                <div class="fields">
                    
                    <div class="input-field">
                        <center><br><label> Acitivity No. </label><br>
                        <p name = "activities_number" > <?php echo $activities_number; ?> </p>
                    </div>  

                    <div class="input-field">
                        <center><br><label> Description: </label><br>
                        <p name = "activities_description"> <?php echo $activities_description; ?> </p>
                    </div> 

                    <div class="input-field">
                        <center><br><label> Topic: </label><br>
                        <p name = "activities_topic"> <?php echo $activities_topic; ?> </p>
                    </div>

                    <div class="input-field">
                        <center><br><label> Date of Submission: </label><br>
                        <p" name = "activities_datesubmission"> <?php echo $activities_datesubmission; ?> </p>
                        </center>
                    </div>

                    <div class="input-field">
                        <center><br><label> Uploaded by: </label><br>
                        <p name = "activities_uploader"> <?php echo $activities_uploader; ?> </p>
                        </center>
                    </div>
                  </div>

                    <form method="post" action="toUserUploadFile.php">
                    <div class="user-uploadfile">
                    <center><p>Enter the number of files to upload: </p>
                      <input type="number" id="numFields" name="numFields">
                      <button onclick="createFields()">Create Fields</button>
                      <div id="inputFields"></div>
                  
                      <script>
                        function createFields() {
                          var numFields = document.getElementById("numFields").value;
                          var fieldsHTML = "";
                          for (var i = 0; i < numFields; i++) {
                            fieldsHTML += "<label> File " + (i + 1) + ":</label>";
                            fieldsHTML += "<input type='file' name='fileUpload[]" + (i + 1) + "'><br>";
                          }
                          document.getElementById("inputFields").innerHTML = fieldsHTML;
                        }
                      </script>

                        <button type="submit" class="submit" value="update" name="user_fileupld"> Upload </button>
                    </center>
                  </div>
              </div>
      </div>
  </body>
</html>