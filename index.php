<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body>
    <h1>Pizza Form</h1>
    <form id="userForm" method="POST">
        <div>
            <label for="pizzaname">Pizzaname:</label>
            <input type="text" id="pizzaname" name="pizzaname" required>
        </div>
        <div>
            <label for="drinks">Drinks:</label>
            <input type="text" id="drinks" name="drinks" required>
        </div>
        <div>
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" required>
        </div>
        <input type="submit" value="Submit">
    </form>
    <div>
        <?php
        // loading the database.php file to make a connection to the database
        require_once('database.php');
        // validating the post request to be not empty
        if (isset($_POST) && !empty($_POST)) {

            // creating variables and storing data from the POST request
            $pizzaname = $_POST['pizzaname'];
            $quantity = $_POST['quantity'];
            $drinks = $_POST['drinks'];

            // adding the data to the database using the create function in the database.php file
            $res = $database->create($pizzaname, $quantity, $drinks);
            if ($res) {
                echo "<p>Successfully inserted data</p>";
            } else {
                echo "<p>Failed to insert data</p>";
            }

            // displaying the data that was extracted from the POST request
            echo "<h2>Pizzaname : $pizzaname</h2>";
            echo "<h2>Quantity : $quantity</h2>";
            echo "<h2>Drinks : $drinks</h2>";
        }
        ?>
    </div>
</body>

</html>
