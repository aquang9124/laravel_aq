<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Alejandro Quang</title>

    <!-- Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/app.css">

</head>
<body id="app-layout">
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <!-- <a class="navbar-brand" href="{{ url('/') }}">
                    Laravel
                </a> -->
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/about') }}">About Me</a></li>
                    <li><a data-toggle="modal" href="#about-me">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Modal -->
    <div id="about-me" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal Content -->
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Leave me a message</h4>
                    <p><small>I will do my best to respond within 24 hours</small></p>
                </div>
                <div class="modal-body">
                    
                        <form action="/message" method="post" role="form" class="form-horizontal">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="control-label col-sm-2">Name: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Email: </label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="email" placeholder="Enter your email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Message: </label>
                                <div class="col-sm-10">
                                    <textarea name="message" class="form-control" rows="10" placeholder="Leave me a message"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                </div>
                                <div class="col-sm-2">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    @yield('content')

    <!-- JavaScripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>
</html>
