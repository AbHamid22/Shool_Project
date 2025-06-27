<!-- Add before </body> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Optional Bootstrap JS if you're using Bootstrap -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="bg-info">
            <a href="home.php" class="logo">
                <img src="<?=asset();?>/img/kaiadmin/download.png"alt="navbar brand"
				class="navbar-brand rounded-circle rounded-logo" height="65" />

            </a>
            <!-- <div class="logo-header" data-background-color="bg-info"> -->
            <a style="color: aliceblue; font-weight: bolder;" href="home.php" class="logo">
                <h3 style="font-weight: bolder; padding:15px;
                display:flex; justify-content:center;align-items:center;">School Admin</h3>
            </a>
            <!-- </div> -->
            <!-- <a style="color: azure;gap: 2px;">School Management</a> -->

            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
		<ul class="nav nav-secondary">
			 <?php menus();?>
		</ul>
        </div>
    </div>
</div>