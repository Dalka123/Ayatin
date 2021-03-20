<?php
include('conn.php');
header("contentType:Application/Json");

if (isset($_POST['method'])) {
    $method = $_POST['method'];
    $method($conn);
}

function addSubject($conn)
{
    extract($_POST);
    $query="call subjectSp(NULL,'$sname','insert')";
    $res=$conn->query($query);
    $result_data=array();
    if ($res) {
        $result_data=array("status"=>true,"message"=>"New Subject Saved");
    }else{
        $result_data=array("status"=>false,"message"=>$conn->error);
    }

   echo json_encode($result_data);
}

function addClass($conn)
{
    extract($_POST);
    $query="call classSp(NULL,'$cname','$fee','$subjectNames','insert')";
    $res=$conn->query($query);
    $result_data=array();
    if ($res) {
        $result_data=array("status"=>true,"message"=>"New Class Saved");
    }else{
        $result_data=array("status"=>false,"message"=>$conn->error);
    }

   echo json_encode($result_data);
}
?>

?>

