<?php

require_once('../includes/connect.php');
$query = "UPDATE projects SET title=?,description=?,image_url=? WHERE projects.id=?";

$stmt = $connection->prepare($query);
$stmt->bindParam(1, $_POST['title'], PDO::PARAM_STR);
$stmt->bindParam(2, $_POST['desc'], PDO::PARAM_STR);
$stmt->bindParam(3, $_POST['thumb'], PDO::PARAM_STR);
$stmt->bindParam(4, $_POST['pk'], PDO::PARAM_INT);

$stmt->execute();
$stmt = null;
header('Location: project_list.php');

?>