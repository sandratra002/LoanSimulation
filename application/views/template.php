<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>

    <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/shop-homepage.css"); ?>">
</head>
<body>   
<?php 
    $this->load->view("template/header");
    $this->load->view($page);
    $this->load->view("template/footer");
?>
  <script src="<?php echo base_url("assets/jquery/jquery.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/bootstrap/js/bootstrap.bundle.min.js"); ?>"></script>
</body>
</html>