<?php

function &get_user($name){
    return unserialize(file_get_contents("../data/users/".$name));
}

 ?>
