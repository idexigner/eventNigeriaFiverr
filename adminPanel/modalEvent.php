<div class="modal" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="smallmodalLabel">Event Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               


            <div class="row">
                        <!-- ============================================================== -->
                        <!-- valifation types -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                        <!-- <div class="row">
                        <span id="addToCalenderButton" class="offset-lg-9"></span>
                        </div> -->

                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Event Id: </label>
                                            <div class="col-12 col-sm-10 col-lg-8">
                                            <input type="text" required="" id="eventId" placeholder="Type Event Name" class="form-control" disabled>

                                                <!-- <span id="supplierId"></span> -->
                                            </div>
                                        </div>

                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">User Name: </label>
                            <div class="col-12 col-sm-10 col-lg-8">
                            <input type="text" id="userNameId" class="form-control" disabled>

                                <!-- <span id="supplierId"></span> -->
                            </div>
                        </div>




                                        <div class="row ">
                                            <div id="imgModalEvent"></div>

                                            
                                        </div>



                                   
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Event Name</label>
                                            <div class="col-12 col-sm-10 col-lg-8">
                                                <input type="text" required="" id="sEventName" placeholder="Type Event Name" class="form-control">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Event Description</label>
                                            <div class="col-12 col-sm-10 col-lg-8">
                                            <textarea name="" rows="2" id="seventDesc" class="form-control" placeholder="Type Event Description" id="" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Event Category</label>
                                            <div class="col-12 col-sm-10 col-lg-8">
                                            <select class="form-control" id="seventCategoryDropdown">
                                                <option value="">Select Event Category</option>
                                                
                                                </select>
                                                
                                        </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Event Location</label>
                                            <div class="col-12 col-sm-10 col-lg-8">
                                                <input type="text" required="" id="sEventLocation" placeholder="Type Event Location" class="form-control">
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Longitude</label>
                                            <div class="col-12 col-sm-10 col-lg-8">
                                                <input type="text" required="" id="slongitude" placeholder="Type Map Lin" class="form-control">
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Latitude</label>
                                            <div class="col-12 col-sm-10 col-lg-8">
                                                <input type="text" required="" id="slatitude" placeholder="Type Map Lin" class="form-control">
                                            </div>

                                        </div>



                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Event Fees</label>
                                            <div class="col-12 col-sm-10 col-lg-8">
                                                <input type="number" required="" id="sEventFees" placeholder="Type Event Fees" class="form-control">
                                            </div>

                                        </div>
                                        <div class=" row" >
                                            <div class=" offset-lg-9">
                                        <button class="btn btn-primary " onclick="eventModalTicketAddFunction()">Add More</button>
                                        </div>
                                            
                                            
                                        </div>


                                        <div class="form-group row">
                                        <!-- <button class="btn btn-primary" style="margin-bottom:5px; float:right" onclick="eventModalTicketAddFunction()">Add More</button> -->

                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Event Tickets</label>
                                            <div class="col-12 col-sm-10 col-lg-8">
                                                <input type="text"  id="sEventTicket0"  class="form-control mb-2">
                                                <span id="eventModalTicketSpan"></span>
                                            </div>

                                        </div>




                                        <div class="form-group row">

                                        <label for="" class="col-12 col-sm-3 col-form-label text-sm-right">Event Date</label>
                                            <!-- <h5>Event Date</h5> -->
                                            <div  class="col-12 col-sm-10 col-lg-8">
                                                <div class="input-group date" id="eventDate" data-target-input="nearest">
                                                    <input type="text" id="seventDateInput" class="form-control datetimepicker-input" data-target="#eventDate" />
                                                    <div class="input-group-append" data-target="#eventDate" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="form-group row">
                                        <label for="" class="col-12 col-sm-3 col-form-label text-sm-right">Event Start Time</label>
                                                <div class="col-12 col-sm-10 col-lg-8">
                                                    <div class="input-group date" id="eventStartTime" data-target-input="nearest">
                                                        <input type="text" id="seventStartTimeInput" class="form-control datetimepicker-input" data-target="#eventStartTime" />
                                                        <div class="input-group-append" data-target="#eventStartTime" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                                                        </div>
                                                    </div>
                                                </div> 

                                        </div>

                                        <div class="form-group row">
                                        <label for="" class="col-12 col-sm-3 col-form-label text-sm-right">Event End Time</label>
                                                <div class="col-12 col-sm-10 col-lg-8">
                                                    <div class="input-group date" id="eventEndTime" data-target-input="nearest">
                                                        <input type="text" id="seventEndTimeInput" class="form-control datetimepicker-input" data-target="#eventEndTime" />
                                                        <div class="input-group-append" data-target="#eventEndTime" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                                                        </div>
                                                    </div>
                                                </div>    

                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Event Website</label>
                                            <div class="col-12 col-sm-10 col-lg-8">
                                                <input type="text" required="" id="sEventWebsite" placeholder="Type Event Website" class="form-control">
                                            </div>

                                        </div>


                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                                            <form id="sPicForm" method='post' action='backend/picEvent.php' enctype='multipart/form-data' >
                                                <input type="file" name="file[]"  class="form-control" id="sfileName" multiple class="button" style="box-shadow:none">

                                                <input type="text" name="picName" id="sPicName" style="display:none">
                                                <input type="text" name="picLength" id="sPicLength" style="display:none">
                                                <input type="text" name="redirect" value="http://localhost/event/eventList.php" style="display:none">
                                                
                                            <input type='submit' name='submit' id="sPicEventSubmit" value='Upload' style="display:none">
                                            </form> 
                                            </div>

                                        <div class="form-group row" id="adminApproveDivEvent">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Approved</label>
                                            <div class="col-12 col-sm-10 col-lg-8">
                                            <select class="form-control" id="sapprove">
                                                <option value="">Select Approve Status</option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                                <option value="reject">Reject</option>
                                                </select>                                                
                                        </div>
                                        </div>



                                       














                                  
                                        <div class="form-group row text-right">
    <div class="col col-sm-2 col-lg-3 ">
                                        <button class="btn btn-space btn-danger" onclick="eventDelete()">Delete</button>
    </div>

                                            <div class="col col-sm-10 col-lg-8 offset-sm-1 offset-lg-0">
                                                <button type="button" onclick="eventUpdate()" class="btn btn-space btn-success">Update</button>
                                               
                                            </div>
                                        </div>
                              
                        </div>
                        <!-- ============================================================== -->
                        <!-- end valifation types -->
                        <!-- ============================================================== -->
                    </div>

            </div><!--Modal Body-->
        </div>
    </div>

</div>