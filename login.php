<?php
/**
 * Created by IntelliJ IDEA.
 * User: Saurabh
 * Date: 3/7/2018
 * Time: 12:45 PM
 */
session_start();
include './default.php';
if(isset($_SESSION['user'])
{
    header("Location : index.php");
    exit();
}
if(isset(login-button))
{
$username = $_POST["email"];
$password = md5($_POST["password"]);

//returns false if query is wrong. else query object is returned
$stmt = $con->prepare("select * from users where username = ? and password = ? limit 1");
if ($stmt) {
    //ss stands for string data of data for each variable
    $stmt->bind_param("ss", $username, $password);
    //execute preparedstatement
    $stmt->execute();
    //get result from preparedstatment
    $result = $stmt->get_result();
    if ($result->num_rows == 0) 
    {
        $response = array("code" => 204, "message" => "Incorrect username or password");
        ##echo json_encode($response);
    } 
    else 
    {
            
        
        $row = $result->fetch_assoc()
        $_SESSION['user'] = $row['id']; 
        header("Location: index.php");
        $data = array("username" => $username, "userid" => $row["userid"], "role" => $row["role"]);
        }
        $response = array("code" => 200, "data" => $data);
        ##echo json_encode($response);
    }
    $stmt->close();
}

$con->close();
}
?>
