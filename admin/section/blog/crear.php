<?php
include("../../bd.php"); 
if($_POST){

    // reception les valeurs du formulaire      
    $title=(isset($_POST['title']))?$_POST['title']:"";
    $subtitle=(isset($_POST['subtitle']))?$_POST['subtitle']:"";
    $image=(isset($_FILES["image"]["name"]))?$_FILES["image"]["name"]:"";
    $description=(isset($_POST['description']))?$_POST['description']:"";

    $date_image= new DateTime();
    $nombre_archive_image=($image!="")? $date_image->getTimestamp()."_".$image:""; 

    $tmp_image=$_FILES["image"]["tmp_name"];
    if($tmp_image!=""){
      move_uploaded_file($tmp_image,"../../../assets/img/blog/".$nombre_archive_image);
    }

    $sentencia=$conexion->prepare("INSERT INTO `blog` 
    (`ID`, `title`, `subtitle`, `image`, `description`) 
    VALUES (NULL, :title, :subtitle, :image, :description);");

    $sentencia->bindParam(":title",$title);
    $sentencia->bindParam(":subtitle",$subtitle);
    $sentencia->bindParam(":image",$nombre_archive_image);
    $sentencia->bindParam(":description",$description);

    $sentencia->execute();
    $message="Registre ajouté avec succès";
    header("Location:index.php?message=".$message);  

}

include("../../templates/header.php");
 ?>

<div class="card">
    <div class="card-header">
        Product 
    </div>
    <div class="card-body">
    <form action="" enctype="multipart/form-data" method="post">
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text"
            class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="title">
        </div>

    <div class="mb-3">
      <label for="subtitle" class="form-label">Subtitle</label>
      <input type="text"
        class="form-control" name="subtitle" id="subtitle" aria-describedby="helpId" placeholder="Subtitle">
    </div>
    
    <div class="mb-3">
      <label for="image" class="form-label">Image</label>
      <input type="file" class="form-control" name="image" id="image" placeholder="Image" aria-describedby="fileHelpId">
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Description:</label>
      <input type="text"
        class="form-control" name="description" id="description" aria-describedby="helpId" placeholder="Description">
    </div>


    <button type="subtmit" class="btn btn-success">Ajouter</button>

    <a name="" id="" class="btn btn-primary" href="index.php" role="button">Annuler</a>

    </form>
    </div>
    <div class="card-footer text-muted">
        
    </div>
</div>



<?php include("../../templates/footer.php") ?>


