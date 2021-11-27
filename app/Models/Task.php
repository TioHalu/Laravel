<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//membuat model php artisan make:model NamaModel menggunakan uppercast di awal kata dengan nama bentuk singular dari table tanpa menggunakan s diakhri
class Task extends Model
{
    use HasFactory;

    // protected $table = 'namatable'//jika kita menggunakan model ini dengan table berbeda
//     protected $filable = [] ;//menemtukan fill apa saja yang akan kita isikan
//     protected $guerded = [];//menentukan agar nilai tidak di isi sembarangan
}
