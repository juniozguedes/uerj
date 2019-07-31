<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pdf extends Model
{

	    //Table Name
    protected $table = 'pdfs';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;
    //
}
