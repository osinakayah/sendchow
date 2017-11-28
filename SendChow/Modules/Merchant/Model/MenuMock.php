<?php
/**
 * Created by PhpStorm.
 * User: osindex
 * Date: 11/27/17
 * Time: 10:17 PM
 */

namespace SendChow\Modules\Merchant\Model;


use Illuminate\Database\Eloquent\Model;

class MenuMock extends Model
{
    protected $table = 'menus';

    public  function category(){
        return $this->belongsTo(CategoriesMock::class, 'category_id');
    }
}