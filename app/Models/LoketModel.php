<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class LoketModel extends Model
{
    protected $table = "loket";
 
    public function getLoket($id = false)
    {
        if($id === false){
            return $this->table('loket')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('loket')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }   
    } 

    public function insert_loket($data)
    {
        return $this->db->table($this->table)->insert($data);
    } 

    public function update_loket($data, $id)
    {
    return $this->db->table($this->table)->update($data, ['id' => $id]);
    } 

   public function delete_loket($id)
    {
    return $this->db->table($this->table)->delete(['id' => $id]);
    } 
}