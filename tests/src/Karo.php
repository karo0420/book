<?php

class Karo {

    public function __construct(public string $fullName)
    {

    }

    public function getName()
    {
        return $this->fullName;
    }



}