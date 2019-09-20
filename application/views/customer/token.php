 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2><?= $title ?></h2>
            </div>
           <?=$this->session->flashdata('msg')?>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        
                        <div class="body">
                     <?= form_open('admin/Customers/generate_token',array('class' => 'form','id'=>'token')); ?>

                            
                          
                            <div class="row clearfix">
                                
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="timing" class="form-control" placeholder="Timing" value="<?=set_value('timing')?>" />
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="price" class="form-control" placeholder="Price" value="<?=set_value('price')?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="desc" class="form-control" placeholder="Description" value="<?=set_value('desc')?>" />
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-6">
                                        <input type="hidden" name="customer_id" value="<?= base64_encode($id)?>" >
                                        <button type="submit" class="btn btn-primary waves-effect">Save</button>

                                        <a href="<?= base_url('admin/Customers')?>" class="btn btn-primary waves-effect">Cancel</a>
                                </div>
                               
                                
                            </div>
                            <?= form_close()?>
                        </div>
                    </div>
                </div>
            </div>
           
           <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tokens
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Sr.</th>
                                            <th>Timing</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                            <th>Token</th>
                                            <th>Added date</th>
                                            <th>Updated Date</th>
                                             <?php if($this->session->userdata('role')==BRANCH){ ?>
                                            <th>Assign Employee</th>
                                        <?php } ?>
                                            <!-- <th>Action</th> -->
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                       <?php if(!empty($all_data)){ $count=1; foreach($all_data as $key=>$value) {?>
                                         <tr id="row<?=$value->id?>">
                                            <td><?= $count++; ?></td>
                                             <td><?= $value->timing ?></td>
                                            <td><?= $value->price ?></td>
                                            
                                            <td><?= $value->description ?></td>
                                            <td><?= $value->token ?></td>
                                            <td><?= $value->added_date ?></td>
                                            <td><?= $value->updated_date ?></td>
                                               <?php if($this->session->userdata('role')==BRANCH){ ?>
                                            <td>
                                                <select class="form-control" onchange="assign_employee('Customer','<?= base_url('admin/Customers/assign_employee')?>',this.value,'<?= $value->id?>')">
                                                    <option value="">Select Employee</option>
                                                    <?php foreach ($employees as $key => $value_emp) { ?>
                                                       <option value="<?= $value_emp->admin_id ?>" <?= ($value->assign_to==$value_emp->admin_id)?'selected':''?>><?= $value_emp->name ?></option>
                                                   <?php } ?>
                                                </select>
                                            </td>
                                        <?php } ?>
                                            <?php if($this->session->userdata('role')==ADMIN){ ?>
                                             <!-- <td style="white-space: nowrap"> -->

                                                <!-- <a href="<?= base_url('admin/Customers/edit_token/'.base64_encode($value->id))?>" class="btn btn-primary"  data-toggle="tooltip" data-original-title="Edit Data">
                                                    <i class="material-icons">mode_edit</i>
                                                </a>
             -->
                                               <!--  <a class="btn btn-danger"  data-toggle="tooltip" data-original-title="Delete Customer" onclick="delete_data('Customer','<?=base_url('admin/Customers/delete') ?>','<?php echo $value->id; ?>')">
                                                    <i class="material-icons">delete</i>
                                                </a> -->
                                               
                                            <!-- </td> -->
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
