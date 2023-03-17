<?php
include 'dbconn.php';
include 'comments.php';
date_default_timezone_set('Africa/Accra');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Comments with PHP</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
<iframe width="560" height="315" src="https://www.youtube.com/embed/nKEqisSIyac" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

    <?php
    echo "<form method='POST' action='".setComments($conn)."'>
    <input type='hidden' name='uid' value='anonymous'/>

    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'/>

    <textarea name='message'></textarea><br>

    <button type='submit' name='commentSubmit'>Submit Comment</button>
    </form>";

    getComments($conn);
    ?>
</body>
</html>