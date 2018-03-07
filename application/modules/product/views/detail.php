<html>
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Material Design Lite -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/public/css/dropzone.css">
    <script src="<?php echo base_url();?>/public/js/dropzone.js"></script>
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
            <a class="mdl-navigation__link" href="./home.html">Daftar Produk</a>
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
        </nav>
    </div>

    <!-- MAIN CONTENT -->
    <main class="mdl-layout__content">
        <div class="page-content">
            <div class="mdl-grid">
                <div class="mdl-card mdl-cell--6-col mdl-cell--3-offset mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Tambah Produk</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <?php echo form_open_multipart('product', array('id' => 'productForm')) ?>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="sample3">
                                <label class="mdl-textfield__label" for="sample3">Nama Produk</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="sample3">
                                <label class="mdl-textfield__label" for="sample3">SKU</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect"
                                       for="checkbox2">
                                    <input type="checkbox" id="checkbox2" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">Asuransi</span>
                                </label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="number" id="sample3">
                                <label class="mdl-textfield__label" for="sample3">Minimum Order</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="number" id="sample3">
                                <label class="mdl-textfield__label" for="sample3">Harga (Rp)</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="sample3">
                                <label class="mdl-textfield__label" for="sample3">Berat (gram)</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="sample3">
                                <label class="mdl-textfield__label" for="sample3">Stok</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield">
                                <textarea class="mdl-textfield__input" type="text" rows="5" id="sample5"></textarea>
                                <label class="mdl-textfield__label" for="sample5">Deskripsi</label>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label>Foto Produk</label>
                                </div>
                                <div class="col-md-10">
                                    <div id="dZUpload" class="dropzone"></div>
                                </div>
                            </div>
                        <?php echo form_close() ?>
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <button style="width:100%" type="submit"
                                class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                            Tambah
                        </button>
                    </div>
                </div>
            </div>
    </main>
</div>
<script>
    $(document).ready(function () {
        Dropzone.autoDiscover = false;
        $("#dZUpload").dropzone({
            url: "https://www.indoocore.com/2018/manage_produk_pria/upload/produk1/1/2",
            maxFilesize: 5, //mb- Image files not above this size
            uploadMultiple: true, // set to true to allow multiple image uploads
            parallelUploads: 15, //all images should upload same time
            maxFiles: 15, //number of images a user should upload at an instance
            acceptedFiles: ".png,.jpg,.jpeg", //allowed file types, .pdf or anyother would throw error
            addRemoveLinks: true, // add a remove link underneath each image to
            autoProcessQueue: false, // Prevents Dropzone from uploading dropped files immediately
            init: function () {
                var submitButton = document.querySelector("#submit-all");
                var myDropzone = this; // closure

                submitButton.addEventListener("click", function () {
                    if (myDropzone.getQueuedFiles().length > 0) {
                        myDropzone.processQueue();
                    } else {
                        $('#productForm').submit();
                    }
                });
                this.on("complete", function (file) {
//                    this.removeFile(file);
                    $('#productForm').submit();
                });
            },
//            sending: function(file, xhr, formData){
//                formData.append('kodeproduk', $('#kodeproduk').val());
//                formData.append('nama_produk_id', $('#nama_produk_id').val());
//                formData.append('nama_produk_en', $('#nama_produk_en').val());
//                formData.append('kategori', $('#kategori').val());
//                formData.append('subkategori', $('#subkategori').val());
//                formData.append('deskripsi_produk_id', $('#deskripsi_produk_id').val());
//                formData.append('deskripsi_produk_en', $('#deskripsi_produk_en').val());
//                formData.append('harga', $('#harga').val());
//                formData.append('stok', $('#stok').val());
//            },
            success: function (file, response) {

            }
        });
    });
</script>
</body>
</html>