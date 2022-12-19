<?php 
    $title = 'View Record';

   require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';

    //Get participants by id
    if(!isset($_GET['id'])){
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");

                    
    }else{
        $id = $_GET['id'];
        $result = $crud->getParticipantDetails($id);
                  
?>
 <img src="<?php echo empty($result['avatar_path']) ? "uploads/blank.png" : $result['avatar_path'];?>" 
 class="rounded-circle" style="width: 20%; height: 15% "/>

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">
         <?php echo $result['firstname'] .' ' . $result['lastname']; ?>
        </h5>
            <h6 class="card-title">
                <?php echo  $result ['name']; ?>
        </h6>
        <p class="card-text">   
            Gender: <?php echo  $result ['gender']; ?>
        </p>
        <p class="card-text">   
                 Address: <?php  echo  $result ['address']; ?>
        </p>
            <p class="card-text">   
                Email Address: <?php  echo  $result ['emailaddress']; ?>
        </p>
            <p class="card-text">   
                Company Name: <?php echo  $result ['company']; ?>
        </p>
    </div>
</div>
        <br/>
        <a href="view.php" class= "btn btn-info">Back to List</a>
        <a href="edit.php?id=<?php echo $result['participant_id']?>" class= "btn btn-warning">Edit</a>
        <a onclick="return confirm('Are you sure you want to delete this record?');"
        href="delete.php?id=<?php echo $result['participant_id']?>" class= "btn btn-danger">Delete</a>

    <?php }?>

<br/>
<br/>
    <?php require_once 'includes/footer.php'; ?>
    