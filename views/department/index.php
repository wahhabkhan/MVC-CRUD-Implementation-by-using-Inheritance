<?php
use models\helpers\ViewHelper;

// Instantiate an object of the ViewHelper class
$viewHelper = new ViewHelper();

// Check if delete button is clicked and ID is provided
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    // Get the ID from the query string
    $id = $_GET['id'];
    // Instantiate an object of the DepartmentModel class
    $model = new \models\DepartmentModel();
    // Delete the record using the ID
    $model->delete($id);
}

?>

<div>
    <h3 style="margin:0px 300px" class="mt-5 rounded font-italic">List of Records</h3>
    <a href="department/create" class="text-decoration-none ms-5 mb-2 p-1 rounded btn btn-outline-primary">Create Department</a>
      
    <?= $viewHelper::dataTables($data, [
        'view' => function ($row) {
            return '<a  class="text-decoration-none ms-5 mb-2 p-1 rounded btn btn-outline-primary" href="department/view?id=' . $row['id'] . '">View</a>';
        },
        'edit' => function ($row) {
          return '<a class="text-decoration-none ms-5 mb-2 p-1 rounded btn btn-outline-primary" href="department/edit?id=' . $row['id'] . '">Edit</a>';
        },
        'delete' => function ($row) {
            return '<a href="?action=delete&id=' . $row['id'] . '" class="text-decoration-none ms-5 mb-2 p-1 rounded btn btn-outline-primary">Delete</a>';
        }
    ]);
    ?>
</div>
