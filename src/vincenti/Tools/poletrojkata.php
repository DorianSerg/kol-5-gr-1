<?php

namespace vincenti\Tools;

class poletrojkata
{

    private $a;
    private $h;

    public function setA($a)
    {
        $this->a = $a;

        return $this;
    }

    public function setH($h)
    {
        $this->h = $h;

        return $this;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getH()
    {
        return $this->h;
    }
    public function field()
    {
        return $this->a * $this->h * 0.5;
    }

}
