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
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .project-list {
            display: flex;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid #ccc;
            margin-bottom: 10px;
            background-color: #fff;
        }

        .project-details {
            flex: 1;
        }

        .project-actions {
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

        form {
            margin-top: 10px;
            background-color: #fff;
            padding: 20px;
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
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
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

    <h2>Add a New Project</h2>
    <form action="add_project.php" method="post">
        <label for="title">Project Title:</label>
        <input name="title" type="text" required>

        <label for="thumb">Project Thumbnail:</label>
        <input name="thumb" type="text" required>

        <label for="desc">Project Description:</label>
        <textarea name="desc" required></textarea>

        <input name="submit" type="submit" value="Add Project">
    </form>
</div>

</body>
</html>
