<?php

namespace Cast\Crypto\Skein;

class ByteArrDataSupplier extends InputDataSupplier
{

    /**
     *
     * @var int[]
     */
    private
        $_array;

    public
    function __construct(array $array)
    {
        $this->_array = $array;
    }

    public
    function getInputData()
    {
        return $this->_array;
    }

}
