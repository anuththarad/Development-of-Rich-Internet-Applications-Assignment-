<?php
session_start();
if (!isset($_SESSION['patient_id'])) {
    header("Location: lifecarehospitals.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Successful</title>
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

        .success {
            color: green;
            font-size: 22px;
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
    <div class="success">
        Registration Successful! <br><br>
        Check your messages for your registration number.
    </div>

    <a href="appointment.html" class="btn">Go to Make an Appointment</a>
    <a href="lifecarehospitals.html" class="btn">Back to Home</a>
</div>

</body>
</html>

