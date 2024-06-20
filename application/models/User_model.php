<?php
class User_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_user_by_email($email) {
        $query = $this->db->get_where('users', ['email' => $email]);
        return $query->row(); // Mengembalikan satu baris hasil query
    }

    public function create_user($data) {
        return $this->db->insert('users', $data);
    }
}
?>
