<?php

namespace Acer\BasePhp2\Models;

use Acer\BasePhp2\Commons\Helper;
use Acer\BasePhp2\Commons\Model;

class Statistical extends Model
{
    protected string $tableName = 'categories';

    public function countProductsByCategory()
    {
        return $this->queryBuilder
            ->select(
                'c.name as category_name',
                'COUNT(p.id) as total_products'
            )
            ->from($this->tableName, 'p')
            ->innerJoin('p', 'categories', 'c', 'c.id = p.category_id')
            ->groupBy('c.name')
            ->fetchAllAssociative();
            
    }
}
