<?php

function filteredData($datiGrezzi, $filters){
    $filteredData = [];
    
    foreach($datiGrezzi as $singleData){
        $isValid = true;

        foreach ($filters as $filterKey => $filterValue) {

            if ($isValid) {
                $result = stristr($singleData[$filterKey], $filterValue);

                if ($result == false) {
                    $isValid = false;
                }
            }

        }

        if ($isValid) {
            $filteredData[] = $singleData; 
        }

    }

    return $filteredData;
}

?>