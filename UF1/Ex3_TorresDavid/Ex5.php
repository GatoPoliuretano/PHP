<?php
    $array1 = array('c1' => 'Vermell', 'c2' => 'Verd', 'c3' => 'Blanc', 'c4' => 'Negre');
    $array2 = array('c2', 'c4');

    print_r(array_intersect_key($array1, array_flip($array2))); // Amb array_intersect_key comparem les keys de arr1 i 2 aixì després amb l'array_flip assignar els valors de arr1 a arr2
    

?>

<?php
    require('Ex1.php')
?>