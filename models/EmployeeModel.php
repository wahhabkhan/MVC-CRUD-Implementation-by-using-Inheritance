<?php
namespace models;


class EmployeeModel extends BaseModel
{
    public $table_name = 'employee';
    public $form = [
        ['name'=>'name','type'=>'input', 'label' => 'Name'],
        ['name'=>'role','type'=>'textarea', 'label' => 'Role']
    ];
    public function __construct()
    {
        $this->db = self::getDb();
    }

}