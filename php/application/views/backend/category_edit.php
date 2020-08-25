<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="mgmt">Manage Category</a></li>
              <li class="breadcrumb-item">Edit Category</li>
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
                <h3 class="card-title">Edit Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group row">
                 Fieds Marked with (<span style="color: red;">*</span>) are Mandatory 
                </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Category Name<span style="color: red;">* </span></label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="category_name" name="category_name" value="<?=set_value('category_name',$category->category_name)?>">
                      <input type="hidden" class="form-control" name="action" value="edit">
                      <span style="color: red"><?=_error('category_name')?></span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Display Order<span style="color: red;">* </span></label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="display_order" name="display_order" value="<?=set_value('display_order',$category->display_order)?>">
                      <span style="color: red"><?=_error('display_order')?></span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Meta Title</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="meta_title" name="meta_title" value="<?=set_value('meta_title',$category->meta_title)?>">
                      <span style="color: red"><?=_error('meta_title')?></span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Meta Keyword</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="meta_keyword" name="meta_keyword" value="<?=set_value('meta_keyword',$category->meta_keyword)?>">
                      <span style="color: red"><?=_error('meta_keyword')?></span>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Meta Description</label>
                    <div class="col-sm-6">
                      <textarea class="form-control" rows="3"  id="meta_desc" name="meta_desc"><?=set_value('meta_desc',$category->meta_desc)?></textarea>
                      <span style="color: red"><?=_error('meta_desc')?></span>
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
