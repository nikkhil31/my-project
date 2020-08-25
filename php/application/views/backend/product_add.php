<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="mgmt">Manage Product</a></li>
              <li class="breadcrumb-item">Add Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 mx-auto">
            <!-- /.card -->
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group row">
                 Fieds Marked with (<span style="color: red;">*</span>) are Mandatory 
                </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Product Name<span style="color: red;">* </span></label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="product_name" name="product_name" value="<?=set_value('product_name')?>">
                      <input type="hidden" class="form-control" name="action" value="add">
                      <span style="color: red"><?=_error('product_name')?></span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Small Description<span style="color: red;">* </span></label>
                    <div class="col-sm-6">
                      <textarea class="form-control" rows="3"  id="small_desc" name="small_desc"><?=set_value('small_desc')?></textarea>
                      <span style="color: red"><?=_error('small_desc')?></span>
                    </div>
                  </div>


                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Product Image<span style="color: red;">* </span></label>
                    <div class="col-sm-6">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                     <span style="color: red"><?=_error('image')?></span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Display Order<span style="color: red;">* </span></label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="display_order" name="display_order" value="<?=set_value('display_order')?>">
                      <span style="color: red"><?=_error('display_order')?></span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Category<span style="color: red;">* </span></label>
                    <div class="col-sm-6">
                        <select class="form-control" id="category_id" name="category_id">
                          <option value="">- Select Category -</option>
                          <? 
                            $category = _get_byorder('category');
                            foreach ($category as $key => $value) {
                          ?>
                            <option value="<?=$value->id?>" <?=set_select('category_id',$value->id)?>><?=$value->category_name?></option>
                          <?
                            }
                          ?>
                        </select>
                      <span style="color: red"><?=_error('category_id')?></span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Is Feature ?</label>
                    <div class="col-sm-6">
                        <select class="form-control" id="is_feature" name="is_feature">
                          <option value="0" <?=set_Select('is_feature','0')?>>No</option>
                          <option value="1" <?=set_select('is_feature','1')?>>Yes</option>
                        </select>
                      <span style="color: red"><?=_error('is_feature')?></span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Is Latest ?</label>
                    <div class="col-sm-6">
                        <select class="form-control" id="is_lattest" name="is_lattest">
                          <option value="0" <?=set_Select('is_feature','0')?>>No</option>
                          <option value="1" <?=set_select('is_feature','1')?>>Yes</option>
                        </select>
                      <span style="color: red"><?=_error('is_lattest')?></span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Technical Information</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="title1" name="title1" value="<?=set_value('title1')?>" placeholder="Title 1">
                        <span style="color: red"><?=_error('title1')?></span>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="desc1" name="desc1" value="<?=set_value('desc1')?>" placeholder="Desc 1">
                        <span style="color: red"><?=_error('desc1')?></span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="title2" name="title2" value="<?=set_value('title2')?>" placeholder="Title 2">
                        <span style="color: red"><?=_error('title2')?></span>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="desc2" name="desc2" value="<?=set_value('desc2')?>" placeholder="Desc 2">
                        <span style="color: red"><?=_error('desc2')?></span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="title3" name="title3" value="<?=set_value('title3')?>" placeholder="Title 3">
                        <span style="color: red"><?=_error('title3')?></span>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="desc3" name="desc3" value="<?=set_value('desc3')?>" placeholder="Desc 3">
                        <span style="color: red"><?=_error('desc3')?></span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="title4" name="title4" value="<?=set_value('title4')?>" placeholder="Title 4">
                        <span style="color: red"><?=_error('title4')?></span>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="desc4" name="desc4" value="<?=set_value('desc4')?>" placeholder="Desc 4">
                        <span style="color: red"><?=_error('desc4')?></span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="title5" name="title5" value="<?=set_value('title5')?>" placeholder="Title 5">
                        <span style="color: red"><?=_error('title5')?></span>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="desc5" name="desc5" value="<?=set_value('desc5')?>" placeholder="Desc 5">
                        <span style="color: red"><?=_error('desc5')?></span>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Meta Title</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="meta_title" name="meta_title" value="<?=set_value('meta_title')?>">
                      <span style="color: red"><?=_error('meta_title')?></span>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Meta Keyword</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="meta_keyword" name="meta_keyword" value="<?=set_value('meta_keyword')?>">
                      <span style="color: red"><?=_error('meta_keyword')?></span>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Meta Description</label>
                    <div class="col-sm-6">
                      <textarea class="form-control" rows="3"  id="meta_desc" name="meta_desc"><?=set_value('meta_desc')?></textarea>
                      <span style="color: red"><?=_error('meta_desc')?></span>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Full Description</label>
                    <div class="col-sm-6">
                     <textarea class="textarea" name="description" ><?=set_value('description')?></textarea>
                      <span style="color: red"><?=_error('description')?></span>
                    </div>
                  </div>


                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <div class="form-check">
                        <button type="submit" class="btn btn-info">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                
                <!-- /.card-footer -->
              </form>
            </div>

              <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
