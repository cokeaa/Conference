<?php
 require_once 'db/conn.php';

//Get values from post operation
if(isset($_POST['submit'])){
    //extract values from the _POST array
    $id = $_POST['id'];
    $fname= $_POST['firstname'];
    $lname= $_POST['lastname'];
    $gender= $_POST['gender'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $company= $_POST['company'];
    $sessionType = $_POST['session'];

//Call crud function
$result = $crud->editPartcipant($id, $fname, $lname, $gender, $sessionType,$address, $email, $company);
//Redirect to index.php
if($result){
    header("Location: viewrecords.php");
}
else{
    include 'includes/errormessage.php';
}
}

?>