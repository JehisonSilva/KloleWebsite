<?php
include("../../bd.php"); 

if($_POST){
        $image=(isset($_FILES["image"]["name"]))?$_FILES["image"]["name"]:"";
        $nom=(isset($_POST['nom']))?$_POST['nom']:"";
        $poste=(isset($_POST['poste']))?$_POST['poste']:"";
        $twitter=(isset($_POST['twitter']))?$_POST['twitter']:"";
        $facebook=(isset($_POST['facebook']))?$_POST['facebook']:"";
        $linkedin=(isset($_POST['linkedin']))?$_POST['linkedin']:"";

        $date_image= new DateTime();
            $nombre_archive_image=($image!="")? $date_image->getTimestamp()."_".$image:""; 

            $tmp_image=$_FILES["image"]["tmp_name"];
            if($tmp_image!=""){
              move_uploaded_file($tmp_image,"../../../assets/img/team/".$nombre_archive_image);
        }

        $sentencia=$conexion->prepare("INSERT INTO `tbl_team` 
        (`ID`, `image`,`nom`,`poste`,`twitter`,`facebook` ,`linkedin`) 
        VALUES (NULL, :image, :nom, :poste, :twitter, :facebook, :linkedin);");
    
        $sentencia->bindParam(":image",$nombre_archive_image);
        $sentencia->bindParam(":nom",$nom);
        $sentencia->bindParam(":poste",$poste);
        $sentencia->bindParam(":twitter",$twitter);
        $sentencia->bindParam(":facebook",$facebook);
        $sentencia->bindParam(":linkedin",$linkedin);
        
        $sentencia->execute();
        $message="Registre modifié avec succès";
        header("Location:index.php?message=".$message);

}


include("../../templates/header.php") ?>

<div class="card">
    <div class="card-header">
        Base de données de l'équipe
    </div>
    <div class="card-body">
    <form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="image" class="form-label">Image:</label>
        <input type="file"
        class="form-control" name="image" id="image" aria-describedby="helpId" placeholder="">
    </div>
    <div class="mb-3">
      <label for="nom" class="form-label">Nom</label>
      <input type="text"
        class="form-control" name="nom" id="nom" aria-describedby="helpId" placeholder="Nom">
    </div>
    <div class="mb-3">
      <label for="poste" class="form-label">Poste</label>
      <input type="text"
        class="form-control" name="poste" id="poste" aria-describedby="helpId" placeholder="Poste">
    </div>
    <div class="mb-3">
      <label for="twitter" class="form-label">Twitter:</label>
      <input type="text"
        class="form-control" name="twitter" id="twitter" aria-describedby="helpId" placeholder="Twitter">
    </div>
    <div class="mb-3">
      <label for="facebook" class="form-label">Facebook:</label>
      <input type="text"
        class="form-control" name="facebook" id="facebook" aria-describedby="helpId" placeholder="Facebook">
    </div>
    <div class="mb-3">
      <label for="linkedin" class="form-label">Linkedin:</label>
      <input type="text"
        class="form-control" name="linkedin" id="linkedin" aria-describedby="helpId" placeholder="Linkedin">
    </div>
    <button type="subtmit" class="btn btn-success">Ajouter</button>
    <a name="" id="" class="btn btn-primary" href="index.php" role="button">Annuler</a>
    </form>        
    </div>
    <div class="card-footer text-muted">      
    </div>
</div>

<?php include("../../templates/footer.php") ?>


