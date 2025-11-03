<!DOCTYPE html>
<html lang="en">
    <!-- Meta Data -->
    <head>
        <meta charset="UTF-8">
        <title>Order Confirmation - The HTML Pizza Company</title>
    </head>

    <!-- Visible Content -->
    <body>

        <!-- PHP Code to retrieve name (not visible of course) -->
        <?php
            // Get the user name, if none used a placeholder
            $customerName = !empty($_POST["name"]) ? htmlspecialchars($_POST["name"]) : "valued customer";
        ?>

        <!-- Display a thank you message and visual confirmation the order was placed -->
        <h1>Thank you, <?php echo $customerName; ?>!</h1>
        <p>Your pizza order has been successfully submitted.</p>
        <p>We will start preparing your  pizza right away!</p>
    </body>
</html>