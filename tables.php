<?php
require "header.php";
?>

<br><br>
<div class="container">
    <h3 class="text-center"><br>Modifier les Tables<br></h3>
    <div class="col-md-6 offset-md-3">

                           
<?php if(isset($_SESSION['user_id'])){
    if($_SESSION['role']==2){
        
        echo '<p class="text-white bg-dark text-center">Définir le nombre de tables pour une date spécifique.</p><br>';

        if(isset($_GET['error4'])){
        if($_GET['error4'] == "sqlerror1") {   //douleuei bazw ta errors apo ta headers.. prp na bgalw to requiered
            echo '<h5 class="bg-danger text-center">Error</h5>';
        }
        if($_GET['error4'] == "emptyfields") {  
            echo '<h5 class="bg-danger text-center">Error, Empty fields</h5>';
        }
        }
        if(isset($_GET['tables'])){
        if($_GET['tables'] == "success") {   
            echo '<h5 class="bg-success text-center">Les tables ont été soumises avec succès.</h5>';
        }
        }
        echo'
                                                 
<div class="signup-form">
        <form action="includes/tables.inc.php" method="post">
            <div class="form-group">
            <label>Entre la Date</label>
        	<input type="date" class="form-control" name="date_tables" placeholder="Date">
            </div>
            <div class="form-group">
            <label>Numbre de table </label>
            <input type="number" class="form-control" min="1" name="num_tables" required="required">
            <small class="form-text text-muted">Default number is 20</small>
            </div>
            <div class="form-group">
            <button type="submit" name="tables" class="btn btn-dark btn-lg btn-block">Soumettre la table</button>
            </div>
        </form>
        <br><br>
</div> ';
        
    }
}                
    else {
        echo '	<p class="text-center"><br>Vous avez pas de permission!<br><br></p>';          
    }      
?>
    </div>
</div>
<br><br>

<?php
require "footer.php";
?>