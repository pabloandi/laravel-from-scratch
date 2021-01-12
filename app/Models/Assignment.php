<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Assignment extends Model
{
    use HasFactory;

    public function completed()
    {
        $this->completed_at = Carbon::now();
        $this->save();
    }


}
