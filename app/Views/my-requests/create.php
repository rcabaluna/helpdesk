<?= $this->extend('main') ?>
<?= $this->section('content') ?>
<!-- Content Wrapper START -->
<div class="main-content">
    <div class="page-header">
        <h2 class="header-title">Create Request</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a class="breadcrumb-item" href="#">My Requests</a>
                <span class="breadcrumb-item active">Create Request</span>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <form id="frm-request" method="POST" action="<?=base_url('myrequests/saveRequest'); ?>">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="txtfname">ICT Service <span class="text-danger">*</span></label>
                        <select name="requestcode" id="selreqtype" onchange="get_form()" class="form-control" required>
                            <option></option>
                            <?php foreach ($reqtypes as $reqtypesRow) { ?>
                                <option value="<?=$reqtypesRow['requestcode']?>"><?=$reqtypesRow['name']?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-row" id="req-frm-details-container"></div>    
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Content Wrapper END -->

<script>
    $(document).ready(function () {
        $("#frm-request").on("submit", function () {
            var hvalue = $(".ql-editor").html();
            $(this).append("<textarea name='description' style='display:none'>"+hvalue+"</textarea>");
        });
    });

    function get_form(){
        var requestcode = $("#selreqtype").val();

        if (!requestcode) {
            $("#req-frm-details-container").empty();
        }else{
            $.post(BASE_URL + "myrequests/getForm", {
                requestcode: requestcode
            }, function(data) {
                $("#req-frm-details-container").html(data);
            })
        }
    }

</script>

<?= $this->endSection() ?>