<?php 
include("../../bd.php"); 

if(isset($_GET['txtID'])){ 
    
  $txtID=( isset($_GET['txtID']) )?$_GET['txtID']:"";

  $sentencia=$conexion->prepare(" SELECT * FROM tbl_entre WHERE id=:id ");
  $sentencia->bindParam(":id",$txtID);
  $sentencia->execute();
  $registre=$sentencia->fetch(PDO::FETCH_LAZY);  

  $date=$registre['date'];
  $title=$registre['title'];
  $image=$registre["image"];
  $description=$registre['description'];
  
}

if($_POST){


//Reception
$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$date=(isset($_POST['date']))?$_POST['date']:"";
$title=(isset($_POST['title']))?$_POST['title']:"";
$description=(isset($_POST['description']))?$_POST['description']:"";

$sentencia=$conexion->prepare("UPDATE `tbl_entre` 
SET date=:date, title=:title, description=:description WHERE id=:id");

$sentencia->bindParam(":date",$date);
$sentencia->bindParam(":title",$title);
$sentencia->bindParam(":description",$description);
$sentencia->bindParam(":id",$txtID);
$sentencia->execute();

if($_FILES["image"]["tmp_name"]!="") {
  $image=(isset($_FILES["image"]["name"]))?$_FILES["image"]["name"]:"";
  $date_image= new DateTime();
  $nombre_archive_image=($image!="")? $date_image->getTimestamp()."_".$image:""; 

  $tmp_image=$_FILES["image"]["tmp_name"];
  
  move_uploaded_file($tmp_image,"../../../assets/img/about/".$nombre_archive_image);          
  

  // supprimer des fichiers
  $sentencia=$conexion->prepare("SELECT image FROM tbl_entre WHERE id=:id ");
  $sentencia->bindParam(":id",$txtID);
  $sentencia->execute();
  $registre_image=$sentencia->fetch(PDO::FETCH_LAZY);

  if(isset($registre_image["image"])){      
      if(file_exists("../../../assets/img/about/".$registre_image["image"])){        
          unlink("../../../assets/img/about/".$registre_image["image"]);        
      }
      
  }
  $sentencia=$conexion->prepare("UPDATE tbl_entre SET image=:image WHERE id=:id ");          
  $sentencia->bindParam(":image",$nombre_archive_image); 
  $sentencia->bindParam(":id",$txtID); 
  $sentencia->execute();
  $image=$nombre_archive_image;
}
$message="Registre modifié avec succès";
header("Location:index.php?message=".$message);
}


include("../../templates/header.php")
?>

<div class="card">
    <div class="card-header">
        Entre
    </div>
    <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">

    <div class="mb-3">
      <label for="" class="form-label">ID:</label>
      <input type="text"
        class="form-control" readonly value="<?php echo $txtID?>" name="txtID" id="txtID" aria-describedby="helpId" placeholder="">      
    </div>


    <div class="mb-3">
          <label for="date" class="form-label">Date:</label>
          <input type="date"
            class="form-control" value="<?php echo $date?>" name="date" id="date" aria-describedby="helpId" placeholder="Date"> 
    </div>

    <div class="mb-3">
      <label for="title" class="form-label">Title:</label>
      <input type="text"
        class="form-control" value="<?php echo $title?>" name="title" id="title" aria-describedby="helpId" placeholder="Title">
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Description :</label>
      <input type="text"
        class="form-control" value="<?php echo $description?>" name="description" id="description" aria-describedby="helpId" placeholder="Description">
    </div>

    <div class="mb-3">
      <label for="image" class="form-label">Image :</label>
      <img width="50" src="../../../assets/img/about/<?php echo $image;?>" /> 
      <input type="file" class="form-control" name="image" id="image" placeholder="Image" aria-describedby="fileHelpId">
      </div>

    <button type="subtmit" class="btn btn-success">Mise à jour</button>

    <a name="" id="" class="btn btn-primary" href="index.php" role="button">Annuler</a>

    </form>


        
    </div>
    <div class="card-footer text-muted">        
    </div>
</div>

<?php include("../../templates/footer.php") ?>

