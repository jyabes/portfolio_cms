<?php
require_once('../includes/connect.php');

if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    $projectId = $_GET['id'];

    // Delete project from the database
    $stmt = $connection->prepare('DELETE FROM projects WHERE id = :id');
    $stmt->bindParam(':id', $projectId, PDO::PARAM_INT);

    if($stmt->execute()) {
        echo "Project successfully deleted.";
    } else {
        echo "Error deleting project.";
    }

    $stmt = null; // Close the prepared statement
} else {
    echo "Invalid project ID.";
}

$connection = null; // Close the database connection
?>

<br><br>
<a href="project_list.php">Back to Project List</a>
