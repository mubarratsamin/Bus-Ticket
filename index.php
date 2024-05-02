<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Route Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            height: 100vh;
            background: linear-gradient(to right, #1e9492, #556B2F);
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        form {
            max-width: 400px;
            background-color: #556B2F;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #ffffff;
            font-size: 16px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            font-size: 14px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }

    
    </style>
</head>
<body>

    <form action="ticket.php" method="get">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>

        <label for="age">Age:</label>
        <input type="text" id="age" name="age" required>

        <label for="phoneNumber">Phone Number:</label>
        <input type="text" id="phoneNumber" name="phoneNumber" required>

        <label for="initialLocation">Initial Location:</label>
        <input type="text" id="initialLocation" name="initialLocation" required>

        <label for="terminalLocation">Terminal Location:</label>
        <input type="text" id="terminalLocation" name="terminalLocation" required>

        <button type="submit">Get Your Ticket</button>
    </form>

</body>
</html>
