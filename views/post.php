<?php include("header.php");?>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <h1>Submit an AD</h1>
            <form method="post" accept-charset="UTF-8" enctype="multipart/form-data" action="<?php echo base_url()?>index.php/Welcome/upload_add">
                <div class="form-group">
                    <label for="u_name">Name<span style="color: red";>&nbsp;*</span></label>
                    <input type="text" class="form-control" name="u_name" placeholder="Your name">
                </div>
                <div class="form-group">
                    <label for="title">Ad Title<span style="color: red";>&nbsp;*</span></label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Give your Ad attractive title...">
                </div>
                <div class="form-group">
                    <label for="desc">Ad Description<span style="color: red";>&nbsp;*</span></label>
                    <textarea type="text" name="desc" class="form-control" id="desc" placeholder="Give a brief descroption of your ad..."></textarea>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number<span style="color: red";>&nbsp;*</span></label>
                    <input type="number" class="form-control" name="phone" placeholder="Your Contact info">
                </div>
                <div class="form-group">
                    <label for="Price">Price<span style="color: red";>&nbsp;*</span></label>
                    <input type="number" class="form-control" name="price" placeholder="The expected price">
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="neg" value="1">Price Negotiable
                    </label>
                </div>
                <div class="form-group">
                    <label for="loc">Location<span style="color: red";>&nbsp;*</span></label>
                    <input type="text" class="form-control" name="loc" placeholder="Enter the city you are in ...">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Upload Image</label>
                    <input type="file" id="exampleInputFile" name="userfile">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>