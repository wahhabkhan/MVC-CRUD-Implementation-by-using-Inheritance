<!-- views/user/edit.php -->

<div class="container">
    <h2 class="ms-3 mb-2 text-center">Edit User</h2>

    <form action="/pone/user/update" method="post" class="mx-auto">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <div class="form-group">
            <label for="name">Name:</label>
            <input class="form-control" type="text" name="name" id="name" value="<?php echo isset($data) ? $data['name'] : ''; ?>">
        </div>
    
        <div class="form-group">
            <label for="role">Email:</label>
            <input class="form-control" name="email" id="email" value="<?php echo isset($data) ? $data['email'] : ''; ?>">
        </div>
    
        <div class="form-group">
            <label for="role">Username:</label>
            <input class="form-control" name="username" id="username" value="<?php echo isset($data) ? $data['username'] : ''; ?>">
        </div>
    
        <div class="form-group">
            <label for="role">Password:</label>
            <input class="form-control" name="password" id="password" value="">
        </div>
    
        <input type="submit" value="Save" class="btn btn-primary mt-4">
    </form>
</div>

