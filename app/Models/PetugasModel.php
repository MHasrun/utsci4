<?php

namespace App\Models;

use CodeIgniter\Model;

class PetugasModel extends Model
{
    protected $table = 'petugas_kampus'; 
    protected $primaryKey = 'id'; 

    protected $allowedFields = ['nama', 'jabatan', 'tugas'];

    /**
     * Mengambil data anggota dari database.
     *
     * @param int|null $id ID anggota yang ingin diambil. Jika null, maka akan mengambil semua data anggota.
     * @return array|null Data anggota jika ditemukan, atau null jika tidak.
     */
    public function getpetugas($id = null)
    {
        if ($id === null) {
            return $this->findAll(); 
        }

        return $this->find($id); 
    }

    /**
     * Menyimpan data anggota ke database.
     *
     * @param array $data Data anggota yang akan disimpan.
     * @return bool True jika berhasil disimpan, dan false jika gagal.
     */
    public function savepetugas($data)
    {
        return $this->insert($data); 
    }

    /**
     * Mengupdate data anggota di database.
     *
     * @param int $id ID anggota yang akan diupdate.
     * @param array $data Data baru untuk anggota tersebut.
     * @return bool True jika berhasil diupdate, dan false jika gagal.
     */
    public function updatepetugas($id, $data)
    {
        return $this->update($id, $data); 
    }

    /**
     * Menghapus data anggota dari database.
     *
     * @param int $id ID anggota yang akan dihapus.
     * @return bool True jika berhasil dihapus, dan false jika gagal.
     */
    public function deletepetugas($id)
    {
        return $this->delete($id); 
    }
}
