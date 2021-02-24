 <?php
require_once("../head.php");
?>

<!-- Brand Logo Section -->
<nav class="navbar navbar-light bg-light navbar-expand-md">
    <a class="navbar-brand" href="#">Remote Tailor</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav ml-auto ">
            <li class="nav-item"><a class="nav-link" href="myAccount.php">My Account</a></li>
            <li class="nav-item"><a class="nav-link" href="signOut.php">Sign Out</a></li>           
         </ul>
     </div>  
</nav>

 <main>
    <div class="row">
         <div class= "list-group col-md-9 flex-start boot-box boot-box-border-width border border-secondary rounded">
          <li class="list-group-item">User Name:</li>
          <li class="list-group-item">Name:</li>
          <li class="list-group-item">Gender:</li>
          <li class="list-group-item">Location:</li>
          <li class="list-group-item">Email:</li>
          <li class="list-group-item">Phone Number:</li>
        </div>
         <br>
         <br>
         <br>
         
         <div class="list-group col-md-3 flex-end boot-box boot-box-border-width border border-secondary rounded d-flex justify-content-end mt-0"> 
            <form class="btn action =../action_page.php d-flex justify-content-center">
             <a href="#" class="btn btn-light" role="button">FIND ME A TAILOR</a>    
           </form>
            <a href="#" class="list-group-item disabled list-group-item-action d-flex justify-content-center ">Place Order</a>
            <a href="#" class="list-group-item disabled list-group-item-action diactivate d-flex justify-content-center">Contact Us</a>
            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-center">My Orders</a>
            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-center">My Tailors</a>
         </div>
         </div>
        
          
             
</main><!-- /.container -->
    
    <!-- Footer-->
 <?php
require_once('../footer.php')
?>



