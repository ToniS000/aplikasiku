<?php class Data_mahasiswa_model extends CI_Model
{
  private $table = 'mahasiswa';
  function __construct()
  {
    parent::__construct();
  }
  function select_all()
  {
    $f1 = $this->input->get('f_jeniskelamin');
    $this->db->select('*');
    $this->db->from($this->table);
    if ($f1) {
      $this->db->where('jenis_kelamin', $f1);
    }
    return $this->db->get();
  }
}
