<?php

$links = array(
    "Hong Kong Samsung" => "https://samsung.com/hk" ,
    "CSWCSS Robotics" => "https://instagram.com/cswcss_robotics"
);

foreach($links as $i => $link){
    echo '<li class="oui-bubble-item left uppdown "><a href="'.$link.'" class="uppdown" style="text-decoration: none; color:inherit;">'.$i.'</a></li>' ;
}
