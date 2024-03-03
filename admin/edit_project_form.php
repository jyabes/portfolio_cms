<!DOCTYPE html>
<html lang="en">

<?php
require_once('../includes/connect.php');
$query = 'SELECT * FROM projects WHERE projects.id = :projectId';
$stmt = $connection->prepare($query);
$projectId = $_GET['id'];
$stmt->bindParam(':projectId', $projectId, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Page</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <style>
        body {
            font-family: 'cantarellregular', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            resize: vertical;
        }
        h2 {
            margin-top: 20px;
            margin-bottom: 20px;
            font-size: 24px;
            color: #007bff;
            text-align: center;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>

<body>

<form action="edit_project.php" method="POST" enctype="multipart/form-data">
<h2>Add New Project</h2>
    <input type="hidden" name="pk" value="<?php echo $row['id']; ?>">
    <label for="title">Project Title:</label>
    <input name="title" type="text" value="<?php echo $row['title']; ?>" required>
    <label for="thumb">Project Thumbnail:</label>
    <input name="thumb" type="file" accept="image/*">
    <label for="desc">Project Description:</label>
    <textarea name="desc" required><?php echo $row['description']; ?></textarea>
    <input name="submit" type="submit" value="Edit">
</form>

<?php
$stmt = null;
?>
</body>


    <?php
    $stmt = null;
    ?>
</body>

</html>
