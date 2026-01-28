<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookType extends Model
{
    protected $table = 'tbl_book_type';
    protected $primaryKey = 'BookTypeID';

    protected $fillable = ['BookTypeName'];

    public function books()
    {
        return $this->hasMany(Book::class, 'BookTypeID');
    }
}
