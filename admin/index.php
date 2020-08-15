<?php include("includes/header-admin.inc.php"); ?>

<div class="wrapper">

  <nav id="sidebar">

    <div class="sidebar-header">
      <h3><a href="index.php"><img class="logo" src="images/logo-admin.png" alt="Logo" /></a></h3>
    </div>

    <ul class="components list-group">
      <a href="index.php" class="active list-group-item list-group-item-action"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
      <a href="deliverystatus.php" class="list-group-item list-group-item-action"><i class="fas fa-box-open"></i> Delivery Status</a>
      <a href="customers.php" class="list-group-item list-group-item-action"><i class="fas fa-user-alt"></i> Customers</a>
      <a href="drivers.php" class="list-group-item list-group-item-action"><i class="fas fa-truck"></i> Drivers</a>
      <a href="staff.php" class="list-group-item list-group-item-action"><i class="fas fa-user-tie"></i> Staff</a>
      <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-map-marked-alt"></i> Zones</a>
      <a href="reports.php" class="list-group-item list-group-item-action"><i class="fas fa-file-powerpoint"></i> Reports</a>
      <a href="drivertracklog.php" class="list-group-item list-group-item-action"><i class="fas fa-map-marked-alt"></i> Driver Track Log</a>
      <a href="settings.php" class="list-group-item list-group-item-action"><i class="fas fa-cogs"></i> Settings</a>
    </ul>

  </nav>

  <div id="content">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <button type="button" id="sidebarCollapse" class="btn btn-transparent">
          <i class="fas fa-bars"></i>
        </button>
      </div>
    </nav>

    <div class="status-area container-fluid">
      <div class="row">
        <div class="col-12 py-5">
          <span id="dateToday"></span>
        </div>
      </div>
    </div>


    <div class="container-fluid">

    </div>

  </div>
</div>

<?php include("includes/footer-admin.inc.php"); ?>