<?php
    date_default_timezone_set('Asia/Jakarta');
    $h=date('H');
    $time=date('H:i:s');
    if($time<'06.00.00'){
        echo "Hai Sisilia Yunita Ingutali, Good Morning <i class='far fa-kiss-wink-heart'></i>";
    }else if($time>'11.00.00'){
        echo "Hai Sisilia Yunita Ingutali, Good Afternoon <i class='far fa-kiss-wink-heart'></i>";
    }else if($time>'19.00.00'){
        echo "Hai Sisilia Yunita Ingutali, Good Night <i class='far fa-kiss-wink-heart'></i>";
    }
?>