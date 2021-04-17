<?php


class Customer
{

    private Database $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    // Get Customer by email during registration
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

    // Get Customer by email during profile update
    public function findCustByEmail($email): bool
    {
        $this->db->query("SELECT * FROM customers WHERE customer_email = '$email'");
        //check row
        if ($this->db->rows_count() > 1) {
            return true;
        } else return false;
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

    public function getCustomerById($id): array
    {
        $this->db->query("SELECT * FROM customers WHERE customer_id = '$id'");
        return $this->db->single_result();
    }

    public function register($data): bool|int|string
    {
        $sql = "INSERT INTO customers (customer_fname, customer_lname, customer_email, customer_username, customer_password) VALUES ('" . $data['fname'] . "', '" . $data['lname'] . "','" . $data['email'] . "','" . $data['username'] . "','" . $data['password'] . "')";
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

    public function update($data): bool
    {
        $sql = "UPDATE customers 
                SET customer_fname = '".$data['fname']."',
                    customer_lname = '".$data['lname']."',
                    customer_email = '".$data['email']."',
                    customer_phone = '".$data['phone']."',
                    customer_address = '".$data['address']."', 
                    customer_city = '".$data['city']."', 
                    customer_gender = '".$data['gender']."',  
                    customer_modify_date = CURRENT_TIMESTAMP
                WHERE customer_id = '".$data['id']."'";

        if ($this->db->query($sql)) {
            return true;
        } else return false;
    }
}