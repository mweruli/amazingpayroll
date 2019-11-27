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
                                    <?php echo form_open("admin/paybankfs/update/{$paybankf->id}", ['class' => 'form-horizontal']); ?>
                                     
                                <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Bank Code</label>
                                        
                                    <div class="col-sm-5">
                                        <?php echo form_input(['name'=>'bankcode', 'placeholder'=>'Bank code', 'class' => 'form-control','value'=>set_value('bankcode', $paybankf->bankcode) ]); ?><span class="text-danger"><?php echo form_error('bankcode');?></span>
                                    </div>
                                 </div>

                                 <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Bank Name</label>
                                    <div class="col-sm-5">
                                        <?php echo form_input(['name'=>'name', 'placeholder'=>'Bank Name', 'class' => 'form-control' ,'value'=>set_value('name', $paybankf->name)]); ?><span class="text-danger"><?php echo form_error('name');?></span>
                                    </div>
                                 </div>

                                 <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Branch Code</label>
                                    <div class="col-sm-5">
                                         <?php echo form_input(['name'=>'brcode', 'placeholder'=>'Branch Code', 'class' => 'form-control' ,'value'=>set_value('brcode', $paybankf->brcode)]); ?><span class="text-danger"><?php echo form_error('brcode');?></span>
                                        
                                    </div>
                                 </div>

                                 <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Branch Name</label>
                                    <div class="col-sm-5">
                                        <?php echo form_input(['name'=>'branch', 'placeholder'=>'Branch Name', 'class' => 'form-control' ,'value'=>set_value('branch', $paybankf->branch)]); ?><span class="text-danger"><?php echo form_error('branch');?></span>
                                      
                                    </div>
                                 </div>

                                 <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-5">
                                         <?php echo form_input(['name'=>'address', 'placeholder'=>'Address', 'class' => 'form-control' ,'value'=>set_value('address', $paybankf->address)]); ?><span class="text-danger"><?php echo form_error('address');?></span>
                                      
                                    </div>
                                 </div>

                                   <div class="form-group">
                                      <div class="col-sm-offset-4 col-sm-8">
                                         <?php echo form_submit(['type' => 'submit',  'class' => 'btn btn-primary btn-flat', 'value'=>'Update' ]); ?>
                                         
                                         <?php echo anchor('admin/paybankfs', lang('actions_back'), array('class' => 'btn btn-default btn-flat')); ?>
                                       </div>
                                    </div>
  
                                    <?php echo form_close();?>
                                </div>
                            </div>
                         </div>
                    </div>
                </section>
            </div>
