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
            <?php if (session()->get('okstatus')) { ?>
                <div class="alert alert-success" id="msgstatus">
                    <div class="d-flex align-items-center justify-content-start">
                        <span class="alert-icon">
                            <i class="anticon anticon-check-o"></i>
                        </span>
                        <span>Your request has been sent successfully! You'll receive an email when your request has been acknowledged.</span>
                    </div>
                </div>
            <?php } ?>
            <div class="table-responsive">
                <table class="table table-hover e-commerce-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Docnumber</th>
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
                            foreach ($myrequests as $myrequestsRow) { ?>
                            <tr>
                                <td><?=$counter+=1;?></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <h6 class="m-b-0 m-l-10"><?=$myrequestsRow['documentnumber'];?></h6>
                                    </div>
                                </td>
                                <td><?=$myrequestsRow['reqcatname'];?></td>
                                <td><?=$myrequestsRow['reqtypename'];?></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="badge badge-primary badge-dot m-r-10"></div>
                                        <div><?=$myrequestsRow['xstatus'];?></div>
                                    </div>
                                </td>
                                <td><?=date('F d, Y',strtotime($myrequestsRow['date_created']))?>
                                    <small><?=date('h:i A',strtotime($myrequestsRow['date_created']))?></small></td>
                                <td class="text-right">
                                    <button class="btn btn-tone btn-info btn-icon btn-hover btn-sm btn-rounded pull-right">
                                        <i class="anticon anticon-eye"></i>
                                    </button>
                                    <button class="btn btn-tone btn-icon btn-primary btn-hover btn-sm btn-rounded pull-right">
                                        <i class="anticon anticon-edit"></i>
                                    </button>
                                    <button class="btn btn-tone btn-danger btn-icon btn-hover btn-sm btn-rounded">
                                        <i class="anticon anticon-delete"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        setTimeout(
            function() {
                $("#msgstatus").fadeOut();
            }, 3000);
    });
</script>
<!-- Content Wrapper END -->
                <?= $this->endSection() ?>