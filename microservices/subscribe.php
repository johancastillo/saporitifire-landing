
<?php
  require('./db-connection.php');

  $data = json_decode(file_get_contents('php://input'), true);
  $email = $data['email'];
  $action = $data['action'];
  $id = $data['id'];

  // CREATE
  if($email && $action == 'create'){
    $sql = "INSERT INTO subscribe (email) VALUES ('$email')";

    if (mysqli_query($conn, $sql)) {
          echo "Successfully";
    } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
  }

  // READ
  if($action == 'read'){
    $sql = "SELECT id, email from subscribe";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows > 0){


      for( $i = 0; $result->num_rows > $i; $i++){
        $data3 = mysqli_fetch_array($result);
        echo $data3['id'];
        echo $data3['email'];
      }




        $response['status'] = 'ok';
        $response['result'] = $userData;
    }else{
        $response['status'] = 'err';
        $response['result'] = '';
    }

    //returns data as JSON format
    //echo json_encode($response);

    mysqli_close($conn);

  }

  // UPDATE
  if($action == 'update'){
    echo "update";
  }

  // DELETE
  if($action == 'delete'){
    echo "delete";
  }


?>
