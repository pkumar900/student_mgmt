
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
                               <a href="<?= base_url('admin/Stocks/Add')?>" class="btn btn-primary waves-effect">Add Stock</a>
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
                                            <th>Price</th>
                                            <th>Weight</th>
                                            <th>Quantity</th>
                                            <th>Description</th>
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
                                            
                                            <td><?= $value->price ?></td>
                                            <td><?= $value->weight ?></td>
                                            <td><?= $value->quantity ?></td>
                                            <td><?= $value->description ?></td>
                                            <td><?= $value->added_date ?></td>
                                            <td><?= $value->updated_date ?></td>
                                             <td style="white-space: nowrap">

                                                <a href="<?= base_url('admin/Stocks/Edit/'.base64_encode($value->id))?>" class="btn btn-primary"  data-toggle="tooltip" data-original-title="Edit Stock">
                                                    <i class="material-icons">mode_edit</i>
                                                </a>
                                                <a class="btn btn-danger"  data-toggle="tooltip" data-original-title="Delete Stock" onclick="delete_data('Stock','<?=base_url('admin/Stocks/delete') ?>','<?php echo $value->id; ?>')">
                                                    <i class="material-icons">delete</i>
                                                </a>
                                               
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