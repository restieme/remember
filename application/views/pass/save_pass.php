<?php $this->load->view('pass/header');?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Forms</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Generate your own password
                    </div><div class="panel-body">
                	<?php echo form_open("pass/add"); ?>
	                    <div class="row">
	                        <div class="col-lg-6">
	                            <div class="form-group">
	                                <label>Account</label>
	                                <?php 
                                        $account = array(
                                            'name' => 'account',
                                            'id' => 'account',
                                            'type' => 'text',
                                            'class' => 'form-control',
                                            'autofocus' => 'autofocus',
                                            'required' => 'required',
                                        );
                                    ?>
                                    <?php echo form_input($account);?>
	                                <p class="help-block">Example: FB, Instagram, Twitter</p>
	                            </div>
	                        </div>
	                    </div>

	                    <div class="row">
	                        <div class="col-lg-6">
	                            <div class="form-group">
	                                <label>Username</label>
	                                <?php 
                                        $username = array(
                                            'name' => 'username',
                                            'id' => 'username',
                                            'type' => 'text',
                                            'class' => 'form-control',
                                            'required' => 'required',
                                        );
                                    ?>
                                    <?php echo form_input($username);?>
	                            </div>
	                        </div>
	                    </div>

	                    <div class="row">
	                        <div class="col-lg-6">
	                            <div class="form-group">
	                                <label>Email</label>
	                                <?php 
                                        $email = array(
                                            'name' => 'email',
                                            'id' => 'email',
                                            'type' => 'email',
                                            'class' => 'form-control',
                                        );
                                    ?>
                                    <?php echo form_input($email);?>
	                            </div>
	                        </div>
	                    </div>

	                    <div class="row">
	                        <div class="col-lg-6">
	                            <div class="form-group">
	                                <label>Password</label>
	                                <?php 
                                        $password = array(
                                            'name' => 'password',
                                            'id' => 'password',
                                            'type' => 'password',
                                            'class' => 'form-control',
                                            'required' => 'required',
                                        );
                                    ?>
                                    <?php echo form_input($password);?>
	                            </div>
	                        </div>
	                    </div>

	                    <div class="row">
	                        <div class="col-lg-6">
	                            <div class="form-group">
	                                <label>Description</label>
	                                <?php 
                                        $password = array(
                                            'name' => 'description',
                                            'id' => 'description',
                                            'rows' => '3',
                                            'class' => 'form-control',
                                        );
                                    ?>
                                    <?php echo form_textarea($password);?>
	                            </div>
	                        </div>
	                    </div>

	                    <div class="row">
	                        <div class="col-lg-6">
	                       	 	<?php echo form_submit('submit', 'Save', array('class' => 'btn btn-lg btn-success btn-block'));?>
	                        </div>
	                    </div>
                    <?php echo form_close();?>
                   
                </div>

            </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
<?php $this->load->view('pass/footer');?>