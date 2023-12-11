<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Page Form - Page 2</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Page 2: Additional Information</h1>
        <form action="page3.php" method="post">
            <label for="age">Age:</label>
            <input type="text" name="age" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" required>
            <br>
            <input type="hidden" name="name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
            <input type="submit" value="Next">
        </form>
    </div>
</body>
</html>
