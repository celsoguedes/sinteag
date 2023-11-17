<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $titulo; ?></title>
        <link href="<?= base_url("public/css/bootstrap.min.css"); ?>" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link href="<?= base_url("public/css/datatables.min.css"); ?>" rel="stylesheet">
        <link href="<?= base_url("public/css/bootstrap-icons.css"); ?>" rel="stylesheet">
        <link href="<?= base_url("public/css/select2.min.css"); ?>" rel="stylesheet">
        <link href="<?= base_url("public/css/sweetalert2.min.css"); ?>" rel="stylesheet">
        <script src="<?= base_url("public/js/jquery.min.js"); ?>"></script>
        <script src="<?= base_url("public/js/datatables.min.js"); ?>"></script>
        <script src="<?= base_url("public/js/select2.min.js"); ?>"></script>
        <script src="<?= base_url("public/js/sweetalert2.all.min.js"); ?>"></script>


    </head>

    <body>
        <?php echo $this->include('modelos/menu'); ?>
        <?php echo $this->renderSection("conteudo"); ?>
        <footer>
            <p><?php echo date('Y'); ?></p>
        </footer>
        <script src="<?= base_url("public/js/bootstrap.bundle.min.js"); ?>"></script>
        <?php echo $this->renderSection("scripts"); ?>
    </body>
</html>