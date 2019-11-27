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
                        <div class="col-xs-12">
                            <div class="box box-solid">
                                 <div class="box-header with-border">
                                    <h3 class="box-title"><?php echo anchor('admin/paybankfs/create', '<i class="fa fa-plus"></i> '. lang('actions_paybankfs'), array('class' => 'btn btn-block btn-primary btn-flat')); ?></h3>
                                </div>
                                <div class="box-body">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                    <th>ID</th>
                                    <th>Bank Code</th>
                                    <th>Bank Name</th>
                                    <th>Branch Code</th>
                                     <th>Branch Name</th>
                                     <th>Address</th>
                                     <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(count($paybankfs)): ?>
                                        <?php foreach ($paybankfs as $paybankf):?>
                                           <tr>
                                               <td><?php echo $paybankf->id;?></td>
                                               <td><?php echo $paybankf->bankcode;?></td>
                                               <td><?php echo $paybankf->name;?></td>
                                               <td><?php echo $paybankf->brcode;?></td>
                                                <td><?php echo $paybankf->branch;?></td>
                                               <td><?php echo $paybankf->address;?></td> 
                                                <td><?php echo anchor("admin/paybankfs/edit/{$paybankf->id}", lang('actions_edit')); ?></td>
                                              <td><?php echo anchor("admin/paybankfs/delete/{$paybankf->id}", lang('actions_delete')); ?></td>
                                           </tr>
                                      
                                        <?php endforeach ?>
                                    <?php else: ?>   
                                        <td>No Records Found</td> 
                                    <?php endif ?>    

                                </tbody>
                                
                            </table>
                           

                           </div>
            </div>
        </div>
    </div>

                </section>
            </div>
