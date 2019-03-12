<?php
 
class DB_Functions {
 
    private $conn;
 
    // constructor
    function __construct() {
        require_once 'DB_Connect.php';
        // connecting to database
        $db = new Db_Connect();
        $this->conn = $db->connect();
    }
 
    // destructor
    function __destruct() {
         
    }
 
    // /**
    //  * Storing user new
    //  * returns user details
    //  */
    // public function storeUser($email, $name, $password) {
    //     $uuid = uniqid('', true);
    //     $hash = $this->hashSSHA($password);
    //     $encrypted_password = $hash["encrypted"]; // encrypted password
    //     $salt = $hash["salt"]; // salt
 
 // //        $stmt = $this->conn->prepare("INSERT INTO users(unique_id, name, email, encrypted_password, salt, created_at) VALUES(?, ?, ?, ?, ?, NOW())");
    //     $stmt->bind_param("sssss", $uuid, $name, $email, $encrypted_password, $salt);
    //     $result = $stmt->execute();
    //     $stmt->close();
 
 // //        // check for successful store
    //     if ($result) {
    //         $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = ?");
    //         $stmt->bind_param("s", $email);
    //         $stmt->execute();
    //         $user = $stmt->get_result()->fetch_assoc();
    //         $stmt->close();
 
 // //            return $user;
    //     } else {
    //         return false;
    //     }
    // }
 
    /**
     * Get user by email and password
     */
    public function getUserByEmailAndPassword($matric_number, $reg_number) {
 
        $stmt = $this->conn->prepare("SELECT * FROM students WHERE matric_number = ?");

        
        if(!$stmt)  //if there is an error, then it will be shown!. 
         { // show error                                                                                                       
          echo $this->db->error;
          } else {
           // everything is good to go !. 
        $stmt->bind_param("s", $matric_number);
 
        if ($stmt->execute()) {
            $student = $stmt->get_result()->fetch_assoc();
            $stmt->close();
 
            // verifying user password
                return $student;

        } else {
            return NULL;
        }
        }
            }
 
    // /**
    //  * Check user is existed or not
    //  */
    // public function isUserExisted($matric_number) {
    //     $stmt = $this->conn->prepare("SELECT email from users WHERE email = ?");
 
 // //        $stmt->bind_param("s", $email);
 
 // //        $stmt->execute();
 
 // //        $stmt->store_result();
 
 // //        if ($stmt->num_rows > 0) {
    //         // user existed 
    //         $stmt->close();
    //         return true;
    //     } else {
    //         // user not existed
    //         $stmt->close();
    //         return false;
    //     }
    // }
 
    // /**
    //  * Encrypting password
    //  * @param password
    //  * returns salt and encrypted password
    //  */
    // public function hashSSHA($password) {
 
 // //        $salt = sha1(rand());
    //     $salt = substr($salt, 0, 10);
    //     $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
    //     $hash = array("salt" => $salt, "encrypted" => $encrypted);
    //     return $hash;
    // }
 
    // /**
    //  * Decrypting password
    //  * @param salt, password
    //  * returns hash string
    //  */
    // public function checkhashSSHA($salt, $password) {
 
 // //        $hash = base64_encode(sha1($password . $salt, true) . $salt);
 
 // //        return $hash;
    // }
 
}
 
?>
