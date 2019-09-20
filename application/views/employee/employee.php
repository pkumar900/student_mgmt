
 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    <?=$title ?>
                    
                </h2>
            </div>
            <?=$this->session->flashdata('msg')?>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <?=$title ?>
                            </h2>
                            <?php if($this->session->userdata('role')==ADMIN){ ?>
                            <ul class="header-dropdown m-r--5">
                                <div class="col-md-1">
                               <a href="<?= base_url('Employees/Add')?>" class="btn btn-primary waves-effect">Add Employee</a>
                               </div>
                            </ul>
                        <?php } ?>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                 <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Sr.</th>
                                             <?php if($this->session->userdata('role')==ADMIN){ ?>
                                             <th>Branch</th>
                                        <?php } ?>
                                           
                                            <th>Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Mobile</th>
                                            <th>Salary</th>
                                            <th>Role</th>
                                            <th>Added date</th>
                                            <th>Updated Date</th>
                                              <?php if($this->session->userdata('role')==ADMIN){ ?>
                                            <th>Action</th>
                                        <?php } ?>
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                       <?php if(!empty($all_data)){ $count=1; foreach($all_data as $key=>$value) {?>
                                         <tr id="row<?=$value->admin_id?>">
                                            <td><?= $count++; ?></td>
                                             <?php if($this->session->userdata('role')==ADMIN){ ?>
                                            <td><?= $value->branch ?></td>
                                        <?php } ?>
                                            <td><?= $value->name ?></td>
                                            <td><?= $value->last_name ?></td>
                                            <td><?= $value->email ?></td>
                                            <td><?= $value->address ?></td>
                                            <td><?= $value->mobile ?></td>
                                            <td><?= $value->salary ?></td>
                                            <td><?= ($value->role==1)?'Store Manager':'Employee' ?></td>
                                            <td><?= $value->added_date ?></td>
                                            <td><?= $value->updated_date ?></td>
                                            <?php if($this->session->userdata('role')==ADMIN){ ?>
                                             <td style="white-space: nowrap">

                                                <a href="<?= base_url('Employees/Edit/'.base64_encode($value->admin_id))?>" class="btn btn-primary"  data-toggle="tooltip" data-original-title="Edit Emplyee">
                                                    <i class="material-icons">mode_edit</i>
                                                </a>
                                                <a class="btn btn-danger"  data-toggle="tooltip" data-original-title="Delete Employee" onclick="delete_data('Employee','<?=base_url('Employees/delete') ?>','<?php echo $value->admin_id; ?>')">
                                                    <i class="material-icons">delete</i>
                                                </a>
                                               
                                            </td>
                                        <?php } ?>
                                            
                                        </tr>

                                      <?php  } } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </section>