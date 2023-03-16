<?php
namespace Akglibrary\ImageProcese;

class FirstClass
{

    private $one;

    private $second;

    public function __construct(int $one, int $second)
    {
        $this->one = $one;
        $this->second = $second;
    }
    /** */
    public function aa()
    {
        return $this->one*$this->second;
    }
}
?>