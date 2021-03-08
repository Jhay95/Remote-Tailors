<!---!DOC HTML Starts here--->
<?php
require_once(INC_PATH . 'head.php');
?>

<?php
require_once(INC_PATH . 'navigation.php');
?>

<div class="container-fluid bg-3 text-center well well-sm">
 <div class="row border border-dark">
    <div class="col-sm-1 ">
       <div class="card text-justify" style="width:18rem;">
         <div class="card-body">
          <h6 class="card-title">SHOP NAME</h6>
          <img class="card-img-button" src="Capture.JPG" alt="Card image">
          </div>
          </div> 
    </div>
    
    <div class="col-sm-5">
       <div class="card text-left" style="width:200px ">
          <div class="card-body">
          <h6 class="card-text">NAME: <em><?php echo $data['tailor']['tailor_fname'] . " " . $data['tailor']['tailor_lname']; ?><em></h6>
          <h6 class="card-text">LOCATION: <em><?php echo $data['tailor']['tailor_city']; ?></em></h6>
          <h6 class="card-text">GENDER PREFERENCE: : <em><?php echo $data['tailor']['tailor_pref']; ?></em></h6>
          <h6 class="card-text">STYLE: <em><?php echo $data['tailor']['tailor_style']; ?></em></h6>
          </div>
        </div> 
    </div>
    
      <div class="col-sm-3">
       <div class="card text-left" style="width:200px ">
          <div class="card-body">
          <h6 class="card-text">RATE ME:</h6>
          <h6 class="card-text">EMAIL: <em><?php echo $data['tailor']['tailor_email']; ?></em></h6>
              <h6 class="card-text">PHONE: <em><?php echo $data['tailor']['tailor_phone']; ?></em></h6>
          </div>
        </div> 
    </div>
    
    <div class="col-sm-3">
     <div class="well well-sm text-center">
       <div class="btn-group-vertical ">
          <button type="button" class="btn btn-secondary">Edit MY PROFILE</button>
          <button type="button" class="btn btn-secondary">UPLOAD TO DISPLAY</button>
          <button type="button" class="btn btn-secondary">UPLOAD YOUR WORK</button>
        </div>
     </div>
       </div>
    </div>
</div>

  
<div class="container-fluid bg-3 text-center">
<div class="col-md-10">
    <div class="container-fluid bg-3 text-center">    
   <div class="row">
    <div class="col-md-2">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-md-2"> 
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-md-2"> 
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-md-2">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-md-2">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br>

<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-md-2">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-md-2"> 
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-2"> 
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-md-2">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
     <div class="col-md-2">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100% " alt="Image">
    </div>
  </div>
</div>
</div><br><br>
  
  <div class="col-md-2">
    <div class="well well-sm">
       <div class="btn-group-vertical ">
        <button type="button" class="btn btn-secondary">Clients</button>
        <button type="button" class="btn btn-secondary">My Orders</button>
        <button type="button" class="btn btn-secondary">MY CLIENTS</button>
       </div>
     </div>
    <div class="well well-sm ">
     <div class="card text-left" style="width: 18rem;">
      <div class="card-body ">
      <h5 class="card-title"><h5>MY BILLBOARD</h5></h5>
      </div>
      </div>
     </div>
     </div>
</div>

<!--  footer -->
<?php
require_once(INC_PATH . 'footer.php');
?>
