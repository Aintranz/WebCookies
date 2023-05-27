<?php

    include '../connector/connect.php';

   
    if(isset($_POST['search'])){

        $id = mysqli_real_escape_string($conn,$_POST['num']);


        $sql = "SELECT *FROM products WHERE id = $id";

        $result_val = [];
		$result_q = mysqli_query($conn,$sql);
		if (mysqli_num_rows($result_q) > 0) {
			foreach ($result_q as $value) {
			    array_push($result_val,$value);
			}
			header("Content-type: application/json");
			echo json_encode($result_val);
		}
		else{
			echo $return ="<h3>No Data </h3>";
		}
    }
    else if(isset($_POST['insert'])){

        
        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $quan = mysqli_real_escape_string($conn,$_POST['quan']);
        $title = mysqli_real_escape_string($conn,$_POST['title']);

        $data = "INSERT INTO user(name,quan,title,email) VALUES ('$name',$quan,'$title','$email')";

        if(mysqli_query($conn,$data) === TRUE){
            echo 1;
        }
    }

?>