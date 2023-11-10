<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.cdnfonts.com/css/effra-heavy" rel="stylesheet">
    <title>Modal Form</title>
</head>
<body>
<div id="ornament">
    <nav id="navBar">
        <div id="logo">
            <img id="logoIMG" src="style/files/Fav-256px.svg"/>
        </div>

        <div id="logoText"> 
            <p id='logoName'>Findtrend</p1>
        </div>

        <div id="navLinks">
            <a>About</a>
            <a>How it work</a>
            <a>Pricing</a>
            <a>Solution</a>
            <a>Features</a>
        </div>

        <div >
            <a id="login">Login</a>
            <button id="register">Register</button>
        </div>
    </nav>
    <div><p id="minTabs">Minimize your tabs.</p></div>
    <div><p id="findTrend">Find the trends!</p></div>
    <div><p id="parag">Don’t let your computer memories consumes all of those browser tabs. 
                        Findtrend  let you gathers all of your favorite website into one place.</p></div>
        <div id="getStarted">
            <button id="getStartedBtn">Get Started</button>

            <div id="modal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <form id="form">
                        <label for="name">Ім’я:</label>
                        <input type="text" id="name" name="name" required>

                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>

                        <label for="phone">Телефон:</label>
                        <input type="tel" id="phone" name="phone" required>

                        <button type="submit">Відправити</button>
                    </form>
                </div>
            </div>
        </div >
        <div id="photos">
            <img id="twitter" src="style/files/Group 9.svg"/>
            <img id="pinterest" src="style/files/Group 10.svg"/>
            <img id="facebook" src="style/files/Group 8.svg"/>
            <img id="musk" src="style/files/Group 7.svg"/>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>