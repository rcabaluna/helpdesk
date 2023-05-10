<div class="row">
    <div class="col-md-12 m-b-10">
        <h5>Request Details</h5>
    </div>
    <div class="col-md-12 m-b-10">
        <span class="font-weight-semibold text-dark">Complete Permanent Address</span>
        <p><?=$reqdetails['empaddress']?></p>
    </div>
    <div class="col-md-6 m-b-10">
        <span class="font-weight-semibold text-dark">Sex</span>
        <p><?=$reqdetails['sex']?></p>
    </div>
    <div class="col-md-6 m-b-10">
        <span class="font-weight-semibold text-dark">Birthdate</span>
        <p><?=date("F d, Y",strtotime($reqdetails['birthdate']))?></p>
    </div>
    <div class="col-md-12 m-b-20">
        <span class="font-weight-semibold text-dark">Blood Type</span>
        <p><?=$reqdetails['bloodtype']?></p>
    </div>
    <div class="col-md-6 m-b-10">
        <span class="font-weight-semibold text-dark">Office Email</span>
        <p><?=($reqdetails['officeemail']) ? $reqdetails['officeemail'] : '-'?></p>
    </div>
    <div class="col-md-6 m-b-10">
        <span class="font-weight-semibold text-dark">Personal Email</span>
        <p><?=$reqdetails['personalemail']?></p>
    </div>
    <div class="col-md-6 m-b-10">
        <span class="font-weight-semibold text-dark">TIN</span>
        <p><?=($reqdetails['tin']) ? $reqdetails['tin'] : '-'?></p>
    </div>
    <div class="col-md-6 m-b-10">
        <span class="font-weight-semibold text-dark">SSS No</span>
        <p><?=($reqdetails['sssno']) ? $reqdetails['sssno'] : '-'?></p>
    </div>
    <div class="col-md-6 m-b-10">
        <span class="font-weight-semibold text-dark">GSIS No</span>
        <p><?=($reqdetails['gsisno']) ? $reqdetails['gsisno'] : '-'?></p>
    </div>
    <div class="col-md-6 m-b-10">
        <span class="font-weight-semibold text-dark">HDMF/PAG-IBIG No</span>
        <p><?=($reqdetails['hdmfno']) ? $reqdetails['hdmfno'] : '-'?></p>
    </div>
    <div class="col-md-6 m-b-30">
        <span class="font-weight-semibold text-dark">PHIC/Philhealth No</span>
        <p><?=($reqdetails['phicno']) ? $reqdetails['hdmfno'] : '-'?></p>
    </div>
    <div class="col-md-12 m-b-10">
        <h5>IN CASE OF EMERGENCY</h5>
    </div>
    <div class="col-md-6 m-b-10">
        <span class="font-weight-semibold text-dark">Complete Name</span>
        <p><?=($reqdetails['guardianname']) ? $reqdetails['guardianname'] : '-'?></p>
    </div>
    <div class="col-md-6 m-b-10">
        <span class="font-weight-semibold text-dark">Mobile No</span>
        <p><?=($reqdetails['guardianmobile']) ? $reqdetails['guardianmobile'] : '-'?></p>
    </div>
    <div class="col-md-12 m-b-10">
        <span class="font-weight-semibold text-dark">Complete Address</span>
        <p><?=($reqdetails['guardianaddress']) ? $reqdetails['guardianaddress'] : '-'?></p>
    </div>
</div>