<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $this->template->title->default("MarketHub"); ?></title>

    <meta name="description" content="<?php echo $this->template->description; ?>">
    <?php echo $this->template->meta; ?>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/css/font-awesome.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <?php echo $this->template->stylesheet; ?>

    <script src="<?php echo base_url();?>/public/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>/public/js/bootstrap.min.js"></script>

    <!-- or -->
    <?php echo $this->template->javascript; ?>
</head>
<body>
<?php
// This is the main content partial
echo $this->template->header;

echo $this->template->content;

echo $this->template->footer;

?>
</body>
</html>