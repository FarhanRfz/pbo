<?php

namespace App\Models;

use App\Core\Model;

class Kampus extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_kampus";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $kode_pos = $_POST['kode_pos'];
            $akreditasi = $_POST['akreditasi'];

            $sql = "INSERT INTO tb_kampus
            SET nama=:nama, alamat=:alamat, kode_pos=:kode_pos, akreditasi=:akreditasi";

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nama", $nama);
            $stmt->bindParam(":alamat", $alamat);
            $stmt->bindParam(":kode_pos", $kode_pos);
            $stmt->bindParam(":akreditasi", $akreditasi);

            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM tb_kampus WHERE kampus_id=:kampus_id";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":kampus_id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $kode_pos = $_POST['kode_pos'];
            $akreditasi = $_POST['akreditasi'];
            $id = $_POST['id'];

                  $sql = "UPDATE tb_kampus
                  SET nama=:nama, alamat=:alamat, kode_pos=:kode_pos,akreditasi=:akreditasi
                  WHERE kampus_id=:kampus_id";

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nama", $nama);
            $stmt->bindParam(":alamat", $alamat);
            $stmt->bindParam(":kode_pos", $kode_pos);
            $stmt->bindParam(":akreditasi", $akreditasi);
            $stmt->bindParam(":kampus_id", $id);

            $stmt->execute();
            $stmt->execute();
      }

      public function delete($id)
      {
            $sql = "DELETE FROM tb_kampus WHERE kampus_id=:kampus_id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":kampus_id", $id);
            $stmt->execute();
      }
}
