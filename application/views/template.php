<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>

    <link rel="stylesheet" href="<?php echo base_url("assets/css/index.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/form.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/header.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/footer.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/table.css"); ?>">
</head>

<body>
    <?php $this->load->view("template/header"); ?>
    <div class="main-content">
        <div class="container">
            <?php $this->load->view($page); ?>
        </div>
    </div>
    <?php $this->load->view("template/footer"); ?>
</body>

</html>