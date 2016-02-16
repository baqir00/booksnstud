<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

   <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">

  </head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url()?>">BooksNstud</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!--<li class="active"><a href="#">Used Books <span class="sr-only">(current)</span></a></li>-->
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Books<span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><a href="#">Used Books</a></li>
                  <li><a href="#">Hire a Books</a></li>
              </ul>
          </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tutor<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">For an Hour</a></li>
            <li><a href="#">Weekly</a></li>
            <li><a href="#">Monthly</a></li>
          </ul>
        </li>
          <li><a href="#">Products</a></li>
          <li><a href="#">Material</a></li>
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Exams<span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><a href="#">IIT-JEE</a></li>
                  <li><a href="#">AIPMT</a></li>
                  <li><a href="#">CAT</a></li>
                  <li><a href="#">GRE</a></li>
                  <li><a href="#">GATE</a></li>
                  <li><a href="#">GMAT</a></li>
              </ul>
          </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" data-toggle="modal" data-target="#myModal">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
          <div class="navbar-form navbar-right"><a href="<?php echo base_url()?>index.php/Welcome/post">
            <button type="submit" class="btn btn-danger">&nbsp;<strong>POST AN AD</strong>&nbsp;</button></a>
          </div>
      </ul>
    </div>
  </div>
</nav>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Select City</h4>
      </div>
      <div class="modal-body">
        <ul class="list-group">
            <div class="row">
                <div class="col-md-3">
                    <li class="list-group-item">Lucknow</li>
                    <li class="list-group-item">Lucknow</li>
                    <li class="list-group-item">Lucknow</li>
                    <li class="list-group-item">Lucknow</li>
                    <li class="list-group-item">Lucknow</li>
                </div>
                <div class="col-md-3">
                    <li class="list-group-item">Lucknow</li>
                    <li class="list-group-item">Lucknow</li>
                    <li class="list-group-item">Lucknow</li>
                    <li class="list-group-item">Lucknow</li>
                    <li class="list-group-item">Lucknow</li>
                </div>
                <div class="col-md-3">
                    <li class="list-group-item">Lucknow</li>
                    <li class="list-group-item">Lucknow</li>
                    <li class="list-group-item">Lucknow</li>
                    <li class="list-group-item">Lucknow</li>
                    <li class="list-group-item">Lucknow</li>
                </div>
                <div class="col-md-3">
                    <li class="list-group-item">Lucknow</li>
                    <li class="list-group-item">Lucknow</li>
                    <li class="list-group-item">Lucknow</li>
                    <li class="list-group-item">Lucknow</li>
                    <li class="list-group-item">Lucknow</li>
                </div>
            </div>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</body>
</html>