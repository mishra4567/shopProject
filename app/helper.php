<?php
// {{-- 22.08.2024  ||  23.42 --}}
// important function
if (!function_exists('myDataPrint')) {
    function myDataPrint($data)
    {
        echo "<pre>";
        print_r($data);
        echo "<pre>";
        die();
    }
}
