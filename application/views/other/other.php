
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
                                Other Expenses
                            </h2>
                            <?php if($this->session->userdata('role')==BRANCH){ ?>
                            <ul class="header-dropdown m-r--5">
                                <div class="col-md-1">
                               <a href="<?= base_url('admin/Others/Add')?>" class="btn btn-primary waves-effect">Add Expenses</a>
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
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Added date</th>
                                            <th>Updated Date</th>
                                             <?php if($this->session->userdata('role')==ADMIN){ ?>
                                               <th>Branch Name</th> 
                                            <!-- <th>Action</th> -->
                                        <?php } ?>
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                       <?php $count=1; if(!empty($all_expenses)){ foreach($all_expenses as $key=>$value) {?>
                                         <tr>
                                            <td><?= $count++; ?></td>
                                            <td><?= $value->description ?></td>
                                            <td><?= $value->price ?></td>
                                          
                                            <td><?= $value->added_date ?></td>
                                            <td><?= $value->updated_date ?></td>
                                             <?php if($this->session->userdata('role')==ADMIN){ ?>
                                                <td><?= $value->branch ?></td>
                                            <!-- <td><a href="<?= base_url('Others/Edit/'.base64_encode($value->id))?>" class="btn btn-primary waves-effect">Edit</a> -->
                                            <?php } ?>
                                            
                                        </tr>

                                      <?php }  } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </section>