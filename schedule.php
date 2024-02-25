<?php
require "header.php";
?>




<br><br>
<div class="container">
    <h3 class="text-center"><br>Modifier l'horaire<br></h3>
    <div class="col-md-6 offset-md-3">

                
                
<?php if(isset($_SESSION['user_id'])){
    if($_SESSION['role']==2){
        
        echo '<p class="text-white bg-dark text-center">Définir heure pour une date spécifique.</p><br>';

        if(isset($_GET['error5'])){
        if($_GET['error5'] == "sqlerror1") {   //douleuei bazw ta errors apo ta headers.. prp na bgalw to requiered
            echo '<h5 class="bg-danger text-center">Error</h5>';
        }
        if($_GET['error5'] == "emptyfields") {  
            echo '<h5 class="bg-danger text-center">Error, Empty fields</h5>';
        }
        }
        if(isset($_GET['schedule'])){
        if($_GET['schedule'] == "success") {   
            echo '<h5 class="bg-success text-center">horaire a été soumis avec succès.</h5>';
        }
        }
        echo'
                   
                    
                
<div class="signup-form">
        <form action="includes/schedule.inc.php" method="post">
            <div class="form-group">
            <label>Entre la Date</label>
        	<input type="date" class="form-control" name="date" placeholder="Date" required="required">
            </div>
            <div class="form-group">
            <label>Heure ouverture</label>
            <input type="time" class="form-control" name="ouverture" required="required">
            </div>
            <div class="form-group">
            <label>Heure de fermeture</label>
            <input type="time" class="form-control" name="fermeture" required="required">
            </div>
            <div class="form-group">
            <button type="submit" name="schedule" class="btn btn-dark btn-lg btn-block">Soumettre Heure .</button>
            </div>
        </form>
        <br><br>
</div>';       
    }            
}       
    else {
        echo '<p class="text-center"><br>Vous avez pas de permission<br><br></p>';  
    }           
?>
        
    </div>
</div>
<br><br>

<?php
require "footer.php";
?>