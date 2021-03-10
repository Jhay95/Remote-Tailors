<?php


class Customer
{

    private Database $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    //find user through email
    public function getCustByEmail($email): bool
    {
        $this->db->query("SELECT * FROM customers WHERE customer_email = '$email'");
        //check row
        if ($this->db->rows_count() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getCustByUser($username): bool
    {
        $this->db->query("SELECT * FROM customers WHERE customer_username = '$username'");
        //check row
        if ($this->db->rows_count() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getCustomerById($id): ?array
    {
        $this->db->query("SELECT * FROM customers WHERE customer_email = '$id'");
        return $this->db->single_result();
    }

    public function register($data): bool|int|string
    {
        $sql = "INSERT INTO customers (customer_id, customer_fname, customer_lname, customer_email, customer_username, customer_password, customer_reg_date) VALUES (NULL, '" . $data['fname'] . "', '" . $data['lname'] . "','" . $data['email'] . "','" . $data['username'] . "','" . $data['password'] . "',CURRENT_TIMESTAMP)";
        if ($this->db->query($sql)) {
            return $this->db->last_insert_id();
        } else return false;
    }

    // Login User
    public function login($email, $password): array
    {
        $this->db->query("SELECT * FROM customers WHERE customer_email = '$email'");
        $row = $this->db->single_result();
        $hashed_password = $row['customer_password'];
        if($password === $hashed_password){
            return $row;
        } else {
            false;
        }
    }
}