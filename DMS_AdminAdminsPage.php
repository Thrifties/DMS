<?php
require "dbconn.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title> Document Management System </title>
        <link rel="stylesheet" href="CSS\DMS_AdminAdminsPage.css">
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

    <div class ="container" id="container_adminadminspage">
      <div class="adminstable">
        <table>
            <tr>
                <th colspan="4" id="thadmins"> Admins </th>
            </tr>
            <tr>
                <th colspan="4" id="thadminadd"><button class="addnewadminbttn"> <a href="DMS_AddAdminPage.php" style="text-decoration:none"> Add Admin </a></button> </th>
            </tr>
            <tr> 
              <th> Admin ID</th>
              <th> First Name </th>
              <th> Last Name </th>
              <th colspan=2> Edit/Delete </th>  
            </tr>

  <?php
  
  $query = "SELECT * FROM dms_admin ORDER BY admin_id ";
  $result = mysqli_query($conn,$query);
  
  if(mysqli_num_rows($result) > 0){
   while($row = mysqli_fetch_assoc($result)){
      
         echo '<tr> 
                  <td>'.$row['admin_id'] .'</td>
                  <td>'.$row['admin_firstname'] .'</td>
                  <td>'.$row['admin_lastname'] .'</td>
  
                  <td> <button class="editdelbtn"><a href="DMS_AdminEditAdmin.php?admin_info='.$row['admin_id'].'"style="text-decoration:none"> Update </a></button></td>
                  <td><button class="editdelbtn"><a href="toDeleteAdmin.php?deleteid='.$row['admin_id'].'" style="text-decoration:none"> Delete </a></button> </td>
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