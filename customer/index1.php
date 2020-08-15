<?php include("includes/header-customer.inc.php"); ?>

<div class="wrapper">
  <!-- Sidebar  -->
  <nav id="sidebar">
    <div class="sidebar-header">
      <h3><a href="dashboard.php"><img src="images/logo-customer.png" alt="Logo" width="160" height="69" /></a></h3>
    </div>

    <ul class="list-unstyled components">
      <!-- <p>Dummy Heading</p>-->
      <li class="active"><a href="index.php">Dashboard</a></li>
    </ul>

  </nav>

  <!-- Page Content  -->
  <div id="content">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">

        <button type="button" id="sidebarCollapse" class="btn btn-transparent">
          <i class="fas fa-bars"></i>
        </button>

        <!-- <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-align-justify"></i>
          </button> -->

        <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Page</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Page</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Page</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Page</a>
              </li>
            </ul>
          </div> -->
      </div>
    </nav>

    <div class="container-fluid">

      <div class="row">
        <div class="col-12 py-5">
          <span id="dateToday"></span>
        </div>
      </div>


      <div class="counter">
        <div class="container">
          <div class="row">
            <div class="column">
              <div class="orders">
                <p class="counter-count">10</p>
                <p class="orders-p">ORDERS</p>
              </div>
            </div>



            <div class="column">
              <div class="delivered">
                <p class="counter-count">7</p>
                <p class="delivered-p">DELIVERED</p>
              </div>
            </div>


            <div class="column">
              <div class="intransit">
                <p class="counter-count">3</p>
                <p class="intransit-p">In-Transit</p>
              </div>
            </div>


          </div>
        </div>
      </div>




      <div class="row">
        <div class="col-12">
          <table class="table table-bordered table-hover">
            <thead class="thead-light">
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