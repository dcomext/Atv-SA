<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Registre-se</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        i.style-toggle-btn {
            position: fixed;
            z-index: 55555;
            top: 100px;
            right: 0;
            color: #FFF;
            background: #777878 /9;
            background: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 3px 0 0 3px;
            cursor: pointer;
        }

        .style-toggle {
            position: fixed;
            z-index: 55555;
            top: 100px;
            right: 0;
            background: #777878 /9;
            background: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 3px 0 0 3px;
        }

        .style-toggle>i {
            color: #FFF;
            cursor: pointer;
        }

        .style-toggle ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .style-toggle ul>li {
            height: 30px;
            width: 30px;
            border: 1px solid #FFF;
            margin-bottom: 3px;
            cursor: pointer;
        }

        .style-toggle ul>li.green {
            background: #27ae60;
        }

        .style-toggle ul>li.blue {
            background: #3498db;
        }

        .style-toggle ul>li.red {
            background: #e74c3c;
        }

        .style-toggle ul>li.amethyst {
            background: #9b59b6;
        }

        /* ===== Style Colors ===== */

        /* Text Colors */

        .body-green .text-color {
            color: #27ae60;
        }

        .body-blue .text-color {
            color: #3498db;
        }

        .body-red .text-color {
            color: #e74c3c;
        }

        .body-amethyst .text-color {
            color: #9b59b6;
        }

        /* Link Colors */

        .body-green a {
            color: #27ae60;
        }

        .body-blue a {
            color: #3498db;
        }

        .body-red a {
            color: #e74c3c;
        }

        .body-amethyst a {
            color: #9b59b6;
        }

        /* Border Colors */

        .body-green .border-color {
            border-color: #27ae60;
        }

        .body-blue .border-color {
            border-color: #3498db;
        }

        .body-red .border-color {
            border-color: #e74c3c;
        }

        .body-amethyst .border-color {
            border-color: #9b59b6;
        }

        /* Background Colors */

        .body-green .background-color {
            background-color: #27ae60;
        }

        .body-blue .background-color {
            background-color: #3498db;
        }

        .body-red .background-color {
            background-color: #e74c3c;
        }

        .body-amethyst .background-color {
            background-color: #9b59b6;
        }

        .body-green .bg-hover-color:hover {
            background-color: #229652;
        }

        .body-blue .bg-hover-color:hover {
            background-color: #2980b9;
        }

        .body-red .bg-hover-color:hover {
            background-color: #c0392b;
        }

        .body-amethyst .bg-hover-color:hover {
            background-color: #8e44ad;
        }

        /* Logo */

        .body-green .logo:after {
            color: #27ae60;
        }

        .body-blue .logo:after {
            color: #3498db;
        }

        .body-red .logo:after {
            color: #e74c3c;
        }

        .body-amethyst .logo:after {
            color: #9b59b6;
        }

        /* Buttons */

        .btn-primary,
        .btn-success,
        .btn-info,
        .btn-warning,
        .bnt-danger,
        .btn-color {
            color: #FFF !important;
        }

        .btn-default {
            color: #333 !important;
        }

        .body-green .btn-link:hover {
            color: #27ae60;
        }

        .body-blue .btn-link:hover {
            color: #3498db;
        }

        .body-red .btn-link:hover {
            color: #e74c3c;
        }

        .body-amethyst .btn-link:hover {
            color: #9b59b6;
        }

        .body-green .btn-color {
            background-color: #27ae60;
            border-color: #229652;
        }

        .body-green .btn-color:hover,
        .body-green .btn-color:focus,
        .body-green .btn-color:active {
            background-color: #229652;
            border-color: #1A7440;
        }

        .body-blue .btn-color {
            background-color: #3498db;
            border-color: #2980b9;
        }

        .body-blue .btn-color:hover,
        .body-blue .btn-color:focus,
        .body-blue .btn-color:active {
            background-color: #2980b9;
            border-color: #1D5C86;
        }

        .body-red .btn-color {
            background-color: #e74c3c;
            border-color: #c0392b;
        }

        .body-red .btn-color:hover,
        .body-red .btn-color:focus,
        .body-red .btn-color:active {
            background-color: #c0392b;
            border-color: #962E22;
        }

        .body-amethyst .btn-color {
            background-color: #9b59b6;
            border-color: #8e44ad;
        }

        .body-amethyst .btn-color:hover,
        .body-amethyst .btn-color:focus,
        .body-amethyst .btn-color:active {
            background-color: #8e44ad;
            border-color: #6C3384;
        }
    </style>
</head>
<!------ Include the above in your HEAD tag ---------->

<body class="body-green" data-elink-extension-installed="1.1.5">

    <!-- Body -->
    <div class="wrapper body-inverse">
        <!-- wrapper -->
        <div class="container">
            <div class="row">
                <!-- Sign In form -->
                <div class="col-sm-5 col-sm-offset-1">
                    <h3>Sign In to your account</h3>
                    <p class="text-muted">
                        Please fill out the form below to login to your account.
                    </p>
                    <div class="form-white">
                        <form role="form">
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-block btn-color btn-xxl">Submit</button>
                        </form>
                        <hr>
                        <p><a href=".html#" id="lost-btn">Lost your password?</a></p>
                        <div class="hidden" id="lost-form">
                            <p>Enter your email address and we will send you a link to reset your password.</p>
                            <form role="form">
                                <div class="form-group">
                                    <label for="email-lost">Email address</label>
                                    <input type="email" class="form-control" id="email-lost" placeholder="Enter email">
                                </div>
                                <button type="submit" class="btn btn-default">Send</button>
                            </form>
                        </div>
                        <div class="form-avatar hidden-xs">
                            <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-user fa-stack-1x"></i>
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>


</html>