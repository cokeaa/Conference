<?php 
    $title = 'Success';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    require_once 'sendemail.php';

    if(isset($_POST['submit'])){
        //extract values from the _POST array
        $fname= $_POST['firstname'];
        $lname= $_POST['lastname'];
        $gender= $_POST['gender'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $company= $_POST['company'];
        $sessionType = $_POST['session'];
    
        $orig_file = $_FILES["avatar"]["tmp_name"];
        $ext = pathinfo($_FILES["avatar"]["name"],PATHINFO_EXTENSION);
        $target_dir = 'uploads/';
        $destination = "$target_dir$email. $ext";
        move_uploaded_file($orig_file,$destination);

      
        //Call function to insert and track if success or not
        $isSuccess = $crud->insertParticipant($fname, $lname, $gender, $sessionType,$destination,$address,$email, $company);
        $sessionType = $crud->getSessionById($sessionType);
    if($isSuccess){
        SendEmail::SendMail($email, 'Welcome to G-Conference 2022', 'You have registered successfully for Coference 2022');
        include 'includes/successmessage.php';
         }
         else{
            include 'includes/errormessage.php';
         }
    }
?>
   
     <img src="<?php echo $destination;?>" class="rounded" style="width: 20%; height: 20% "/>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
            <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?>
            </h5>
            <h6 class="card-subtitle mb-2 text muted">
                    <?php echo $sessionType['name']; ?>
            </h6>  
            <p class="card-text">   
                Gender: <?php echo $_POST['gender']; ?>
            </p>
            <p class="card-text">   
                Address: <?php echo $_POST['address']; ?>
            </p>
                <p class="card-text">   
                    Email Address: <?php  echo $_POST['email']; ?>
            </p>
                <p class="card-text">   
                    Company Name: <?php echo $_POST['company']; ?>
            </p>
    </div>
</div>
    <?php
        
?>
<br/>
<br/>
<br/>
    <?php require_once 'includes/footer.php';
 ?>