<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
  <title>OneTrack Delivery | Dashboard</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="stylesheet" href="./css/main.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous" />


</head>

<body>

  <div class="wrapper">
    <div id="content">
      <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
          <div class="sidebar-header">
            <h3><a href="index.php"><img class="logo" src="images/logo-customer.png" alt="Logo" /></a></h3>
          </div>
          <button type="button" id="sidebarCollapse" class="btn btn-transparent">
            <!-- <i class="fas fa-bars"></i> -->
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

      <div class="search__bar">
        <input class="form-control" id="myInput" type="text" placeholder="Search..">
      </div>


      <div class="data container-fluid">
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