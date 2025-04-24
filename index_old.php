<?php
include_once('config.php');

$controller = new controllers\DepartmentController();

$empController = new controllers\EmployeeController();

//list record
$findRecord = $controller->index();

// foreach ( $findRecord as $value ) {
//     print_r( implode($value) . "<br>" );
// }

// $findRecord = $empController->index();
// foreach ( $findRecord as $value ) {
//     print_r( $value );
// }


//create record
$newRecord = $controller->create(['name'=>'Test Name','description'=>'Test Description']);
//var_dump($newRecord);

//update record
 $updateRecord = $controller->update(10,['name'=>'new name']);
//  //var_dump($updateRecord);

// //delete records
$deleteRecord = $controller->delete(17);
//var_dump($deleteRecord);