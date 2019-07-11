

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
                        <h2 class="pageheader-title">Manage User</h2>
                        
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader -->
            <!-- ============================================================== -->
         

            <span id="userPageBody" style="width:100%;"></span>
                            <!-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">User Name</h3>
                                        <p class="card-text">
                                            <b>Phone: </b> Category Name<br>
                                            <b>Email: </b> Date here <br>
                                            <b>username: </b> Days Remaining <br>

                                        </p>
                                        <button class="btn btn-success" onclick="approveUser()" >Approve</button>
                                        <button class="btn btn-danger" onclick="rejectUser()" >Reject</button>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Card titlae</h3>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div> -->
            
                 <!-- ============================================================== -->
                    <!-- hoverable table -->
                    <!-- ============================================================== -->
                

                    <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                            <h5 class="card-header">Manage User</h5>
                            <div class="card-body">
                    <table id="userWholeTable" class="display table table-hover table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Approved</th>
                                                                     
                    </tr>
                </thead>
                <tbody id="userTableBody"></tbody>
                <tfoot>
                <tr>
                    <th>ID</th>
                        <th>Full Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Approved</th>
                        
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

        <?php include_once("modalUser.php") ?>
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

// $(document).ready(function() {
//   
// });
// $(window).on('load', function(){
// $(window).load(function() {
        // alert("Ready");
// Setup - add a text input to each footer cell
dataTableUser();
function dataTableUser(){
console.log("Datatable",document.getElementById("userTableBody").innerHTML.length);
console.log("Datatable HTMl",document.getElementById("userTableBody").innerHTML);
if(document.getElementById("userTableBody").innerHTML.length>0){


$('#userWholeTable thead tr').clone(true).appendTo( '#userWholeTable thead' );
$('#userWholeTable thead tr:eq(1) th').each( function (i) {
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


var table = $('#userWholeTable').DataTable( {
    orderCellsTop: true,
    fixedHeader: true
} );
}
else{
setTimeout(() => {
    dataTableUser();
}, 300);
}
// } );
}
window.onload = onLoadFunction('manageUserPage');     
             </script>






<script src="assets/vendor/datepicker/moment.js"></script>
<script src="assets/vendor/datepicker/tempusdominus-bootstrap-4.js"></script>
<script src="assets/vendor/datepicker/datepicker.js"></script>
</body>

</html>