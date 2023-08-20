<?php 
include("../../bd.php"); 

if($_POST){
  
        // reception les valeurs du formulaire 
        $nombreconfig=(isset($_POST['nombreconfig']))?$_POST['nombreconfig']:"";
        $valeur=(isset($_POST['valeur']))?$_POST['valeur']:"";
    
        $sentencia=$conexion->prepare("INSERT INTO `tbl_config` (`ID`, `nombreconfig`, `valeur`) VALUES (NULL, :nombreconfig, :valeur );");
    
        $sentencia->bindParam(":nombreconfig",$nombreconfig);
        $sentencia->bindParam(":valeur",$valeur);
    
        $sentencia->execute();
        $message="Registre ajouté avec succès";
        header("Location:index.php?message=".$message);  
    
    }


include("../../templates/header.php") ?>

<div class="card">
        <div class="card-header">
            Configuration
        </div>
        <div class="card-body">        
        <form action="" method="post">  
        <div class="mb-3">
          <label for="nombreconfig" class="form-label">Nom:</label>
          <input type="text"
            class="form-control" name="nombreconfig" id="nombreconfig" aria-describedby="helpId" placeholder="Nom">
        </div>
        <div class="mb-3">
          <label for="valeur" class="form-label">Valeur:</label>
          <input type="text"
            class="form-control" name="valeur" id="valeur" aria-describedby="helpId" placeholder="Valeur">
        </div>
        <button type="subtmit" class="btn btn-success">Ajouter</button>
        <a name="" id="" class="btn btn-primary" href="index.php" role="button">Annuler</a>
        </form>
        </div>
        <div class="card-footer text-muted">            
        </div>
    </div>

<?php include("../../templates/footer.php") ?>


