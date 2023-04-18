<div class="form-row">
    <div class="form-group col-md-12">
        <label for="txtempaddress">Complete Permanent Address <span class="text-danger">*</span></label>
        <input type="text" name="empaddress" id="txtempaddress" class="form-control" required>
    </div>
    <div class="form-group col-md-6">
        <label for="txtsex">Sex <span class="text-danger">*</span></label>
        <select name="sex" id="txtsex" class="form-control" required>
            <option></option>
            <option value="">Male</option>
            <option value="">Female</option>
        </select>
    </div>
    <div class="form-group col-md-6">
        <label for="txtbirthdate">Birthdate <span class="text-danger">*</span></label>
        <input type="date" name="birthdate" id="txtbirthdate" class="form-control" required>
    </div>
    <div class="form-group col-md-12">
        <label for="txtbloodtype">Blood Type <span class="text-danger">*</span></label>
        <select name="bloodtype" id="txtbloodtype" class="form-control">
            <option></option>
            <option value="">AB+</option>
            <option value="">B+</option>
            <option value="">A+</option>
            <option value="">O+</option>
            <option value="">O-</option>
            <option value="">A-</option>
            <option value="">B-</option>
            <option value="">AB-</option>
        </select>
    </div>
    <div class="form-group col-md-6">
        <label for="txtfname">Office Email</label>
        <input type="email" name="officeemail" id="txtofficeemail" class="form-control" required>
    </div>
    <div class="form-group col-md-6">
        <label for="txtfname">Personal Email <span class="text-danger">*</span></label>
        <input type="email" name="personalemail" id="txtpersonalemail" class="form-control" required>
    </div>
    <hr>
    <div class="form-group col-md-6">
        <label for="txttin">TIN <span class="text-danger">*</span></label>
        <input type="text" name="tin" id="txttin" class="form-control" required>
    </div>
    <div class="form-group col-md-6">
        <label for="txtsssno">SSS No.</label>
        <input type="text" name="sssno" id="txtsssno" class="form-control">
    </div>
    <div class="form-group col-md-6">
        <label for="txtgsisno">GSIS No.</label>
        <input type="text" name="gsisno" id="txtgsisno" class="form-control">
    </div>
    <div class="form-group col-md-6">
        <label for="txthdmfno">HDMF/PAG-IBIG No.</label>
        <input type="text" name="hdmfno" id="txthdmfno" class="form-control">
    </div>
    <div class="form-group col-md-6">
        <label for="txtphicno">PHIC/Philhealth No.</label>
        <input type="text" name="phicno" id="txtphicno" class="form-control">
    </div>
    <div class="form-group col-md-6">
        <label for="filesigphotoupload">Signature (.jpg, .png, .gif) <span class="text-danger">*</span></label>
        <input type="file" name="sigphotoupload" id="filesigphotoupload" class="form-control" accept="image/jpg,image/jpeg,image/png,image/gif" required>
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
    <div class="form-group col-md-12 mt-3">
        <h5>IN CASE OF EMERGENCY Section</h5>
    </div>
    <div class="form-group col-md-6">
        <label for="txtguardianname" >Complete Name <span class="text-danger">*</span></label>
        <input type="text" name="guardianname" id="txtguardianname" class="form-control" required>
    </div>
    <div class="form-group col-md-6">
        <label for="txtguardianmobile" >Mobile Number <span class="text-danger">*</span></label>
        <input type="text" name="guardianmobile" id="txtguardianmobile" class="form-control" required>
    </div>
    <div class="form-group col-md-12">
        <label for="txtguardianaddress" >Complete Address <span class="text-danger">*</span></label>
        <input type="text" name="guardianaddress" id="txtguardianaddress" class="form-control" required>
    </div>

    


</div> 

<script>
    function show_photo_upload_input(x){

        if ($(x).val() == "no") {
            var xinput = `<label for="txtfname">Upload Photo (.jpg, .png, .gif) <span class="text-danger">*</span></label>
                <input type="file" name="photoupload" id="filephotoupload" class="form-control" accept="image/jpg,image/jpeg,image/png,image/gif" required>`;

            $("#photoupload-container").html(xinput);
        }
        else{
            $("#photoupload-container").html('');
        }
    }
</script>