<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'tbl_book';
    protected $primaryKey = 'BookID';

    protected $fillable = [
        'BookTitle','BookTypeID','PublishDate',
        'NumOfPages','NumOfCopies','Edition',
        'Publisher','BookSource','Remark'
    ];

    public function type()
    {
        return $this->belongsTo(BookType::class, 'BookTypeID');
    }

    public function authors()
    {
        return $this->belongsToMany(
            Author::class,
            'tbl_book_author',
            'BookID',
            'AuthorID'
        )->withPivot('AuthorDate','Remark');
    }
}
