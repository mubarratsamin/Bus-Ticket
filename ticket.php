<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swift Stream Bus Service</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            height: 100vh;
            background: linear-gradient(to right, #1e9492, #556B2F);
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        div {
            max-width: 400px;
            background-color: #3e4444;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        p {
            margin-bottom: 8px;
            font-size: 16px;
            color: #ffffff;
            text-align: center;
        }
    </style>
</head>
<body>

    <div>
        <h2>Swift Stream Bus Service</h2>
        <?php
            $name = $_GET['name'];
            $age = $_GET['age'];
            $gender = $_GET['gender'];
            $initialLocation = $_GET['initialLocation'];
            $terminalLocation = $_GET['terminalLocation'];

            // Assume a simple calculation for ticket price based on route
            $ticketPrice = calculateTicketPrice($initialLocation, $terminalLocation);

            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>Age:</strong> $age</p>";
            echo "<p><strong>Gender:</strong> $gender</p>";
            echo "<p><strong>Ticket Price:</strong> $ticketPrice Taka</p>";
            echo "<br>";
            echo "<p>Thank You For Using Our Service</p>";


            function calculateTicketPrice($start, $end) {
                // Your logic for calculating ticket price based on routes
                // ...

                // Comprehensive list of routes and prices
                $routePrices = [
                    'BGC - Bypass' => 30,
                    'BGC - Badamtol' => 50,
                    'BGC - Shantir Hat' => 70,
                    'BGC - Crossing' => 80,
                    'BGC - Notun Bridge' => 100,
                    'Bypass - Badamtol' => 20,
                    'Bypass - ShantirHat' => 40,
                    'Bypass - Crossing' => 50,
                    'Bypass - Notun Bridge' => 70,
                    'Badamtol - Shantir Hat' => 20,
                    'Badamtol - Crossing' => 30,
                    'Badamtol - Notun Bridge' => 50,
                    'Shantir Hat - Crossing' => 10,
                    'Shantir Hat - Notun Bridge' => 30,
                    'Crossing - Notun Bridge' => 20,
                    // Add other routes and prices as needed
                ];

                $routeKey = "$start - $end";

                if (array_key_exists($routeKey, $routePrices)) {
                    return $routePrices[$routeKey];
                } else {
                    return 'Route not found';
                }
            }
        ?>
    </div>

</body>
</html>
