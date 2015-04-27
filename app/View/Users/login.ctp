<?php echo $this->Session->flash('auth'); ?>
<div style="margin-top:150px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info" >
        <div class="panel-heading">
            <div class="panel-title">Sign In</div>
            <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
        </div>

        <div style="padding-top:30px" class="panel-body" >

            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

            <?php $this->Form->create('Login');?>
            <form id="loginform" class="form-horizontal" role="form" method="post">

                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="login-username" type="text" class="form-control" name="User[username]" value="" placeholder="username">
                </div>

                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="login-password" type="password" class="form-control" name="User[password]" placeholder="password">
                </div>

                <div class="input-group">
                    <div class="checkbox">
                        <label>
                            <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                        </label>
                    </div>
                </div>


                <div style="margin-top:10px" class="form-group">
                    <!-- Button -->

                    <div class="col-sm-12 controls">
                        <?php
                        echo $this->Form->button('Sign In', array(
                            'class' => 'btn btn-success',
                            'type' => 'submit'));
                        ?>
                        <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>

                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-12 control">
                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                            Don't have an account!
                            <?php echo $this->Html->link("Sign Up Here", array('controller' => 'users', 'action' => 'register')); ?>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>