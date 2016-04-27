<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">                
            <li class="">
                <a class="" href="/backend">
                    <i class="icon_house_alt"></i>
                    <span><?php echo Lang::get('title_master.menu_home'); ?></span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_desktop"></i>
                    <span><?php echo Lang::get('title_master.menu_provider'); ?></span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{ route('backend_provider.index') }}">
                        <?php echo Lang::get('title_master.menu_list'); ?>
                    </a></li>                          
                    <li><a class="" href="#">
                        <?php echo Lang::get('title_master.menu_regist'); ?>
                    </a></li>
                </ul>
            </li>       
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_document_alt"></i>
                    <span><?php echo Lang::get('title_master.menu_contract'); ?></span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="#">
                        <?php echo Lang::get('title_master.menu_list'); ?>
                    </a></li>                          
                    <li><a class="" href="#">
                        <?php echo Lang::get('title_master.menu_regist'); ?>
                    </a></li>
                </ul>
            </li>
            <li>
                <a class="" href="#">
                    <i class="icon_contacts"></i>
                    <span><?php echo Lang::get('title_master.menu_operator'); ?></span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_genius"></i>
                    <span><?php echo Lang::get('title_master.menu_settings'); ?></span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="#">
                        <?php echo Lang::get('title_master.menu_settings_group'); ?>
                    </a></li>                          
                    <li><a class="" href="#">
                        <?php echo Lang::get('title_master.menu_settings_function'); ?>
                    </a></li>
                </ul>
            </li>
            
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_piechart"></i>
                    <span><?php echo Lang::get('title_master.menu_report'); ?></span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="#">
                        <?php echo Lang::get('title_master.menu_report_provider'); ?>
                    </a></li>                          
                    <li><a class="" href="#">
                        <?php echo Lang::get('title_master.menu_report_contract'); ?>
                    </a></li>
                    <li><a class="" href="#">
                        <?php echo Lang::get('title_master.menu_report_survey'); ?>
                    </a></li>
                </ul>
            </li>

            <li class="sub-menu ">
                <a href="javascript:;" class="">
                    <i class="icon_documents_alt"></i>
                    <span><?php echo Lang::get('title_master.menu_pages'); ?></span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">                          
                    <li><a class="" href="#">Profile</a></li>
                    <li><a class="" href="#">Login Page</a></li>
                    <li><a class="" href="#">Blank Page</a></li>
                    <li><a class="" href="#">404 Error</a></li>
                </ul>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>