<?php include("includes/header-customer.inc.php"); ?>

<div class="wrapper">
  <div id="content">
    <div class="nav__area container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="index.php"><img class="navbar-brand logo" src="images/logo-customer.png" alt="Logo" /></a>
      </nav>
    </div>

    <div class="status__area container-fluid">
      <div class="row">
        <div class="col-12 py-5">
          <span id="dateToday"></span>
        </div>
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
              <p class="intransit-p">IN-TRANSIT</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br />

    <div class="search__bar container-fluid">
      <input class="form-control" id="myInput" type="text" placeholder="Search..">
    </div>

    <br />



    <div class="data__area container-fluid">
      <div class="row">
        <div class="col-12">
          <table id="customers" class="table table-bordered table-hover table-advance">
            <thead class="thead-light">
              <tr>
                <th scope="col">Order No.</th>
                <th scope="col">Date</th>
                <th scope="col">Track</th>
                <th scope="col">Status</th>
                <th scope="col">Feedback</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>202007002</td>
                <td>23-Jun-2020</td>
                <td>Details</td>
                <td><button class="btn success">Delivered</button></td>
                <td>Give Feedback</td>
              </tr>

              <tr>
                <td>202007001</td>
                <td>23-Jun-2020</td>
                <td>Details</td>
                <td><button class="btn success">Delivered</button></td>
                <td>Give Feedback</td>
              </tr>

              <tr>
                <td>202007005</td>
                <td>23-Jun-2020</td>
                <td>Details</td>
                <td><button class="btn success">Delivered</button></td>
                <td>Give Feedback</td>
              </tr>

              <tr>
                <td>202007007</td>
                <td>23-Jun-2020</td>
                <td>Details</td>
                <td><button class="btn success">Delivered</button></td>
                <td>Give Feedback</td>
              </tr>

              <tr>
                <td>202007009</td>
                <td>23-Jun-2020</td>
                <td>Details</td>
                <td><button class="btn success">Delivered</button></td>
                <td>Give Feedback</td>
              </tr>

              <tr>
                <td>202007010</td>
                <td>23-Jun-2020</td>
                <td>Details</td>
                <td><button class="btn success">Delivered</button></td>
                <td>Give Feedback</td>
              </tr>

              <tr>
                <td>202007003</td>
                <td>23-Jun-2020</td>
                <td>Details</td>
                <td><button class="btn transit">In-Transit</button></td>
                <td>Give Feedback</td>
              </tr>

              <tr>
                <td>202007013</td>
                <td>23-Jun-2020</td>
                <td>Details</td>
                <td><button class="btn transit">In-Transit</button></td>
                <td>Give Feedback</td>
              </tr>

              <tr>
                <td>202007012</td>
                <td>23-Jun-2020</td>
                <td>Details</td>
                <td><button class="btn success">Delivered</button></td>
                <td>Give Feedback</td>
              </tr>

              <tr>
                <td>202007004</td>
                <td>23-Jun-2020</td>
                <td>Details</td>
                <td><button class="btn transit">In-Transit</button></td>
                <td>Give Feedback</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include("includes/footer-customer.inc.php"); ?>