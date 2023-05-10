<div class="row">
    <div class="col-md-12 m-b-10">
        <h5>Request Details</h5>
    </div>
    <div class="col-md-12 m-b-10">
        <span class="font-weight-semibold text-dark">Office/Unit Email Address</span>
        <p><?=$reqdetails['emailusername']?></p>
    </div>
    <div class="col-md-12 m-b-10">
        <span class="font-weight-semibold text-dark">Mobile number(s)</span>
        <p><?=($reqdetails['mobileno']) ? $reqdetails['mobileno'] : '-'?></p>
    </div>
    <div class="col-md-12 m-b-10">
        <span class="font-weight-semibold text-dark">Landline number(s)</span>
        <p><?=($reqdetails['landlineno']) ? $reqdetails['landlineno'] : '-'?></p>
    </div>
    <div class="col-md-12">
        <span class="font-weight-semibold text-dark">Local code (if applicable)</span>
        <p><?=($reqdetails['localcode']) ? $reqdetails['localcode'] : '-'?></p>
    </div>
</div>