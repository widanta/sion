<?php
if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['level'] == "Administrator") {
        header("Location: views/admin/dashboard.php");
    } else {
        header("Location: views/siswa/dashboard.php");
    }
} else {
    header("Location: login.php");
}
