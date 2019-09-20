 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2><?= $title ?></h2>
            </div>
           <?php echo isset($msg)?$msg:''; ?>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        
                        <div class="body">
                     <?= form_open('Employees/Edit',array('class' => 'form','id'=>'employee')); ?>

                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="name" class="form-control" placeholder="Name" value="<?= $data[0]->name ?>" />
                                        </div>
                                        <?= form_error('name')?>
                                        <!-- <span></span> -->
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="<?= $data[0]->last_name ?>" />
                                        </div>
                                        <?= form_error('last_name')?>
                                        
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="father_name" class="form-control" placeholder="Father Name" value="<?= $data[0]->father_name ?>" />
                                        </div>
                                        <?= form_error('father_name')?>
                                        
                                    </div>
                                </div>
                                
                               
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="email" class="form-control" placeholder="Email" value="<?= $data[0]->email ?>" />
                                        </div>
                                         <?= form_error('email')?>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" name="password" class="form-control" placeholder="password" value="<?= $data[0]->string_password ?>" />
                                        </div>
                                         <?= form_error('password')?>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="address" class="form-control" placeholder="Address" value="<?= $data[0]->address ?>" />
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row clearfix">
                                
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="mobile" class="form-control" placeholder="Mobile" value="<?= $data[0]->mobile ?>" />
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="salary" class="form-control" placeholder="Salary" value="<?= $data[0]->salary ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control" name="branch_id">
                                                <option value="">Select Branch</option>
                                                <?php foreach ($branch as $key => $value) { ?>
                                                   <option value="<?= $value->id?>" <?= ($data[0]->branch_id==$value->id)?'selected':''?>><?= $value->name ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control" name="role">
                                                <option value="">Select Role</option>
                                                   <option value="1" <?= ($data[0]->role==1)?'selected':''?>>Store Manager</option>
                                                   <option value="2" <?= ($data[0]->role==2)?'selected':''?>>Employee</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <input type="hidden" name="admin_id" value="<?=base64_encode($data[0]->admin_id)?>">
                                        <button type="submit" class="btn btn-primary waves-effect">Save</button>

                                        <a href="<?= base_url('Employees')?>" class="btn btn-primary waves-effect">Cancel</a>
                                </div>
                               
                                
                            </div>
                            <?= form_close()?>
                        </div>
                    </div>
                </div>
            </div>
           
           
        </div>
    </section>