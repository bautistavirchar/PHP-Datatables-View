<?php

    require_once('config.php');
    $query = 'select * from `heroes`';
    $heroes = mysqli_query($con,$query);
    $data_arr = array();
    $count = 0;
    while($row = mysqli_fetch_assoc($heroes)){
        $count++;
        $data_arr[] = $row;
    }
    $json_data = json_encode(
        array(
            'recordsFiltered'=> $count,
            'recordsTotal'=> $count,
            'data'=> $data_arr
        ));
    echo $json_data;
?>
