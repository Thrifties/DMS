<?php
require "dbconn.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title> Document Management System </title>
        <link rel="stylesheet" href="CSS\DMS_AdminActivitiesPage.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;500&display=swap" rel="stylesheet">
    </head>

    <body>
      <div class = "navigationbar">
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

    <div class ="container" id="container_adminactivitiespage">
      <div class="activitiestable">
        <table>
            <tr>
                <th colspan="8" id="thactivities"> Activities </th>
            </tr>
            <tr>
                <th colspan="8" id="thactivitiesaddbttn">
                  <button class="thactivitiesaddbttn"> <a href="DMS_AdminAddActivitiesPage.php" style="text-decoration:none"> Add Activity </a></button> </th>
            </tr>
          <tr> 
              <th> Activity No.</th>
              <th> Description </th>
              <th> Topic </th>
              <th> Date of Submission </th>
              <th colspan=3> Edit/Delete </th>  
          </tr>

  <?php
  
  $query = "SELECT * FROM dms_activities ORDER BY activities_number ";
  $result = mysqli_query($conn,$query);
  
  if(mysqli_num_rows($result) > 0){
   while($row = mysqli_fetch_assoc($result)){
      
         echo '<tr> 
                  <td>'.$row['activities_number'] .'</td>
                  <td>'.$row['activities_description'] .'</td>
                  <td>'.$row['activities_topic'] .'</td>
                  <td>'.$row['activities_datesubmission'] .'</td>
  
                  <td> <button class="editdelbtn"><a href="DMS_AdminEditActivities.php?activity_info='.$row['activities_number'].'"style="text-decoration:none"> Update </a></button>
                  <button class="editdelbtn"><a href="toDeleteActivity.php?deleteid='.$row['activities_number'].'" style="text-decoration:none"> Delete </a></button> </td>
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