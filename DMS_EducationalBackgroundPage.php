<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title> Document Management System </title>
        <link rel="stylesheet" href="CSS\DMS_EducationalBackgroundPage.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;500&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class = "container" id= "container_educbgpage">
            <div class="educpage_dmsicon">
                <img src="CSS\DMS_Icon.png" alt="Document Management System Icon">
            </div>
                <form method="post" action= "toAddEducationalBackground.php">
                    <div class = "educbgform">
                        <div class = "educbgform_titletxt"> Educational Background </div>
                            <div class = "educbgform_inputfields">
                                <div class = "educbgform_usernameinput">
                                    <label> Username: </label><br>
                                    <input type="text" id="user_username" name = "user_username" placeholder="Username" required>
                                </div>
                                <div class = "educbgform_tertiaryinput">
                                    <label> Tertiary: </label><br>
                                    <div class="tertiary_inputbxs">
                                        <input type="text" id="user_tertiaryschool" name = "user_tertiaryschool" placeholder="School" required>
                                        <input type="text" id="user_tertiaryyeargraduated" name = "user_tertiaryschoolyeargraduated" placeholder="Year Graduated" required>
                                    </div>
                                </div>
                                <div class = "educbgform_secondaryseniorinput">
                                    <label> Secondary Senior: </label><br>
                                    <div class="secondarysenior_inputbxs">
                                        <input type="text" id="user_secondaryseniorschool" name = "user_secondaryseniorschool" placeholder="School" required>
                                        <input type="text" id="user_secondarysenioryeargraduated" name = "user_secondaryseniorschoolyeargraduated" placeholder="Year Graduated" required>
                                    </div>
                                </div>
                                <div class = "educbgform_secondaryjuniorinput">
                                    <label> Secondary Junior: </label><br>
                                    <div class="secondarysenior_inputbxs">
                                        <input type="text" id="user_secondaryjuniorschool" name = "user_secondaryjuniorschool" placeholder="School" required>
                                        <input type="text" id="user_secondaryjunioryeargraduated" name = "user_secondaryjuniorschoolyeargraduated" placeholder="Year Graduated" required>
                                    </div>
                                </div>
                                <div class = "educbgform_primaryinput">
                                    <label> Primary: </label><br>
                                    <div class="primary_inputbxs">
                                        <input type="text" id="user_primaryschool" name = "user_primaryschool" placeholder="School" required>
                                        <input type="text" id="user_primaryyeargraduated" name = "user_primaryschoolyeargraduated" placeholder="Year Graduated" required>
                                    </div>
                                </div>
                            </div>
                        <button type="submit" name="Submit" value="submit">
                            <a><span class="educbgpage_proceedbtn"> <b>Proceed</b> </span></a>
                        </button>
                </form>
            </div>
        </body>
</html>