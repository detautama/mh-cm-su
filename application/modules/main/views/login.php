<?php echo form_open(current_url(), 'class="form-signin"'); ?>
<div class="text-center mb-4">
        <img class="mb-4 img-responsive" src="<?php echo base_url() ?>/public/images/logomh.png" width="300px">
        <h1 class="h3 mb-3 font-weight-normal">Channel Manager</h1>
        <p>Silahkan Login</p>
    </div>

    <div class="form-label-group">
        <input type="text" id="username" name="username" class="form-control" >
        <label for="inputEmail">Username</label>
    </div>

    <div class="form-label-group">
        <input type="password" id="password" name="password" class="form-control" >
        <label for="inputPassword">Password</label>
    </div>

    <?php echo validation_errors(); ?>
    <?php echo $this->session->flashdata('error'); ?>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted text-center">Markethub &copy; 2018</p>
<?php echo form_close() ?>