<?php 
include("../../bd.php"); 

if($_POST){

    $date=(isset($_POST['date']))?$_POST['date']:"";
    $title=(isset($_POST['title']))?$_POST['title']:"";
    $description=(isset($_POST['description']))?$_POST['description']:"";
    $image=(isset($_FILES["image"]["name"]))?$_FILES["image"]["name"]:"";

    $date_image= new DateTime();
    $nombre_archive_image=($image!="")? $date_image->getTimestamp()."_".$image:""; 

    $tmp_image=$_FILES["image"]["tmp_name"];
    if($tmp_image!=""){
      move_uploaded_file($tmp_image,"../../../assets/img/about/".$nombre_archive_image);
    }

    $sentencia=$conexion->prepare("INSERT INTO `tbl_entre` 
    (`ID`, `date`, `title`,`description` , `image`) 
    VALUES (NULL, :date, :title, :description, :image);");


    $sentencia->bindParam(":date",$date);
    $sentencia->bindParam(":title",$title);
    $sentencia->bindParam(":description",$description);
    $sentencia->bindParam(":image",$nombre_archive_image);
    $sentencia->execute();

    $message="Registre ajouté avec succès";
    header("Location:index.php?message=".$message);

    
}

include("../../templates/header.php") ?>



<div class="card">
    <div class="card-header">
        Entre
    </div>
    <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
          <label for="date" class="form-label">Date</label>
          <input type="date"
            class="form-control" name="date" id="date" aria-describedby="helpId" placeholder="Date"> 
        </div>

    <div class="mb-3">
      <label for="title" class="form-label">Title :</label>
      <input type="text"
        class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Title">
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Description :</label>
      <input type="text"
        class="form-control" name="description" id="description" aria-describedby="helpId" placeholder="Description">
    </div>

    <div class="mb-3">
      <label for="image" class="form-label">Image :</label>
      <input type="file" class="form-control" name="image" id="image" placeholder="Image" aria-describedby="fileHelpId">
      </div>

    <button type="subtmit" class="btn btn-success">Ajouter</button>

    <a name="" id="" class="btn btn-primary" href="index.php" role="button">Annuler</a>

    </form>


        
    </div>
    <div class="card-footer text-muted">        
    </div>
</div>

<?php include("../../templates/footer.php") ?>


