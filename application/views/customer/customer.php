
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
                            <?php if($this->session->userdata('role')!==ADMIN){ ?>
                            <ul class="header-dropdown m-r--5">
                                <div class="col-md-1">
                               <a href="<?= base_url('admin/Customers/Add')?>" class="btn btn-primary waves-effect">Add Customer</a>
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
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Added date</th>
                                            <th>Updated Date</th>
                                            <th>Action</th>
                                        
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                       <?php if(!empty($all_data)){ $count=1; foreach($all_data as $key=>$value) {?>
                                         <tr id="row<?=$value->id?>">
                                            <td><?= $count++; ?></td>
                                             <?php if($this->session->userdata('role')==ADMIN){ ?>
                                            <td><?= $value->branch ?></td>
                                        <?php } ?>
                                            <td><?= $value->name ?></td>
                                            <td><?= $value->email ?></td>
                                            <td><?= $value->mobile ?></td>
                                            <td><?= $value->added_date ?></td>
                                            <td><?= $value->updated_date ?></td>

                                             <td style="white-space: nowrap">

                                               <!--  <a href="<?= base_url('Customers/Edit/'.base64_encode($value->id))?>" class="btn btn-primary"  data-toggle="tooltip" data-original-title="Edit Customer">
                                                    <i class="material-icons">mode_edit</i>
                                                </a> -->
                                                  <a href="<?= base_url('admin/Customers/generate_token/'.base64_encode($value->id))?>" class="btn btn-primary"  data-toggle="tooltip" data-original-title="Generate Token">
                                                   Generate Token & Assign
                                                </a>
                                                <?php if($this->session->userdata('role')==ADMIN){ ?>
                                                <a class="btn btn-danger"  data-toggle="tooltip" data-original-title="Delete Customer" onclick="delete_data('Customer','<?=base_url('admin/Customers/delete') ?>','<?php echo $value->id; ?>')">
                                                    <i class="material-icons">delete</i>
                                                </a>
                                               <?php } ?>
                                            </td>
                                        
                                            
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