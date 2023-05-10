<?= $this->extend('main') ?>
<?= $this->section('content') ?>
<!-- Content Wrapper START -->
<div class="main-content">
    <div class="page-header">
        <h2 class="header-title">List of Users</h2>
    </div>
    <div class="card">
        <div class="card-body">
            <?php if (session()->get('okstatus')) { ?>
                <div class="alert alert-success" id="msgstatus">
                    <div class="d-flex align-items-center justify-content-start">
                        <span class="alert-icon">
                            <i class="anticon anticon-check-o"></i>
                        </span>
                        <span>The user has been updated successfully!</span>
                    </div>
                </div>
            <?php } ?>
            
            <div class="table-responsive">
                <table class="table table-hover e-commerce-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $counter = 0;
                            foreach ($users as $usersRow) {
                        ?>
                            <tr>
                                <td><?=$counter+=1;?></td>
                                <td><?=$usersRow['employeeid']?></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <h6 class="m-b-0 m-l-10">
                                        <?php
                                            $name = '';
                                            $name .= $usersRow['firstname']." ";
                                            $middlename = $usersRow['middlename'];
                                            $suffix = $usersRow['suffix'];

                                            if ($middlename) {
                                                $name .= substr($middlename, 0, 1).". ";
                                            }
                                            $name.= $usersRow['lastname'];
                                            if ($suffix) {
                                                $name .= " ".$suffix;
                                            }
                                            echo $name;
                                            ?>
                                        </h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        
                                        <div>
                                            <?php
                                                if ($usersRow['is_active'] == 1) {
                                                    $xstatus = 'Active';
                                                    $badgestatus = 'success';
                                                }else{
                                                    $xstatus = 'Inactive';
                                                    $badgestatus = 'danger';
                                                }
                                            ?>
                                            <div class="badge badge-<?=$badgestatus?> badge-dot m-r-10"></div>
                                            <?=$xstatus;?>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <button class="btn btn-icon btn-tone btn-hover btn-info btn-sm btn-rounded pull-right" onclick="edit_user(<?=$usersRow['userid']?>)">
                                        <i class="anticon anticon-edit"></i>
                                    </button>
                                    <button class="btn btn-icon btn-hover btn-tone btn-sm btn-danger btn-rounded" disabled>
                                        <i class="anticon anticon-delete"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                <div class="modal fade bd-example-modal-lg" id="edit-user-mdl" data-backdrop="static" and data-keyboard="false">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title h4">Edit User</h5>
                                <button type="button" class="close" data-dismiss="modal">
                                    <i class="anticon anticon-close"></i>
                                </button>
                            </div>
                            <div class="modal-body" id="edit-user-mdl-body">
                               
                            </div>
                        </div>
                    </div>
                </div>
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
    function edit_user(x) {
        $.post(BASE_URL+"users/editUser",{
            userid : x
        },function(data){
            $("#edit-user-mdl-body").html(data);
            $("#edit-user-mdl").modal("show");
        });
    }

</script>
<!-- Content Wrapper END -->
<?= $this->endSection() ?>