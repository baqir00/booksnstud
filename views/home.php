<?php include("header.php");?>
<div class="container">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
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