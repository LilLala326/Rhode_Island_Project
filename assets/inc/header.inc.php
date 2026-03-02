<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="assets/style/fonts.css">
    <link rel="stylesheet" href="assets/style/base.css">
    <link rel="stylesheet" href="assets/style/layout.css">

    <script src="assets/js/validation.js" defer></script>
    <script src="assets/js/hamburgerMenu.js" defer></script>
    <script src="assets/js/javaStyling.js" defer></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <span id="top"></span>

    <header>

        <nav class="navbar">

            <a href="index.php" onmouseover="black(this)" onmouseout="yellow(this)">Homepage</a>

            <ul class="nav-menu">

                <li> <a href="aboutRhodeIsland.php" onmouseover="black(this)" onmouseout="yellow(this)">About Rhode Island</a></li>

                <li class="dropdown" onmouseover="blockHover(this)">
                    <a href="providence.php" class="dropbtn" onmouseover="black(this)" onmouseout="yellow(this)">Providence &#9662;</a>
                    <div class="dropdown-content">
                        <a href="providenceThingsToDo.php" onmouseover="black(this)" onmouseout="blue(this)">Things To Do</a>
                    </div>
                </li>

                <li class="dropdown" onmouseover="blockHover(this)">
                    <a href="cranston.php" class="dropbtn" onmouseover="black(this)" onmouseout="yellow(this)">Cranston &#9662;</a>
                    <div class="dropdown-content">
                        <a href="cranstonThingsToDo.php" onmouseover="black(this)" onmouseout="blue(this)">Things To Do</a>
                    </div>
                </li>

                <li class="dropdown" onmouseover="blockHover(this)">
                    <a href="warwick.php" class="dropbtn" onmouseover="black(this)" onmouseout="yellow(this)">Warwick &#9662;</a>
                    <div class="dropdown-content">
                        <a href="warwickThingsToDo.php" onmouseover="black(this)" onmouseout="blue(this)">Things To Do</a>
                    </div>
                </li>

                <li> <a href="maps.php" onmouseover="black(this)" onmouseout="yellow(this)">Maps</a> </li>

                <li> <a href="gallery.php" onmouseover="black(this)" onmouseout="yellow(this)">Gallery</a> </li>
                
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>