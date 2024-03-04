<!DOCTYPE html>
<html lang="en">

<?php
// Include necessary files and authentication check here
require_once('../includes/connect.php');
// ...

// Sample data for demonstration purposes
$loggedInUser = "Admin";
$totalProjects = $connection->query('SELECT COUNT(*) FROM projects')->fetchColumn();

$stmt = $connection->prepare('SELECT id, title FROM projects ORDER BY id DESC LIMIT 5');
$stmt->execute();
$recentProjects = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Dashboard</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">

    <!-- Add your custom styles for the dashboard -->
    <style>
    /* Customize your dashboard styles here */
    body {
        font-family: 'cantarellregular', sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }

    .dashboard {
        text-align: center;
        padding: 20px;
        margin-bottom:80px;
    }

    .welcome-message {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .stats {
        display: flex;
        justify-content: space-around;
        margin-bottom: 30px;
    }

    .stat-box {
        padding: 20px;
        border-radius: 8px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        flex: 1;
        margin: 0 10px;
    }

    .recent-projects {
        max-width: 600px;
        margin: 0 auto;
    }

    .recent-projects p {
        /* display: inline-block; */
        margin: 0px;
        padding: 0px;
    }

    .project-item {
        padding: 10px;
        margin-bottom: 10px;
        background-color: #fff;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    .project-item p {
        padding: 0 80px 0 80px;
        font-size: 16px;
    }

    .hero-section {
        background-color: #333;
        color: #fff;
        padding: 50px;
        text-align: center;
        margin-bottom: 20px;
    }

    .hero-title {
        font-size: 32px;
        margin-bottom: 20px;
    }

    .action-buttons a {
        display: inline-block;
        margin: 10px;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
    }

    h1 {
        padding: 50px 0 50px 0;
        color: #007bff;
    }

    h2 {
        margin-top: 20px;
        margin-bottom: 20px;
        font-size: 24px;
        color: #007bff;
        text-align: center;
    }
</style>

</head>

<body>

    <div class="dashboard">
    <h1>You're in, Jonathan! <br> Explore your dashboard.</h1>
        <div class="hero-section">
            <div class="action-buttons">
                <a href="project_list.php">View All Projects</a>
                <a href="add_project.php">Add New Project</a>
                <a href="login.php" class="logout">Logout</a>
            </div>
        </div>

        <div class="stats">
            <div class="stat-box">
                <h2>Total Projects</h2>
                <p><?php echo $totalProjects; ?></p>
            </div>

            <!-- Add more stat boxes as needed -->
        </div>

        <div class="recent-projects">
            <h2>Recent Projects</h2>
            <?php
            foreach ($recentProjects as $project) {
                echo '<div class="project-item">' .
                    '<p><strong>ID:</strong> ' . $project['id'] . '</p>' .
                    '<p><strong>Title:</strong> ' . $project['title'] . '</p>' .
                    '</div>';
            }
            ?>
        </div>
    </div>

</body>

</html>
