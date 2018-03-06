<div>
    <div class="container">
        <hr>
        <h2 class="text-center">Login Marketplace</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <div class="w3-card">
                    <img class="img-responsive img-circle"
                         src="<?php echo base_url() ?>/public/images/tokopedia.png">
                    <?php echo form_open(current_url(), 'class="w3-card-container"'); ?>
                        <div class="form-label-group">
                            <input type="email" name="email" class="form-control" placeholder="Email address"
                                   required
                                   autofocus>
                        </div>
                        <br>
                        <div class="form-label-group">
                            <input type="password" name="password" class="form-control" placeholder="Password"
                                   required>
                        </div>
                        <br>
                        <button class="btn btn-lg" style="background-color: green;color: white" type="submit">Sign in
                        </button>
                    <?php echo form_close() ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="w3-card">

                    <img class="img-responsive img-circle" src="<?php echo base_url() ?>/public/images/bukalapak.png">
                    <form class="w3-card-container">
                        <div class="form-label-group">
                            <input type="email" id="inputEmail" class="form-control" placeholder="Email address"
                                   required
                                   autofocus>
                        </div>
                        <br>
                        <div class="form-label-group">
                            <input type="password" id="inputPassword" class="form-control" placeholder="Password"
                                   required>
                        </div>
                        <br>
                        <button class="btn btn-lg" style="background-color: darkred;color: white" type="submit">Sign in
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="w3-card">
                    <img class="img-responsive img-circle" src="<?php echo base_url() ?>/public/images/elevenia.png">
                    <form class="w3-card-container">
                        <div class="form-label-group">
                            <input type="email" id="inputEmail" class="form-control" placeholder="Email address"
                                   required
                                   autofocus>
                        </div>
                        <br>
                        <div class="form-label-group">
                            <input type="password" id="inputPassword" class="form-control" placeholder="Password"
                                   required>
                        </div>
                        <br>
                        <button class="btn btn-lg" style="background-color: #c5cb37; color: white" type="submit">Sign in
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <hr>
        <div class="text-center">
            <button class="btn btn-lg btn-primary">Go to Dashboard</button>
        </div>
    </div>
</div>