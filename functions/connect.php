<?php
session_start();

define('BASE_URL', 'http://localhost/sion');

class Connect
{

    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db = 'sion';

    protected $conn;


    function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
    }

    public function login($username, $password)
    {
        $sql = "SELECT * FROM user WHERE username = '$username'";
        $query = mysqli_query($this->conn, $sql);
        $row = $query->num_rows;

        if ($row == 1) {
            $data = $query->fetch_assoc();
            if (password_verify($password, $data['password'])) {
                $_SESSION['user'] = [
                    'username' => $data['username'],
                    'password' => $data['password'],
                    'level' => $data['level']
                ];

                if ($_SESSION['user']['level'] == "Administrator") {
                    $_SESSION['id_user'] = $data['id_user'];
                    header("Location: views/admin/dashboard.php");
                } else {
                    header("Location: views/dashboard.php");
                }
            } else {
                echo "
                <script>
                    alert('password salah');
                </script>
                ";
                return false;
            }
        }
    }

    public function registerMahasiswa($username, $password)
    {
        $username = strtolower(stripslashes($_POST["username"]));
        $password = mysqli_real_escape_string($this->conn, $_POST["password"]);
        $password2 = mysqli_real_escape_string($this->conn, $_POST["passwordConfirm"]);

        $result = mysqli_query($this->conn, "SELECT username FROM user WHERE username = '$username'");
        if (mysqli_fetch_assoc($result)) {
            echo "
        <script>
            alert('username telah terdaftar');
        </script>
                ";
            return false;
        }

        if ($password !== $password2) {
            echo "
            <script>
                alert('password salah');
            </script>
            ";
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);
        mysqli_query($this->conn, "INSERT INTO user VALUES(NULL,'$username','$password','Mahasiswa')");
        return mysqli_affected_rows($this->conn);
    }
}
