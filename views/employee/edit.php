<!-- views/employee/edit.php -->

<div class="container">
    <h2 class="MS-3 mb-2 text-center">Edit Employee</h2>

    <form action="/pone/employee/update" method="post" class="mx-auto">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <div class="form-group">
            <label for="name">Name:</label>
            <input class="form-control" type="text" name="name" id="name" value="<?php echo isset($data) ? $data['name'] : ''; ?>">
        </div>

        <div class="form-group">
            <label for="role">Role:</label>
            <input class="form-control" name="role" id="role" value="<?php echo isset($data) ? $data['role'] : ''; ?>">
        </div>

        <input type="submit" value="Save" class="btn btn-primary mt-4">
    </form>
</div>

