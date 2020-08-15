<?php include("includes/header-admin.inc.php"); ?>
<?php require_once("includes/db_connection.inc.php"); ?>

<?php
$sql = "SELECT driverid, CONCAT(firstname, ' ', lastname) AS name, address, emailaddress, phone, driver_status, usertype FROM tbldriver";
$query = mysqli_query($connect, $sql);
?>

<div class="wrapper">

  <nav id="sidebar">

    <div class="sidebar-header">
      <h3><a href="index.php"><img class="logo" src="images/logo-admin.png" alt="Logo" /></a></h3>
    </div>

    <ul class="components list-group">
      <a href="index.php" class="list-group-item list-group-item-action"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
      <a href="deliverystatus.php" class="list-group-item list-group-item-action"><i class="fas fa-box-open"></i> Delivery Status</a>
      <a href="customers.php" class="list-group-item list-group-item-action"><i class="fas fa-user-alt"></i> Customers</a>
      <a href="drivers.php" class="active list-group-item list-group-item-action"><i class="fas fa-truck"></i> Drivers</a>
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
      <a href='adddriver.php'><button class='btn btn-primary btn-xs'>Add Driver</button></a>
    </div>



    <div class="container-fluid">

      <div class="row">
        <div class="col-12">
          <table class="table table-bordered table-hover table-advance">
            <thead class="thead-light">
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Email Address</th>
                <th scope="col">Contact #</th>
                <th scope="col">Status</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if (mysqli_num_rows($query) > 0) {
                while ($row = mysqli_fetch_assoc($query)) {
              ?>
                  <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['emailaddress']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['driver_status']; ?></td>
                    <td>
                      <form action="edit_driver.php" method="POST">
                        <input type="hidden" name="edit_id" value="<?php echo $row['driverid']; ?>">
                        <button type="submit" name="edit_btn" class="btn btn-success">Edit</button>
                      </form>
                    </td>
                    <td>
                      <form action="delete_driver.inc.php" method="POST">
                        <input type="hidden" name="delete_id" value="<?php echo $row['driverid']; ?>">
                        <button type="submit" name="delete_btn" class="btn btn-danger">Delete</button>
                      </form>
                    </td>
                  </tr>
              <?php
                }
              } else {
                echo "No records found";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include("includes/footer-admin.inc.php"); ?>