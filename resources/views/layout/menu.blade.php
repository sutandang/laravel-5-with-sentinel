        <!-- BEGIN - nav-container -->
        <div class="nav-container">

            <!-- BEGIN - scrollbar-padder -->
            <div class="scrollbar-padder">

                <!-- BEGIN - sidebar-header -->
                <div class="sidebar-header">
                    <a href="javascript:void(0)" class="pull-left visible-xs" data-toggle-class="phone-menu-visible" data-target=".content-wrapper"><i class="fa fa-bars fa-fw"></i></a>
                    <a data-ui-sref="app.dashboard.dashboard-1" class="ls-sm">
                        <!-- <i class="fa fa-th"></i>  -->
                        <span>P</span><span>ixels</span>
                    </a>
                </div>
                <!-- END - sidebar-header -->

                <!-- BEGIN - sidebar-avatar -->
                <div class="sidebar-avatar text-center">
                    <img src="images/avatar1.png" alt="" class="img-circle m-b-md" width="100" height="100">
                    <h5 class="text-uppercase ls-xs m-b-md">Andrew Curtis</h5>

                    <div class="sidebar-income-chart">
                        <!-- <div class="income-sparkline"> -->

                            <span class="sidebar-income-sparkline"></span>
                            
                        <!-- </div> -->
                        <h4 class="fw-thkr text-center">$ 67,467, 434</h4>
                        <p class="fw-lght">Your total income for last year in all the sales</p>
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-6">
                                <p class="text-left">
                                    <a href="javascript:void(0)" data-tooltip="Lock" class="sba-lock">
                                        <i class="fa fa-lock"></i>
                                    </a>
                                </p>
                            </div>
                            <div class="col-xs-6">
                                <p class="text-right">
                                    <a href="javascript:void(0)" data-tooltip="Settings" class="sba-settings">
                                        <i class="fa fa-cog"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <ul id="navigation-items" class="nav">
                    <li>
                        <a href="{!! URL::route('admin.dashboard') !!}" class="waves-effect">
                            <i class="icon-home"></i><span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0)" class="waves-effect">
                            <i class="fa fa-cart-plus"></i><span>Product</span>
                        </a>
                        
                        <ul class="sub-menu">

                            <li>
                                <a href="{!! URL::route('admin.product.all') !!}" class="waves-effect">
                                    <i class="fa icon-list"></i><span>All Product</span>
                                </a>
                            </li>

                            <li>
                                <a href="{!! URL::route('admin.product.create') !!}" class="waves-effect">
                                    <i class="fa fa-code"></i><span>Add New</span>
                                </a>
                            </li>
                             <li>
                                <a href="{!! URL::route('admin.category.all') !!}" class="waves-effect">
                                    <i class="fa icon-list"></i><span>Categories</span>
                                </a>
                            </li>
                            <li>
                                <a href="{!! URL::route('admin.modifier.all') !!}" class="waves-effect">
                                    <i class="fa icon-list"></i><span>Modifier</span>
                                </a>
                            </li>
                        </ul>
                        
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="waves-effect">
                            <i class="fa fa-user"></i><span>Users</span>
                        </a>
                        
                        <ul class="sub-menu">

                            <li>
                                <a href="{!! URL::route('admin.user.all') !!}" class="waves-effect">
                                    <i class="fa icon-list"></i><span>All Users</span>
                                </a>
                            </li>

                            <li>
                                <a href="{!! URL::route('admin.user.create') !!}" class="waves-effect">
                                    <i class="fa fa-code"></i><span>Add New</span>
                                </a>
                            </li>

                            <li>
                                <a href="{!! URL::route('admin.groups.index') !!}" class="waves-effect">
                                    <i class="fa fa-code"></i><span>Groups</span>
                                </a>
                            </li>
                        </ul>
                        
                    </li>

                    <li>
                        <a href="{!! URL::to('/logout') !!}" class="waves-effect">
                            <i class="fa fa-power-off"></i><span>Logout</span>
                        </a>
                    </li>


                </ul>

                
            </div>

        </div>
