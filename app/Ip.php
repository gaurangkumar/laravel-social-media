<?php
/**
 * @auther        GaurangKumar Parmar <gaurangkumarp@gmail.com>
 */

namespace App;

use Friday\Model\ModelService;

class Ip extends ModelService
{
    protected $fillable = [
        'name', 'email', 'msg'
    ];

    public function paginate()
    {
        return $this;
    }
}
