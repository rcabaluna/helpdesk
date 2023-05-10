<!-- Side Nav START -->

<?php

    $uri = current_url(true);
    $main = $uri->getSegment(3);
    $child = $uri->getSegment(4);
    $xa = $xa1 = $xa2 = $xb = $xb1 = $xb2 = '';

    switch ($main) {
        case 'my-requests':
                $xa = "open";
                if ($child == "create") {
                    $xa1 = "class='active'";
                }
                if ($child == "list") {
                    $xa2 = "class='active'";
                }
            break;
        case 'requests':
        case 'users':
            $xb = "open";
                if ($main == "requests") {
                    $xb1 = "class='active'";
                }
                if ($main == "users") {
                    $xb2 = "class='active'";
                }
        default:
            # code...
            break;
    }
?>

<div class="side-nav">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">
            <li class="nav-item dropdown <?=$xa?>">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-tags"></i>
                    </span>
                    <span class="title">My Requests</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li <?=$xa1?>>
                        <a href="<?=base_url('my-requests/create')?>">Create Request</a>
                    </li>
                    <li <?=$xa2?>>
                        <a href="<?=base_url('my-requests/list')?>">List of My Requests</a>
                    </li>
                </ul>
            </li>
            <?php if (session()->userlevel == 1) { ?>
            <li class="nav-item dropdown <?=$xb?>">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-solution"></i>
                    </span>
                    <span class="title">Modules</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li <?=$xb1?>>
                        <a href="<?=base_url('requests')?>">Requests</a>
                    </li>
                    <li <?=$xb2?>>
                        <a href="<?=base_url('users')?>">Users</a>
                    </li>
                </ul>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>
<!-- Side Nav END -->