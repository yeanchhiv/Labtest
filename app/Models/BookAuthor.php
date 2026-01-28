<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookAuthor extends Model
{
    protected $table = 'tbl_book_author';

    protected $fillable = [
        'BookID','AuthorID','AuthorDate','Remark'
    ];
}
