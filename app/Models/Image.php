<?php

// Image.php (model)

namespace App;


use Illuminate\Database\Eloquent\Model;

class ImagesController extends Controller


{
    // Define the table associated with the model
    protected $table = 'images';


    // Example: Define a relationship if there is one
    public function user()
    {
        return $this->belongsTo(User::class);


    }

}





namespace App\Http\Controllers;
