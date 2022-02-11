<?php
$liste = array(
    'Adlar' => array('Ahmet','Efe','Fırat','Onur'),
    'Soyadlar' =>  array('yılmaz', 'kaya','demir','yıldız'));



foreach ($liste as $key => $val) {
        if($key == 'Soyadlar')
        {
            echo '<br>';
        }
    echo $key .'<br>';

    foreach ($val as $key0 => $val_) {

        echo $val_ ." ";
    }
  
}   

?>