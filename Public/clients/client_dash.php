<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Remote Tailors</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- Brand Logo Section -->
<nav class="navbar navbar-light bg-light navbar-expand-lg ">
    <a class="navbar-brand" href="index.php">Remote Tailor</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav ml-auto d-flex align-self-start">
            <li class="nav-item"><a class="nav-link" href="myAccount.php">My Account</a></li>
            <li class="nav-item"><a class="nav-link" href="signOut.php">Sign Out</a></li>           
         </ul>
     </div>  
</nav>

 <main >
   <form class="btn action =../action_page.php d-flex justify-content-end">
     <a href="#" class="btn btn-secondary" role="button">FIND ME A TAILOR</a>    
   </form>
    
      <div class="container row">
       <ul class= "list-group col-8">
          <li class="list-group-item">User Name:</li>
          <li class="list-group-item">Name:</li>
          <li class="list-group-item">Gender:</li>
          <li class="list-group-item">Location:</li>
          <li class="list-group-item">Email:</li>
          <li class="list-group-item">Phone Number:</li>
       </ul>   
         
        <div class= "list-group col-4 d-flex justify-content-end margin-right: 0">
            <a href="#" class="list-group-item disabled list-group-item-action">Place Order</a>
            <a href="#" class="list-group-item disabled list-group-item-action diactivate">Contact Us</a>
            <a href="#" class="list-group-item list-group-item-action">My Orders</a>
            <a href="#" class="list-group-item list-group-item-action">My Tailors</a>
         </div>
         <br><br>
         
          
      </div>
          
             
    </main><!-- /.container -->
    
<footer class="page-footer mt-auto"> <!--clinton-->
    <div class="container text-center">
        <div class="row">
            <div class="col">&copy; Copyright <?php echo date("Y"); ?> </div>
            <div class="col">Terms & Conditions</div>
            <div class="col">Contact Us</div>
            <div class="col">Feedback</div>
        </div>
    </div>
</footer>
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>




