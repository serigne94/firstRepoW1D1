<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="signup.css" type="text/css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Forms Lab</title>
</head>
<body>
    <img src="nerdinout.png" alt="image not found" class="logo">
    <fieldset>
        <legend>New User Signup:</legend>
        <form action="http://mumstudents.org/params.php" method="POST">
            <label for="name">Name: </label><input type="text" name="name" size="16" /><br>
            <label for="gender">Gender: </label>
                <input type="radio" name="gender" />Male
                <input type="radio" name="gender" checked />Female
            <br>
            <label for="age">Age: </label><input type="text" name="age" size="6" minlength="2"><br>
            <label for="personality">Personality type: </label><input type="text" size="6" minlength="4"><a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">(Don't know your type ?)</a><br>
            <label for="os">Favorite OS:</label>
                <select name="os" id="os">
                    <option value="Windows" selected>Windows</option>
                    <option value="Mac OS X">Mac OS X</option>
                    <option value="Linux">Linux</option>
                </select><br>
            <label for="partnerAge">Seeking age: </label>
                <input type="text" size="6" minlength="2" placeholder="min"> to
                <input type="text" size="6" minlength="2" placeholder="max">
            <br>
            <label for="submit"><input type="submit" value="Sign Up" class="submit"></label>
        </form>
    </fieldset>
    <p>
        This page is for single nerds to meet and date each other ! Type in 
        your personal information and wait for the nerdly luv to begin !
        Thank you for using our site. <br><br>

        Results and page (C) Copyright NerdLuv Inc. <br><br><br>

        <a href="https://validator.w3.org/nu/?doc=https://s613414.github.io/firstRepoW1D1/HTMLFormsLab/signup.php"> 
            <img src="../images/homework2/w3c-html.png" alt="html validator"/></a>
        <a href="http://jigsaw.w3.org/css-validator/validator?uri=https://s613414.github.io/firstRepoW1D1/HTMLFormsLab/signup.css"> 
            <img src="../images/homework2/w3c-css.png" alt="css validator"/></a>
    </p>
    </body>
</html>