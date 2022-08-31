<?php

namespace App\Models;

use CodeIgniter\Model;

class Base_model extends model
{
    public function getData($tbl, $row = '*', $arrWhere = array(), $limit = '', $arrJoin = array(), $orderBy = '', $groupBy = array(), $like = array())
    {

        $db   = \Config\Database::connect();
        $builder = $db->table($tbl);

        $builder->select($row);
        if (count($arrWhere) <> 0 || !empty($arrWhere))
            $builder->where($arrWhere);

        if (!empty($limit)) {
            if (is_array($limit)) {
                $builder->limit($limit[0], $limit[1]);
            } else {
                $builder->limit($limit);
            }
        }

        if (is_array($arrJoin))
            if (!empty(count($arrJoin))) {
                foreach ($arrJoin as $item) {
                    $param = '';
                    if (count($item) > 2) {
                        $param = $item[2];
                    }
                    $builder->join($item[0], $item[1], $param,);
                }
            }

        if (!empty($orderBy))
            $builder->orderBy($orderBy);

        $result = $builder->get()->getResult('array');
        return $result;
    }

    public function insertData($tbl, $arrData)
    {
        $db   = \Config\Database::connect();
        $builder = $db->table($tbl);
        $builder->insert($arrData);
        return $db->insertID();;
    }

    public function deleteData($tbl, $arrWhere)
    {
        $db   = \Config\Database::connect();
        $builder = $db->table($tbl);
        $builder->where($arrWhere);
        return $builder->delete();
    }

    public function updateData($tbl, $arrData, $arrWhere)
    {
        $db   = \Config\Database::connect();
        $builder = $db->table($tbl);

        $builder->where($arrWhere);

        return  $builder->update($arrData);
    }
    public function setData($tbl, $arrData, $arrWhere)
    {
        $db   = \Config\Database::connect();
        $builder = $db->table($tbl);

        $builder->where($arrWhere);
        $builder->set($arrData[0], $arrData[1], $arrData[2]);
        return $builder->update();
    }
}
