<?php

namespace App\Models;

use Sushi\Sushi;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Sushi;


    public function getRows()
    {
        $json = file_get_contents(public_path('data/products.json'));
        $data = json_decode($json, true);
        // dd($data);

        return $data;
    }
    //
}
