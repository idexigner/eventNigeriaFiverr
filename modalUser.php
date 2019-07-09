<div class="modal" id="userModal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
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

                        <div class="row">
                        <span id="addToCalenderButton" class="offset-lg-9"></span>
                        </div>

                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">User Id: </label>
                                            <div class="col-12 col-sm-10 col-lg-8">
                                            <input type="text" required="" id="userId" class="form-control" disabled>

                                                <!-- <span id="supplierId"></span> -->
                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Full Name</label>
                                            <div class="col-12 col-sm-10 col-lg-8">
                                                <input type="text" required="" id="uname" placeholder="Type Full Name" class="form-control">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Phone</label>
                                            <div class="col-12 col-sm-10 col-lg-8">
                                            <input type="text"  id="uphone" placeholder="Type Phone" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Email</label>
                                            <div class="col-12 col-sm-10 col-lg-8">
                                            <input type="text"  id="uemail" placeholder="Type Emial" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Username</label>
                                            <div class="col-12 col-sm-10 col-lg-8">
                                            <input type="text"  id="uuser" placeholder="Type Username" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Role</label>
                                            <div class="col-12 col-sm-10 col-lg-8">
                                            <input type="text"  id="urole" placeholder="Type Role" class="form-control" disabled>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Approved</label>
                                            <div class="col-12 col-sm-10 col-lg-8">
                                            <select class="form-control" id="uapprove">
                                                <option value="">Select Approve Status</option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                                <option value="reject">Reject</option>
                                                </select>                                                
                                        </div>
                                        </div>


                                       

                                  
                                        <div class="form-group row text-right">
    <div class="col col-sm-2 col-lg-3 ">
                                        <button class="btn btn-space btn-danger" onclick="userDelete()">Delete</button>
    </div>

                                            <div class="col col-sm-10 col-lg-8 offset-sm-1 offset-lg-0">
                                                <button type="button" onclick="userUpdate()" class="btn btn-space btn-success">Update</button>
                                               
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