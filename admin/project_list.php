<!DOCTYPE html>
<html lang="en">

<?php
require_once('../includes/connect.php');
$stmt = $connection->prepare('SELECT id,title FROM projects ORDER BY title ASC');
$stmt->execute();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project List</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <style>
        body {
            font-family: 'cantarellregular', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container-list {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px 20px 50px 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .project-list {
            display: flex;
            align-items: center;
            padding: 0px;
            border-bottom: 1px solid #ccc;
            margin-bottom: 0px;
            background-color: #fff;
        }

        .project-list p {
            padding: 5px 100px 5px 100px;
        }

        .project-details {
            flex: 1;
        }

        .project-actions {
            padding: 5px 100px 5px 100px;
            display: flex;
            gap: 10px;
        }

        .project-actions a {
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 4px;
            color: #fff;
            background-color: #007bff;
            transition: background-color 0.3s;
            cursor: pointer;
        }

        .project-actions a:hover {
            background-color: #0056b3;
        }

        h2 {
            margin-top: 20px;
            margin-bottom: 20px;
            font-size: 24px;
            color: #007bff;
            text-align: center;
        }

        .add-new-project-title h2 {
            padding-top: 20px;
        }

        form {
            text-align: center;
            margin-top: 0px;
            background-color: #fff;
            padding: 20px 100px 20px 100px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 0px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

    

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            margin-bottom: 0px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Styling for the back button */
        .add-project {
        text-align: center;
    }

    .add-new-project-title {
        margin-top: 20px;
    }

    .button {
        /* display: inline-block; */
        
        padding: 0px 100px 20px 100px;
    }

    .button a {
        display: block;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s;
    }

    .button a:hover {
        background-color: #0056b3;
    }

        
    </style>
</head>
<body>

<div class="container-list">
<h2>Project List</h2>
    <?php
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="project-list">' .
            '<div class="project-details">' .
            '<p>' . $row['title'] . '</p>' .
            '</div>' .
            '<div class="project-actions">' .
            '<a href="edit_project_form.php?id=' . $row['id'] . '">Edit</a>' .
            '<a href="delete_project.php?id=' . $row['id'] . '">Delete</a>' .
            '</div>' .
            '</div>';
    }

    $stmt = null;
    ?>

<section class="add-project">
    <div class="add-new-project-title">
        <h2>Add a New Project</h2>
        <div class="button">
            <a href="add_project.php">Add Project Page</a>
        </div>

        <div class="button">
            <a href="dashboard.php">Back</a>
        </div>
        </form>
    </div>
<section>


</body>
</html>
