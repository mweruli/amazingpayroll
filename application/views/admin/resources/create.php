<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

            <div class="content-wrapper">
                <section class="content-header">
                    <?php echo $pagetitle; ?>
                    <?php echo $breadcrumb; ?>
                </section>

                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title"><?php echo lang('users_create_user'); ?></h3>
                                </div>
                                <div class="box-body">
                                    <?php echo form_open('admin/resources/save', ['class' => 'form-horizontal']); ?>
                                     
                                <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Deptcode</label>
                                    <div class="col-sm-5">
                                        <?php echo form_input(['name'=>'deptcode', 'placeholder'=>'Depertment code', 'class' => 'form-control']); ?>
                                    </div>
                                 </div>

                                 <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Employee number</label>
                                    <div class="col-sm-5">
                                        <?php echo form_input(['name'=>'empno', 'placeholder'=>'Employee number', 'class' => 'form-control']); ?>
                                    </div>
                                 </div>

                                 <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Code</label>
                                    <div class="col-sm-5">
                                          <?php echo form_input(['name'=>'code', 'placeholder'=>'Code', 'class' => 'form-control']); ?>
                                
                                    </div>
                                 </div>

                                 <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Glacc number</label>
                                    <div class="col-sm-5">
                                        <?php echo form_input(['name'=>'glaccno', 'placeholder'=>'Glacc number', 'class' => 'form-control']); ?>
                                       
                                    </div>
                                 </div>

                                 <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Amount</label>
                                    <div class="col-sm-5">
                                        <?php echo form_input(['name'=>'amount', 'placeholder'=>'Amount', 'class' => 'form-control']); ?>
                                       
                                    </div>
                                 </div>

                                 <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Balance</label>
                                    <div class="col-sm-5">
                                         <?php echo form_input(['name'=>'balance', 'placeholder'=>'Balance', 'class' => 'form-control']); ?>
                                        
                                    </div>
                                 </div>

                                 <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Loan BF</label>
                                    <div class="col-sm-5">
                                        <?php echo form_input(['name'=>'loanbf', 'placeholder'=>'Loan BF', 'class' => 'form-control']); ?>
                                      
                                    </div>
                                 </div>

                                 <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Intrest Amount</label>
                                    <div class="col-sm-5">
                                         <?php echo form_input(['name'=>'intamt', 'placeholder'=>'Intrest', 'class' => 'form-control']); ?>
                                      
                                    </div>
                                 </div>

                                 <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Periodate</label>
                                    <div class="col-sm-5">
                                           <?php echo form_input(['name'=>'periodate', 'placeholder'=>'Periodate', 'class' => 'form-control', 'type'=>'date']); ?>
                                       
                                    </div>
                                 </div>

                                 <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Debit</label>
                                    <div class="col-sm-5">
                                         <?php echo form_input(['name'=>'debit', 'placeholder'=>'Debit', 'class' => 'form-control']); ?>
                                        
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Credit</label>
                                    <div class="col-sm-5">
                                         <?php echo form_input(['name'=>'credit', 'placeholder'=>'Credit', 'class' => 'form-control']); ?>
                                      
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Employee Branch</label>
                                    <div class="col-sm-5">
                                        <?php echo form_input(['name'=>'empbrch', 'placeholder'=>'Employee Branch', 'class' => 'form-control']); ?>
                                       
                                    </div>
                                 </div>
                                 

                                   <div class="form-group">
                                      <div class="col-sm-offset-4 col-sm-8">
                                         <?php echo form_submit(['type' => 'submit',  'class' => 'btn btn-primary btn-flat', 'value'=>'Create' ]); ?>
                                         <?php echo anchor('admin/resources', lang('actions_back'), array('class' => 'btn btn-default btn-flat')); ?>
                                       </div>
                                    </div>
  
                                    <?php echo form_close();?>
                                </div>
                            </div>
                         </div>
                    </div>
                </section>
            </div>
