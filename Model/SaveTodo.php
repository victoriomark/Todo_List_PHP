<?phpinclude '../Database/Connect.php';global $conn;if($_SERVER['REQUEST_METHOD'] === 'POST'){    $ID = $_POST['ID'];    $todo = mysqli_real_escape_string($conn,$_POST['Todo_Save']);    $Query = "UPDATE todo_app_tb SET todo = ? WHERE ID = ?";    $stmt = $conn->prepare($Query);    $stmt->bind_param('si',$todo,$ID);    if($stmt->execute()){        echo "Successfully Updated";    }else{        echo "error" .mysqli_error($conn);    }}