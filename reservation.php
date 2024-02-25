<?php
require "header.php";
?>

    
    <!-- end of nav bar -->

<br><br>
<div class="container">
    <h3 class="text-center"><br>Nouvelle Réservation<br></h3>   
    <div class="row">
        <div class="col-md-6 offset-md-3">   
 
        
        
        
    
<?php
if(isset($_SESSION['user_id'])){
    echo '<p class="text-white bg-dark text-center">Welcome '. $_SESSION['username'] .', Create your reservation here!</p>';
      
  //error handling:
    
    if(isset($_GET['error3'])){
        if($_GET['error3'] == "emptyfields") {   //douleuei bazw ta errors apo ta headers.. prp na bgalw to requiered
            echo '<h5 class="bg-danger text-center">Fill all fields, Please try again!</h5>';
        }
        else if($_GET['error3'] == "invalidfname") {   
            echo '<h5 class="bg-danger text-center">Invalid First Name, Please try again!</h5>';
        }
        else if($_GET['error3'] == "invalidlname") {   
            echo '<h5 class="bg-danger text-center">Invalid Last Name, Please try again!</h5>';
        }
        else if($_GET['error3'] == "invalidtele") {   
            echo '<h5 class="bg-danger text-center">Invalid Telephone, Pleast try again!</h5>';
        }
        else if($_GET['error3'] == "invalidcomment") {   
            echo '<h5 class="bg-danger text-center">Invalid Comment, Pleast try again!</h5>';
        }
        else if($_GET['error3'] == "invalidguests") {   
            echo '<h5 class="bg-danger text-center">Invalid Guests, Pleast try again!</h5>';
        }
        else if($_GET['error3'] == "full") {   
            echo '<h5 class="bg-danger text-center">Reservations are full this date and timezone, Please try again!</h5>';
        }
    }
        if(isset($_GET['reservation'])) {   
           if($_GET['reservation'] == "success"){ 
            echo '<h5 class="bg-success text-center">Your reservation was successfull!</h5>';
        }
        }
        echo'<br>';



    

    
    
     //reservation form  
    echo '  
        
    <div class="signup-form">
        <form action="includes/reservation.inc.php" method="post">
            <div class="form-group">
            <label> Nom</label>
                <input type="text" class="form-control" name="fname" placeholder="Nom" required="required">
                <small class="form-text text-muted">Le nom doit comporter entre 2 et 20 caractères.</small>
            </div>
            <div class="form-group">
            <label>Prénom </label>
                <input type="text" class="form-control" name="lname" placeholder="Prénom" required="required">
                <small class="form-text text-muted">Le prénom doit comporter entre 2 et 20 caractères.</small>
            </div>   
            <div class="form-group">
            <label>Entre la Date</label>
        	<input type="date" class="form-control" name="date" placeholder="Date" required="required">
            </div>
            <div class="form-group">
		<label>Entrez le fuseau horaire.</label>
		<select class="form-control" name="heure">
		<option>12:00 - 16:00</option>
		<option>16:00 - 20:00</option>
		<option>20:00 - 00:00</option>
		</select>
            </div>
            <div class="form-group">
            <label>Entrez le nombre de personnes.</label>
        	<input type="number" class="form-control" min="1" name="num_guests" placeholder="invités." required="required">
                <small class="form-text text-muted">Nombre minimal 1</small>
            </div>
            <div class="form-group">
            <label>Nom du restaurant</label>
            <input type="text" class="form-control" name="restaurant" placeholder="restaurant" required="required">
            <small class="form-text text-muted">Veuillez entrer le nom du restaurant.</small>
        </div>
            <div class="form-group">
            <label for="guests">Entre ton numero de telephone</label>
                <input type="telephone" class="form-control" name="tele" placeholder="Telephone" required="required">
                <small class="form-text text-muted">Telephone doit avoir 6-20 characters long</small>
            </div>
            <div class="form-group">
            <label>Commentaire</label>
                <textarea class="form-control" name="comments" placeholder="Commentaire" rows="3"></textarea>
                <small class="form-text text-muted">Commentaire doit avoir moins de 200 characters</small>
            </div>        
            <div class="form-group">
		<label class="checkbox-inline"><input type="checkbox" required="required"> J accepte les <a href="#">Conditions d utilisation</a> &amp; <a href="#">Politique de confidentialité</a></label>
            </div>
            <div class="form-group">
            <button type="submit" name="reserv-submit" class="btn btn-dark btn-lg btn-block">Soumettre la réservation.</button>
            </div>
        </form>
        <br><br>
    </div>
    ';  
    }

    else {
        echo '	<p class="text-center text-danger"><br>Vous êtes actuellement pas connecté !<br></p>
       <p class="text-center">Afin de faire une réservation, vous devez créer un compte !<br><br><p>';  
        
    }
    ?>

             
        </div>
    </div>
</div>
<br><br>


<?php
require "footer.php";
?>