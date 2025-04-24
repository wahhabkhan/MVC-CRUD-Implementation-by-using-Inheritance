<?php
Route::post('/departments/delete/{id}', 'DepartmentController@delete')->name('departments.delete');
$router->addRoute('POST', '/department/edit', 'BaseController@edit');
$router->addRoute('GET', '/department/edit', 'BaseController@edit');


?>