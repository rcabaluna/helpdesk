<?= $this->extend('main') ?>
<?= $this->section('content') ?>
<!-- Content Wrapper START -->
<div class="main-content">
    <div class="page-header">
        <h2 class="header-title">List of My Requests</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a class="breadcrumb-item" href="#">My Requests</a>
                <span class="breadcrumb-item active">List of My Requests</span>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover e-commerce-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Docnumber</th>
                            <th>Requested By</th>
                            <th>Category</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Date Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $counter = 0;
                            foreach ($requests as $requestsRow) { ?>
                        <tr>
                            <td><?=$counter+=1;?></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <h6 class="m-b-0 m-l-10"><?=$requestsRow['documentnumber'];?></h6>
                                </div>
                            </td>
                            <td>
                                <?php
                                    $name = $requestsRow['firstname']." ";
                                    $middlename = $requestsRow['middlename'];
                                    $suffix = $requestsRow['suffix'];

                                    if ($middlename) {
                                        $name .= substr($middlename, 0, 1).". ";
                                    }
                                    $name.= $requestsRow['lastname'];
                                    if ($suffix) {
                                        $name .= " ".$suffix;
                                    }
                                    echo $name;
                                ?>
                            </td>
                            <td><?=$requestsRow['reqcatname'];?></td>
                            <td><?=$requestsRow['reqtypename'];?></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="badge badge-primary badge-dot m-r-10"></div>
                                    <div><?=$requestsRow['xstatus'];?></div>
                                </div>
                            </td>
                            <td>
                                <?=date('F d, Y',strtotime($requestsRow['date_created']))?>
                                <small> <?=date('h:i A',strtotime($requestsRow['date_created']))?> </small>
                            </td>
                            <td class="text-right">
                                <button
                                    class="btn btn-tone btn-info btn-icon btn-hover btn-sm btn-rounded pull-right"
                                    onclick="show_request_details(
									<?=$requestsRow['reqsummaryid'];?>)"
                                >
                                    <i class="anticon anticon-eye"></i>
                                </button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!--  data-backdrop="static" and data-keyboard="false" -->
            <div class="modal fade bd-example-modal-lg" id="request-details-mdl">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title h4">Request Information</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <i class="anticon anticon-close"></i>
                            </button>
                        </div>
                        <div class="modal-body" id="request-details-mdl-body"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function show_request_details(reqsummaryid) {
        $.post(
            BASE_URL + "requests/getRequestDetails",
            {
                reqsummaryid: reqsummaryid,
            },
            function (data) {
                $("#request-details-mdl-body").html(data);
                $("#request-details-mdl").modal("show");
            }
        );
    }
</script>
<!-- Content Wrapper END -->
<?= $this->endSection() ?>
