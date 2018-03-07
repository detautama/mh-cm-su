<html>

<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Material Design Lite -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        a {
            text-decoration: none;
            outline: none;
        }
    </style>
</head>

<body>
<!-- The drawer is always open in large screens. The header is always shown,
    even in small screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <div class="mdl-layout-spacer"></div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                      mdl-textfield--floating-label mdl-textfield--align-right">
                <label class="mdl-button mdl-js-button mdl-button--icon" for="fixed-header-drawer-exp">
                    <i class="material-icons">search</i>
                </label>
                <div class="mdl-textfield__expandable-holder">
                    <input class="mdl-textfield__input" type="text" name="sample" id="fixed-header-drawer-exp">
                </div>
            </div>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Markethub</span>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="">Daftar Produk</a>
            <a class="mdl-navigation__link" href="<?php echo base_url() ?>marketplace">Marketplace</a>
            <a class="mdl-navigation__link" href="<?php echo base_url() ?>main/logout">Log Out</a>
        </nav>
    </div>

    <!-- MAIN CONTENT -->
    <main class="mdl-layout__content">
        <a href="<?php echo base_url() ?>product/add" style="position: fixed; bottom: 50px;right: 50px;z-index:999"
           class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
            <i class="material-icons">add</i>
        </a>
        <div class="page-content">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-phone  mdl-card mdl-shadow--2dp">
                    <a href="#">
                        <img width="100%"
                             src="https://oldnublue.com/wp-content/uploads/2016/04/dummy-post-square-1-800x800.jpg"
                             alt="">
                        <div class="mdl-card__supporting-text">
                            Nama Produk XYZ
                        </div>
                    </a>
                </div>
                <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-phone  mdl-card mdl-shadow--2dp">
                    <img width="100%"
                         src="https://oldnublue.com/wp-content/uploads/2016/04/dummy-post-square-1-800x800.jpg" alt="">
                    <div class="mdl-card__supporting-text">
                        Nama Produk XYZ
                    </div>
                </div>
                <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-phone  mdl-card mdl-shadow--2dp">
                    <img width="100%"
                         src="https://oldnublue.com/wp-content/uploads/2016/04/dummy-post-square-1-800x800.jpg" alt="">
                    <div class="mdl-card__supporting-text">
                        Nama Produk XYZ
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</body>

</html>