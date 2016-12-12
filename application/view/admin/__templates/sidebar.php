<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel " id="status_user">
            <div class="pull-left image">
                <img src="<?php echo URL ?>images/user/<?php echo $_SESSION['avatar']?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php  echo $_SESSION['name']?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

            <li>
                <a href="<?php echo URL ?>categories">
                    <i class="fa fa-th"></i> <span>Categories</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo URL ?>users">
                    <i class="fa fa-table"></i> <span>Users</span>
                    <span class="pull-right-container">
<!--              <i class="fa fa-angle-left pull-right"></i>-->
            </span>
                </a>

            </li>
            <li>
                <a href="<?php echo URL ?>posts">
                    <i class="fa fa-calendar"></i> <span>Posts</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
                </a>
            </li>


            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>