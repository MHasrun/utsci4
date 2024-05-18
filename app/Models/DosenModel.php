<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
    protected $table = 'dosen'; // Nama tabel di database
    protected $primaryKey = 'id'; // Nama primary key
    protected $allowedFields = ['nama', 'bidang', 'tugas']; // Kolom yang diizinkan untuk diisi

    /**
     * Mengupdate data dosen di database.
     *
     * @param int $id ID dosen yang akan diupdate.
     * @param array $data Data baru untuk dosen tersebut.
     * @return bool True jika berhasil diupdate, dan false jika gagal.
     */
    public function updateDosen($id, $data)
    {
        return $this->update($id, $data); // Mengupdate data dosen di database
    }

    /**
     * Menghapus data anggota dari database.
     *
     * @param int $id ID dosen yang akan dihapus.
     * @return bool True jika berhasil dihapus, dan false jika gagal.
     */
    public function deleteDosen($id)
    {
        return $this->delete($id); 
    }
}
