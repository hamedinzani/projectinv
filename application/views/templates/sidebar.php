<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:../../partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li>
                <a href="" class="nav-link">
                    <div class="profile-image">

                        <div></div>
                    </div>
                    <div class="text-wrapper">

                    </div>
                </a>
            </li>
            <!-- Query Menu-->
            <?=
                $role_id = $this->session->userdata('role_id');
            $queryMenu = "SELECT `user_menu`.`id`, `menu`
                    FROM `user_menu` JOIN `user_access_menu` 
                      ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                  WHERE `user_access_menu`.`role_id` = $role_id
                  ORDER BY `user_access_menu`.`menu_id` ASC
                            ";

            $menu = $this->db->query($queryMenu)->result_array();
            ?>
            <!-- Looping Menu-->
            <?php foreach ($menu as $m) : ?>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui" aria-expanded="false" aria-controls="ui">
                        <i class="menu-icon typcn typcn-coffee"></i>
                        <span class="menu-title"><?= $m['menu']; ?></span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>

                <!--Siapkan SubMenu Sesuai Menu-->
                <?php
                $menuId = $m['id'];
                $querySubMenu = "SELECT *
                    FROM `user_sub_menu` JOIN `user_menu` 
                      ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                  WHERE `user_sub_menu`.`menu_id` = $menuId
                  AND `user_sub_menu`.`is_active` = 1
                            ";
                $SubMenu = $this->db->query($querySubMenu)->result_array();

                ?>
                <?php foreach ($SubMenu as $sm) : ?>
                    <div class="collapse" id="ui">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url($sm['url']); ?>"><?= $sm['title']; ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../../pages/ui-features/dropdowns.html">Dropdowns</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../../pages/ui-features/typography.html">Typography</a>
                            </li>
                        </ul>
                    </div>
                <?php endforeach; ?>
            <?php endforeach; ?>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <i class="menu-icon typcn typcn-coffee"></i>
                    <span class="menu-title">Administrator</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('admin'); ?>">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/ui-features/dropdowns.html">Dropdowns</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/ui-features/typography.html">Typography</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#user" aria-expanded="false" aria-controls="user">
                    <i class="menu-icon typcn typcn-coffee"></i>
                    <span class="menu-title">User</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="user">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('user'); ?>">
                                <span class="menu-title">My Profile</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/ui-features/dropdowns.html">Dropdowns</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/ui-features/typography.html">Typography</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#inventory" aria-expanded="false" aria-controls="inventory">
                    <i class="menu-icon typcn typcn-document-add"></i>
                    <span class="menu-title">Inventory</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="inventory">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/samples/blank-page.html"> Blank Page </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/samples/login.html"> Login </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/samples/register.html"> Register </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/samples/error-404.html"> 404 </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/samples/error-500.html"> 500 </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span class="menu-title">Log Out</span>
                </a>
            </li>


        </ul>

    </nav>