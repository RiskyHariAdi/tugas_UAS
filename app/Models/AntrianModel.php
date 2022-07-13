<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class AntrianModel extends Model
{
    protected $table = "antrian";
 
    public function getAntrian($id = false)
    {
        if($id === false){
            $request = \Config\Services::request();
            $loktt = $request->uri->getSegment(3);
            return $this->table('antrian')
                        ->where('pelayanan_id', $loktt)
                        ->selectMax('id')
                        ->limit(1)
                        ->get()
                        ->getResultArray();

        } else {
            return $this->table('antrian')
                        ->where('antrian_loket_id', $id)
                        ->where('pelayanan_id', $id)
                        ->get()
                        ->getRowArray();
        }   
    }
     public function getAntrianstatus($id = false)
    {
        if($id === false){
            return $this->table('antrian')
                        ->where('status', 'berlansung')
                        ->get()
                        ->getResultArray();

        } else {
            return $this->table('antrian')
                        ->where('status', 'berlansung')
                        ->where('pelayanan_id', $id)
                        ->get()
                        ->getRowArray();
        }   
    } 

      public function getAntrianno($id = false)
    {
        if($id != 0){
          
            return $this->table('antrian')
                        ->where('pelayanan_id', $id)
                        ->where('status', 'berlansung')
                        ->selectMin('id')
                        ->limit(1)
                        ->get()
                        ->getResultArray();

        } else {
            return $this->table('antrian')
                        ->where('antrian_loket_id', $id)
                        ->where('pelayanan_id', $id)
                        ->get()
                        ->getRowArray();
        }   
    } 



    public function getAntrianlast($id = false)
    {
        if($id != 0){
          
            return $this->table('antrian')
                        ->where('status', 'berlansung')
                        ->selectMax('id')
                        ->limit(1)
                        ->get()
                        ->getResultArray();

        } else {
            return $this->table('antrian')
                        ->where('antrian_loket_id', $id)
                        ->where('pelayanan_id', $id)
                        ->get()
                        ->getRowArray();
        }   
    } 

    public function insert_antrian($data)
    {
        return $this->db->table($this->table)->insert($data);
    } 

    public function update_antrian($data, $id)
    {
    return $this->db->table($this->table)->update($data, ['id' => $id]);
    } 

   public function delete_antrian($id)
    {
    return $this->db->table($this->table)->delete(['id' => $id]);
    } 

    public function update_antrian_data($data, $id)
    {
        $request = \Config\Services::request();
        $rr = $request->uri->getSegment(3);
   $this->db->table($this->table)->update($data, ['id' => $id]);
   return $this->db->query("UPDATE antrian SET status = 'berlansung' WHERE id = ( SELECT MIN(id) AS min FROM antrian WHERE pelayanan_id = (select pelayanan_id from antrian where id = '" .$id." ') and status = 'mengantri'   )");
    } 
}