<?php
  require "dbconn.php";
  /* $user = $_SESSION['user_emailadd'];
  $pass = $_SESSION['user_password'];

  $query1 = "SELECT 'user_studentnum','user_birthdate','user_gender','user_contactnum','user_course','user_specialization','user_section' FROM dms_user WHERE user_emailadd = '$user' AND user_password = '$pass";
  $result1 = mysqli_query($conn, $query1);
  if(mysqli_num_rows($result1) > 0 ){
        while($info = $result1->fetch_assoc()){ 
            $student_num = $info['user_studentnum'];
            $birthdate = $info['user_birthdate'];
            $gender = $info['user_gender'];
            $contactnum = $info['user_contactnum'];
            $course = $info['user_course'];
            $specialization = $info['user_specialization'];
            $section = $info['user_section'];
        }
  }

  $query2 = "SELECT CONCAT('user_firstname',' ','user_lastname') AS name  FROM dms_user  WHERE user_emailadd = '$user'";
  $result2 = $conn->query($query2);
  if($result2==true){
            $convert = mysqli_fetch_assoc($result2);
            $name = ($convert['name']);
    } */
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title> Document Management System </title>
        <link rel="stylesheet" href="CSS\DMS_UserHomepage.CSS">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;500&display=swap" rel="stylesheet">
    </head>

    <body>
      <div class = "navigationbar">
        <nav>
          <img id="navbardmsicon" src="CSS\DMS_Icon.png">
          <ul>
            <li><a href="DMS_UserHomepage.php"class="active"> Home </a></li>
            <li><a href="DMS_ActivitiesPage.php"> Activities </a></li>
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

    <div class ="container" id="container_userhomepage">
      <div class="user_informationsection">
        <h3>Student Information</h3>
            <div class="user_photo"><img id="userphoto" src = "CSS\audreydelrosario.JPG"></div>
          <!-- <div class = "user_fullname"> 
            <b>Audrey Del Rosario</b>
          </div>
          <div class="user_educbackground">
          <h3> Educational Background </h3>
            <ul>
              <li><strong>Tertiary:<br></strong> Bulacan State University (2019-Present) </li>
              <li><strong>Secondary:<br></strong> La Consolacion University Philippines (2017-2019) </li>
              <li><strong>Primary:<br></strong> Assumpta Academy (2013-2017) <br> Cherubim Montessori School (2006-2013) </li>
            </ul>
          </div><br>
          <div class="user_awards">
            <h3> Awards </h3>
              <ul>
                <li><strong>Dean's Lister (1st sem AY.2020-2021)<br></strong> Bulacan State University </li>
                <li><strong>Graduate with Honors<br></strong> La Consolacion University Philippines </li>
                <li><strong>Loyalty Award<br></strong> La Consolacion University Philippines </li>
              </ul>
          </div><br>
          <div class="user_characterreference">
            <h3> Guardian </h3>
              <ul>
                <li><strong>Name:</strong> Nino Allan C. Carpio </li>
                <li><strong>Relationship:</strong> 09106893478 </li>
                <li><strong>Contact Num: </strong> Computer Programming Professor </li>
                <li><strong>Address: </strong> La Consolacion University Philippines </li>
              </ul>
          </div>
          <div class="add_infosbttn"><center>
            <button id="addeducbgbtn">
              <a href="DMS_EducationalBackgroundPage.php"  style="text-decoration: none" > Add Educational Background </a>
            </button>
            <button id="addawardbtn">
              <a href="DMS_AwardsPage.php"  style="text-decoration: none" > Add Award </a>
            </button>
            <button id="addguardianbtn">
              <a href="DMS_GuardianPage.php"  style="text-decoration: none" > Add Guardian </a>
            </button></center>
          </div>
           -->
           <div id="user_fullname">
              <?php echo $name ?>
           </div>
           <div id="user_studentnum">
              <?php echo $student_num ?>
           </div>
           <div id="user_course">
              <?php echo $course ?>
           </div>
           <div id="user_specialization">
              <?php echo $specialization ?>
           </div>
           <div id="user_section">
              <?php echo $section ?>
           </div>
      </div>
      
      <div class="recentlyuploadedtable">
        <table>
            <thead>
              <tr>
                <th colspan="4" id="threcentlyuploaded">Activities</th>
              </tr>
              <tr>
                <th>No.</th>
                <th>Topic</th>
                <th>Date Uploaded</th>
                <th>View</th>
              </tr>
            </thead> 

            <?php
              $query = "SELECT * FROM dms_activities ORDER BY activities_number ";
              $result = mysqli_query($conn,$query);
              
              if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_assoc($result)){
                  
                    echo '<tr> 
                              <td>'.$row['activities_number'] .'</td>
                              <td>'.$row['activities_topic'] .'</td>
                              <td>'.$row['activities_datesubmission'] .'</td>
              
                              <td> <button class="activitiestableviewbutton"><a href="DMS_ActivityDetails.php?activity_info='.$row['activities_number'].'"style="text-decoration:none"> View </a> </button>
                              </td>
                          </tr>';
                      
                }
                echo '</table>';
              }
              else
              {
                  echo "0 results";
              }
              
              mysqli_close($conn);
            ?>
        </table>
      </div>
      </div>    
    </body>
</html>