<!DOCTYPE html>
<html lang="en">
<header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ian Calbreath</title>
    <!-- Include CDN link to PDF.js library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.min.js"></script>
    <!-- CDN for bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</header>

<head>
    <?php include_once './componentWebsite/header.php' ?>
</head>

<body>
    <?php
    if (isset($_GET["ruta"])) {
        if ($_GET["ruta"] == "default" || $_GET["ruta"] == "contact" || $_GET["ruta"] == "project") {
            include_once './componentWebsite/Page/' . $_GET["ruta"] . '.php';
        } else {
            echo '404 Page not found';
        }
    }
    ?>
</body>

<footer>
    <?php include_once './componentWebsite/footer.php' ?>
</footer>
<!--js to load PDF. PDF.js load and display-->
<script src="./js/pdfViewer.js"></script>

</html>