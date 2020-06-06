<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadedDocs extends Model
{
    protected $table = 'uploaded_docs';
    protected $fillable = ['user_id', 'docs', 'doc_name'];
}
