<?php

class Crudmodel extends CI_Model{

public function getRecords (){
  $query=$this->db->get('db_customer');
    return $query->result();

  }
  public function saveRecord( $data){

    return $this->db->insert('db_customer',$data);

  }

  public function getAllrecords($record_id){

      $query=$this->db->get_where('db_customer', array('id'=>$record_id));
      if ($query->num_rows()>0) {
      return   $query->row();
      }
  }

public function updateRecords($record_id,$data){
      return $this->db
             ->where('id', $record_id)
             ->update('db_customer',$data);
}

public function deleteRecords($record_id){

  return $this->db->delete('db_customer',array('id'=>$record_id));
}

}
?>
