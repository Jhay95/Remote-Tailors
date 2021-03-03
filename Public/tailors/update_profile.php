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

<body class="container">
    <div class ="container-fluid bg-3 text-center">
        <h2>
            Update Tailors Details
        </h2>
    </div>
<div class="container">
<div class ="d-flex align-items-center"> 
<form>
     <div class="form-group row">
     <label for="inputName" class="col-sm-1 col-form-label text-left"><h5>Name</h5></label>
     <div class="col-sm-11">
      <input type="Name" class="form-control" id="inputName" placeholder="Name">
     </div>
     </div>
  
    <div class="form-group row">
     <label for="Email" class="col-sm-1 col-form-label text-left"><h5>Email</h5></label>
     <div class="col-sm-11">
      <input type="Email" class="form-control" id="inputEmail" placeholder="Email">
     </div>
  </div>
  <div class="form-group row ">
     <label for="inputGender" class="col-sm-1 col-form-label text-left"><h5>Gender</h5></label>
     <div class="col-sm-11">
      <input type="Gender" class="form-control" id="inputGender" placeholder="Gender">
     </div>
  </div>
  <div class="form-group row ">
     <label for="inputPhone" class="col-sm-1 col-form-label text-left"><h5>Phone</h5></label>
     <div class="col-sm-11">
      <input type="Phone" class="form-control" id="inputPhone" placeholder="Phone">
     </div>
  </div>
  <div class="form-group row ">
     <label for="inputLocation" class="col-sm-1 col-form-label text-left"><h5>Location</h5></label>
     <div class="col-sm-11">
      <input type="Location" class="form-control" id="inputLocation" placeholder="Location">
     </div>
  </div>
  <div class="form-group row ">
     <label for="inputPassword" class="col-sm-1 col-form-label text-left"><h5>Password</h5></label>
     <div class="col-sm-11">
      <input type="Name" class="form-control" id="inputPassword" placeholder="Password">
     </div>
  </div>
  <div class="form-group row ">
     <label for="inputPassword" class="col-sm-1 col-form-label text-left "><h5>Confirm Password</h5></label>
     <div class="col-sm-11">
      <input type="Password" class="form-control" id="inputPassword" placeholder="Confirm Password">
     </div>
  </div>
  <div class="form-group row ">
     <label for="inputStyle" class="col-sm-1 col-form-label text-left"><h5>Style</h5></label>
     <div class="col-sm-11">
      <input type="Style" class="form-control" id="inputName" placeholder="Style">
     </div>
  </div>
  <div class="form-group row ">
     <label for="inputPrice" class="col-sm-1 col-form-label text-left"><h5>Price</h5></label>
     <div class="col-sm-11">
      <input type="Price" class="form-control" id="inputPrice" placeholder="Price">
     </div>
  </div>
  
  <div>
 <input class="form-control form-control-sm" id="formFileSm" type="file" />
</div>
<br>
<div>
    <button text-center type="cancel" class="btn btn-primary">Cancel</button>
    <button text-center type="update" class="btn btn-primary">Update</button>
</div>
</form>
</div> 
</div>
<br>
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
