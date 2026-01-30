<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "lifecarehospital_db", 3307);

if (!$conn) {
    $_SESSION['error_msg'] = "Database connection failed.";
    header("Location: patreg_error.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = isset($_POST['full_name']) ? $_POST['full_name'] : '';
    $gender   = isset($_POST['gender']) ? $_POST['gender'] : '';
    $dob      = isset($_POST['dob']) ? $_POST['dob'] : '';
    $phone    = isset($_POST['phone']) ? $_POST['phone'] : '';
    $address  = isset($_POST['address']) ? $_POST['address'] : '';

    $stmt = mysqli_prepare(
        $conn,
        "INSERT INTO patient (full_name, gender, dob, phone, address)
         VALUES (?, ?, ?, ?, ?)"
    );

    mysqli_stmt_bind_param(
        $stmt,
        "sssss",
        $fullname, $gender, $dob, $phone, $address
    );

    if (mysqli_stmt_execute($stmt)) {
        $_SESSION['patient_id'] = mysqli_insert_id($conn);

    
        header("Location: patreg_success.php");
        exit();

    } else {
        $_SESSION['error_msg'] = "Registration failed. Please try again.";
        header("Location: patreg_error.php");
        exit();
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>


