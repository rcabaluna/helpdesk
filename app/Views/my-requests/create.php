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
                    <div class="form-group col-md-6">
                        <label>Category <span class="text-danger">*</span></label>
                        <select id="selreqcategory" class="form-control" onchange="show_request_types()" required>
                            <option></option>
                            <?php foreach ($reqcategory as $reqcategoryRow) { ?>
                                <option value="<?=$reqcategoryRow['name']?>"><?=$reqcategoryRow['name']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Type <span class="text-danger">*</span></label>
                        <select id="selreqtype" onchange="get_form()" class="form-control" required>
                            
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

    function show_request_types(){
        var selreqcategory = $("#selreqcategory").val();

        if (!selreqcategory) {
            $("#req-frm-details-container").empty();
            $("#selreqtype").empty();
        }else{
            $("#req-frm-details-container").empty();

            $.post(BASE_URL + "myrequests/generateRequestType", {
                selreqcategory: selreqcategory
            }, function(data) {
                $("#selreqtype").html(data);
            })
        }
    }

    function get_form(){
        $("#req-frm-details-container").empty();

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