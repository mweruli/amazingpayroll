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
                                    <h3 class="box-title"><?php echo anchor('admin/resources/create', '<i class="fa fa-plus"></i> '. lang('actions_payanalh'), array('class' => 'btn btn-block btn-primary btn-flat')); ?></h3>
                                </div>
                                <div class="box-body">
                                   <table class="table table-striped table-hover">
                                            <thead>
                                          <tr>
                                              <th>ID</th>
                                              <th>Depertment Code</th>
                                                <th>Employee Number</th>
                                                <th>Code</th>
                                                <th>General ledger</th>
                                                <th>Amount</th>
                                                <th>Period Date</th>
                                                <th>Actions</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        <?php if(count($resources)):?>
                                            <?php foreach ($resources as $resource):?>
                                          <tr>
                                              <td><?php echo $resource->id;?></td>
                                              <td><?php echo $resource->deptcode;?></td>
                                              <td><?php echo $resource->empno;?></td>
                                              <td><?php echo $resource->code;?></td>
                                              <td><?php echo $resource->glaccno;?></td>
                                              <td><?php echo $resource->amount;?></td>
                                              <td><?php echo $resource->periodate;?></td>
                                              <td><?php echo anchor("admin/resources/edit/{$resource->id}", lang('actions_edit')); ?></td>
                                              <td><?php echo anchor("admin/resources/delete/{$resource->id}", lang('actions_delete')); ?></td>
                                              
                                          </tr>
                                           <?php endforeach ?>
                                           <?php else: ?>
                                                <td>No Records found</td>
                                            <?php endif ?>
                                      </tbody>
                                    </table>
                                </div>
                            </div>
                         </div>
                    </div>
                </section>
            </div>

