<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!--END FONT-->

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url()?>/WebPorto/assets/css/main.css">
    <link rel="stylesheet" href="<?= base_url()?>/WebPorto/assets/css/style.css">
    <!--END CSS -->
    
    <!--JS -->
    <script src="<?= base_url()?>/WebPorto/assets/js/bootstrap.bundle.min.js"></script>
    <!--END JS -->

    

    <title><?= $title ?></title>
</head>
<body>
        <!-- NAVBAR -->
        <?= $this->include('layout/navbar') ?>
        <!--END NAVBAR -->

        <!--Main Content-->
        <?= $this->renderSection('content')?>
        <!--End Main Content-->
</body>
</html>