<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Feedback</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="mgmt">Manage Feedback</a></li>
              <li class="breadcrumb-item">Edit Feedback</li>
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
                <h3 class="card-title">Edit Feedback</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group row">
                 Fieds Marked with (<span style="color: red;">*</span>) are Mandatory 
                </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name<span style="color: red;">* </span></label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="name" name="name" value="<?=set_value('name',$feedback->name)?>">
                      <input type="hidden" class="form-control" name="action" value="edit">
                      <span style="color: red"><?=_error('name')?></span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Company<span style="color: red;">* </span></label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="company" name="company" value="<?=set_value('company',$feedback->company)?>">
                      <span style="color: red"><?=_error('company')?></span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Display Order<span style="color: red;">* </span></label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="display_order" name="display_order" value="<?=set_value('display_order',$feedback->display_order)?>">
                      <span style="color: red"><?=_error('display_order')?></span>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Feedback<span style="color: red;">* </span></label>
                    <div class="col-sm-6">
                      <textarea class="form-control" rows="3"  id="feedback" name="feedback"><?=set_value('feedback',$feedback->feedback)?></textarea>
                      <span style="color: red"><?=_error('feedback')?></span>
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
