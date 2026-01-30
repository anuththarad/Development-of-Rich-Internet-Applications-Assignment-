<?php
session_start();


$error_msg = isset($_SESSION['error_msg']) 
    ? $_SESSION['error_msg'] 
    : "Registration was not successful. Please try again.";


unset($_SESSION['error_msg']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Failed</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-image: url('hospital.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            margin: 0;
        }

        .message-box {
            max-width: 500px;
            margin: 120px auto;
            padding: 30px;
            background-color: rgba(255,255,255,0.95);
            border-radius: 10px;
            text-align: center;
        }

        .error {
            color: red;
            font-size: 20px;
            font-weight: bold;
        }

        .btn {
            display: block;
            margin-top: 15px;
            padding: 12px;
            background-color: #6EB0FF;
            color: black;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .btn:hover {
            background-color: #5DA0FF;
        }
    </style>
</head>

<body>

<div class="message-box">
    <div class="error">
        Registration Failed <br><br>
        <?php echo htmlspecialchars($error_msg); ?><br><br>
        
    </div>

    <a href="lfhospitals_patreg.html" class="btn">Try Again</a>
    <a href="lifecarehospitals.html" class="btn">Back to Home</a>
</div>

</body>
</html>
