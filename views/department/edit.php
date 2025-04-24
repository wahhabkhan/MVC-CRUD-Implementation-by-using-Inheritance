<!-- views/department/edit.php -->

<h2 class="ms-3 mb-2">Edit Department</h2>

<form action="/pone/department/update" method="post" class="ms-3">
    <input type="hidden" name="id" value="<?= $data['id']; ?>">
    <label class="mt-3">Name:</label>
    <input class="ms-5 mb-2 w-50 " type="text" name="name" value="<?php echo isset($data) ? $data['name'] : ''; ?>">

<br>
<label>Description:</label>
<input name="description" class="ms-2 w-50" value="<?php echo isset($data) ? $data['description'] : ''; ?>">

    <br>
    <input type="submit" value="Save" class="mt-4 rounded border-1 btn-outline-primary" style="margin:170px">
</form>
