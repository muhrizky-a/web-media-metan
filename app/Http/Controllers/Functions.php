<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Functions extends Controller
{
    public function createLink($name)
    {
        //Link untuk nama link
        $link = "";

        $name_array = explode(" ", $name); // Memisahkan kata-kata content dalam bentuk array

        $i = 0;
        $len = count($name_array);
        foreach ($name_array as $n) {
            if ($i == $len - 1) {
                $link .= strtolower($n);
                break;
            }

            // Sambung setiap kata dengan tanda "-""
            $link .= strtolower($n) . "-";
            $i++;
        }
        return $link;
    }
}
