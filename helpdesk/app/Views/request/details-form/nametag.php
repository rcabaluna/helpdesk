<div class="form-row">
    <div class="form-group col-md-6">
        <label for="txtfname">Desired Nickname</label>
        <input type="text" name="nickname" id="txtnickname" class="form-control" required>
    </div>
    <div class="form-group col-md-6">
        <label for="txtfname">Birthdate</label>
        <input type="date" name="birthdate" id="dtebirthdate" class="form-control" required>
    </div>
    <div class="form-group col-md-12">
        <label for="txtfname">If you have an existing picture with the MIS unit, would you want to use it?</label>
        <div class="radio">
            <input id="rdoyes" name="photochoice" value="yes" type="radio" checked onchange="show_photo_upload_input(this)">
            <label for="rdoyes">Yes</label>
        </div>
        <div class="radio">
            <input id="rdono" name="photochoice" value="no" type="radio" onchange="show_photo_upload_input(this)">
            <label for="rdono">No</label>
        </div>
    </div>
    <div class="form-group col-md-12" id="photoupload-container"></div>
</div> 

<script>
    function show_photo_upload_input(x){

        if ($(x).val() == "no") {
            var xinput = `<label for="txtfname">Upload Photo (.jpg, .png, .gif)</label>
                <input type="file" name="photoupload" id="filephotoupload" class="form-control" accept="image/jpg,image/jpeg,image/png,image/gif" required>`;

            $("#photoupload-container").html(xinput);
        }
        else{
            $("#photoupload-container").html('');
        }
    }
</script>