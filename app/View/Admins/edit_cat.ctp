<div style="margin:150px"></div>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
            <div class="panel panel-info">
                <div class="panel-heading" style="background-color: #2c3e50">
                    <h3 class="panel-title">Edit Category</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <?php echo $this->Form->create('Category', array('class' => 'form-horizontal')); ?>
                        <div class="col-md-12">
                            <?php
                            echo $this->Form->input('name', array(
                                'class' => 'form-control'
                            ));
                            echo $this->Form->button('OK', array(
                                'class' => 'btn btn-success',
                                'type' => 'submit',
                                'style' => 'margin-top:20px'));
                            echo $this->Html->link('Cancel', array(
                                'controller' => 'admins',
                                'action' => 'managecategory',
                                $this->Session->read('Auth.User.id')),array(
                                'class' => 'btn btn-success',
                                'style' => 'margin-top:20px; margin-left: 20px;'
                            ));
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>




