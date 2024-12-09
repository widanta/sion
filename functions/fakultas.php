<?php
include 'connect.php';

class Fakultas extends Connect
{
    public function create($data)
    {
        $kode = $data['kode'];
        $nama = $data['nama'];

        $query = "INSERT INTO fakultas VALUES ('$kode', '$nama')";
        mysqli_query($this->conn, $query);
        return mysqli_affected_rows($this->conn);
    }

    public function edit($data)
    {
        $kode = $data['kode_fakultas'];
        $nama = $data['nama'];

        $query = "UPDATE fakultas SET nama = '$nama' WHERE kode_fakultas = '$kode'";
        mysqli_query($this->conn, $query);
        return mysqli_affected_rows($this->conn);
    }

    public function delete($data)
    {
        $kode = $data['kode_fakultas'];

        $query = "DELETE FROM fakultas WHERE kode_fakultas = '$kode' ";
        mysqli_query($this->conn, $query);
        return mysqli_affected_rows($this->conn);
    }

    public function getAlldata()
    {
        $query = "SELECT * FROM fakultas";
        $result = mysqli_query($this->conn, $query);
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
    }

    public function getDataById($id)
    {
        $sql = "SELECT * FROM fakultas WHERE kode_fakultas = '$id'";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }
}
