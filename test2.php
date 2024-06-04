<?php

// Manager Class
$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

// Query Class (removed the query condition)
$query = new MongoDB\Driver\Query([]);

// Output of the executeQuery will be object of MongoDB\Driver\Cursor class
$cursor = $manager->executeQuery('NIBM.customersDetails', $query); // Assuming 'NIBM' is the database and 'customers' is the collection

// Convert cursor to Array
$documents = $cursor->toArray();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $cusID = $_POST['Customer_ID'];
    $Name = $_POST['Name'];
    $Telephone_Number = $_POST['Telephone_Number'];

    $Orde_ID = $_POST['Orde_ID'];
    $Order_Date = $_POST['Order_Date'];
    $Total_Amount = $_POST['Total_Amount'];

    $Payment_Date = $_POST['Payment_Date'];
    $Coustemer_Feedback = $_POST['Coustemer_Feedback'];

    
    
    // Create new document object
    $document = new stdClass();
    $document->CustomerID = $cusID;
    $document->name = $Name;
    $document->telephoneNumber = $Telephone_Number;
    
    $document->orderID = $Orde_ID;
    $document->orderDate = $Order_Date;
    $document->TotaleAmount = $Total_Amount;

    $document->paymentDate = $Payment_Date;
    $document->coustemerFeedback = $Coustemer_Feedback;



    // Insert document into MongoDB collection
    $bulkWrite = new MongoDB\Driver\BulkWrite();
    $bulkWrite->insert($document);
    $manager->executeBulkWrite('NIBM.customersDetails', $bulkWrite);
    
    // Redirect to the same page to refresh the records
    header("Location: {$_SERVER['PHP_SELF']}");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Records</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Customer Records</h2>

<table>
    <thead>
        <tr>
            <th>CustomerID</th>
            <th>Name</th>
            <th>telephoneNumber</th>
            
            <th>orderID</th>
            <th>orderDate</th>
            <th>TotaleAmount</th>

            <th>paymentDate</th>
            <th>coustemerFeedback</th>
            

        </tr>
    </thead>
    <tbody>
        <?php foreach ($documents as $document): ?>
            <tr>
                

                <td><?php echo $document->CustomerID; ?></td>
                <td><?php echo $document->name; ?></td>
                <td><?php echo $document->telephoneNumber; ?></td>

                <td><?php echo $document->orderID; ?></td>
                <td><?php echo $document->orderDate; ?></td>
                <td><?php echo $document->TotaleAmount; ?></td>

                <td><?php echo $document->paymentDate; ?></td>
                <td><?php echo $document->coustemerFeedback; ?></td>
               

                
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<h2>Add New Customer</h2>

<form method="post">
    <label for="Customer_ID">Customer ID:</label><br>
    <input type="text" id="Customer_ID" name="Customer_ID" required><br>
    <label for="Name"> Name:</label><br>
    <input type="text" id="Name" name="Name" required><br>
    <label for="Telephone_Number">Telephone Number:</label><br>
    <input type="number" id="Telephone_Number" name="Telephone_Number" required><br><br>

    <label for="Orde_ID">Orde ID:</label><br>
    <input type="text" id="Orde_ID" name="Orde_ID" required><br>
    <label for="Order_Date"> Order Date:</label><br>
    <input type="text" id="Order_Date" name="Order_Date" required><br>
    <label for="Total_Amount">Total Amount:</label><br>
    <input type="number" id="Total_Amount" name="Total_Amount" required><br><br>


    <label for="Payment_Date">Payment Date:</label><br>
    <input type="text" id="Payment_Date" name="Payment_Date" required><br>
    <label for="Coustemer_Feedback"> Coustemer Feedback</label><br>
    <input type="text" id="Coustemer_Feedback" name="Coustemer_Feedback" required><br>
    

    <input type="submit" value="Submit">
</form>

</body>
</html>