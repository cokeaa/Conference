<?php
    class crud{
        // private database object\
        private $db;

        //constructor to initialize private variable to the database connection
        function __construct($conn){
            $this->db= $conn;
        }
            //function to insert a new record into the conference(participant) database
        public function insertConference($fname, $lname, $gender, $session,$avatar_path,$address,$email, $company){
            try {
                //define sql statement to be executed
                $sql = "INSERT INTO participant (firstname,lastname,gender,session_id,avatar_path,address,emailaddress,
                companyname)VALUES(:fname,:lname,:gender,:session,:avatar_path,:address,:email,:company)";
                //prepare the sql statement to be excecution
                $stmt = $this->db->prepare($sql);
                //bind all placeholders to the actual values
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':gender',$gender);
                $stmt->bindparam(':session',$session);
                $stmt->bindparam(':avatar_path',$avatar_path);
                $stmt->bindparam(':address',$address);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':company',$company);
                

                //execute statement
                $stmt->execute();
                return true;

            } catch (PDOException $e){
                echo $e->getMessage();  
                return false;
             }             
        }

        public function editConference($id, $fname, $lname, $gender, $session,$address, $email, $company){
           try{
                  
           $sql = "UPDATE `participant` SET `firstname`=:fname,`lastname`=:lname,`gender`=:gender,
            `session_id`=:session,`address`=:address,`emailaddress`=:email,`company`=:company WHERE participant_id = :id";
                        
            $stmt = $this->db->prepare($sql);
            //bind all placeholders to the actual values
                $stmt->bindparam(':id',$id);
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':gender',$gender);
                $stmt->bindparam(':session',$session);
                $stmt->bindparam(':address',$address);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':company',$company);
            //execute statement
            $stmt->execute();
            return true;

           }catch (PDOException $e){
            echo $e->getMessage();  
            return false;
           }
        }

        public function getConference(){
            try{
            $sql = "SELECT * FROM `participant` a inner join session s on a.session_id =s.session_id;";
            $result = $this->db->query($sql);
            return $result; 
        }catch (PDOException $e){
            echo $e->getMessage();  
            return false;
           }

        }
        public function getParticipantDetails($id){
            try{
            $sql = "select * from participant a inner join session s on a.session_id =s.session_id where session_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id',$id);
            $stmt->execute();
            $result =$stmt->fetch();
            return $result;
        }catch (PDOException $e){
            echo $e->getMessage();  
            return false;
           }
        }
        public function deleteParticipant($id){
            try{
                $sql = "delete from participant where paticipant_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                return true;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }

        }
        public function getSession(){
            try{
            $sql = "SELECT * FROM `session`;";
            $result = $this->db->query($sql);
            return $result; 

        }catch (PDOException $e){
            echo $e->getMessage();  
            return false;
           }
        }
        public function getSessionById($id){
            try{
            $sql = "SELECT * FROM `session` where session_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id',$id);
            $stmt->execute();
            $result =$stmt->fetch();
            return $result;

        }catch (PDOException $e){
            echo $e->getMessage();  
            return false;
           }
        }
    }

?>