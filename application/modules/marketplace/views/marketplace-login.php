<div>
    <div class="container">
        <hr>
        <h2 class="text-center">Login Marketplace</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <div class="w3-card pb-1">
                    <img class="img-responsive img-circle"
                         src="<?php echo base_url() ?>/public/images/tokopedia.png">
                    <?php if ($this->session->tokopedia_account)
                    { ?>
                        <div class="alert alert-success ml-4 mr-4" role="alert">Submitted
                        </div>
                        <?php
                    } else
                    { ?>
                        <?php echo form_open(base_url() . '/marketplace/tokopedia_submit', 'class="w3-card-container"'); ?>
                        <div class="form-label-group">
                            <input type="email" name="email" class="form-control" placeholder="Email address" required
                                   autofocus>
                        </div>
                        <br>
                        <div class="form-label-group">
                            <input type="password" name="password" class="form-control" placeholder="Password"
                                   required>
                        </div>
                        <br>
                        <?php echo $this->session->flashdata('tokopedia_error'); ?>
                        <button class="btn btn-lg" style="background-color: green;color: white" type="submit">Sign in
                        </button>
                        <?php echo form_close() ?>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="w3-card pb-1">
                    <img class="img-responsive img-circle" src="<?php echo base_url() ?>/public/images/bukalapak.png">
                    <?php if ($this->session->bukalapak_account)
                    { ?>
                        <div class="alert alert-success ml-4 mr-4" role="alert">Submitted
                        </div>
                        <?php
                    } else
                    { ?>
                        <?php echo form_open(base_url() . '/marketplace/bukalapak_submit', 'class="w3-card-container"'); ?>
                        <div class="form-label-group">
                            <input type="email" name="email" class="form-control" placeholder="Email address" required
                                   autofocus>
                        </div>
                        <br>
                        <div class="form-label-group">
                            <input type="password" name="password" class="form-control" placeholder="Password"
                                   required>
                        </div>
                        <br>
                        <?php echo $this->session->flashdata('bukalapak_error'); ?>
                        <button class="btn btn-lg" style="background-color: darkred;color: white" type="submit">Sign in
                        </button>
                        <?php echo form_close() ?>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="w3-card pb-1">
                    <img class="img-responsive img-circle" src="<?php echo base_url() ?>/public/images/elevenia.png">
                    <?php if ($this->session->elevenia_account)
                    { ?>
                        <div class="alert alert-success ml-4 mr-4" role="alert">Submitted
                        </div>
                        <?php
                    } else
                    { ?>
                        <?php echo form_open(base_url() . '/marketplace/elevenia_submit', 'class="w3-card-container"'); ?>
                        <div class="form-label-group">
                            <input type="email" name="email" class="form-control" placeholder="Email address" required
                                   autofocus>
                        </div>
                        <br>
                        <div class="form-label-group">
                            <input type="password" name="password" class="form-control" placeholder="Password"
                                   required>
                        </div>
                        <br>
                        <?php echo $this->session->flashdata('elevenia_error'); ?>
                        <button class="btn btn-lg" style="background-color: #c5cb37; color: white" type="submit">Sign in
                        </button>
                        <?php echo form_close() ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <hr>
        <?php
        if ($this->session->tokopedia_account || $this->session->bukalapak_account || $this->session->elevenia_account)
        {
            echo '<div class="text-center">
                    <a href="'.base_url().'/product"><button class="btn btn-lg btn-primary">Go to Dashboard</button></a>
                </div>';
        }
        ?>
    </div>
</div>