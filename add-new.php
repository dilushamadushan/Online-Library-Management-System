<?php 
    include("config.php"); 
?>
<?php 
include("config.php");
    function generateUserID($number) {
        return 'U' . str_pad($number, 3, '0', STR_PAD_LEFT);
    }

    $query = "SELECT MAX(user_id) AS last_id FROM user_table";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $lastUserID = (int)str_replace('U', '', $row['last_id']);
    $newUserID = generateUserID($lastUserID + 1);

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['new-btn'])) {
        $name = trim($_POST['name']);
        $mail = trim($_POST['mail']);
        $mobile = trim($_POST['mobile']);
        $addr = trim($_POST['addr']);

        if ($name && $mail && $mobile && $addr) {
            // Prepare SQL statement to prevent SQL injection
            $sql = "INSERT INTO user_table (user_id,User_Nmae, User_Emaiil, User_Mobile, User_Address,User_role) VALUES ( '$newUserID','$name' , '$mail',$mobile, '$addr','user')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "<script>alert('Added Successfully');</script>";
            } else {
                echo "<script>alert('Add Failed');</script>";
            }
        } else {
            echo "<script>alert('Please fill in all fields.');</script>";
        }
    }
?>

<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['new-btn4'])) {
        $name = trim($_POST['name']);
        $mail = trim($_POST['mail']);
        $mobile = trim($_POST['mobile']);
        $addr = trim($_POST['addr']);

        if ($name && $mail && $mobile && $addr) {
            // Prepare SQL statement to prevent SQL injection
            $sql = "INSERT INTO user_table (user_id,User_Nmae, User_Emaiil, User_Mobile, User_Address,User_role) VALUES ( '$newUserID','$name' , '$mail',$mobile, '$addr','user')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "<script>alert('Added Successfully');</script>";
            } else {
                echo "<script>alert('Add Failed');</script>";
            }
        } else {
            echo "<script>alert('Please fill in all fields.');</script>";
        }
    }
?>

