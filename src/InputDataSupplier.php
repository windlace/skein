<?php

namespace Cast\Crypto\Skein;

abstract class InputDataSupplier
{

    protected
    function __construct()
    {

    }

    /**
     * @return array int[]
     */
    public abstract
    function getInputData();

    public static
    function forBinaryString($data)
    {
        return static::forByteArray(array_map('ord', str_split($data)));
    }

    public static
    function forByteArray(array $data)
    {
        return new ByteArrDataSupplier($data);
    }

    public static
    function forHex($data)
    {
        return static::forBinaryString(hex2bin($data));
    }

}
