
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
                                BRANCHES
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <div class="col-md-1">
                               <a href="<?= base_url('Branches/Add')?>" class="btn btn-primary waves-effect">Add Branch</a>
                               </div>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                               <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Sr.</th>
                                            <th>Name</th>
                                            <th>Branch Code</th>
                                            <th>Address</th>
                                            <th>Added date</th>
                                            <th>Updated Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                       <?php $count=1; foreach($all_branch as $key=>$value) {?>
                                         <tr>
                                            <td><?= $count++; ?></td>
                                            <td><?= $value->name ?></td>
                                            <td><?= $value->branch_code ?></td>
                                            <td><?= $value->address ?></td>
                                           
                                            <td><?= $value->added_date ?></td>
                                            <td><?= $value->updated_date ?></td>
                                            <td><a href="<?= base_url('Branches/Edit/'.base64_encode($value->id))?>" class="btn btn-primary waves-effect">Edit</a>
                                            
                                        </tr>

                                      <?php   } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </section>