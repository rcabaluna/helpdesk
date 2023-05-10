<div class="row">
    <div class="col-md-12 m-b-10">
        <h5>Request Details</h5>
    </div>
    <div class="col-md-12 m-b-10">
        <span class="font-weight-semibold text-dark">Desired Nickname</span>
        <p><?=$reqdetails['nickname']?></p>
    </div>
    <div class="col-md-12 m-b-10">
        <span class="font-weight-semibold text-dark">Location</span>
        <p><?=date("F d, Y", strtotime($reqdetails['birthdate']))?></p>
    </div>
    <div class="col-md-12">
        <div class="m-t-20">
            <span class="font-weight-semibold text-dark">Uploaded Photo</span>
            <div class="m-t-10">
                <a class="file" href="javascript:void(0)" style="min-width: 200px;">
                    <div class="media align-items-center">
                        <div class="m-r-15 font-size-30">
                            <i class="anticon anticon-file-jpg text-danger"></i>
                        </div>
                        <div>
                            <h6 class="mb-0">File.doc</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>