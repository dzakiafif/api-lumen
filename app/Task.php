<?php
/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 06/04/17
 * Time: 18:10
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $table = 'tasks';
    protected $fillable = ['author','address'];

}