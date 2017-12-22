<?php
/**
 * Created by PhpStorm.
 * User: osindex
 * Date: 11/27/17
 * Time: 10:17 PM
 */

namespace SendChow\Modules\Merchant\Model;


use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Model;

class MenuMock extends Model implements Buyable
{
    protected $table = 'menus';

    public  function category(){
        return $this->belongsTo(CategoriesMock::class, 'category_id');
    }

    public function getBuyableIdentifier($options = null)
    {
        // COMPLETED: Implement getBuyableIdentifier() method.
        return $this->attributes['id'];
    }

    public function getBuyableDescription($options = null)
    {
        // COMPLETED: Implement getBuyableDescription() method.
        return $this->attributes['name'];
    }

    public function getBuyablePrice($options = null)
    {
        // COMPLETED: Implement getBuyablePrice() method.
        return $this->attributes['price'];
    }

}