<div class="container ">
    <div class="row">
        <div class="col-md-3 mx-auto border border-1 border-secondary mt-5 rounded">
            <form method="POST" action="/pone/user/login">
                <h4 class="text-center mt-4">Sign in</h4>
                <?php if (!empty($error)): ?>
                <p class="text-danger"><?php echo $error; ?></p>
                <?php endif;?>
                <label for="username"><b>Username</b></label>
                <input type="text" class="w-100 p-1 border border-secondary rounded-pill" id="username" name="username"
                    value="<?=$data['username'] ?? ''?>"><br><br>
                <label for="password"><b>Password</b></label>
                <input type="password" class="w-100 p-1 border border-secondary rounded-pill" id="password" name="password"><br><br>
                <input type="submit" class="btn btn-outline-secondary p-1 rounded rounded-pill w-100 mt-3 mb-3 " value="Log in">
                <h6 class="ms-2 mt-2">Don't have an account? <a class="text-decoration-none text-secondary" href="signup">Sign Up</a></h6>
            </form>
        </div>
    </div>
</div>