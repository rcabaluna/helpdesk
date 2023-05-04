<?php
     $db = db_connect();

     $approver = [];
 
     $location = $db->query("SELECT * FROM tbllocation");
     $location = $location->getResultArray();
?>
<div class="form-group col-md-12">
    <hr>
</div>
<div class="form-group col-md-12">
    <label for="txtfname">Item/Property Code or Serial Number <span class="text-danger">*</span></label>
    <input type="text" name="itemcode" id="txtitemcode" class="form-control" required>
</div>
<div class="form-group col-md-12">
    <label for="txtfname">Location <span class="text-danger">*</span></label>
    <select name="locationcode" id="sellocation" class="form-control" required>
        <option></option>
        <?php foreach ($location as $locationRow) { ?>
            <option value="<?=$locationRow['locationcode']?>"><?=$locationRow['name']?></option>
        <?php } ?>
    </select>
</div>
<div class="form-group col-md-12">
    <label for="txtfname">Description of the Problem (Please include Error message/code if applicable) <span class="text-danger">*</span></label>
    <div id="editor" class="form-control"></div>
</div>
<div class="form-group col-md-12" id="photoupload-container">
    <label for="txtfname">Upload Photo (.jpg, .png, .gif)</label>
    <input type="file" name="photoupload" id="filephotoupload" class="form-control" accept="image/jpg,image/jpeg,image/png,image/gif">
</div>



<script>
    new Quill('#editor', {
        theme: 'snow'
    });
</script>