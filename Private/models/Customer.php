<?php


class Customer
{

    private $db;

    /**
     * User constructor.
     * @param null $data
     */
    public function __construct()
    {
        $this->db = new Database;
    }
    //find user through email
    public function findCustByEmail($email)
    {
        // $this->db->bind(':email', $email);
        $this->db->query('SELECT * FROM customers WHERE customer_email = ?');
        $this->db->bind_val([$email]);
        $this->db->execute_stmt();
        $this->db->bind_res();
        $row = $this->db->single_result();
        //check row
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function register($data)
    {
        $this->db->query('INSERT INTO customers (customer_fname, customer_lname, customer_email, customer_password) VALUES(?, ?, ?, ?)');
        $this->db->bind([$data['fname'], ['lname'], $data['email'], $data['pass']]);
        if ($this->db->execute_stmt()) {
            return true;
        } else {
            return false;
        }
    }

  /*  public function login($email,  $password)
    {
        $this->db->query('SELECT *FROM customers WHERE customer_email=?');
        $this->db->bind([$email]);
        $row = $this->db->single();
        $hashed_password = $row->password;
        if (password_verify($password, $hashed_password)) {
            return $row;
        } else {
            return false;
        }
    }
    public function getUserbyId($user_id)
    {
        $this->db->query('SELECT * FROM users WHERE id= :user_id');
        $this->db->bind(':user_id', $user_id);

        $row = $this->db->single();
        return $row;
    }*/
}