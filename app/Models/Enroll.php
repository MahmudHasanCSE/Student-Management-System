<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    use HasFactory;
<<<<<<< HEAD

    public function subject()
    {
        return $this->belongsTo('App\Models\Subject');
    }
=======
>>>>>>> 79d22149bf1332b23fc5e5a51671eb855c89cb28
}
