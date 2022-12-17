
 <?php 
    $title = 'Registration';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
   $results = $crud->getSession();
?>


<h1 class="text-center">Register Now  </h1>

<form method="post" enctype="multipart/form-data" action="success.php">
    <div class="form-group">
        <label for="firstname">First Name</label>
        <input required type="text" class="form-control" id="firstname" name="firstname">
</div>
   
    <div class="form-group">
        <label for="lastname" >Last Name</label>
        <input required type="text" class="form-control" id="lastname" name="lastname">
    </div>
   
    <div class="form-group">
        <label for="gender" >Gender</label>
        <input type="text" class="form-control" id="gender" name="gender">
    </div>
    
    <div class="form-group">
        <label for="email">Address</label>
        <input required type="text" class="form-control" id="address"  name="address" >
    </div>
    <div class="form-group">
        <label for="company">Company Name</label>
        <input type="text" class="form-control" id="company"  name="company" >
    </div>
    <div class="form-group">
        <label for="email">Email Address</label>
        <input required type="text" class="form-control" id="email"  name="email"aria-describedby="emailHelp" >
        <small id="emailHelp" class="form-text text-muted">Email 
        will never be shared with anyone else</small>
    </div>
        </div>
        <div class="form-group">
        <label for="Session">Session Required</label>
        <select class="form-control" id="session" name="session">
            <?php while($r = $results->fetch(PDO::FETCH_ASSOC)){?>
                <option value="<?php echo $r['session_id'] ?>"><?php echo $r['name']; ?></option>
                <?php }?>  
        </select>
        
    <div class="container-fluid">
    <input type="file"accept="image/*" class="form-control me-2"  id="avatar"  name="avatar" >
  <small id="avatar" class="form-text text-success">Form upload is optional.</small>
  </div>
    
    <div class="d-grid gap-2">
          <button type="submit" name="submit"  class="btn btn-primary ">Submit</button>
            </div>         
</div>
</form>
<br/>
<br/>
<?php require_once 'includes/footer.php';
?>