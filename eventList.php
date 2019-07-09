

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
                        <h2 class="pageheader-title">Event List</h2>
                        
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader -->
            <!-- ============================================================== -->
         
            
                 <!-- ============================================================== -->
                    <!-- hoverable table -->
                    <!-- ============================================================== -->
                

                    <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                            <h5 class="card-header">Event List</h5>
                            <div class="card-body">
                    <table id="eventWholeTable" class="display table table-hover table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Location</th>
                        <th>Map</th>
                        <th>Fees</th>
                        <th>Date</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Website</th>
                                              
                    </tr>
                </thead>
                <tbody id="eventTableBody"></tbody>
                <tfoot>
                <tr>
                <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Location</th>
                        <th>Map</th>
                        <th>Fees</th>
                        <th>Date</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Website</th>
                        
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

        <?php include_once("modalEvent.php") ?>
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
dataTableEvent();
function dataTableEvent(){
console.log("Datatable",document.getElementById("eventTableBody").innerHTML.length);
console.log("Datatable HTMl",document.getElementById("eventTableBody").innerHTML);
if(document.getElementById("eventTableBody").innerHTML.length>0){


$('#eventWholeTable thead tr').clone(true).appendTo( '#eventWholeTable thead' );
$('#eventWholeTable thead tr:eq(1) th').each( function (i) {
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


var table = $('#eventWholeTable').DataTable( {
    orderCellsTop: true,
    fixedHeader: true
} );
}
else{
setTimeout(() => {
    dataTableEvent();
}, 300);
}
// } );
}
             
             </script>




<script>
window.onload = onLoadFunction('eventListPage');
    

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

<script src="assets/vendor/datepicker/moment.js"></script>
<script src="assets/vendor/datepicker/tempusdominus-bootstrap-4.js"></script>
<script src="assets/vendor/datepicker/datepicker.js"></script>
</body>

</html>