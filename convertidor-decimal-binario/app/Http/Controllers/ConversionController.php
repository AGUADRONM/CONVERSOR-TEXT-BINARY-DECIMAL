<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConversionController extends Controller
{
    public function index()
    {
        return view('converter');
    }

    public function convert(Request $request)
    {
        $type = $request->input('type');
        $number = $request->input('number');
        $result = '';

        switch ($type) {
            case 'decimal':
                $result = decbin((int)$number); // Convertir de decimal a binario
                break;
            case 'binary':
                $result = bindec($number); // Convertir de binario a decimal
                break;
            case 'textToBinary':
                // Convertir cada carácter a su representación binaria
                $result = implode(' ', array_map(function($char) {
                    return sprintf("%08b", ord($char));
                }, str_split($number)));
                break;
            case 'binaryToText':
                // Convertir de binario a texto
                $result = implode('', array_map(function($bin) {
                    return chr(bindec($bin));
                }, explode(' ', $number)));
                break;
        }

        return view('converter', compact('result', 'number', 'type'));
    }
}
