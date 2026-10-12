<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable('firstName', 'lastName', 'middleName', 'birthday')]
class Student extends Model
{
    use SoftDeletes;

    public function fullName() {
        return $this->lastName . " " . $this->firstName . " " . $this->middleName . " ";
    }
}
