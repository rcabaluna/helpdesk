<label for="selunit">Unit</label>
<div>
    <select name="unitid" id="selunit" class="form-control" required>
        <option></option>
        <?php foreach ($unit as $unitRow) { ?>
            <option value="<?=$unitRow['unitid']?>"><?=$unitRow['name']?></option>
        <?php } ?>
    </select>
</div>