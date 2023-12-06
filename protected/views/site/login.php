<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <center>
              <div class="brand-logo">
                  <img src="images/logo-pt.png" alt="logo">
              </div>
                <h4>Login</h4></center>
                <?php 
                    $form=$this->beginWidget('CActiveForm', array(
                        'id'=>'login-form',
                        'enableClientValidation'=>true,
                        'clientOptions'=>array(
                                'validateOnSubmit'=>true,
                        ),
                        'htmlOptions'=>array(
                            'class'=>'pt-3',
                        ),
                    )); 
                ?>
                <div class="form-group">
                    <?php echo $form->textField($model,'username',array('class'=>'form-control form-control-lg','placeholder'=>'Username')); ?>
                    <span style="color:red;"><?php echo $form->error($model, 'username'); ?></span>
                </div>
                
                <div class="form-group">
                    <?php echo $form->passwordField($model,'password',array('class'=>'form-control form-control-lg','placeholder'=>'Password')); ?>
                    <span style="color:red;"><?php echo $form->error($model, 'password'); ?></span>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Login</button>
                </div>
              <?php $this->endWidget(); ?>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
  <!-- container-scroller -->
                    