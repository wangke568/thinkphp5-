<?php
/**
 *basenodel 公共的model层
 */
namespace app\common\model;

use think\Model;

class BaseModel extends Model
{
    protected $autoWriteTimestamp=true;
    public function add($data)
    {
        $data['status']=0;
        //$data['create_time']=time();
        $this->save($data);
        return $this->id;
    }
}
