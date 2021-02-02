<?php
/**
 * @auther        GaurangKumar Parmar <gaurangkumarp@gmail.com>
 */

namespace App\Model;

use Friday\Model\ModelService;

class IndexModel extends ModelService
{
    /**
     * Variable.
     *
     * @var array
     */
    public $data = ['name' => 'GK'];

    /**
     * Get data from table.
     *
     * @return void
     */
    public function get($field = null, $id = null)
    {
        if ($id == null || (is_array($id) && count($id) == 0)) {
            return $this->table('user')->get($field);
        } else {
            return $this->table('user')->where($id)->get($field);
        }
    }

    /**
     * Add data to table.
     *
     * @return void
     */
    public function add()
    {
        return $this->table('user')->add(['id'=>3, 'name'=>'pihu', 'user'=>'pihu', 'password'=>'123', 'status'=>1]);
        //return $this->table('user')->add([3, 'pihu', 'pihu', '123', 1 ]);
        //return $this->table('user')->add([3, 'pihu', 'pihu', '123', 1]);
        //return $this->table('user')->add(3, 'pihu', 'pihu', '123', 1);
    }

    /**
     * Update data from table.
     *
     * @return void
     */
    public function update()
    {
        return $this->table('user')->where(['id'=>1])->update(['status'=>1, 'name'=>'illu']);
    }

    /**
     * Delete data from table.
     *
     * @return void
     */
    public function delete()
    {
        return $this->table('user')->where(['id'=>1])->delete();
    }
}
