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
            <div class="row m-b-30">
                <div class="col-lg-8">
                    <div class="d-md-flex">
                        <div class="m-b-10 m-r-15">
                            <select class="custom-select" style="min-width: 180px;">
                                <option value="all" selected>Category</option>
                                <?php foreach ($reqcategory as $reqcategoryRow) { ?>
                                    <option value="<?=$reqcategoryRow['name']?>"><?=$reqcategoryRow['name']?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="m-b-10">
                            <select class="custom-select" style="min-width: 180px;">
                                <option selected>Status</option>
                                <option value="all">All</option>
                                <option value="inStock">In Stock </option>
                                <option value="outOfStock">Out of Stock</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-right">
                    <a href="<?=base_url("my-requests/create"); ?>">
                        <button class="btn btn-primary">
                            <i class="anticon anticon-plus-circle m-r-5"></i>
                            <span>Create Request</span>
                        </button>
                    </a>
                </div>
            </div>
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
                        <?php foreach ($myrequests as $myrequestsRow) { ?>
                            <tr>
                                <td>
                                    #31
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <h6 class="m-b-0 m-l-10">Gray Sofa</h6>
                                    </div>
                                </td>
                                <td>Home Decoration</td>
                                <td>$912.00</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="badge badge-success badge-dot m-r-10"></div>
                                        <div>In Stock</div>
                                    </div>
                                </td>
                                <td><?=date('F d, Y H:i:s',strtotime($myrequestsRow['date_created']))?></td>
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
<!-- Content Wrapper END -->
                <?= $this->endSection() ?>