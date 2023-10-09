<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YoPrint extends Model
{
    use HasFactory;

    protected $table = "yoprint";
    protected $primaryKey = 'id';

    protected $fillable = ['unique_key',
                            'product_title',
                            'product_description',
                            'style',
                            'sanmar_mainframe_color',
                            'size',
                            'color_name',
                            'piece_price'];


}
