<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title> Document Management System </title>
        <link rel="stylesheet" href="CSS\DMS_RegistrationPage_1.css">
        <link rel="stylesheet" href="CSS\DMS_RegistrationPage_2.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;500&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class = "container" id= "container_registrationpage1">
            <form method="post" action= "toRegister.php">
            <div class = "regform" id="regform1"style="display:block;">
                    <div class = "regform_titletxt"> Create Account </div>
                        <div class = "regform_inputfields">
                            <div class = "regform_emailinput">
                                <label> Email Address: </label>
                                <input type="email" name = "user_emailadd" placeholder="Enter Email Address"required>
                            </div>
                            <div class = "regform_passwordinput">
                                <label> Password: </label>
                                <input type="password" name = "user_password" placeholder="Enter Password" required>
                            </div>
                            <div class = "regform_confirmpasswordinput">
                                <label> Confirm Password: </label>
                                <input type="password" id= "user_confirmpassword" name= "user_confirmpassword" placeholder="Confirm Password" required>
                            </div>
                        </div>
                        <center><button onclick="page1()"> 
                        <span class="regpage_proceedbtn"> Proceed </span> 
                        </button></center>
                </div>
    
                <div class = "regform2" id="regform2"style="display:none;">
                    <div class = "regform_titletxt2"> Personal Information </div>
                    <div class = "regform_inputfields">
                        <div class = "regform_leftside">
                            <div class = "regform_usernameinput">
                                <label> Username: </label><br>
                                <input type="text" id="user_username" name = "user_username" placeholder="Username" required>
                            </div>
                            <div class = "regform_studentnumberinput">
                                <label> Student Number: </label><br>
                                <input type="text" id="user_studentnum" name = "user_studentnum" placeholder="Student Number" required>
                            </div>
                            <div class = "regform_firstnameinput">
                                <label> First Name: </label><br>
                                <input type="text"id="user_firstname" name = "user_firstname" placeholder="First Name" required>
                            </div>
                            <div class = "regform_middlenameinput">
                                <label> Middle Name: </label><br>
                                <input type="text" id="user_middlename" name = "user_middlename" placeholder="Middle Name" required>
                            </div>
                            <div class = "regform_lastnameinput">
                                <label> Last Name: </label><br>
                                <input type="text" id="user_lastname" name = "user_lastname" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class = "regform_rightside">
                            <div class = "regform_birthdateinput">
                                <label> Birthdate: </label><br>
                                <input type="date" id= "user_birthdate" name = "user_birthdate" required>
                            </div>
                            <div class = "regform_genderinput">
                                <label> Gender: </label><br>
                                <input type="text" id="user_gender" name = "user_gender" placeholder="Gender" required>
                            </div>
                            <div class = "regform_contactnuminput">
                                <label> Contact Number: </label><br>
                                <input type="text" id= "user_contactnum" name = "user_contactnum" placeholder="Contact Number" required>
                            </div>
                            <div class = "regform_courseinput">
                                <label> Course: </label><br>
                                <input type="text" id= "user_course" name = "user_course" placeholder="Course" required>
                            </div>
                            <div class = "regform_specializationinput">
                                <label> Specialization: </label><br>
                                <input type="text" id= "user_specialization" name = "user_specialization" placeholder="Specialization" required>
                            </div>
                             <div class = "regform_sectioninput">
                                <label> Section: </label><br>
                                <input type="text" id= "user_section" name = "user_section" placeholder="Section" required>
                            </div>
                        </div>
                    </div>
                        <button type="submit" name="Submit" value="submit">
                            <a><span class="regpage_proceedbtn"> <b>Proceed</b> </span></a>
                        </button>
                </div>
            </form>
                <div class="regpage_dmsicon">
                    <img src="CSS\DMS_Icon.png" alt="Document Management System Icon">
                </div>
        </div>
        <script>
            function page1() {
                    regform1.style.display = "none";
                    regform2.style.display = "block";
                }
        </script>
    </body>
</html>