

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
                        <h2 class="pageheader-title">Calender</h2>
                        
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader -->
            <!-- ============================================================== -->
         
            
                 <!-- ============================================================== -->
                    <!-- hoverable table -->
                    <!-- ============================================================== -->
                

                    <!-- <div class="row"> -->
                    <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                            <h5 class="card-header">Reminder Calender</h5> -->

                        <span id="calenderPageBody" style="width:100%;"></span>
                            <!-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Event Name</h3>
                                        <p class="card-text">
                                            <b>Category: </b> Category Name<br>
                                            <b>Date: </b> Date here <br>
                                            <b>Days Remaining: </b> Days Remaining <br>

                                        </p>
                                        <button class="btn btn-primary" onclick="" >Remove From Calender</button>
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

                           
                           

                            
                            
<!-- </div>
</div> -->
                    <!-- </div> -->

                    
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
window.onload = onLoadFunction('calenderPage');
    

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