<?php
include('language.php');
$en_select = '';
$ar_select = '';
$hi_select = '';
if (isset($_GET['language']) && ($_GET['language'] === 'en') || !isset($_GET['language'])) {
    $en_select = 'selected';
    $language = "en";
} elseif (isset($_GET['language']) && ($_GET['language'] === 'ar')) {
    $ar_select = 'selected';
    $language = "ar";
} else {
    $hi_select = 'selected';
    $language = "hi";
}
?>
<html>

<head>
    <title>Website</title>
    <style>
    body {
        margin: auto;
        width: 80%;
        background-color: #26DA75;
        font-family: arial;
    }

    #container {
        margin-top: 20px;
    }

    #nav_bar {
        background-color: #fff;
        padding: 20px;
    }

    #nav_bar ul {
        margin: 0px;
        padding: 0px;
    }

    #nav_bar li {
        list-style: none;
        display: inline;
        margin-right: 10px;
    }

    #nav_bar li a {
        text-decoration: none;
        color: #000;
        font-weight: bold;
    }

    #nav_bar li a:hover {
        text-decoration: underline;
    }

    #content {
        background-color: #fff;
        padding: 20px;
        margin-top: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 2rem;
    }

    img {
        width: 400px;
        height: 300px;
    }

    #content p {
        line-height: 25px;
    }

    #nav_bar select {
        padding: 5px;
    }

    .fright {
        float: right;
    }
    </style>

<body>
    <div id="container">
        <div id="nav_bar">
            <ul>
                <li><a href="index.php" class="active"><?php echo $top_nav[$language][0]; ?></a></li>
                <li><a href="#"><?php echo $top_nav[$language][1]; ?></a></li>
                <li><a href="#"><?php echo $top_nav[$language][2]; ?></a></li>
                <li><a href="#"><?php echo $top_nav[$language][3]; ?></a></li>
                <li class="fright">
                    Language
                    <select onchange="set_language()" name="language" id="language">


                        <option value="en" <?php echo $en_select; ?>>English</option>
                        <option value="ar" <?php echo $ar_select; ?>>Arabic</option>
                        <option value="hi" <?php echo $hi_select; ?>>Hindi</option>
                    </select>
                </li>
            </ul>
        </div>
        <div id="content">

            <img src="<?php echo $website_images[$language][0] ?>" alt="">

            <p><?php echo $website_content[$language][0] ?></p>




        </div>


    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script>
    function set_language() {
        $language = jQuery('#language').val();
        window.location.href = 'http://localhost/multilanguage/?language=' + $language;
    }
    </script>
</body>
</head>

</html>