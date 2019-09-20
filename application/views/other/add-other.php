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
                     <?= form_open('admin/Others/add',array('class' => 'form','id'=>'others')); ?>

                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea cols="40" rows="5" name="desc"></textarea> 
                                        </div>
                                        <?= form_error('desc')?>
                                        <!-- <span></span> -->
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="price" class="form-control" placeholder="Price" />
                                        </div>
                                         <?= form_error('price')?>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="row clearfix">
                                <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary waves-effect">Save</button>

                                        <a href="<?= base_url('admin/Others')?>" class="btn btn-primary waves-effect">Cancel</a>
                                </div>
                               
                                
                            </div>
                            <?= form_close()?>
                        </div>
                    </div>
                </div>
            </div>
           
           
        </div>
    </section>
