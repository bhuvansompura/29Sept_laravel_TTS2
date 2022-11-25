<?php  include("header.php");


if (isset($_REQUEST['savepord1'])) {
    $_SESSION['cartdata']['prod1']=array("prodtitel"=>$_REQUEST['prod1'],"prodprice"=>$_REQUEST['prod1price'],
    "prodquntity"=>$_REQUEST['prod1quntity']);

}

?>
<div class="container">
    <div class="row">
<div class="col-md-3">
    <div class="card">
  <img class="card-img-top" src="image/iphone 14.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">iphone 14</h5>
    <p class="card-text">15.40 cm (6.1-inch) Super Retina XDR display.</p>
  <!--  <a href="#" class="btn btn-primary">add to cart</a> -->
  <form method="post">
    <input type="hidden" value="iphone 14" name="prod1" id="prod1">
    <input type="hidden" value="80000" name="prod1price" id="prod1price">
    <input type="hidden" value="20"  name="prod1" id="prod1quntity">
    <input class="btn btn-primary" type="submit" value="add to cart" name="saveprod1" id="saveprod1"> 
</form>
  </div>
</div>
</div>
<div class="col-md-3">
    <div class="card">
  <img class="card-img-top" src="image/iphone 14.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">iphone 14</h5>
    <p class="card-text">15.40 cm (6.1-inch) Super Retina XDR display.</p>
    <a href="#" class="btn btn-primary">add to cart</a>
  </div>
</div></div>
<div class="col-md-3">
    <div class="card">
  <img class="card-img-top" src="image/iphone 14.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">iphone 14</h5>
    <p class="card-text">15.40 cm (6.1-inch) Super Retina XDR display.</p>
    <a href="#" class="btn btn-primary">add to cart</a>
  </div>
</div></div>

    </div>
</div>                
</div>                