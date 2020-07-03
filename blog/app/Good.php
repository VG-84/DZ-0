<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Good
 * @package App
 *
 * @property-read $id
 * @property-read $name
 * @property-read $price
 */
class Good extends Model
{
    public function getImageId()
    {
        return $this->id % 9 + 1;
    }
}
