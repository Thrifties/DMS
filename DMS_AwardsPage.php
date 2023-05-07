<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title> Document Management System </title>
        <link rel="stylesheet" href="CSS\DMS_AwardsPage.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;500&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class = "container" id= "container_awardspage">
            <form method="post" action= "toAddAwards.php">
                <div class = "awardform">
                    <div class = "awardform_titletxt"> Awards </div>
                        <div class = "awardform_inputfields">
                            <div class="awardform_awardsinput">
                                <div class = "awardform_usernameinput">
                                    <label> Username: </label><br>
                                    <input type="text" id="user_username" name = "user_username" placeholder="Username" required>
                                </div>
                                <div class="user_awarddescription">
                                    <label id="awarddescription_label"> Award Description  </label><br>
                                    <input type="text" id="award_description" name = "user_awarddescription" placeholder="Award Description" required>
                                </div>
                                <div class="user_awardsponsor">
                                    <label id="awardsponsor_label"> Sponsor  </label><br>
                                    <input type="text" id="award_sponsor" name = "user_awardsponsor" placeholder="Sponsor" required>
                                </div>
                                <div class="user_awarddategranted">
                                    <label id="awarddategranted_label"> Date Granted  </label><br>
                                    <input type="date" id="award_dategranted" name = "user_awarddategranted" placeholder="Date Granted" required>
                                </div>
                            </div>   
                        </div>
                    <button type="submit" name="Submit" value="submit">
                        <a><span class="awardformpage_proceedbtn"> <b>Proceed</b> </span></a>
                    </button>
                </div>
            </form>
                <div class="awardformpage_dmsicon">
                    <img src="CSS\DMS_Icon.png" alt="Document Management System Icon">
                </div>
        </div>
    </body>
</html>