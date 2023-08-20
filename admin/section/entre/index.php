<?php
include("../../bd.php"); 

// supprimer registré

if(isset($_GET['txtID'])){     

    $txtID=( isset($_GET['txtID']) )?$_GET['txtID']:"";

    $sentencia=$conexion->prepare("SELECT image FROM tbl_entre WHERE id=:id ");
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();
    $registre_image=$sentencia->fetch(PDO::FETCH_LAZY);

    if(isset($registre_image["image"])){
        
        if(file_exists("../../../assets/img/about/".$registre_image["image"])){        
            unlink("../../../assets/img/about/".$registre_image["image"]);        
        }
        
    }

    $sentencia=$conexion->prepare("DELETE FROM tbl_entre WHERE id=:id ");
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();

}



// selection 
$sentencia=$conexion->prepare("SELECT * FROM `tbl_entre`");
$sentencia->execute();
$liste_entre=$sentencia->fetchAll(PDO::FETCH_ASSOC);



include("../../templates/header.php") 
?>

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
                    <th scope="col">Date</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($liste_entre as $registre){ ?>
                <tr class="">            
                    <td><?php echo $registre['ID'];?></td>
                    <td><?php echo $registre['date'];?></td>
                    <td><?php echo $registre['title'];?></td>
                    <td><?php echo $registre['description'];?></td>
                    <td><img width="50" src="../../../assets/img/about/<?php echo $registre['image'];?>"/></td>
                    <td>
                    <a name="" id="" class="btn btn-info" href="edite.php?txtID=<?php echo $registre['ID'];?>" role="button">Éditer</a>
                         | 
                    <a name="" id="" class="btn btn-danger" href="index.php?txtID=<?php echo $registre['ID'];?>" role="button">Supprimer</a> 
                    </td>
                </tr> 
            <?php } ?>             
            </tbody>
        </table>
    </div>
    
    </div>
    <div class="card-footer text-muted">
      
    </div>
</div>

<?php include("../../templates/footer.php") ?>
