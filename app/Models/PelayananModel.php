<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class PelayananModel extends Model
{
    protected $table = "pelayanan";
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','nama', 'kode', 'keterangan'];

    // Menampilkan data

    public function getAll($id = false)
    {
        if ($id === false) {
        return $this->paginate(10, 'pelayanan');
        }

        return $this->where([
        'id' => $id
        ])->first();
    }
    public function getPelayanan($id = false)
    {
        if($id === false){
            return $this->table('pelayanan')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('pelayanan')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }   
    } 

    public function insert_pelayanan($data)
    {
        return $this->db->table($this->table)->insert($data);
    } 

    public function update_pelayanan($data, $id)
    {
    return $this->db->table($this->table)->update($data, ['id' => $id]);
    } 

   public function delete_pelayanan($id)
    {
    return $this->db->table($this->table)->delete(['id' => $id]);
    } 
}