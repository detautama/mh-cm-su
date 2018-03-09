<!DOCTYPE html>
<html>

<head>
    <title><?php echo $this->template->title->default("MarketHub"); ?></title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
    <link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <?php echo $this->template->meta; ?>

    <?php echo $this->template->stylesheet; ?>

    <?php echo $this->template->javascript; ?>
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/vuetify/dist/vuetify.js"></script>
</head>

<body>
<div id="app">
    <v-app>
        <?php
        // This is the main content partial
        echo $this->template->header;

        echo $this->template->content;

        echo $this->template->footer;

        ?>

    </v-app>
</div>
<script>
<?php
echo $this->template->vuescript;
?>
</script>
</body>
</html>