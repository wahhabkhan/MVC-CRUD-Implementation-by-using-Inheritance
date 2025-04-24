<?php

namespace models;

class DepartmentModel extends BaseModel
{
    public $table_name = 'department';
    public $form = [
        ['name' => 'name', 'type' => 'input', 'label' => 'Name'],
        ['name' => 'description', 'type' => 'textarea', 'label' => 'Description']
    ];

    public function __construct()
    {
        $this->db = self::getDb();
    }
}
