<?php


class Message
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getTailorsContacted($id){
        $sql = "SELECT distinct cm.message_tailor_id, t.tailor_fname, t.tailor_lname
                                FROM contact_messages cm
                                JOIN tailors t ON t.tailor_id = cm.message_tailor_id
                                WHERE cm.message_customer_id = '$id'";
        //check row
        if ($this->db->query($sql))  {
            return $this->db->result_set();
        } else return false;
    }

    public function getMessagesbyCustomers($c_id, $t_id){
        $sql = $this->db->query("SELECT message_body, message_sent_date, message_sent_by
                                FROM contact_messages
                                WHERE message_customer_id = '$c_id' and message_tailor_id = '$t_id'");
        //check row
        if ($this->db->rows_count() > 0) {
            return $this->db->result_set();
        } else return false;
    }

    public function getMessagesbyTailors($id){

    }

    public function sendMessageFromCust($data){
        $sql = "INSERT INTO contact_messages (message_customer_id, message_tailor_id, message_body, message_sent_by) VALUES ('" . $data['customer_id'] . "', '" . $data['tailor_id'] . "','" . $data['message'] . "', 'Customer')";
        if ($this->db->query($sql)) {
            return true;
        } else return false;

    }

    public function sendMessageFromTail(){

    }
}