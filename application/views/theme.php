<?php $this->load->view('header');?>
<?php $this->load->view('menu');?>

                <!-- content -->
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-header bootstrap-admin-content-title">
                                <h1>Bootstrap 3.x Admin's Theme</h1>
                                
                            </div>
                        </div>
                    </div>

                  

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="text-muted bootstrap-admin-box-title">License</div>
                                </div>
                                <div class="bootstrap-admin-panel-content">
                                    <?php echo $output;?>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>

<?php $this->load->view('footer');?>