<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="/backend" class="site_title"><i class="fa fa-paw"></i> 
                <span>Gentellela Alela!</span>
            </a>
        </div>
        <div class="clearfix"></div>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li>
                        <a href="/backend">
                            <i class="fa fa-home"></i> <?php echo Lang::get('title_master.menu_home'); ?> 
                        </a>
                    </li>
                    <li>
                        <a><i class="fa fa-table"></i> 
                            <?php echo Lang::get('title_master.menu_provider'); ?>
                            <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu" style="display: none">
                            <li>
                                <a href="{{ route('backend_provider.index') }}"><?php echo Lang::get('title_master.menu_list'); ?></a>
                            </li>
                            <li>
                                <a href="{{ route('backend_provider.regist') }}"><?php echo Lang::get('title_master.menu_regist'); ?></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-edit"></i> 
                            <?php echo Lang::get('title_master.menu_contract'); ?>
                            <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu" style="display: none">
                            <li>
                                <a href="#"><?php echo Lang::get('title_master.menu_list'); ?></a>
                            </li>
                            <li>
                                <a href="#"><?php echo Lang::get('title_master.menu_regist'); ?></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-list"></i> 
                            <?php echo Lang::get('title_master.menu_survey'); ?>
                            <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu" style="display: none">
                            <li>
                                <a href="{{ route('backend_surveys.index') }}"><?php echo Lang::get('title_master.menu_list'); ?></a>
                            </li>
                            <li>
                                <a href="{{ route('backend_surveys.regist') }}"><?php echo Lang::get('title_master.menu_regist'); ?></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-question-circle"></i> 
                            <?php echo Lang::get('title_master.menu_questions'); ?>
                            <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu" style="display: none">
                            <li>
                                <a href="#"><?php echo Lang::get('title_master.menu_list'); ?></a>
                            </li>
                            <li>
                                <a href="#"><?php echo Lang::get('title_master.menu_regist'); ?></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-users"></i> 
                            <?php echo Lang::get('title_master.menu_members'); ?>
                            <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu" style="display: none">
                            <li>
                                <a href="#"><?php echo Lang::get('title_master.menu_list'); ?></a>
                            </li>
                            <li>
                                <a href="#"><?php echo Lang::get('title_master.menu_regist'); ?></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-cog"></i> 
                            <?php echo Lang::get('title_master.menu_settings'); ?>
                            <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu" style="display: none">
                            <li>
                                <a href="#"><?php echo Lang::get('title_master.menu_settings_group'); ?></a>
                            </li>
                            <li>
                                <a href="#"><?php echo Lang::get('title_master.menu_regist'); ?></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-user"></i> 
                            <?php echo Lang::get('title_master.menu_operator'); ?>
                            <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu" style="display: none">
                            <li>
                                <a href="#"><?php echo Lang::get('title_master.menu_settings_group'); ?></a>
                            </li>
                            <li>
                                <a href="#"><?php echo Lang::get('title_master.menu_regist'); ?></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-bar-chart-o"></i> 
                            <?php echo Lang::get('title_master.menu_report'); ?>
                            <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu" style="display: none">
                            <li>
                                <a href="#"><?php echo Lang::get('title_master.menu_report_provider'); ?></a>
                            </li>
                            <li>
                                <a href="#"><?php echo Lang::get('title_master.menu_report_contract'); ?></a>
                            </li>
                            <li>
                                <a href="#"><?php echo Lang::get('title_master.menu_report_survey'); ?></a>
                            </li>
                            <li>
                                <a href="#"><?php echo Lang::get('title_master.menu_action_log'); ?></a>
                            </li>
                        </ul>
                    </li>
                    <hr>
                    <li>
                        <a>
                            <i class="fa fa-desktop"></i> UI Elements 
                            <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu" style="display: none">
                            <li>
                                <a href="general_elements.html">General Elements</a>
                            </li>
                            <li>
                                <a href="media_gallery.html">Media Gallery</a>
                            </li>
                            <li>
                                <a href="typography.html">Typography</a>
                            </li>
                            <li>
                                <a href="icons.html">Icons</a>
                            </li>
                            <li><a href="glyphicons.html">Glyphicons</a>
                            </li>
                            <li><a href="widgets.html">Widgets</a>
                            </li>
                            <li><a href="invoice.html">Invoice</a>
                            </li>
                            <li><a href="inbox.html">Inbox</a>
                            </li>
                            <li><a href="calendar.html">Calendar</a>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="tables.html">Tables</a>
                            </li>
                            <li><a href="tables_dynamic.html">Table Dynamic</a>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="chartjs.html">Chart JS</a>
                            </li>
                            <li><a href="chartjs2.html">Chart JS2</a>
                            </li>
                            <li><a href="morisjs.html">Moris JS</a>
                            </li>
                            <li><a href="echarts.html">ECharts </a>
                            </li>
                            <li><a href="other_charts.html">Other Charts </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="e_commerce.html">E-commerce</a>
                            </li>
                            <li><a href="projects.html">Projects</a>
                            </li>
                            <li><a href="project_detail.html">Project Detail</a>
                            </li>
                            <li><a href="contacts.html">Contacts</a>
                            </li>
                            <li><a href="profile.html">Profile</a>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="page_404.html">404 Error</a>
                            </li>
                            <li><a href="page_500.html">500 Error</a>
                            </li>
                            <li><a href="plain_page.html">Plain Page</a>
                            </li>
                            <li><a href="login.html">Login Page</a>
                            </li>
                            <li><a href="pricing_tables.html">Pricing Tables</a>
                            </li>

                        </ul>
                    </li>
                    <li><a><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a>
                    </li>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>