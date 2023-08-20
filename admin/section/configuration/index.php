<?php 
include("../../bd.php"); 

if(isset($_GET['txtID'])){
    
//éléver id
$txtID=( isset($_GET['txtID']) )?$_GET['txtID']:"";
$sentencia=$conexion->prepare("DELETE FROM tbl_config WHERE id=:id ");
$sentencia->bindParam(":id",$txtID);
$sentencia->execute();

}    

// selection 
$sentencia=$conexion->prepare("SELECT * FROM `tbl_config`");
$sentencia->execute();
$liste_config=$sentencia->fetchAll(PDO::FETCH_ASSOC);

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
                    <th scope="col">Nom de la configuration</th>
                    <th scope="col">Valeur</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($liste_config as $registre){ ?>
                <tr class="">
                    <td><?php echo $registre['ID'];?></td>
                    <td><?php echo $registre['nombreconfig'];?></td>
                    <td><?php echo $registre['valeur'];?></td>
                    <td>
                    <a name="" id="" class="btn btn-info" href="edite.php?txtID=<?php echo $registre['ID'];?>" role="button">Éditer</a>
                         | 
                    <a name="" id="" class="btn btn-danger" href="index.php?txtID=<?php echo $registre['ID'];?>" role="button">Supprimer</a>                     
                    </td>
                <?php } ?>
                </tr>
              
            </tbody>
        </table>
    </div>
    

    </div>
    <div class="card-footer text-muted">
        
    </div>
</div>


<?php include("../../templates/footer.php") ?>
