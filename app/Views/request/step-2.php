<h2>STEP 2: ICT Service</h2>
<p class="m-b-30">Select the desired ICT Service:</p>
<form id="frm-request-step-two">
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="txtfname">ICT Service <span class="text-danger">*</span></label>
            <select name="requestcode" id="selreqtype" class="form-control" required>
                <option></option>
                <?php foreach ($reqtypes as $reqtypesRow) { ?>
                    <option value="<?=$reqtypesRow['requestcode']?>"><?=$reqtypesRow['name']?></option>
                <?php } ?>
            </select>
        </div>
    </div>    
    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary">Next</button>
    </div>
</form>

<script>
    $("#frm-request-step-two").submit(function (e) {
        reqsummary += "&"+$("#frm-request-step-two").serialize();
        requesttype = $("#selreqtype").val();
        show_step_three();
        e.preventDefault();
    });
</script>