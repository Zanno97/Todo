<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Routing\Loader\Configurator\Traits\AddTrait;

class Add extends Model
{
    use HasFactory, AddTrait;
}
