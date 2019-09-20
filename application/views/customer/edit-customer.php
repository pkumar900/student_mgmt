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
                     <?= form_open('admin/Customers/edit',array('class' => 'form','id'=>'customer')); ?>

                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="name" class="form-control" placeholder="Name" value="<?=$data[0]->name?>" />
                                        </div>
                                        <?= form_error('name')?>
                                        <!-- <span></span> -->
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="email" class="form-control" placeholder="Email" value="<?=$data[0]->email?>" />
                                        </div>
                                         <?= form_error('email')?>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="mobile" class="form-control" placeholder="Mobile" value="<?=$data[0]->mobile?>" />
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                          
             
                            <div class="row clearfix">
                                 <?php if($this->session->userdata('role')==ADMIN){ ?>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control" name="city">
                                                <option value="">Select City</option>
                                                <option value="1" <?= ($data[0]->city==1)?'selected':''?> >Pune</option>
                                                <option value="2" <?= ($data[0]->city==2)?'selected':''?>>Aurangabad</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control" name="branch_id">
                                                <option value="">Select Branch</option>
                                                <?php foreach ($branch as $key => $value) { ?>
                                                   <option value="<?= $value->id?>" <?= ($data[0]->city==$value->id)?'selected':''?>><?= $value->name ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary waves-effect">Save</button>

                                        <a href="<?= base_url('admin/Customers')?>" class="btn btn-primary waves-effect">Cancel</a>
                                </div>
                               
                                
                            </div>
                            <?= form_close()?>
                        </div>
                    </div>
                </div>
            </div>
           
           
        </div>
    </section>
