<?php

    require_once('config.php');
    $query = 'select * from `heroes`';
    $heroes = mysqli_query($con,$query);
    $data_arr = array();
    while($row = mysqli_fetch_assoc($heroes)){
        $data_arr[] = $row;
    }
    $json_data = json_encode(
        array(
            'recordsFiltered'=> count($heroes),
            'recordsTotal'=> count($heroes),
            'data'=> $data_arr
        ));
    echo $json_data;
    //echo '<script>console.log('. $json_data .')</script>';
?>