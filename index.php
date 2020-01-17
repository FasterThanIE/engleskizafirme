<!DOCTYPE HTML>


<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <body>
        <?php require_once "delovi_stranica/index/header.php"; ?>
        <?php require_once "delovi_stranica/index/navigacija.php"; ?>
        <?php require_once "delovi_stranica/index/predznanje.php"; ?>
        <?php require_once "delovi_stranica/index/iskustva.php"; ?>
        <?php require_once "delovi_stranica/index/form.php"; ?>
        <?php require_once "delovi_stranica/index/footer.php"; ?>

        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            document.querySelectorAll('a[href^="#"]').forEach(e=>{e.addEventListener("click",function(e){e.preventDefault(),document.querySelector(this.getAttribute("href")).scrollIntoView({behavior:"smooth"})})});
        </script>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/header.css" />
        <link rel="stylesheet" type="text/css" href="css/navigacija.css" />
        <link rel="stylesheet" type="text/css" href="css/predznanje.css" />
        <link rel="stylesheet" type="text/css" href="css/iskustva.css" />
        <link rel="stylesheet" type="text/css" href="css/form.css" />
        <link rel="stylesheet" type="text/css" href="css/footer.css" />
        <link rel="stylesheet" type="text/css" href="css/font-awesome/css/all.min.css">
    </body>


</html>