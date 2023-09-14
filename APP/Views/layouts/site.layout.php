<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REFACCIONARIA OLARTE</title>
    <!--PRELOADS AND STYLEHEETS-->
    <link rel="preload" href="<?= URL_PATH ?>/Resources/CSS/Normalize.css" as="style">
    <link rel="stylesheet" href="<?= URL_PATH ?>/Resources/CSS/Normalize.css">

    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" crossorigin="crossorigin" as="font">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <link rel="preload" href="<?= URL_PATH ?>/Resources/CSS/Stylesheet.css" as="style">
    <link rel="stylesheet" href="<?= URL_PATH ?>/Resources/CSS/Stylesheet.css">

</head>

<body>
    <main class="container">
        <?php echo $content ?>
    </main>
</body>

</html>