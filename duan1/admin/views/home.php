<?php include './views/layout/header.php' ?>
<!-- Navbar -->
<?php include './views/layout/navbar.php' ?>

<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php include './views/layout/sidebar.php' ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Báo cáo thống kê</h1>
         
        </div>
      </div><!-- /.container-fluid -->
  </section>


  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
         
            </div>
            <!-- /.card-header -->
            <!--  <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div>-->
            <div class="card-body ">
              
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped table-responsive">
                  <thead>
                    <tr>
                      <th>Mã danh mục</th>
                      <th>Tên danh mục</th>
                      <th>Số lượng</th>
                      <th>Giá cao nhất</th>
                      <th>Giá thấp nhất</th>
                      <th>Giá trung bình</th>
              
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($listThongKe as $thongKe) { ?>
                      <tr>
                        <td><?= $thongKe['id'] ?></td>
                        <td><?= $thongKe['ten_danh_muc'] ?></td>
                        <td><?= $thongKe['countSp'] ?></td>
                        <td><?= $thongKe['maxPrice'] ?></td>
                        <td><?= $thongKe['minPrice'] ?></td>
                        <td><?= $thongKe['avgPrice'] ?></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                      <th>Mã danh mục</th>
                      <th>Tên danh mục</th>
                      <th>Số lượng</th>
                      <th>Giá cao nhất</th>
                      <th>Giá thấp nhất</th>
                      <th>Giá trung bình</th>
              
                    </tr>
                  </tfoot>
                </table>
                <a href="<?=BASE_URL_ADMIN.'?act=bieu-do'?>"> <button type="" class="btn btn-primary">Xem biểu đồ</button></a>
               

             
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
<!--footer-->
<?php include './views/layout/footer.php'; ?>

<!-- /.control-sidebar -->
</div>

 
 
</body>

</html>