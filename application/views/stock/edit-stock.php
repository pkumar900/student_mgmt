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
                     <?= form_open('admin/Stocks/Edit',array('class' => 'form','id'=>'stock')); ?>

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
                                            <input type="text" name="price" class="form-control" placeholder="Price" value="<?= $data[0]->price ?>" />
                                        </div>
                                        <?= form_error('price')?>
                                        
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="weight" class="form-control" placeholder="Weight" value="<?= $data[0]->weight ?>" />
                                        </div>
                                        <?= form_error('weight')?>
                                        
                                    </div>
                                </div>
                                
                               
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="quantity" class="form-control" placeholder="Quantity" value="<?= $data[0]->quantity ?>" />
                                        </div>
                                         <?= form_error('quantity')?>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="description" class="form-control" placeholder="Description" value="<?= $data[0]->description ?>" />
                                        </div>
                                         <?= form_error('description')?>
                                    </div>
                                </div>
                                <?php if($this->session->userdata('role')==ADMIN){ ?>
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
                            <?php } ?>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <input type="hidden" name="id" value="<?=base64_encode($data[0]->id)?>">
                                        <button type="submit" class="btn btn-primary waves-effect">Save</button>

                                        <a href="<?= base_url('admin/Stocks')?>" class="btn btn-primary waves-effect">Cancel</a>
                                </div>
                               
                                
                            </div>
                            <?= form_close()?>
                        </div>
                    </div>
                </div>
            </div>
           
           
        </div>
    </section>