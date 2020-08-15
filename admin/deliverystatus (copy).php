<?php include("includes/header-admin.inc.php"); ?>

<div class="wrapper">

  <nav id="sidebar">

    <div class="sidebar-header">
      <h3><a href="index.php"><img class="logo" src="images/logo-admin.png" alt="Logo" /></a></h3>
    </div>

    <ul class="components list-group">
      <a href="index.php" class="list-group-item list-group-item-action"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
      <a href="deliverystatus.php" class="active list-group-item list-group-item-action"> Delivery Status</a>
      <a href="customers.php" class="list-group-item list-group-item-action"> Customers</a>
      <a href="drivers.php" class="list-group-item list-group-item-action"><i class="fas fa-truck"></i> Drivers</a>
      <a href="staff.php" class="list-group-item list-group-item-action"> Staff</a>
      <a href="reports.php" class="list-group-item list-group-item-action"> Reports</a>
      <a href="drivertracklog.php" class="list-group-item list-group-item-action"> Driver Track Log</a>
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
      <div class="row">
        <div class="col-12">
          <table class="table table-bordered table-hover">
            <thead id="deliveries" class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Contact #</th>
                <th scope="col">Landmark</th>
                <th scope="col">Driver</th>
                <th scope="col">Status</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>001</td>
                <td>Mary Blake</td>
                <td>2 Jasmine Rd, Lyssons Road, Morant Bay</td>
                <td>876-482-2215</td>
                <td>Sandras Place</td>
                <td>Tommy Walters</td>
                <td>Delivered</td>
              </tr>
              <tr>
                <td>003</td>
                <td>John Riley</td>
                <td>6 Waffle Street, Lyssons Road, Morant Bay</td>
                <td>876-385-9255</td>
                <td>Rodney Center</td>
                <td>Neko Watson</td>
                <td>Delivered</td>
              </tr>
              <tr>
                <td>007</td>
                <td>Xavier's Pharmacy</td>
                <td>13 Simms Avenue, Albion</td>
                <td>876-455-6325</td>
                <td>Tunam Plaza</td>
                <td>Tom Miles</td>
                <td>In Transit</td>
              </tr>
              <tr>
                <td>013</td>
                <td>One Stop Pharmacy</td>
                <td>24 Lison Road Yallahs</td>
                <td>876-233-6435</td>
                <td>Drake Apt.</td>
                <td>Jerry Lawson</td>
                <td>Delivered</td>
              </tr>
              <tr>
                <td>016</td>
                <td>In Town Pharmacy</td>
                <td>10 Queen LStreet, Morant Bay PO, St. Thomas</td>
                <td>876-245-2637</td>
                <td>Court House</td>
                <td>Synthia Spense</td>
                <td>In Transit</td>
              </tr>
              <tr>
                <td>033</td>
                <td>Albion Health Center</td>
                <td>10 Shanti Drive, Yallahs, St. Thomas</td>
                <td>876-473-1625</td>
                <td>Police Station</td>
                <td>Edward Blake</td>
                <td>In Transit</td>
              </tr>
              <tr>
                <td>067</td>
                <td>Princess Margaret Hospital</td>
                <td>52 Lyssons Road, Yallahs, St. Thomas</td>
                <td>876-245-2637</td>
                <td>Post Office</td>
                <td>Nuke Lawrence</td>
                <td>Delivered</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include("includes/footer-admin.inc.php"); ?>