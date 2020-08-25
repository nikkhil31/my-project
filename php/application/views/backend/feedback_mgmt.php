<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Feedback</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Manage Feedback</h3>
              </div>
              <div class="card-header" style="border: none;">
                <a href="add"><button type="button" class="btn btn-outline-primary">Add Feedback</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="5%">Sr.</th>
                    <th width="15%">Name</th>
                    <th width="40%">Feedback</th>
                    <th width="15%">Display Order</th>
                    <th width="5%">Edit</th>
                    <th width="5%">Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?
                    $sr=1;
                    foreach ($feedback as $key => $value) {
                  ?>
                    <tr>
                      <td><?=$sr?></td>
                      <td><?=$value->name?></td>
                      <td><?=$value->feedback?></td>
                      <td><?=$value->display_order?></td>
                      <td> <a  href="<?=site_url('feedback/edit?id='.$value->id)?>" ><button class="btn btn-primary" title="Edit"><i class="fas fa-pen"></i></button></a></td>

                      <td><a  href="<?=site_url('feedback/delete?id='.$value->id)?>" ><button class="btn btn-danger" title="Delete" onclick="return confirm('Are You want to Delete ?')"><i class="fas fa-trash"></i></button></a></td></td>
                    </tr>
                  <?
                    $sr++;}
                  ?>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
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
