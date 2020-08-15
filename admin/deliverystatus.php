<?php include("includes/header-admin.inc.php"); ?>
<?php require_once("includes/db_connection.inc.php"); ?>
<?php require_once("includes/functions.inc.php"); ?>


<?php

$sql = "SELECT t1.deliveryid, t1.orderid, t1.delivery_date, CONCAT(t2.firstname, ' ', t2.lastname) AS driver,";
$sql .= " t3.phone, CONCAT(t3.firstname, ' ', t3.lastname) AS customer,";
$sql .= " t1.delivery_address, t1.delivery_status, t1.feedback";
$sql .= " FROM tbldelivery AS t1";
$sql .= " INNER JOIN tbldriver AS t2 ON t1.driverid = t2.driverid";
$sql .= " INNER JOIN tblcustomer AS t3 ON t1.customerid = t3.customerid";

$query = mysqli_query($connect, $sql);

?>



<div class="wrapper">

  <nav id="sidebar">

    <div class="sidebar-header">
      <h3><a href="index.php"><img class="logo" src="images/logo-admin.png" alt="Logo" /></a></h3>
    </div>

    <ul class="components list-group">
      <a href="index.php" class="list-group-item list-group-item-action"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
      <a href="deliverystatus.php" class="active list-group-item list-group-item-action"><i class="fas fa-box-open"></i> Delivery Status</a>
      <a href="customers.php" class="list-group-item list-group-item-action"> <i class="fas fa-user-alt"></i> Customers</a>
      <a href="drivers.php" class="list-group-item list-group-item-action"><i class="fas fa-truck"></i> Drivers</a>
      <a href="staff.php" class="list-group-item list-group-item-action"> <i class="fas fa-user-tie"></i> Staff</a>
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
      <a href='add_delivery.php'><button class='btn btn-primary btn-xs'>Add Delivery</button></a>
    </div>

    <div class="container-fluid">

      <div class="row">
        <div class="col-12">
          <table class="table table-bordered table-hover table-advance">

            <thead class="thead-light">
              <tr>
                <th scope="col">Order No.</th>
                <th scope="col">Date</th>
                <th scope="col">Customer</th>
                <th scope="col">Address</th>
                <th scope="col">Contact#</th>
                <th scope="col">Driver</th>
                <th scope="col">Status</th>
                <th scope="col">Feedback</th>
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
                    <td><?php echo $row['orderid']; ?></td>
                    <td><?php echo $row['delivery_date']; ?></td>
                    <td><?php echo $row['customer']; ?></td>
                    <td><?php echo $row['delivery_address']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['driver']; ?></td>
                    <td>
                      <button class="btn btn_custom delivered">
                        <?php echo $row['delivery_status']; ?>
                      </button>
                    </td>
                    <td><?php echo $row['feedback']; ?></td>
                    <td>
                      <form action="edit_delivery.php" method="POST">
                        <input type="hidden" name="edit_id" value="<?php echo $row['deliveryid']; ?>">
                        <button type="submit" name="edit_btn" class="btn btn-success">Edit</button>
                      </form>
                    </td>
                    <td>
                      <form action="delete_delivery.inc.php" method="POST">
                        <input type="hidden" name="delete_id" value="<?php echo $row['deliveryid']; ?>">
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