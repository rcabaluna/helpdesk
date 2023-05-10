<div class="row">
    <div class="col-md-12 m-b-10">
        <h5>Request Details</h5>
    </div>
    <div class="col-md-6">
        <span class="font-weight-semibold text-dark">Date of the event</span>
        <p><?=date("F d, Y",strtotime($reqdetails['xdate']))?></p>
    </div>
    <div class="col-md-6">
        <span class="font-weight-semibold text-dark">Time of the event</span>
        <p><?=date("h:i A",strtotime($reqdetails['xtime']))?></p>
    </div>
    <div class="col-md-12">
        <div class="m-t-20">
            <span class="font-weight-semibold text-dark">Title/Description of the Event</span>
            <div class="m-t-10">
                <?=$reqdetails['description']?>
            </div>
        </div>
    </div>
</div>