<?php 
include("../../bd.php"); 

if(isset($_GET['txtID'])){     

    $txtID=( isset($_GET['txtID']) )?$_GET['txtID']:"";
    $sentencia=$conexion->prepare("SELECT image FROM blog WHERE id=:id ");
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();
    $registre_image=$sentencia->fetch(PDO::FETCH_LAZY);
    if(isset($registre_image["image"])){        
        if(file_exists("../../../assets/img/blog/".$registre_image["image"])){        
            unlink("../../../assets/img/blog/".$registre_image["image"]);        
        }        
    }
    $sentencia=$conexion->prepare("DELETE FROM blog WHERE id=:id ");
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();
}


// selection 
$sentencia=$conexion->prepare("SELECT * FROM `blog`");
$sentencia->execute();
$liste_blog=$sentencia->fetchAll(PDO::FETCH_ASSOC);

include("../../templates/header.php") ?>
<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Ajouter registre</a>
    </div>
    <div class="card-body">
      
    <div class="table-responsive-sm">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Subtitle</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
                <tbody>                     
                    <?php foreach($liste_blog as $registre){ ?>
                    <tr class="">          
                        <td scope="col"><?php echo $registre['ID'];?></td>
                        <td scope="col">
                        <h6><?php echo $registre['title'];?></h6>
                        <?php echo $registre['subtitle'];?>
                    </td>                        
                        <td scope="col">
                        <img width="50" src="../../../assets/img/blog/<?php echo $registre['image'];?>"/>     
                    </td>
                        <td scope="col"><?php echo $registre['description'];?></td>
                        <td scope="col"><?php echo $registre['image'];?></td>
                        <td scope="col">
                        <a name="" id="" class="btn btn-info" href="edite.php?txtID=<?php echo $registre['ID'];?>" role="button">Éditer</a>
                        <a name="" id="" class="btn btn-danger" href="index.php?txtID=<?php echo $registre['ID'];?>" role="button">Supprimer</a>
                        </td>
                    </tr>
                    <?php } ?>
            </tbody>
        </table>
    </div>


    </div>
    
    </div>
</div>

<?php include("../../templates/footer.php") ?>
