<?php 
    $title = 'Edit Record';
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';

    $results = $crud->getSession();

    if(!isset($_GET['id']))
    {
        //echo 'error';
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");
    }
    else{
        $id = $_GET['id'];
        $participants = $crud->getParticipantDetails($id);
    
?>
    
    <h1 class="text-center">Edit Record  </h1>

    <form method="post" action="editpost.php">
        <input type="hidden" name = 'id' value="<?php echo $participants['particpants_id']?>" />
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" value="<?php echo $participants['firstname']?>"id="firstname" name="firstname">
    </div>
               <div class="form-group">
            <label for="lastname" >Last Name</label>
            <input type="text" class="form-control" value="<?php echo $partcipants['lastname'] ?>"id="lastname" name="lastname">
        </div>
               <div class="form-group">
            <label for="gender" >Gender</label>
            <input type="text" class="form-control" value="<?php echo $partcipants['gender'] ?>"id="gender" name="gender">
        </div>
            <div class="form-group">
            <label for="session">Required Session</label>
            <select class="form-control" id="session" name="session">
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                    <option value="<?php echo $r['session_id'] ?>" <?php if($r['session_id']
                    == $attendee['session_id']) echo 'selected '?>>
                    <?php echo $r['name']; ?>
                </option>
                <?php }?>
            </select>
        </div>
        <div class="form-group">
            <label for="contact">Address</label>
            <input type="text" class="form-control" value="<?php echo $partcipants['address'] ?>"id="address"  name="address"aria-describedby="addressHelp" >
        </div>
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="text" class="form-control" value="<?php echo $participants['emailaddress'] ?>"id="email"  name="email"aria-describedby="emailHelp" >
            <small id="emailHelp" class="form-text text-muted">Email 
            will never be shared with anyone else</small>
        </div>
               <div class="form-group">
            <label for="company">Company Name</label>
            <input type="text" class="form-control" value="<?php echo $partcipants['company'] ?>"id="company"  name="company"aria-describedby="companyHelp" >
        </div>
        
            <a href="viewrecords.php" class="btn btn-secondary">Back to List</a>
              <button type="submit" name="submit"  class="btn btn-success btn-block ">Save Changes</button>
        
  

    </form>
    <?php } ?>
<br/>
<br/>
    <?php require_once 'includes/footer.php';
 ?>