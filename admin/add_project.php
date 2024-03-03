<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Project</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
            font-family: 'cantarellregular', sans-serif;
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            text-align: center;
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
            margin-top: 20px;
            font-size: 24px;
            color: #007bff;
            text-align: center;
        }

        .logo {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <img src="images/svg/logo_ver2b.svg" alt="Logo" class="logo">
    <h2>Add New Project</h2>
    <form action="add_project.php" method="post" enctype="multipart/form-data">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="desc">Description:</label>
        <textarea id="desc" name="desc" required></textarea>

        <label for="thumb">Thumbnail Image:</label>
        <input type="file" id="thumb" name="thumb" accept="image/*" required>

        <button type="submit">Add Project</button>
    </form>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('../includes/connect.php');
    
    $query = "INSERT INTO projects (title, description, image_url) VALUES (?,?,?)";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(1, $_POST['title'], PDO::PARAM_STR);
    $stmt->bindParam(2, $_POST['desc'], PDO::PARAM_STR);

    // Handle file upload
    $imagePath = 'images/thumbnails/'; // Set your desired path for uploaded images
    $imageName = $_FILES['thumb']['name'];
    $imageTmp = $_FILES['thumb']['tmp_name'];
    move_uploaded_file($imageTmp, $imagePath . $imageName);

    $stmt->bindParam(3, $imagePath . $imageName, PDO::PARAM_STR);

    $stmt->execute();
    //$last_id = $connection->lastInsertId();
    //echo $last_id;
    $stmt = null;
    header('Location: project_list.php');
}
?>

</body>
</html>
