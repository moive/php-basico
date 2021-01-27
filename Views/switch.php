<?php

$choose = 'pizza';

switch ($choose) {
    case 'iceCream':
        echo "The price ice cream is: $1000";
        break;
    case 'cake':
        echo "The price cake is: $15000";
        break;
    case 'pizza':
        echo "The price pizza is: $1000";
        break;
    
    default:
        echo 'Option invalid';
        break;
}

?>