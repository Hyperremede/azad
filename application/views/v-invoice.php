<?php 
$medicineArray = array();
$customers   = $this->db->get('customers')->result_array();

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

    .invoice .invoice-container {
        padding: 6px 0;
    }

    .inputWith{
        width:45px;
    }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    
    <section class="content">
        <div class="container-fluid">
            <div class="box box-success box-solid pull-left" style="width: 100%;">
                <div class="box-header with-border pull-left" style="width: 100%;">
                    <h3 class="box-title">নতুন ইনভয়েস</h3>

                
                </div>
                <div class="box-body pull-left" style="width: 100%;">
                   <div class="col-md-4 pull-left">
                        <div class="form-group">
                            <label for="exampleInputEmail1">কাষ্টমারের নাম</label>
                            <select class="form-control" onchange="addrFill(this.value);">
                                
                                <?php foreach ($customers as $row2){ ?>
                                <option value="<?php echo $row2['id']?>"><?php echo $row2['cus_name']?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">ঠিকানা</label>
                            <span class="form-control" style="height: 38px;" id="address"></span>
                        </div>
                   </div>
                   <div class="col-md-4 pull-left">
                        <div class="form-group">
                            <label for="exampleInputEmail1">প্রতিনিধির নাম</label>
                            <input type="text" class="form-control" id="salesStuff" placeholder="প্রতিনিধির নাম">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">তারিখ</label>
                            <input type="text" class="form-control" id="datepicker" placeholder="তারিখ">
                        </div>
                   </div>
                   <div class="col-md-4 pull-left">
                        <div class="form-group">
                            <label for="exampleInputEmail1">ইনভয়েস নং</label>
                            <span class="form-control" style="height: 38px;">আ-২৫০৭২০১৮০০১</span>
                        </div>
                        <!-- <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div> -->
                   </div>
                   <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center" width="50">কোড</th>
                                    <th class="text-center" width="50">পরিমান</th>
                                    <th class="text-center" width="550">ঔষধের নাম ও বিবরন</th>
                                    <th class="text-center" >দর</th>
                                    <th class="text-center" >টাকা &#2547;</th>
                                    <th class="text-center" width="50"></th>
                                </tr>
                            </thead>
                            <tbody class="text-thin tblProductBody">
                                <tr>
                                    <td width="40" class="text-center"><input type="text" id="med_code"  onkeyup="getMediCineDetail(this.value)" class="inputWith"/></td>
                                    <td width="40" class="text-center"><input type="text" id="med_quantity"  value="1"  class="inputWith med_quantity"/></td>
                                    <td class="text-left" id="medicineDetail0" ></td>
                                    <td class="text-center" id="medicePrice0" >0.00</td>
                                    <td class="text-center" id="mediceTotal0">0.00</td>
                                    <td class="text-center"><i class="fa fa-trash"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-offset-8">
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
                </div>
                <!-- /.box-body -->
                <div class="box-footer pull-left" style="width: 100%;">
                    &nbsp;
                </div>
                <!-- /.box-footer-->
            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>
<!-- /.content-wrapper -->
    

<?php include('partials/foot.php'); ?>


<script>

var numbersB = {
    '০': 0,
    '১': 1,
    '২': 2,
    '৩': 3,
    '৪': 4,
    '৫': 5,
    '৬': 6,
    '৭': 7,
    '৮': 8,
    '৯': 9
};

var replaceNumbersB2E = function (input) {
    var output = [];
    for (var i = 0; i < input.length; ++i) {
        if (numbersB.hasOwnProperty(input[i])) {
            output.push(numbersB[input[i]]);
        } else {
            output.push(input[i]);
        }
    }
    return output.join('');
}

//$scope.testNumber = $scope.replaceNumbersB2E('৯৭৩');



var numbersE = {
    0:'০',
    1:'১',
    2:'২',
    3:'৩',
    4:'৪',
    5:'৫',
    6:'৬',
    7:'৭',
    8:'৮',
    9:'৯'
};

var replaceNumbersE2B = function (input) {
    var output = [];
    for (var i = 0; i < input.length; ++i) {
        if (numbersE.hasOwnProperty(input[i])) {
            output.push(numbersE[input[i]]);
        } else {
            output.push(input[i]);
        }
    }
    return output.join('');
}

        

var medicineArray = '<?php echo json_encode($medicineArray);?>';

$('#medicinename').select2({
    maximumSelectionLength: 1,
    placeholder: "ঔষধের নাম সিলেক্ট করে এন্টার চাপুন"
});

$('#customerName').select2({
    maximumSelectionLength: 1,
    placeholder: "কাষ্টমারের নাম লিখুন"
});

$('#salesManName').select2({
    maximumSelectionLength: 1,
    placeholder: "বিক্রয় প্রতিনিধি সিলেক্ট করুন"
});

var invoiceArray = [];
console.log(replaceNumbersE2B('123'));
var selectandClr = (value) =>{
    var json = $.parseJSON(medicineArray);
    $.each(json,function(ky,vl){
        if(vl.id == value){
            if($.inArray(value, invoiceArray) == -1){
                invoiceArray.push(value);
                var valStr = ""+invoiceArray.length+"";
                var lenArry = replaceNumbersE2B(valStr);
                var design = '<tr>';
                    design += ' <td width="40" class="text-center">'+lenArry+'</td>';
                    design += ' <td class="" >'+vl.pro_name+'</td>';
                    design += ' <td class="text-center">'+vl.amount+'</td>';
                    design += ' <td class="text-center"><input type="number" min="0" max="100" step="1" id="medice'+value+'" value="1" onkeyup="changeTotalVal(this.value,\''+value+'\',\''+vl.sale_price+'\')"/></td>';
                    design += ' <td class="text-center">'+vl.sale_price+'</td>';
                    design += ' <td class="text-center medicineTotalV" id="medicineTotal'+value+'">'+vl.sale_price+'</td>';
                    design += '</tr>';

                    $("#tblProductBody").append(design);

                    var totalValu = 0;

                    $( ".medicineTotalV" ).each(function() {
                        totalValu = parseInt(totalValu) + parseInt(replaceNumbersB2E($( this ).text()));
                    });
                    var totalValinB = ''+totalValu+'';
                    $("#totalValueID").text(replaceNumbersE2B(totalValinB));

            }
        }
        
    });
    $(".select2-selection__choice__remove").click();
    $(".select2").click();
};

var changeTotalVal = function(thisval,medval,saleVal){
    var d = parseInt(replaceNumbersB2E(saleVal))*parseInt(thisval);
    var banglaVa = ''+d+'';

    $("#medicineTotal"+medval).text(replaceNumbersE2B(banglaVa));
    var totalValu = 0;

    $( ".medicineTotalV" ).each(function() {
        totalValu = parseInt(totalValu) + parseInt(replaceNumbersB2E($( this ).text()));
    });
    var totalValinB = ''+totalValu+'';
    $("#totalValueID").text(replaceNumbersE2B(totalValinB));
    console.log(totalValu);
}



//Date picker
$('#datepicker').datepicker({
    autoclose: true
})

function addrFill(value){
    console.log(value);
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url(); ?>home/customerDetail',
        data: {
            id: value
        },
        dataType: 'JSON',
        error: function() {
            $('#info').html('<p>An error has occurred</p>');
        },
        success: function(data) {
            $("#address").text(data.files["0"].cus_address);
        }
        
    });
}

function getMediCineDetail(medicineCode){
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url(); ?>home/getMediCineDetail',
        data: {
            medicineCode: parseInt(replaceNumbersB2E(medicineCode)) 
        },
        dataType: 'JSON',
        error: function() {
            $('#info').html('<p>An error has occurred</p>');
        },
        success: function(data) {
            $("#medicineDetail0").text(data.medicineCode["0"].pro_name +" "+ data.medicineCode["0"].amount);
            $("#medicePrice0").text(data.medicineCode["0"].sale_price);
            $("#mediceTotal0").text(data.medicineCode["0"].sale_price);
        }
        
    });
}

$(document).on('keyup', '.med_quantity', function (e) {
    
    if($("#med_code").val() != ""){
        var keyCode = (e.keyCode ? e.keyCode : e.which);
    
        if (keyCode > 47 && keyCode < 58) {
            
        }else{
            this.value = this.value.replace(/[^0-9\.]/g,'');
        }

        if(keyCode == 13){
            var medcinePrice = $("#med_code").val()
            totalValu = parseInt(replaceNumbersB2E(medicineCode) * parseInt(replaceNumbersB2E(this.value));
        }
    }else{
        alert("Medicine is empty");
    }
    
});


</script>