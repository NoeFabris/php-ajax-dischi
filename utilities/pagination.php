<?php

function paginateArray($datiGrezzi, $requestedPage) {

$itemsPerPage = 10;
$currentPage = (int) $requestedPage;
$offset = $itemsPerPage * ($currentPage - 1);

if ($currentPage < 1) {
    $currentPage = 1;
}

$totalPages = ceil(count($datiGrezzi) / $itemsPerPage);

$paginatedData = array_slice($datiGrezzi, $offset, $itemsPerPage);

return [
    'itemsPerPage' => $itemsPerPage,
    'totalPages' => $totalPages,
    'totalDataLenght' => count($datiGrezzi),
    'currentPage' => $currentPage,
    'data' => $paginatedData
];
}

?>