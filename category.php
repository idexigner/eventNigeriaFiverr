

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
                            <h2 class="pageheader-title">Category</h2>
                            
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
                                <h5 class="card-header">Add New Category</h5>
                                <div class="card-body">
                                   
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Category Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" id="categoryName" placeholder="Type Category Name" class="form-control">
                                            </div>
                                        </div>
                                  
                                        <div class="form-group row text-right">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <button type="button" onclick="addCategory()" class="btn btn-space btn-primary">Submit</button>
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
                                <h5 class="card-header">Category List</h5>
                                <div class="card-body">
                        <table id="categoryWholeTable" class="display table table-hover table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category Name</th>
                            
                        </tr>
                    </thead>
                    <tbody id="categoryTableBody"></tbody>
                    <tfoot>
                    <tr>
                            <th>ID</th>
                            <th>Category Name</th>
                            
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

            <?php include_once("modalCategory.php") ?>
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
    
    <script src="js/tableLoad.js"></script>
    <script src="js/custom.js"></script>
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
    dataTableCategory();
    function dataTableCategory(){
// console.log("Datatable",document.getElementById("categoryTableBody").innerHTML.length);
// console.log("Datatable HTMl",document.getElementById("categoryTableBody").innerHTML);
    if(document.getElementById("categoryTableBody").innerHTML.length>0){

    
    $('#categoryWholeTable thead tr').clone(true).appendTo( '#categoryWholeTable thead' );
    $('#categoryWholeTable thead tr:eq(1) th').each( function (i) {
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

 
    var table = $('#categoryWholeTable').DataTable( {
        orderCellsTop: true,
        fixedHeader: true
    } );
}
else{
    setTimeout(() => {
        dataTableCategory();
    }, 300);
}
// } );
}
                 
                 </script>




    <script>
        window.onload = onLoadFunction('categoryPage');

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