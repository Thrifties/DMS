<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title> Document Management System </title>
        <link rel="stylesheet" href="CSS\DMS_GuardianPage.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;500&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class = "container" id= "container_guardianpage">
            <form method="post" action= "toAddGuardian.php">
                <div class = "guardianform">
                    <div class = "guardianform_titletxt"> Guardian Details </div>
                        <div class = "guardianform_inputfields">
                            <div class="guardianform_guardianinput">
                                <div class = "guardianform_usernameinput">
                                    <label> Username: </label><br>
                                    <input type="text" id="user_username" name = "user_username" placeholder="Username" required>
                                </div>
                                <div class="guardianform_nameinput">
                                    <label id="guardian_label"> Guardian Name: </label><br>
                                    <input type="text" id="guardian_name" name = "user_guardian_name" placeholder="Full Name" required>
                                </div>
                                <div class="guardianform_relationshipinput">
                                    <label id="guardian_label"> Relationship:  </label><br>
                                    <input type="text" id="guardian_relationship" name = "user_guardian_relationship" placeholder="Relationship" required>
                                </div>
                                <div class="guardianform_addressinput">
                                    <label id="guardian_label"> Address: </label><br>
                                    <input type="text" id="guardian_address" name = "user_guardian_address" placeholder="Address" required>
                                </div>
                                <div class="guardianform_contactnuminput">
                                    <label id="guardian_label"> Contact Number:  </label><br>
                                    <input type="text" id="guardian_contactnum" name = "user_guardian_contactnum" placeholder="Contact Number" required>
                                </div>
                            </div>
                        </div>
                    <button type="submit" name="Submit" value="submit">
                        <a><span class="guardianform_proceedbtn"> <b>Proceed</b> </span></a>
                    </button>
                </div>
            </form>
                <div class="guardianpage_dmsicon">
                    <img src="CSS\DMS_Icon.png" alt="Document Management System Icon">
                </div>
        </div>
    </body>
</html>