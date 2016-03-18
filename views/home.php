<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>jq</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">

<script>
$(document).ready(function(){
$(".circle").on({
    mouseenter: function(){
       $(this).animate({height:'300',width:'300', top: "-=150px",
    left: "-=150px", },"fast"), 
    $(this).find("#title").animate({ opacity: '1'},"fast"),
    $(this).find("#titlelist").animate({ opacity: '1'},"fast") ,
<!--    $("#title").addClass("imp"),  -->
    $(this).find("#titlelist").addClass("imp"), 
    $(this).find("#title").css({ "font-size": "200%"},"fast");
$(this).find("#titlelist").css({ "font-size": "150%"}), 
    $(this).find("a").animate({ opacity: '1'},"fast");
    
    
    }, 
    mouseleave: function(){
        $(this).animate({height:'230',width:'230', top: "-=115px",
    left: "-=115px", },"fast"),
    $(this).find("#titlelist").animate({ opacity: '0.7'},"fast"),
    $(this).find("#title").animate({ opacity: '0.9'},"fast");
    $(this).find("#title").css({ "font-size": "150%"},"fast");
    <!--$("#title").removeClass("imp");-->
    
    }
});
});
</script>
<style>
.circle {
      width: 230px;
      height: 230px;
      -webkit-border-radius: 115px;
      -moz-border-radius: 115px;
      border-radius: 100%;
      <!--background: red; -->
     <!--background-color: rgba(204, 0, 102, 1);   -->
     <!--background: rgba(54, 25, 25, .5); -->
    <!--align-content: center;  -->
    
    <!-- align-items: center;   -->
     <!--vertical-align:middle;-->
    
    }
    .circleclass{
    position: relative;
  top: 50%;
  transform: translateY(-50%);  
  
    } 
    #titlelist{
   <!-- background-color: rgba(255, 255, 255, 0);  -->
opacity:0;
  
}
a{
color:white;

opacity: 0.0;
}
.imp {
    font-weight: bold;
    
    
    
   <!-- font-size: xx-large; 
background-color: rgba(255, 255, 255, 0.2);  -->
    
    
}
#title{
font-size:150%;
}

</style>
</head>
<body>
    <div class="row">
        <div class="col-md-1"></div>
  <div class="col-md-10">
  <!----->
    <div class="row">
    <div class="col-md-4"style="height:340px;"></br>
    <center>
    <div class="circle" style="background-color: rgba(220, 20, 60, 0.6)">
    <div class="circleclass">
      <p id="title" >abc</p>
    
    <!--<div class="list-group" style="height:100px;width:150px;">
  <a href="#" class="list-group-item" style="background-color:lightcyan;">First item</a>
  <a href="#" class="list-group-item">Second item</a>
  <a href="#" class="list-group-item">Third item</a>
</div>  -->

<!--<div class="list-group" style="height:100px;width:150px;">
    <a  href="aaa" class="list-group-item list-group-item-danger">First item</a>
    <a  href="aaa" class="list-group-item list-group-item-danger">First item</a>
    <a  href="aaa" class="list-group-item list-group-item-danger">First item</a>
      </div>-->
       <ul id="titlelist" class="nav nav-pills nav-stacked" style="height:125px;width:150px;background-color: rgba(255, 255, 255, 0);">
  
  <li><a href="#">Menu 1</a></li>
  <li><a href="#">Menu 2</a></li>
  <li><a href="#">Menu 3</a></li>
</ul>
  
    </div>
    </div>
    </center>
    </div>
    <div class="col-md-4"style="height:340px"></br>
    <center>
    <div class="circle" style="background-color: rgba(0, 250, 154, 0.6)">
    <div class="circleclass">
      <p id="title">abc</p>
      <ul id="titlelist" class="nav nav-pills nav-stacked" style="height:125px;width:150px;background-color: rgba(255, 255, 255, 0);">
  
  <li><a href="#">Menu 1</a></li>
  <li><a href="#">Menu 2</a></li>
  <li><a href="#">Menu 3</a></li>
</ul>
    
    
    </div>
    </div>
    <center>
    </div>
    <div class="col-md-4"style="height:340px"></br>
    <center>
    <div class="circle" style="background-color: rgba(24, 116, 205, 0.6)">
    <div class="circleclass">
      <p id="title">abc</p>
      <ul id="titlelist" class="nav nav-pills nav-stacked" style="height:125px;width:150px;background-color: rgba(255, 255, 255, 0);">
  
  <li><a href="#">Menu 1</a></li>
  <li><a href="#">Menu 2</a></li>
  <li><a href="#">Menu 3</a></li>
</ul>
    
     
    </div>
    </div>
    <center>
    </div>
    
    </div>
    
    
    <!---------------------------------------------------------------->
  <div class="row">
    <div class="col-md-4"style="height:340px"></br>
    <center>
    <div class="circle" style="background-color: rgba(102, 139, 139, 0.6)">
    <div class="circleclass">
      <p id="title">abc</p>
      <ul id="titlelist" class="nav nav-pills nav-stacked" style="height:125px;width:150px;background-color: rgba(255, 255, 255, 0);">
  
  <li><a href="#">Menu 1</a></li>
  <li><a href="#">Menu 2</a></li>
  <li><a href="#">Menu 3</a></li>
</ul>
    
     
    </div>
    </div>
    </center>
    </div>
    <div class="col-md-4"style="height:340px"></br>
    <center>
    <div class="circle" style="background-color: rgba(255, 215, 0, 0.6)">
    <div class="circleclass">
      <p id="title">abc</p>
      <ul id="titlelist" class="nav nav-pills nav-stacked" style="height:125px;width:150px;background-color: rgba(255, 255, 255, 0);">
  
  <li><a href="#">Menu 1</a></li>
  <li><a href="#">Menu 2</a></li>
  <li><a href="#">Menu 3</a></li>
</ul>
    
    
    </div>
    </div>
    <center>
    </div>
    <div class="col-md-4"style="height:340px"></br>
    <center>
    <div class="circle" style="background-color: rgba(255, 140, 0, 0.6)">
    <div class="circleclass">
      <p id="title">abc</p>
      <ul id="titlelist" class="nav nav-pills nav-stacked" style="height:125px;width:150px;background-color: rgba(255, 255, 255, 0);">
  
  <li><a href="#">Menu 1</a></li>
  <li><a href="#">Menu 2</a></li>
  <li><a href="#">Menu 3</a></li>
</ul>
    
    </div>
    </div>
    <center>
    </div>
    
    </div>
    <!---------------------------------------------------------->
  
  
  
  </div>
  <div class="col-md-1"></div>
    </div>        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#recent" aria-controls="home" role="tab" data-toggle="tab">Recent</a></li>
            <li role="presentation"><a href="#popular" aria-controls="profile" role="tab" data-toggle="tab">Popular</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content"><br><br>
            <div role="tabpanel" class="tab-pane active" id="recent">
            <?php 
            $len=sizeof($result);
            for ($i=0;$i<$len/5;$i++) {
                $j=5;
                if($i+1>$len/5)
                    $j=$len%5;
                echo '<div class="row">';
                for ($k=0; $k<$j;$k++) { 
                    $index=($i*5+$k); ?>
                <div class="col-lg-2<?php echo $k==0?' col-lg-offset-1':''?>">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo ($result[$index]->title); ?></h3>
                            </div>
                            <div class="panel-body">
                                <img src="<?php echo base_url()?>assets/images/<?php echo $result[$index]->image;?>" class="img-responsive" style="height: 130px;" alt="akash">
                            </div>
                            <div class="panel-footer">

                                <div class="row">
                                    <div class="col-sm-3">
                                        <h5>Price: </h5>
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-1">
                                        <button class="btn btn-warning">₹<?php echo $result[$index]->price; ?></button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                      <h5>By: </h5>
                                    </div>
                                    <div class="col-sm- col-sm-offset-1">
                                        <h5><strong><?php echo $result[$index]->u_name; ?></strong></h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h5>Phone: </h5>
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-1">
                                        <h5><strong><?php echo $result[$index]->phone; ?></strong></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                echo '</div>';
            }
            ?>
            </div>
            <div role="tabpanel" class="tab-pane" id="popular">
                <div class="row">
                    <div class="col-lg-2 col-lg-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Panel title</h3>
                            </div>
                            <div class="panel-body">
                                Panel content
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Panel title</h3>
                            </div>
                            <div class="panel-body">
                                Panel content
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Panel title</h3>
                            </div>
                            <div class="panel-body">
                                Panel content
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Panel title</h3>
                            </div>
                            <div class="panel-body">
                                Panel content
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Panel 2</h3>
                            </div>
                            <div class="panel-body">
                                Panel content
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
</body>
</html>