<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <title>OneTrack Delivery | Dashboard</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous" />

    <link rel="stylesheet" href="css/main.css">

    <style>
        @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            min-height: 100%;
        }

        body {
            font-family: "Poppins", sans-serif;
            background: #fafafa;
            margin: 0 auto;
            min-height: 100vh;
            max-width: 80%;
            padding: 20px;
        }

        .content {
            display: grid;
            grid-gap: 20px;
            grid-template-columns: auto;
            grid-template-rows: auto auto auto auto auto;
            grid-template-areas:
                "nav__area"
                "status__area"
                "counter"
                "search__bar"
                "data__area";
        }

        .nav__area {
            grid-area: nav__area;
            background: #fff;
            padding: 15px;
            border: none;
            margin-bottom: 40px;
        }

        .status__area {
            grid-area: status__area;
        }

        .counter {
            grid-area: counter;
            background-color: #eaecf0;
            text-align: center;
        }

        .search__bar {
            grid-area: search__bar;
        }

        .data__area {
            grid-area: data__area;
        }

        .orders,
        .delivered,
        .intransit {
            margin-top: 70px;
            margin-bottom: 70px;
        }

        .counter-count {
            font-size: 18px;
            background-color: #5f77ac;
            border-radius: 50%;
            position: relative;
            color: #ffffff;
            text-align: center;
            line-height: 92px;
            width: 92px;
            height: 92px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            -o-border-radius: 50%;
            display: inline-block;
        }

        .orders-p,
        .delivered-p,
        .intransit-p {
            font-size: 24px;
            color: #000000;
            line-height: 20px;
        }

        .column {
            float: left;
            width: 31%;
            padding: 0 5px;
        }

        .row {
            margin: 0 -5px;
        }

        .row:after {
            content: "";
            display: table;
        }

        h1 {
            color: #010201;
        }

        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #5f77ac;
            color: white;
        }

        .success {
            background-color: #4CAF50;
        }

        /* Green */

        .success:hover {
            background-color: #46a049;
        }

        .transit {
            background-color: #ff9800;
        }

        /* Orange */

        .transit:hover {
            background: #e68a00;
        }

        .btn {
            border: none;
            color: white;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
        }

        .logo {
            width: 160px;
            height: 69px;
        }
    </style>

</head>

<body>