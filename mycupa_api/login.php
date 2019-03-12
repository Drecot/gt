<?php
require_once 'include/DB_Functions.php';
$db = new DB_Functions();
 
// json response array
$response = array("error" => FALSE);
 
if (isset($_POST['matric_number']) && isset($_POST['reg_number'])) {
 
    // receiving the post params
    $matirc_number = $_POST['matric_number'];
    $reg_number = $_POST['reg_number'];
 
    // get the user by email and password
    $student = $db->getUserByEmailAndPassword($matric_number, $reg_number);
 
    if ($student != false) {
        // user is found
        $response["error"] = FALSE;
        $response["student"]["first_name"] = $student["first_name"];
        $response["student"]["matric_number"] = $student["matric_number"];
        echo json_encode($response);
    } else {
        // user is not found with the credentials
        $response["error"] = TRUE;
        $response["error_msg"] = "Login credentials are wrong. Please try again!";
        echo json_encode($response);
    }
} else {
    // required post params is missing
    $response["error"] = TRUE;
    $response["error_msg"] = "Required parameters email or password is missing!";
    echo json_encode($response);
}
?>
