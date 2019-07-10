

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
                            <h2 class="pageheader-title">Event</h2>
                            
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
                                <h5 class="card-header">Add New Event</h5>
                                <div class="card-body">
                                   
                                        <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                                                <label for="">Event Name <span class="requiredField">*</span></label>
                                                <input type="text" class="form-control" id="eventName" placeholder="Type Event Name"  required>
                                                
                                            </div>
                                            
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                                                <label for="">Event Description<span class="requiredField">*</span></label>
                                                <textarea name="" rows="2" id="eventDesc" class="form-control" placeholder="Type Event Description" id="" cols="30" rows="10"></textarea>
                                                
                                            </div>


                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                                                <label for="">Event Category<span class="requiredField">*</span></label>
                                                <select class="form-control" id="eventCategoryDropdown">
                                                <option value="">Select Event Category</option>
                                                
                                                </select>                                                
                                            </div>

                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                                            <label for="">Event Location <span class="requiredField">*</span></label>
                                                <input type="text" class="form-control" id="eventLocation" placeholder="Type Event Location"  >
                                                
                                                
                                                
                                            </div>



                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 mb-3">
                                            <label for="">Longitude</label>
                                                <input type="text" class="form-control" id="eventLongitude" placeholder="Type Event Longitude"  >
                                                
                                                
                                            </div>


                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 mb-3">
                                            <label for="">Latitude</label>
                                                <input type="text" class="form-control" id="eventLatitude" placeholder="Type Event Latitude" >
                                            </div>




                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                                                <label for="">Event Fees<span class="requiredField">*</span></label>
                                                <input type="number" class="form-control" id="eventFees" placeholder="Type Event Fees"  required>
                                                
                                            </div>

                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                                            <label for="" style="padding-top: 15px;">Event Ticket </label>
                                            <button class="btn btn-primary" style="margin-bottom:5px; float:right" onclick="eventTicketAddFunction()">Add More</button>
                                                <input type="text" class="form-control mb-2" id="eventTicket0" placeholder="Type Event Ticket "  >
                                                <span id="eventTicketSpan"></span>
                                               
                                                                                               
                                            </div>


                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                                            <label for="">Event Date<span class="requiredField">*</span></label>
                                            <!-- <h5>Event Date</h5> -->
                                            <div class="form-group">
                                                <div class="input-group date" id="eventDate" data-target-input="nearest">
                                                    <input type="text" id="eventDateInput" class="form-control datetimepicker-input" data-target="#eventDate" />
                                                    <div class="input-group-append" data-target="#eventDate" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>


                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 mb-3">
                                                <label for="">Event Start Time<span class="requiredField">*</span></label>
                                                <div class="form-group">
                                                    <div class="input-group date" id="eventStartTime" data-target-input="nearest">
                                                        <input type="text" id="eventStartTimeInput" class="form-control datetimepicker-input" data-target="#eventStartTime" />
                                                        <div class="input-group-append" data-target="#eventStartTime" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                                                        </div>
                                                    </div>
                                                </div>                                                
                                            </div>


                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 mb-3">
                                                <label for="">Event End Time<span class="requiredField">*</span></label>
                                                <div class="form-group">
                                                    <div class="input-group date" id="eventEndTime" data-target-input="nearest">
                                                        <input type="text" id="eventEndTimeInput" class="form-control datetimepicker-input" data-target="#eventEndTime" />
                                                        <div class="input-group-append" data-target="#eventEndTime" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                                                        </div>
                                                    </div>
                                                </div>                                                
                                            </div>



                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                                                <label for="">Event Website</label>
                                                <input type="text" class="form-control" id="eventWebsite" placeholder="Type Event Website"  required>
                                                
                                            </div>

                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                                                <!-- <input type="file" class="form-control" id="eventFile" value="Upload" style="box-shadow:none"> -->
                                                
                                            



                                            <form id="PicForm" method='post' action='backend/picEvent.php' enctype='multipart/form-data' >
                                                <input type="file" name="file[]"  class="form-control" id="fileName" multiple class="button" style="box-shadow:none">

                                                <input type="text" name="picName" id="PicName" style="display:none">
                                                <input type="text" name="redirect" value="http://localhost/event/event.php" style="display:none">

                                                
                                            <input type='submit' name='submit' id="PicEventSubmit" value='Upload' style="display:none">
                                            </form> 
                                            </div>



                                           
                                        </div><!--row-->
                                  
                                        <div class="form-group row text-right">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <button type="button" onclick="addEvent()" class="btn btn-space btn-primary">Submit</button>
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
    window.onload = onLoadFunction('eventPage');
        

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