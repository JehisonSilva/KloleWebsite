<?php 
include("../../bd.php"); 

if(isset($_GET['txtID'])){ 
    
    $txtID=( isset($_GET['txtID']) )?$_GET['txtID']:"";

    $sentencia=$conexion->prepare(" SELECT * FROM blog WHERE id=:id ");
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();
    $registre=$sentencia->fetch(PDO::FETCH_LAZY);

    $title=$registre['title'];
    $subtitle=$registre['subtitle'];
    $image=$registre["image"];
    $description=$registre['description'];

}

if($_POST){
    
        // reception les valeurs du formulaire      
        $txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
        $title=(isset($_POST['title']))?$_POST['title']:"";
        $subtitle=(isset($_POST['subtitle']))?$_POST['subtitle']:""; 
        $description=(isset($_POST['description']))?$_POST['description']:"";

        $sentencia=$conexion->prepare("UPDATE blog
        SET 
        title=:title,
        subtitle=:subtitle, 
        description=:description,
        WHERE id=:id ");

        $sentencia->bindParam(":title",$title);
        $sentencia->bindParam(":subtitle",$subtitle);        
        $sentencia->bindParam(":description",$description);
        $sentencia->execute();

        if($_FILES["image"]["tmp_name"]!="") {
          $image=(isset($_FILES["image"]["name"]))?$_FILES["image"]["name"]:"";
          $date_image= new DateTime();
          $nombre_archive_image=($image!="")? $date_image->getTimestamp()."_".$image:""; 
  
          $tmp_image=$_FILES["image"]["tmp_name"];
          
          move_uploaded_file($tmp_image,"../../../assets/img/blog/".$nombre_archive_image);          
          

          // supprimer des fichiers
          $sentencia=$conexion->prepare("SELECT image FROM blog WHERE id=:id ");
          $sentencia->bindParam(":id",$txtID);
          $sentencia->execute();
          $registre_image=$sentencia->fetch(PDO::FETCH_LAZY);
      
          if(isset($registre_image["image"])){
              
              if(file_exists("../../../assets/img/blog/".$registre_image["image"])){        
                  unlink("../../../assets/img/blog/".$registre_image["image"]);        
              }
              
          }
          $sentencia=$conexion->prepare("UPDATE blog SET image=:image WHERE id=:id ");          
          $sentencia->bindParam(":image",$nombre_archive_image); 
          $sentencia->bindParam(":id",$txtID); 
          $sentencia->execute();
        }
        $message="Registre modifié avec succès";
        header("Location:index.php?message=".$message);
      }

include("../../templates/header.php") 
?>

<div class="card">
    <div class="card-header">
        Product 
    </div>
    <div class="card-body">
    <form action="" enctype="multipart/form-data" method="post">

    <div class="mb-3">
      <label for="" class="form-label">ID</label>
      <input type="text"
        class="form-control" 
        readonly
        name="txtID" 
        value="<?php echo $txtID; ?>"
        id="txtID" aria-describedby="helpId" placeholder="">
    </div>


      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text"
        class="form-control" value="<?php echo $title;?>"  name="title" id="title" aria-describedby="helpId" placeholder="title">
      </div>
    <div class="mb-3">
      <label for="subtitle" class="form-label">Subtitle</label>
      <input type="text"
        class="form-control" value="<?php echo $subtitle;?>" name="subtitle" id="subtitle" aria-describedby="helpId" placeholder="Subtitle">
    </div>    
    <div class="mb-3">
      <label for="image" class="form-label">Image:</label>      
      <img width="50" src="../../../assets/img/blog/<?php echo $image;?>" /> 
      <input type="file" class="form-control" name="image" id="image" placeholder="Image" aria-describedby="fileHelpId">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description:</label>
      <input type="text"
        class="form-control" value="<?php echo $description;?>" name="description" id="description" aria-describedby="helpId" placeholder="Description">
    </div>
       
    <button type="subtmit" class="btn btn-success">Mise à jour</button>
    <a name="" id="" class="btn btn-primary" href="index.php" role="button">Annuler</a>
    </form>
    </div>
    <div class="card-footer text-muted">
        
    </div>
</div>


<?php include("../../templates/footer.php") ?>




