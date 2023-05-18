<?php

namespace Zhyzhkoslava\SimpleLaravelDumper;

class DD{

    public function dd($value)
    {
        echo '<pre>';
        var_dump($value);
        echo '</pre>';
        die(1);
    }

}
