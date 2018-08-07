<?php 

    
function bn2en($number) {
    $bn = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
    $en = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
    return str_replace($bn, $en, $number);
}

function en2bn($number) {
    $bn = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
    $en = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
    return str_replace($en, $bn, $number);
}
?>
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
                <h1 class="m-0 text-dark">কাষ্টমার লিষ্ট</h1>
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
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>সিরিয়াল নং</th>
                                    <th>কোড নং</th>
                                    <th>ফার্মেসী নাম</th>
                                    <th>ঠিকানা</th>
                                    <th>মোবাইল নং</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <?php $customers   = $this->db->get('customers')->result_array(); ?>
                            <tbody>
                            <?php foreach ($customers as $row2){ ?>
                                <tr>
                                    <td><?php echo en2bn($row2['id']); ?></td>
                                    <td><?php echo $row2['cus_code']; ?></td>
                                    <td><?php echo $row2['cus_name']; ?></td>
                                    <td><?php echo $row2['cus_address']; ?></td>
                                    <td> <?php echo $row2['cus_mobile']; ?></td>
                                    <td>X</td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
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

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      searching: true,
      responsive: true
    });
  });


</script>