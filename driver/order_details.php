<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous" />


    <link rel="stylesheet" href="css/main-driver.css" />


    <title>Driver Dashboard | Onetrack Delivery</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            min-height: 100%;
        }

        body {
            min-height: 100vh;
        }

        html,
        body {
            min-height: 100vh;
            width: 100vw;
            font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
            /* background: #dfecff; */
            color: #7294eb;
            line-height: 1.4;
        }

        ul {
            list-style: none;
        }

        .wrapper {
            display: flex;
            flex-flow: column nowrap;
            flex: 0 1 auto;
            height: 100%;
            width: 80%;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            height: 80px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }

        .logo {
            width: 160px;
            height: 69px;
            cursor: pointer;
        }

        li,
        a {
            font-weight: 500;
            font-size: 15px;
            text-decoration: none;
        }

        header>nav>ul {
            display: flex;
            flex-flow: wrap;
            justify-content: flex-start;
        }


        header>nav>ul>li a+div {
            border-radius: 0 0 2px 2px;
            box-shadow: 0 3px 1px rgba(0, 0, 0, 0.05);
            display: none;
            font-size: 1rem;
            position: absolute;
            width: 195px;
        }

        header>nav>ul>li:hover a+div {
            display: block;
        }

        header>nav>ul>li a+div>ul>li>a {
            display: block;
            font-size: 0.75rem;
            letter-spacing: 1.5px;
            padding: 0.25rem 1.5rem;
            text-transform: uppercase;
        }

        header>nav>ul>li a+div>ul>li:hover>a {
            background-color: rgba(0, 0, 0, 0.15);
        }

        header>nav>ul>li>a {
            align-items: flex-start;
            display: flex;
            font-size: 1.55rem;
            font-weight: 200;
            letter-spacing: 1px;
            max-width: 130px;
            padding: 1rem 1.5rem;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            transition: all linear 0.1s;
        }

        header>nav>ul>li>a>div>span {

            display: inline-block;

            font-size: 0.7rem;

            line-height: 1rem;

        }

        .avatar {
            width: 69px;
            height: 69px;
        }

        .avatar_wrapper {
            display: flex;

            align-items: center;
        }


        .picon {
            display: inline-block;
            width: 20px;
        }

        .status_area {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding: 50px;


        }

        .main_area {
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: auto;
            align-items: center;
            justify-content: center;
            padding: 50px;

        }

        article {
            display: flex;
            flex-flow: column nowrap;
            min-height: 100%;
            min-width: 100%;
            padding: 50px 10px;




        }

        article ul {
            display: grid;
            grid-gap: 16px;
            padding-bottom: 15px;
        }

        article ul li a {
            font-size: 1.3rem;
        }

        article:hover {
            top: -2px;

        }

        .confirmation {
            display: flex;
            flex-flow: column nowrap;
            align-items: center;
            justify-content: space-between;

        }

        .confirmation a {
            width: 100%;

        }

        .confirmation a button {

            border: 1px solid #03bfcb;
            width: 100%;
            padding: 10px 20px;
            color: #111111;
            font-weight: 500;
            border-radius: 5px;
            transition: 0.3s ease-out;
            cursor: pointer;

        }

        .footer {
            display: flex;
            align-items: center;
            justify-content: space-around;
            padding: 1rem;
            text-align: center;
            color: #333;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .available__status {
            display: flex;
            align-items: center;
            justify-content: space-around;
        }


        .switch {
            position: relative;
            display: inline-block;
            width: 90px;
            height: 34px;
        }

        .switch input {
            display: none;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ca2222;
            -webkit-transition: 0.4s;
            transition: 0.4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: 0.4s;
            transition: 0.4s;
        }

        input:checked+.slider {
            background-color: #2ab934;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196f3;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(55px);
            -ms-transform: translateX(55px);
            transform: translateX(55px);
        }

        .on {
            display: none;
        }

        .on,
        .off {
            color: white;
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            font-size: 10px;
            font-family: Verdana, sans-serif;
        }

        input:checked+.slider .on {
            display: block;
        }

        input:checked+.slider .off {
            display: none;
        }

        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }

        @media all and (max-width: 800px) {
            .main_area {
                grid-template-columns: 1fr;
            }

            .confirmation {
                flex-flow: row wrap;
            }

            .footer {
                flex-direction: column;
            }

            .status_area {
                display: grid;
                grid-gap: 15px;
                text-align: center;
            }
        }

        .press {
            display: flex;
            align-items: center;
            justify-content: space-evenly;
        }
    </style>
</head>

<body>


    <div class="wrapper container-fluid">

        <header>
            <div class="logo">
                <a href="#"><img src="images/logo1.png" alt="" class="logo" /></a>
            </div>

        </header>
        <section class="main_area">
            <section class="status_area">
                <div class="date">
                    <h3>Order#: </h3>
                </div>
            </section>


            <article>
                <ul>
                    <li>
                        <a href="#"><i class="fas fa-peace"></i> Driver: </a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-id-card"></i> Contact#: </a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-envelope-open-text"></i> Email: </a>
                    </li>
                    <li>
                        <form>
                            <textarea name="comments" rows="5" cols="100">Comment</textarea>
                        </form>
                    </li>
                    <li class="press">
                        <a href="#"><i class="fas fa-signature fa-3x"></i></a>
                        <a href="#"><i class="fas fa-street-view fa-3x"></i></a>
                        <a href="#"><i class="fas fa-camera fa-3x"></i></a>

                    </li>
                    <br />
                    <li>
                        <a href="#"><i class="fas fa-map-marked-alt"></i> Address: </a>
                    </li>
                </ul>

                <div class="confirmation">
                    <a href="#"><button class="reject">Arrival</button></a>
                    <a href="#"><button class="accept">Cancel</button></a>
                </div>
            </article>
        </section>

    </div>

    <footer class="footer">
        <div class="footer_copyright">Copyright &copy; 2020 Protech, All rights reserved</div>
        <div class="footer_terms">
            <a href="#" class="footer_terms_text">Terms of Use</a>
            <span class="text-muted mx-2">|</span>
            <a href="#" class="footer_terms_text">Privacy Policy</a>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="js/main.js"></script>

</body>

</html>