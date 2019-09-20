
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
                                Tokens
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Sr.</th>
                                            <th>Name</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Timing</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                            <th>Token</th>
                                            <th>Assign date</th>
                                            <!-- <th>Action</th> -->
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                       <?php if(!empty($all_data)){ $count=1; foreach($all_data as $key=>$value) {?>
                                         <tr id="row<?=$value->id?>">
                                            <td><?= $count++; ?></td>
                                            <td><?= $value->name ?></td>
                                            <td><?= $value->mobile ?></td>
                                            <td><?= $value->email ?></td>
                                            <td><?= $value->timing ?></td>
                                            <td><?= $value->price ?></td>
                                            
                                            <td><?= $value->description ?></td>
                                            <td><?= $value->token ?></td>
                                            <td><?= $value->assign_date ?></td>
                                              
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