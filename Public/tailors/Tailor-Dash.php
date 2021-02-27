 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Remote Tailor Application</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-default bg-light">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Remote Tailor</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class=""><a href="#">MyAccount</a></li>
        <li><a href="#">SignOut</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid bg-3 text-center well well-sm">
 <div class="row border border-dark">
    <div class="col-sm-1 ">
       <div class="card text-justify" style="width:18rem;">
         <div class="card-body">
          <h6 class="card-title">SHOP NAME</h6>
          <img class="card-img-botton" src="Capture.JPG" alt="Card image">
          </div>
          </div> 
    </div>
    
    <div class="col-sm-5">
       <div class="card text-left" style="width:200px ">
          <div class="card-body">
          <h6 class="card-text">NAME</h6>
          <h6 class="card-text">LOCATION</h6>
          <h6 class="card-text">GENDER PREFERENCE</h6>
          <h6 class="card-text">STYLE</h6>
          </div>
        </div> 
    </div>
    
      <div class="col-sm-3">
       <div class="card text-left" style="width:200px ">
          <div class="card-body">
          <h6 class="card-text">RATE ME:</h6>
          <h6 class="card-text">EMAIL:</h6>
              <h6 class="card-text">PHONE:</h6>
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
<footer class="container-fluid bg-3 text-center">
        <div class="row">
            <div class="col-sm-3">&copy; Copyright <?php echo date("Y"); ?> </div>
            <div class="col-sm-3">Terms & Conditions</div>
            <div class="col-sm-3">Contact Us</div>
            <div class="col-sm-3">Feedback</div>
        </div>
</footer>

</body>
</html>
