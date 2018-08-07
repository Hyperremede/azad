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
                <h1 class="m-0 text-dark">ইনভয়েস</h1>
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
    <section class="content invoiceDesin">
        <div class="container">
            <div class="invoice">
                <div class="invoice-container">
                    <div class="row">
                        <div class="col-lg-11 col-lg-offset-2">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-company">
                                        <img src="<?php echo base_url(); ?>Assets/dist/img/logo.png" alt="হামদর্দ (ওয়াকফ) ল্যাবরেটরীজ বাংলাদেশ">
                                        <h2>হামদর্দ (ওয়াকফ) ল্যবরেটরীজ বাংলাদেশ</h2>
                                        <p>হামদর্দ ভবন, ৯৯ বীর উত্তম সি আর দত্ত সড়ক, ধানমন্ডি, ঢাকা-১২০৫</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="invoice-number text-right">
                                        <h3>Invoice #932-ht-43</h3>
                                        <p>September 03, 2017</p>
                                        <p>প্রতিনিধি: মাক্সুদুর রাহমান</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="invoice-container invoice-container-highlight">
                    <div class="row">
                        <div class="col-lg-11 col-lg-offset-2">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-address">
                                        <h5>পরিবেশকঃ মেসার্স আজাদ এন্টারপ্রাইজ</h5>
                                        <p>তালতলি বাজার, সন্দ্বীপ, চট্টগ্রাম<br>ফোন: ০১৭৪৯৯৭৭৬০৬<br>ফোন: ০১৭১৩০৯১৯৭৪ </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="invoice-address text-right">
                                        <h5>পপুলার ফার্মেসী</h5>
                                        <p>আকবর হাট, সন্দ্বীপ, চট্টগ্রাম <br>ফোন: ০১৭৪৪৫৫৮৮৯৯</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="invoice-container invoiceBody">
                    <div class="row">
                        <div class="col-lg-11 col-lg-offset-2">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th >ঔষধের নাম</th>
                                            <th class="text-center">পরিবেশনা</th>
                                            <th class="text-center" width="150">পরিমান</th>
                                            <th class="text-center" width="150">দর</th>
                                            <th class="text-center" width="150">টাকা &#2547;</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-thin tblProductBody">
                                        <tr>
                                            <td width="40" class="text-center">১</td>
                                            <td class="" >সিরাপ সিনকারা</td>
                                            <td class="text-center">৪৫০ মিলি</td>
                                            <td class="text-center">৫</td>
                                            <td class="text-center">১৫০</td>
                                            <td class="text-center">৭৫০</td>
                                        </tr>
                                        <tr>
                                            <td width="40" class="text-center">২</td>
                                            <td class="" >সিরাপ কারমিনা</td>
                                            <td class="text-center">২৫০ মিলি</td>
                                            <td class="text-center">৩</td>
                                            <td class="text-center">৫০</td>
                                            <td class="text-center">১৫০</td>
                                        </tr>
                                        <tr>
                                            <td width="40" class="text-center">৩</td>
                                            <td class="" >সিরাপ ছাফী</td>
                                            <td class="text-center">১০০ মিলি</td>
                                            <td class="text-center">১</td>
                                            <td class="text-center">১০০</td>
                                            <td class="text-center">১০০</td>
                                        </tr>
                                        <tr>
                                            <td width="40" class="text-center">৪</td>
                                            <td class="" >আরক ফাওলিন</td>
                                            <td class="text-center">৪৫০ মিলি</td>
                                            <td class="text-center">২</td>
                                            <td class="text-center">২৫০</td>
                                            <td class="text-center">৫০০</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-8">
                                    <table class="table table-bordered invoice-table-total">
                                        <tbody>
                                            <tr>
                                                <td class="text-center text-muted text-thin"><strong>মোট</strong></td>
                                                <td width="150" class="text-center text-muted">১৫০০ &#2547;</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center text-muted text-thin"><strong>জমা</strong></td>
                                                <td width="150" class="text-center text-muted">৫০০ &#2547;</td>
                                            </tr>
                                            <tr class="invoice-table-highlight">
                                                <td class="text-center text-bold"><strong>বাকী</strong></td>
                                                <td width="150" class="text-center text-bold">১০০০ &#2547;</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="invoice-thanks">
                                <div class="row">
                                    <!-- <div class="col-md-6">
                                        <div class="title">ধন্যবাদান্তে:</div>
                                        <p>মেসার্স আজাদ এন্টারপ্রাইজ</p> 
                                    </div>-->
                                    <div class="col-md-4">
                                        <p><img src="http://boooya.aqvatarius.com/assets/images/signature.png" alt="signature"></p>         
                                        <div class="title borderUP">কাস্টমার : অভি ফার্মেসী</div>
                                        <p class="text-italic">নাজির হাট, সন্দ্বীপ, চট্টগ্রাম</p>
                                        
                                    </div>
                                    <div class="col-md-4  text-center">
                                        <p><img src="http://boooya.aqvatarius.com/assets/images/signature.png" alt="signature"></p>         
                                        <div class="title borderUP">বিক্রয় প্রতিনিধি: মাক্সুদুর রাহমান</div>
                                        <p class="text-italic">মেসার্স আজাদ এন্টারপ্রাইজ</p>
                                        
                                    </div>
                                    <div class="col-md-4 text-right">
                                        <p><img src="http://boooya.aqvatarius.com/assets/images/signature.png" alt="signature"></p>         
                                        <div class="title borderUP">বিল প্রস্তুতকারক: মাক্সুদুর রাহমান</div>
                                        <p class="text-italic">মেসার্স আজাদ এন্টারপ্রাইজ</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
    

<?php include('partials/foot.php'); ?>