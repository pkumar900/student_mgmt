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
                     <?= form_open('admin/Reports',array('class' => 'form','id'=>'token')); ?>

                            
                          
                            <div class="row clearfix">
                               <?php  if($this->session->userdata('role')==ADMIN)
        						{ ?> 
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                          <select class="form-control" name="branch">
                                                    <option value="">Select Branch</option>
                                                    <?php foreach ($all_branches as $key => $value) { ?>
                                                       <option value="<?= $value->id ?>" <?=($value->id==set_value('branch'))?'selected':''?> ><?= $value->name ?></option>
                                                   <?php } ?>
                                                </select>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                                 <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                           <select class="form-control" name="employee">
                                                    <option value="">Select Employee</option>
                                                    <?php foreach ($all_employees as $key => $value_emp) { ?>
                                                       <option value="<?= $value_emp->admin_id ?>" <?=($value_emp->admin_id==set_value('employee'))?'selected':''?> ><?= $value_emp->name ?></option>
                                                   <?php } ?>
                                                </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" id="daterange" name="date" class="form-control" placeholder="" value="<?=set_value('date')?>" />
                                        </div>
                                    </div>
                                </div>
                               
                            </div><div class="row clearfix">
                                
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                          <select class="form-control" name="from_month">
                                                
                                                    <option value="">Select From Month</option>
                                                    <option value="1" <?=(1==set_value('from_month'))?'selected':''?>>January</option>
                                                    <option value="2"<?=(2==set_value('from_month'))?'selected':'';?>>February</option>
                                                    <option value="3"<?=(3==set_value('from_month'))?'selected':'';?>>March</option>
                                                    <option value="4"<?=(4==set_value('from_month'))?'selected':'';?>>April</option>
                                                    <option value="5"<?=(5==set_value('from_month'))?'selected':'';?>>May</option>
                                                    <option value="6"<?=(6==set_value('from_month'))?'selected':'';?>>June</option>
                                                    <option value="7"<?=(7==set_value('from_month'))?'selected':'';?>>July</option>
                                                    <option value="8"<?=(8==set_value('from_month'))?'selected':'';?>>August</option>
                                                    <option value="9"<?=(9==set_value('from_month'))?'selected':'';?>>September</option>
                                                    <option value="10"<?=(10==set_value('from_month'))?'selected':'';?>>October</option>
                                                    <option value="11"<?=(11==set_value('from_month'))?'selected':'';?>>November</option>
                                                    <option value="12"<?=(12==set_value('from_month'))?'selected':'';?>>December</option>
                                                </select>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                           <select class="form-control" name="to_month">
                                                
                                                    <option value="">Select To Month</option>
                                                    <option value="1" <?=(1==set_value('to_month'))?'selected':''?>>January</option>
                                                    <option value="2"<?=(2==set_value('to_month'))?'selected':'';?>>February</option>
                                                    <option value="3"<?=(3==set_value('to_month'))?'selected':'';?>>March</option>
                                                    <option value="4"<?=(4==set_value('to_month'))?'selected':'';?>>April</option>
                                                    <option value="5"<?=(5==set_value('to_month'))?'selected':'';?>>May</option>
                                                    <option value="6"<?=(6==set_value('to_month'))?'selected':'';?>>June</option>
                                                    <option value="7"<?=(7==set_value('to_month'))?'selected':'';?>>July</option>
                                                    <option value="8"<?=(8==set_value('to_month'))?'selected':'';?>>August</option>
                                                    <option value="9"<?=(9==set_value('to_month'))?'selected':'';?>>September</option>
                                                    <option value="10"<?=(10==set_value('to_month'))?'selected':'';?>>October</option>
                                                    <option value="11"<?=(11==set_value('to_month'))?'selected':'';?>>November</option>
                                                    <option value="12"<?=(12==set_value('to_month'))?'selected':'';?>>December</option>
                                                </select>
                                        </div>
                                    </div>
                                </div>
                                
                               
                            </div>
                            
                            <div class="row clearfix">
                                <div class="col-md-6">
                                      
                                        <button type="submit" class="btn btn-primary waves-effect">Submit</button>

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
                                Reports
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
                                            
                                            <!-- <th>Action</th> -->
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                       <?php if(!empty($reports)){ $count=1; foreach($reports as $key=>$value) {?>
                                         <tr id="row<?=$value->id?>">
                                            <td><?= $count++; ?></td>
                                             <td><?= $value->timing ?></td>
                                            <td><?= $value->price ?></td>
                                            <td><?= $value->description ?></td>
                                            <td><?= $value->token ?></td>
                                            <td><?= $value->added_date ?></td>
                                            <td><?= $value->updated_date ?></td>
                                              
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
