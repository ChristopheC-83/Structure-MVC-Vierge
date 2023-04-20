<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $page_description ?>">
    <link rel="stylesheet" href="public/style/style.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <title><?= $page_title ?></title>
</head>

<body>

    <?php require_once("views/commons/header.php") ?>

    <?php if (!empty($_SESSION['alert'])) : ?>
        <div class="alert
            <?= $_SESSION['alert']['type'];
            //pour changer le style en fonction de la nature du message (alert : style commun)
            ?>">
            <?= $_SESSION['alert']['message'];
            //pour changer le contenu du message 
            ?>
        </div>
    <?php
        unset($_SESSION['alert']);
    endif;?>

    <?= $page_content ?>

    <?php require_once("views/commons/footer.php") ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>