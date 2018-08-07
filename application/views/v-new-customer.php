<?php include('partials/head.php'); ?>
<?php include('partials/uppernav.php'); ?>
<?php include('partials/sidebar.php'); ?>
<style>
    .form-group {
        margin-top: 1rem;
    }

    .center-block {
        float:none;
    }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">কাষ্টমার এন্ট্রি ফর্ম</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <!-- <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v2</li>
                </ol> -->
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                 <!-- right column -->
                <div class="col-md-12">
                    <!-- Horizontal Form -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal">
                            <div class="box-body">
                                <div class="form-group">
                                <label for="inputEmail3" class="col-lg-12 col-md-12 col-sm-12 control-label">প্রতিষ্ঠানের নামঃ </label>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="প্রতিষ্ঠানের নাম এইখানে লিখুন">
                                </div>
                                </div>
                                <div class="form-group">
                                <label for="inputPassword3" class="col-lg-12 col-md-12 col-sm-12 control-label">যোগাযোগকারীর নামঃ </label>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <input type="text" class="form-control" id="inputPassword3" placeholder="যোগাযোগকারীর নাম এইখানে লিখুন">
                                </div>
                                <div class="form-group">
                                <label for="inputPassword3" class="col-lg-12 col-md-12 col-sm-12 control-label">যোগাযোগকারীর ফোন নাম্বারঃ  </label>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <input type="text" class="form-control" id="inputPassword3" placeholder="যোগাযোগকারীর ফোন নাম্বার এইখানে লিখুন">
                                </div>
                                <div class="form-group">
                                <label for="inputPassword3" class="col-lg-12 col-md-12 col-sm-12 control-label">দোকানের ফোন নাম্বারঃ  </label>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <input type="text" class="form-control" id="inputPassword3" placeholder="দোকানের ফোন নাম্বার এইখানে লিখুন">
                                </div>
                                <div class="form-group">
                                <label for="inputPassword3" class="col-lg-12 col-md-12 col-sm-12 control-label">ঠিকানাঃ </label>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <input type="text" class="form-control" id="inputPassword3" placeholder="দোকানের ঠিকানা এইখানে লিখুন">
                                </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer text-center">
                                <button type="submit" class="btn btn-defaul" style="margin-right: 1%;">বাতিল</button>
                                <button type="submit" class="btn btn-info">সেইভ করুন</button>
                            </div>
                        <!-- /.box-footer -->
                        </form>
                    </div>
                <!-- /.box -->
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
    

<?php include('partials/foot.php'); ?>