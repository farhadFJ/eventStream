<?php

if (! function_exists('valueOrOld')) {
    function valueOrOld($value, $old)
    {
        if ($old) {
            return $old;
        } elseif ($value) {
            return $value;
        }

        return '';
    }
}
if (! function_exists('valuesOrOld')) {
    function valuesOrOld($value1, $value2, $old)
    {
        if ($old) {
            return $old;
        } elseif ($value1) {
            return $value1;
        } elseif ($value2) {
            return $value2;
        }

        return '';
    }
}


