<div id="invoice" class="p-h-30">
    <div class="row lh-2">
        <div class="col-sm-6">
            <div>
                <div class="text-dark text-uppercase d-inline-block">
                    <span class="font-weight-semibold text-dark">Document Number :</span>
                </div>
                <div class="float-right"><?=$reqsummary['documentnumber']?></div>
            </div>
            <div>
                <div class="text-dark text-uppercase d-inline-block">
                    <span class="font-weight-semibold text-dark">Category :</span>
                </div>
                <div class="float-right"><?=$reqsummary['reqcatname']?></div>
            </div>
            <div>
                <div class="text-dark text-uppercase d-inline-block">
                    <span class="font-weight-semibold text-dark">Type:</span>
                </div>
                <div class="float-right"><?=$reqsummary['reqtypename']?></div>
            </div>
        </div>
        <div class="col-sm-6">
            <div>
                <div class="text-dark text-uppercase d-inline-block">
                    <span class="font-weight-semibold text-dark">Requested By :</span>
                </div>
                <div class="float-right">
                    <?php
                        $name = $reqsummary['firstname']." ";
                        $middlename = $reqsummary['middlename'];
                        $suffix = $reqsummary['suffix'];

                        if ($middlename) {
                            $name .= substr($middlename, 0, 1).". ";
                        }
                        $name.= $reqsummary['lastname'];
                        if ($suffix) {
                            $name .= " ".$suffix;
                        }
                        echo $name;
                    ?>
                </div>
            </div>
            <div>
                <div class="text-dark text-uppercase d-inline-block">
                    <span class="font-weight-semibold text-dark">Date Requested:</span>
                </div>
                <div class="float-right">
                    <?=date("F d, Y",strtotime($reqsummary['date_created']))?>
                    <small><?=date("h:i A",strtotime($reqsummary['date_created']))?></small>
                </div>
            </div>
            <div>
                <div class="text-dark text-uppercase d-inline-block">
                    <span class="font-weight-semibold text-dark">Status :</span>
                </div>
                <div class="float-right font-weight-semibold text-primary"><?=$reqsummary['xstatus']?></div>
            </div>
        </div>
    </div>
    <hr />
    <?=view('requests/reqdetails-forms/'.$reqsummary['requestcode']); ?>

    <!-- Footer -->
    <!-- <div class="m-t-20">
        <div class="row m-t-30 lh-2">
            <div class="col-sm-12">
                <div class="border-bottom p-v-20">
                    <p class="text-opacity">
                        <small>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi architecto maxime, accusantium velit laborum eum nostrum excepturi quas in voluptate assumenda aperiam eos amet. Non delectus enim tempore dolorum!
                            Sit.
                        </small>
                    </p>
                </div>
            </div>
        </div> -->
        <div class="row m-v-20 border-top">
            <div class="col-sm-8">
                <img class="img-fluid text-opacity m-t-5" width="100" src="assets/images/logo/logo.png" alt="" />
            </div>
            <div class="col-sm-4">
                <small><span class="font-weight-semibold text-dark">Contact:</span> 0917 847 6513/0945 318 2617</small>
                <br />
                <small>mis@region10.dost.gov.ph</small>
            </div>
        </div>
    </div>
</div>
