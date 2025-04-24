<?php
namespace models;

class UserModel extends BaseModel
{
    public $table_name = 'user';
    public $form = [
        ['name' => 'name', 'type' => 'input','label' => 'Name'],
        ['name' => 'email', 'type' => 'input','label' => 'Email'],
        ['name' => 'username', 'type' => 'input','label' => 'Username'],
        ['name' => 'password', 'type' => 'input','label' => 'Password'],
    ];

    public function __construct()
    {
        $this->db = self::getDb();
    }

    public function login($username, $password)
    {
        $conn = $this->getDB();
        $select = "SELECT * FROM user WHERE username = '$username'";
        $result = mysqli_query($conn, $select);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            // verify entered password with stored hashed password
            if (password_verify($password, $row['password'])) {
                // set session variables and redirect to user dashboard
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $row['name'];
                header("Location: /pone/user");
                exit;
            } else {
                return 'Incorrect password!';
            }
        } else {
            return 'Incorrect username!';
        }
    }
    

}
