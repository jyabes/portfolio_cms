<?php
// update_intro.php
include_once('admin/dynamic_page_db.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the new introduction text from the form
    $newIntro = $_POST['intro'];

    // Update the content in your database or any storage mechanism
    // Replace the following line with your database update logic
    // For example, you might use PDO or mysqli to update the content in a database
    // For demonstration purposes, we'll update a 'content' column in the 'introduction' table
    $updateQuery = "UPDATE introduction SET content = '$newIntro' WHERE id = 1";
    $updateResult = mysqli_query($connection, $updateQuery);

    if ($updateResult) {
        echo '<p class="intro">' . htmlspecialchars($newIntro) . '</p>';
    } else {
        // Add error handling to display the specific error message
        echo 'Failed to update introduction. Error: ' . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Introduction</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
            margin: auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
    writing-mode: horizontal-tb; /* Add this line */
}

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        h2 {
            color: #007bff;
        }
    </style>
</head>
<body>

    <form action="update_intro.php" method="post">
        <h2>Edit Introduction</h2>
        <label for="intro">Introduction:</label>
        <textarea id="intro" name="intro" rows="4" cols="50"><?php echo $intro['content']; ?></textarea>

        <button type="submit">Update Introduction</button>
    </form>

</body>
</html>
