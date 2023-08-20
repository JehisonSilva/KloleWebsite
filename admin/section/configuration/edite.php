<?php 
include("../../bd.php"); 

if(isset($_GET['txtID'])){
    // récupérer les données ID
    $txtID=( isset($_GET['txtID']) )?$_GET['txtID']:"";
    
    $sentencia=$conexion->prepare("SELECT * FROM tbl_config WHERE id=:id ");
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();
    $registre=$sentencia->fetch(PDO::FETCH_LAZY);

    $nombreconfig=$registre['nombreconfig'];
    $valeur=$registre['valeur'];
    }

    if($_POST){
  
        // reception les valeurs du formulaire 
        $nombreconfig=(isset($_POST['nombreconfig']))?$_POST['nombreconfig']:"";
        $valeur=(isset($_POST['valeur']))?$_POST['valeur']:"";
    
        $sentencia=$conexion->prepare("UPDATE `tbl_config` 
        SET nombreconfig=:nombreconfig, valeur=:valeur WHERE id=:id;");
    
        $sentencia->bindParam(":nombreconfig",$nombreconfig);
        $sentencia->bindParam(":valeur",$valeur);
        $sentencia->bindParam(":id",$txtID);    
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
          <label for="txtID" class="form-label">ID:</label>
          <input readonly value="<?php echo $txtID;?>"  type="text"
            class="form-control" name="txtID" id="txtID" aria-describedby="helpId" placeholder="ID">
         
        </div>

        <div class="mb-3">
          <label for="nombreconfig" class="form-label">Nom:</label>
          <input type="text" value="<?php echo $nombreconfig;?>" 
            class="form-control" name="nombreconfig" id="nombreconfig" aria-describedby="helpId" placeholder="Nom">
        </div>

        <div class="mb-3">
          <label for="valeur" class="form-label">Valeur:</label>
          <input type="text" value="<?php echo $valeur;?>" 
            class="form-control" name="valeur" id="valeur" aria-describedby="helpId" placeholder="Valeur">
        </div>

        <button type="subtmit" class="btn btn-success">Mise à jour</button>
        <a name="" id="" class="btn btn-primary" href="index.php" role="button">Annuler</a>

        </form>

        </div>
        <div class="card-footer text-muted">
            
        </div>
    </div>

<?php include("../../templates/footer.php") ?>




