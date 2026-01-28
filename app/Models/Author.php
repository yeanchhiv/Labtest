<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'tbl_author';
    protected $primaryKey = 'AuthorID';

    protected $fillable = [
        'AuthorName','Gender','DOB','POB',
        'Address','Phone','Email','Photo'
    ];

    public function books()
    {
        return $this->belongsToMany(
            Book::class,
            'tbl_book_author',
            'AuthorID',
            'BookID'
        )->withPivot('AuthorDate','Remark');
    }
}
