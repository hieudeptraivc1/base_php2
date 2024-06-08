<?php 

namespace Acer\BasePhp2\Models;

use Acer\BasePhp2\Commons\Model;

class Category extends Model
{
    protected string $tableName = 'categories';
    //  public function all() {
    //     return $this->queryBuilder
    //     ->select(
    //         'c.id', 'c.name', 'c.created_at', 'c.updated_at',
    //         'c.name as c_name'
    //     )
    //     ->from($this->tableName, 'c')
    //     ->orderBy('c.id', 'desc')
    //     ->fetchAllAssociative();
    // }

    // public function findByID($id)
    // {
    //     return $this->queryBuilder
    //         ->select(
    //             'c.id', 'c.name', 'c.created_at', 'c.updated_at',
    //             'as c_name'
    //         )
    //         ->from($this->tableName, 'c')
    //         ->where('c.id = ?')
    //         ->setParameter(0, $id)
    //         ->fetchAssociative();
    // }
}