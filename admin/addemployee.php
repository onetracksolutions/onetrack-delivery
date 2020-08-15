<!DOCTYPE html>
<html lang="en">

<head>
    <title> OneTrack | Employee Registration </title>

    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ProTech">
    <meta name="author" content="ProTech">
    <meta name="keywords" content="ProTech">

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/fontstemp/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/fontstemp/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/fontstemp/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/vendortemp/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/vendortemp/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/vendortemp/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/vendortemp/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/vendortemp/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/csstemp/util.css">
    <link rel="stylesheet" type="text/css" href="../assets/csstemp/registration.css">
    <!--===============================================================================================-->
</head>

<body>
    <!--========================== L O G O    &    N A V I G A T I O N      B A R ============================-->
    <header>

        <div id="logo">
            <a href="Index.html"><img src="../assets/images/login-logo.png" alt="Logo" width="160" height="69" /></a>
        </div>
        <nav>
            <ul>
                <li> <a href="index.html">HOME</a> </li>

                <li />
            </ul>
        </nav>
    </header>


    <form method="post" novalidate>
        <div id="msform">

            <h2 class="active">EMPLOYEE INFORMATION</h2>


            <!-- fieldsets -->
            <fieldset>

                <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
                    <div class="wrapper wrapper--w680">
                        <div class="card card-4">
                            <div class="card-body">



                                <h2 class="fs-title">PERSONAL DETAILS</h2>

                                <div class="row row-space">

                                    <div class="col-2">
                                        <div class="input-group">
                                            <input type="text" name="firstname" placeholder="First name" required />
                                        </div>
                                    </div>

                                    <div class="col-2">
                                        <div class="input-group">
                                            <input type="text" name="middlename" placeholder="Middle name" />
                                        </div>
                                    </div>

                                    <div class="col-2">
                                        <div class="input-group">
                                            <input type="text" name="lastname" placeholder="Last name" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row row-space">

                                    <div class="col-2">
                                        <div class="input-group">
                                            <input type="date" name="birthday" placeholder="Date of Birth" required>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">

                                            <label for="status">Gender:</label>
                                            <select name="status" id="Gender" required>
                                                <option value="volvo">Female</option>
                                                <option value="saab">Male</option>
                                                <option value="saab">Other</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>


                                <input type="text" name="address" placeholder="Address" required />
                                <input type="text" name="contact" placeholder="Phone Number" required />
                                <input type="email" name="email" placeholder="Email" required />

                                <h2 class="fs-title">JOB DETAILS</h2>

                                <div class="row row-space">

                                    <div class="col-2">
                                        <div class="input-group">
                                            <input type="text" name="JobTitle" placeholder="Title" required />
                                        </div>
                                    </div>

                                    <div class="col-2">
                                        <div class="input-group">
                                            <input type="text" name="EmployeeID" placeholder="Employee ID" required />
                                        </div>
                                    </div>
                                </div>

                                <input type="text" name="Supervisor" placeholder="Supervisor" />
                                <input type="text" name="Department" placeholder="Department" required />
                                <input type="text" name="Location" placeholder="Work Location" required />
                                <input type="email" name="address" placeholder="Email" required />

                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <input type="date" name="Date" placeholder="Start Date" required />
                                        </div>
                                    </div>

                                    <div class="col-2">
                                        <div class="input-group">
                                            <br>
                                            <label for="status">Employment Status:</label>
                                            <select name="status" id="Status" required>
                                                <option value="volvo">Full-time</option>
                                                <option value="saab">Contract</option>
                                                <option value="saab">Trainee</option>
                                                <option value="mercedes">Inactive</option>
                                            </select>


                                        </div>
                                    </div>
                                </div>

                                <h2 class="fs-title">FOR DRIVERS ONLY</h2>

                                <div class="row row-space">

                                    <div class="col-2">
                                        <div class="input-group">
                                            <input type="date" name="Licence" placeholder="Driver's Licence" />
                                        </div>
                                    </div>

                                    <div class="col-2">
                                        <div class="input-group">
                                            <input type="text" name="Vehicle" placeholder="Vehicle Type" />
                                        </div>
                                    </div>
                                </div>


                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label for="img">Select image:</label>
                                            <input type="file" id="img" name="img" accept="image/*">
                                        </div>
                                    </div>
                                </div>

                                <input type="button" name="submit" class="submit action-button" value="Submit" />

                            </div>
                        </div>
                    </div>


                </div>
            </fieldset>

        </div>
    </form>



</body>

</html>