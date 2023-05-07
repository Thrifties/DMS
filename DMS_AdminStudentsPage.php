<?php
require "dbconn.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title> Document Management System </title>
        <link rel="stylesheet" href="CSS\DMS_AdminStudentsPage.css">
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
                  <li><a href="DMS_AdminActivitiesPage.php"> Activities </a></li>
                  <li><a href="DMS_AdminStudentsPage.php" class="active"> Students </a></li>
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

    <div class ="container" id="container_adminstudentspage">
      <div class="studentstable">
        <table> 
          <center><tr>
              <th colspan="8" id="thstudents"> Students </th>
          </tr>
          <tr> 
              <th> Student ID</th>
              <th> First Name </th>
              <th> Last Name </th>
              <th> Course </th>
              <th> Specialization </th>
              <th> Section </th>
              <th> Delete </th>  
          </tr>

  <?php
  
  $query = "SELECT * FROM dms_user ORDER BY user_studentnum ";
  $result = mysqli_query($conn,$query);
  
  if(mysqli_num_rows($result) > 0){
   while($row = mysqli_fetch_assoc($result)){
      
         echo '<tr> 
                  <td>'.$row['user_studentnum'] .'</td>
                  <td>'.$row['user_firstname'] .'</td>
                  <td>'.$row['user_lastname'] .'</td>
                  <td>'.$row['user_course'] .'</td>
                  <td>'.$row['user_specialization'].' </td>
                  <td>'.$row['user_section'].' </td>
                  <td> <button class="editdelbtn"><a href="toDeleteStudent.php?deleteid='.$row['user_studentnum'].'" style="text-decoration:none"> Delete </a></button> </td>
              </tr>';
          
     }
     echo '</table>';
  }
  else
  {
      echo "0 results";
  }
  
  mysqli_close($conn);
  
  ?></center>
      </table>
      </div>
    </div>    
  </body>
</html>