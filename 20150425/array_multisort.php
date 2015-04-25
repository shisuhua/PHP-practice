<?php
    $data = array(
        array("id"=>1,"soft"=>"linux","rating"=>3),
        array("id"=>2,"soft"=>"php","rating"=>1),
        array("id"=>3,"soft"=>"musql","rating"=>2)
    );

    foreach($data as $key => $value){
        $soft[$key] = $value["soft"];
        $rating[$key] = $value["rating"];
    }
    array_multisort($rating,$soft,$data);
    print_r($data);