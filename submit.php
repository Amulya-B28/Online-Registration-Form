<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);
    $address = htmlspecialchars($_POST['address']);
    
    echo "
    <style>
        @media print {
            a[href='index.html'] {
                display: none; /* Hide the back link when printing */
            }
            button {
                display: none; /* Hide the print button */
            }
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-top: 5px solid #007bff;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-size: 28px;
            font-weight: 600;
        }
        h2 {
            font-size: 22px;
            margin-bottom: 15px;
            color: #333;
        }
        p {
            font-size: 18px;
            color: #444;
        }
        .data-info {
            margin-top: 20px;
            font-size: 16px;
            line-height: 1.6;
        }
        .data-info strong {
            color: #007bff;
        }
        button, a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 8px;
            text-align: center;
            text-decoration: none;
            box-sizing: border-box;
            cursor: pointer;
        }
        button {
            background-color: #28a745;
            color: white;
            border: none;
            box-shadow: 0 4px 8px rgba(40, 167, 69, 0.2);
            transition: all 0.3s ease;
        }
        button:hover {
            background-color: #218838;
            box-shadow: 0 6px 16px rgba(40, 167, 69, 0.3);
        }
        a {
            background-color: #007bff;
            color: white;
            box-shadow: 0 4px 8px rgba(0, 123, 255, 0.2);
            transition: all 0.3s ease;
        }
        a:hover {
            background-color: #0056b3;
            box-shadow: 0 6px 16px rgba(0, 123, 255, 0.3);
        }
    </style>

    <div class='container'>
        <h1>Submission Successful</h1>
        <h2>Submitted Data:</h2>
        <div class='data-info'>
            <p><strong>Full Name:</strong> $name</p>
            <p><strong>Email Address:</strong> $email</p>
            <p><strong>Phone Number:</strong> $phone</p>
            <p><strong>Date of Birth:</strong> $dob</p>
            <p><strong>Gender:</strong> $gender</p>
            <p><strong>Address:</strong> $address</p>
        </div>

        <button onclick='window.print()'>Print</button>
        <a href='index.html'>Back</a>
    </div>";
}
?>
