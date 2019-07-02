<!doctype html>
<html lang="en">

 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Supplier</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.dataTables.min.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->

    <style>
 thead input {
        width: 100%;
    }
    table thead, table>thead>tr>th{
        background-color: #5969ff;
        color:white !important; 
        
          }

          select {
    color: #71748d;
    -webkit-appearance: none;
    -moz-appearance: none;
    background-position: 98% 52%;
    background-size: 12px;
    background-repeat: no-repeat;
    background-image: url('img/down-arrow.svg');
    padding: 5px 15px;
    border: 1px solid #d2d2e4;
    border-radius: 2px;


}

    
    </style>

 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.dataTables.min.css"/>
 <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->

</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
     
        


        <?php include_once("header.php") ?>
    
        <!-- ============================================================== -->
       

        <?php include_once("menu_owner.php") ?>


        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Supplier</h2>
                            <!-- <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p> -->
                            <!-- <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Form Validations</li>
                                    </ol>
                                </nav>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
             
                    
                    
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- valifation types -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Add New Supplier</h5>
                                <div class="card-body">
                                   
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Supplier Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="supplierName" placeholder="Type Supplier Name" class="form-control">
                                            </div>
                                        </div>
                                  
                                        <div class="form-group row text-right">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <button type="button" onclick="addSupplier()" class="btn btn-space btn-primary">Submit</button>
                                                <button class="btn btn-space btn-secondary">Cancel</button>
                                            </div>
                                        </div>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end valifation types -->
                        <!-- ============================================================== -->
                    </div>


                     <!-- ============================================================== -->
                        <!-- hoverable table -->
                        <!-- ============================================================== -->
                    

                        <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                                <h5 class="card-header">Supplier List</h5>
                                <div class="card-body">
                        <table id="supplierWholeTable" class="display table table-hover table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Supplier Name</th>
                            
                        </tr>
                    </thead>
                    <tbody id="supplierTableBody"></tbody>
                    <tfoot>
                    <tr>
                            <th>ID</th>
                            <th>Supplier Name</th>
                            
                        </tr>
                    </tfoot>
                </table>
</div>
</div>
</div>
                        </div>

                        
                        <!-- ============================================================== -->
                        <!-- end hoverable table -->
                        <!-- ============================================================== -->






           
            </div>

            <?php include_once("modalSupplier.php") ?>
            <!-- ============================================================== -->
            <?php include_once("footer.php")?>
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->


    <!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script> -->


    <!-- Optional JavaScript -->

    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/vendor/parsley/parsley.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/tableLoad.js"></script>
    <script>
    $('#form').parsley();


    </script>
    
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    <script>
// $(window).load(function() {
//     alert("onload");
// });

// $(document).ready(function() {
//   
// });
// $(window).on('load', function(){
// $(window).load(function() {
            // alert("Ready");
    // Setup - add a text input to each footer cell
    dataTableSupplier();
    function dataTableSupplier(){
console.log("Datatable",document.getElementById("supplierTableBody").innerHTML.length);
console.log("Datatable HTMl",document.getElementById("supplierTableBody").innerHTML);
    if(document.getElementById("supplierTableBody").innerHTML.length>0){

    
    $('#supplierWholeTable thead tr').clone(true).appendTo( '#supplierWholeTable thead' );
    $('#supplierWholeTable thead tr:eq(1) th').each( function (i) {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
 
        $( 'input', this ).on( 'keyup change', function () {
            if ( table.column(i).search() !== this.value ) {
                table
                    .column(i)
                    .search( this.value )
                    .draw();
            }
        } );
    } );

 
    var table = $('#supplierWholeTable').DataTable( {
        orderCellsTop: true,
        fixedHeader: true
    } );
}
else{
    setTimeout(() => {
        dataTableSupplier();
    }, 300);
}
// } );
}
                 
                 </script>




    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>
</body>
 
</html>