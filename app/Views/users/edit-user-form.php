<form id="frm-edit-user">
    <div class="form-row">
    <div class="form-group col-md-12">
            <label for="txtemployeeid">Employee ID <span class="text-danger">*</span></label>
            <input type="text" value="<?=$userdetails['employeeid']?>" class="form-control" id="txtemployeeid" name="employeeid" required>
            <input type="text" value="<?=$userdetails['userid']?>" class="form-control" id="txtuserid" name="userid" hidden>

        </div>
        <div class="form-group col-md-3">
            <label for="txtfname">Firstname <span class="text-danger">*</span></label>
            <input type="text" value="<?=$userdetails['firstname']?>" class="form-control" id="txtfname" name="firstname" required>
        </div>
        <div class="form-group col-md-3">
            <label for="txtmname">Middlename <span class="text-danger">*</span></label>
            <input type="text" value="<?=$userdetails['middlename']?>" class="form-control" id="txtmname" name="middlename" >
        </div>
        <div class="form-group col-md-3">
            <label for="txtlname">Lastname <span class="text-danger">*</span></label>
            <input type="text" value="<?=$userdetails['lastname']?>" class="form-control" id="txtlname" name="lastname" required>
        </div>
        <div class="form-group col-md-3">
            <label for="selsuffix">Suffix</label>
            <select name="suffix" id="selsuffix" class="form-control">
                <option></option>
                <option value="Sr">Sr</option>
                <option value="Jr">Jr</option>
                <option value="II">II</option>
                <option value="III">III</option>
            </select>
        <script>
            $("#selsuffix").val('<?=$userdetails['suffix']?>');
        </script>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="txtemail">Email <span class="text-danger">*</span></label>
            <input type="email" value="<?=$userdetails['email']?>" class="form-control" id="txtemail" name="email" required>
        </div>
        <div class="form-group col-md-6">
            <label for="txtmobileno">Mobile No <span class="text-danger">*</span></label>
            <input type="number" value="<?=$userdetails['mobileno']?>" class="form-control" id="txtmobileno" name="mobileno" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="txtposition">Position <small><i>(do not abbreviate)</i></small> <span class="text-danger">*</span></label>
            <input type="text" class="form-control" value="<?=$userdetails['position']?>" id="txtposition" name="position" required>
        </div>
        <div class="form-group col-md-6">
            <label for="seldivision">Division <span class="text-danger">*</span></label>
            <select name="divisioncode" id="seldivision" class="form-control" onchange="select_location()" required>
                <option></option>
                <?php foreach ($division as $divisionRow) { ?>
                    <option value="<?=$divisionRow['divisioncode']?>"><?=$divisionRow['name']?></option>
                <?php } ?>
            </select>
            <script>
                $("#seldivision").val('<?=$userdetails['divisioncode']?>');
            </script>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="sellocation">Location <span class="text-danger">*</span></label>
            <div>
                <select name="locationcode" id="sellocation" class="form-control" required>
                    <option></option>
                    <?php foreach ($location as $locationRow) { ?>
                        <option value="<?=$locationRow['locationcode']?>"><?=$locationRow['name']?></option>
                    <?php } ?>
                </select>
                <script>
                    $("#sellocation").val('<?=$userdetails['locationcode']?>');
                </script>
            </div>
        </div>
        <div class="form-group col-md-6" id="units-container">
        <label for="selunit">Unit <span class="text-danger">*</span></label>
            <div>
                <select name="unitid" id="selunit" class="form-control" required>
                    <option></option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>

<script>

    $(document).ready(function () {
        var divisionid = $("#seldivision").val();

        if (divisionid) {
            get_units(divisionid);
            setTimeout(
            function() {
                $("#selunit").val('<?=$userdetails['unitid']?>');
            }, 100);
        }
    });

    function select_location(){
        var divisionid = $("#seldivision").val();
        $("#selunit").empty();

        if (divisionid != 'TSD') {
            $("#sellocation").attr("disabled", true);
            $("#sellocation").val("RO");
            get_units(divisionid);
        }else{
            $("#sellocation").attr("disabled", false);
            $("#sellocation").val("");
            get_units(divisionid);

        }
    }

    function get_units(divisionid){
        $.post(BASE_URL+"users/getUnits",{
            divisionid : divisionid
        },function(data){
            $("#selunit").html(data);
        });
    }

    $("#frm-edit-user").submit(function (e) {
        $.post(BASE_URL+"users/updateUser",{
            userdata : $("#frm-edit-user").serialize() 
        },function(data){
            if (data == "SUCCESS") {
                $("#edit-user-mdl").modal("hide");
            }
        });
        e.preventDefault();
        
    });
</script>