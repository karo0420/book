<?php

class FelanClass
{

    public $a;

    public function jiz($name)
    {
        $this->a = $name;
        $bv = 'sina';
        return $name;
    }

}

$felan = new FelanClass();

$a = 5 + 6;
$b = $felan->jiz('hamed so');
echo $felan;
