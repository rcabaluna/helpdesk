<option></option>
<?php foreach ($reqtypes as $reqtypesRow) { ?>
    <option value="<?=$reqtypesRow['requestcode']?>"><?=$reqtypesRow['name']?></option>
<?php } ?>