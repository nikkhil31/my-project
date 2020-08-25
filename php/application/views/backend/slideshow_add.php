<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Slideshow</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="mgmt">Manage Slideshow</a></li>
              <li class="breadcrumb-item">Add Slideshow</li>
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
                <h3 class="card-title">Add Slideshow</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group row">
                 Fieds Marked with (<span style="color: red;">*</span>) are Mandatory 
                </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Title 1<span style="color: red;">* </span></label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="title1" name="title1" value="<?=set_value('title1')?>">
                      <input type="hidden" class="form-control" name="action" value="add">
                      <span style="color: red"><?=_error('title1')?></span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Title 2</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="title2" name="title2" value="<?=set_value('title2')?>">
                    </div>
                  </div>

                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Slideshow Image<span style="color: red;">* </span></label>
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
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Link</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="link" name="link" value="<?=set_value('link')?>">
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
