<?php 

include './db.php';
include './utilities/pagination.php';
include './utilities/filters.php';

$page = isset($_GET['page']) ? $_GET['page'] : 1;

$genre = isset($_GET['genre']) ? $_GET['genre'] : null;

$filters = [
    'genre' => $genre
];

header('Content-Type: applications/json');

// $filteredData = filteredData($albums, $filters);

echo json_encode(paginateArray($albums, $page));

?>