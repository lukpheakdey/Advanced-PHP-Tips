<?php

$authors = 'Pheakdey & Luk';
// if (strpos($authors, 'Pheakdey')) {
//     echo 'Pheakdey is an author.';
// } else {
//     echo 'Luk is not an author.';
// }


// This can be corrected with a strict comparison:
if (strpos($authors, 'Pheakdey') !== FALSE) {
    echo 'Pheakdey is an author.';
} else {
    echo 'Pheakdey is not an author.';
}

?>