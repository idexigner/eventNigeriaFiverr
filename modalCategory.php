<div class="modal" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="smallmodalLabel">Category Detail</h5>
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

                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Category Id: </label>
                                            <div class="col-12 col-sm-10 col-lg-8">
                                            <input type="text" required="" id="categoryId" placeholder="Type Category Name" class="form-control" disabled>

                                                <!-- <span id="supplierId"></span> -->
                                            </div>
                                        </div>
                                   
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Category Name</label>
                                            <div class="col-12 col-sm-10 col-lg-8">
                                                <input type="text" required="" id="scategoryName" placeholder="Type Category Name" class="form-control">
                                            </div>
                                        </div>
                                  
                                        <div class="form-group row text-right">
    <div class="col col-sm-2 col-lg-3 ">
                                        <button class="btn btn-space btn-danger" onclick="categoryDelete()">Delete</button>
    </div>

                                            <div class="col col-sm-10 col-lg-8 offset-sm-1 offset-lg-0">
                                                <button type="button" onclick="categoryUpdate()" class="btn btn-space btn-success">Update</button>
                                               
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