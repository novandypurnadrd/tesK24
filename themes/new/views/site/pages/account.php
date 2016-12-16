<?php
$this->pageTitle=Yii::app()->name . ' - Form Elements';
$this->breadcrumbs=array(
	'Form Elements',
);
?>


<h1>Form Elements</h1>
<div class="container showgrid">
    <div class="form">
    <section class="content">
        <div class="span-12">
        <div class="row">
            <label for="name" class="required">Username:</label>
            <?php echo  CHtml::textField('username', '',array('style' => 'width:300px'));?>
            
        </div>
        <div class="row">
            <label for="address" class="required">Password:</label>
            <?php echo  CHtml::textField('password','',array('style' => 'width:300px'));?>
            
        </div>

        <!--<div class="row">
            <label for="dropdown">Satus:</label>
            <?php //echo CHtml::dropDownList('dropdown', 'In-active', array('Active'=>'Active','In-active'=>'In-active'),array('style' => 'width:100px'));?>
            <span class="field_name_help">Please select status.</span>
        </div> -->
        <!--<div class="row">
            <label for="checkbox">Is Admin:</label>
           <?php //echo CHtml::checkBox('checkbox', true);?>
            <span class="field_name_help">Is this user an admin?.</span>
        </div> -->
<!--
         <div class="row">
            <label for="checkbox">Biography:</label>
            <?php //echo CHtml::textArea('textarea','', array ( 'rows'=>'10','cols' => '60')); ?>
        </div>
 -->
        <div class="row">
              <?php echo CHtml::htmlButton('Simpan', array('class'=>'button green'));?> 
               <?php echo CHtml::htmlButton('Batal', array('class'=>'button blue'));?>
            </div>
        </section>

          <h6 class="box-title">Daftar Member</h6>
                    <table id="KepalaArea" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th><center>ID</center></th>
                                <th><center>Username</center></th>
                                <th><center>Password</center></th>
                                <th><center>Action</center></th>
                            </tr>
                        </thead>
                        <div class="box-body">
                            <h5>Keterangan :</h5><p>
                            <span class="label label-danger"><span class="fa fa-trash"></span></span> untuk "Hapus". &nbsp;&nbsp;
                            <span class="label label-warning"><span class="fa fa-edit"></span></span> untuk "Edit". &nbsp;&nbsp;
                            </p>
                        </div>
                    </table>
       
        </div>
    </div>
     <!--   
        <div class="span-11 last">
            <div class="row">
                <label for="street">Street Adress:</label>
                <?php //echo  CHtml::textField('street');?>
            </div>
            <div class="row">
                <label for="city">City:</label>
                <?php //echo  CHtml::textField('city');?>
            </div>
            <div class="row">
                <label for="country">Country:</label>
                <?php //echo  CHtml::textField('country');?>
            </div>
        
           
            
        </div>

        -->
        <!-- form -->


</div>
<br />

