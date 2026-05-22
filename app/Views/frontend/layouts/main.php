<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?? 'BookTalent' ?></title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://bt.local/assets/css/style.css">

</head>

<body>

    <!-- Header -->
    <?= $this->include('frontend/partials/header') ?>

    <!-- Main Content -->
    <?= $this->renderSection('content') ?>

    <!-- Footer -->
    <?= $this->include('frontend/partials/footer') ?>

    <!-- JS -->
    <script src="<?= base_url('assets/js/app.js') ?>"></script>

</body>

</html>