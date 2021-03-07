<?php
/*
 * This class models the logic of accessing the Tailor information
 * required to be displayed on the webpage.
 */

class Tailor
{

    private Database $db;

    /**
     * Tailor constructor.
     */
    public function __construct()
    {
        $this->db = new Database;
    }

    // Get all tailors in Database
    public function getTailors(): array
    {
        $this->db->query('SELECT * FROM tailors');
        return $this->db->result_set();
    }


    // Get tailors by Gender preference (Male/Female)
    public function getTailorsByPref($pref): array
    {
        $this->db->query("SELECT * FROM tailors WHERE tailor_pref = '$pref'");
        return $this->db->result_set();
    }


    // Get Locations of tailors in database
    public function getTailorsLocation(): ?array
    {
        $this->db->query('SELECT DISTINCT (tailor_city) FROM tailors');
        return $this->db->result_set();
    }

    // Get tailors by Location
    public function getTailorsByLocation($city): ?array
    {
        $this->db->query("SELECT * FROM tailors WHERE tailor_city = '$city'");
        return $this->db->result_set();
    }


    // Get tailors by Email
    public function getTailorByEmail($email): bool
    {
        $this->db->query("SELECT * FROM customers WHERE customer_email = '$email'");
        //check row
        if ($this->db->affected_rows() > 0) {
            return true;
        } else return false;
    }

    // Get tailors by ID
    public function getTailorById($id): ?array
    {
        $this->db->query("SELECT * FROM tailors WHERE tailor_id = '$id'");
        return $this->db->single_result();
    }

    /*    public function register($data): bool
        {
            $this->db->query('INSERT INTO tailors (tailor_fname, tailor_lname, tailor_email, tailor_username, tailor_password) VALUES($data['fname'], ['lname'], $data['email'], $data['uname'], $data['pass'])');
        }*/
    /*
        public function login($email,  $password)
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
    */
}