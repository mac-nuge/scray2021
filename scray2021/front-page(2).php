<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mac Nguyen</title>

<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_home_url(); ?>/wp-content/themes/scray2021/favicon/favicon.ico">

<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: 'Courier New', Courier, monospace;
        font-size: 12px;
    }

    #myVideo {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        object-fit: cover;
        z-index: -2;
    }

    .button {
        position: fixed;
        text-align: right;
        bottom: 5%;
        color: #f1f1f1;
        width: 100%;
        padding: 20px;
    }

    #myBtn {
        font-size: 12px;
        font-family: 'Courier New', Courier, monospace;
        color: #f1f1f1;
        border: none;
        cursor: pointer;
        background-color: black;
    }

    #myBtn:hover {
        background-color: orange;
        color: white;
    }

    #myBtn:focus {
        background-color: transparent;
        color: #f1f1f1;
        outline: 0;
    }
</style>

<?php wp_head(); ?>
</head>
<body>
<header>
    <nav>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'menu-2',
                'menu_id'        => 'secondary-menu',
                'items_wrap'    => '<ul class="navmenu2nd">%3$s</ul>'
            )
        );
        ?>
    </nav>
</header>

<?php
$randomThings = array(
    'not_wp/greenlanes.mp4',    
    'not_wp/coffee.mp4',
    'not_wp/clouds.m4v',
    'not_wp/fire.m4v',
    'not_wp/blacksand.m4v',
    'not_wp/Lake_Ontario.mp4',
);
?>

<video autoplay muted loop id="myVideo">
    <source src="<?php echo $randomThings[mt_rand(0,count($randomThings)-1)]; ?>" type="video/mp4">
    Your browser does not support HTML5 video.
</video>

<div class="button"><button id="myBtn" onclick="myFunction()">Pause</button></div>

<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
    if (video.paused) {
        video.play();
        btn.innerHTML = "Pause";
    } else {
        video.pause();
        btn.innerHTML = "Play";
    }
}
</script>
</body>
</html>
