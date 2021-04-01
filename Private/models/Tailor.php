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
        $this->db->query('SELECT DISTINCT (tailor_city) AS `city` FROM tailors');
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
        $this->db->query("SELECT * FROM tailors WHERE tailor_email = '$email'");
        //check row
        if ($this->db->rows_count() > 0) {
            return true;
        } else return false;
    }

    public function findTailorByEmail($email): bool
    {
        $this->db->query("SELECT * FROM tailors WHERE tailor_email = '$email'");
        //check row
        if ($this->db->rows_count() > 1) {
            return true;
        } else return false;
    }

    // Get tailors by Username
    public function getTailorByUser($username): bool
    {
        $this->db->query("SELECT * FROM tailors WHERE tailor_username = '$username'");
        //check row
        if ($this->db->rows_count() > 0) {
            return true;
        } else return false;
    }


    public function register($data): int|string|bool
    {
        $sql = "INSERT INTO tailors (tailor_fname ,tailor_lname, tailor_email,tailor_username, tailor_password) 
                  VALUES ('" . $data['fname'] . "', '" . $data['lname'] . "','" . $data['email'] . "','" . $data['username'] . "','" . $data['password'] . "')";

        if ($this->db->query($sql)) {
            return $this->db->last_insert_id();
        } else return false;
    }

    // Login User
    public function login($email, $password): array
    {
        $this->db->query("SELECT * FROM tailors WHERE tailor_email = '$email'");
        $row = $this->db->single_result();
        $hashed_password = $row['tailor_password'];
        if($password === $hashed_password){
            return $row;
        } else {
            false;
        }
    }

    // Get tailors by ID
    public function getTailorById($id): array
    {
        $this->db->query("SELECT * FROM tailors WHERE tailor_id = '$id'");
        return $this->db->single_result($id);
    }

    public function update($data): bool
    {
        $sql = "UPDATE tailors 
                SET tailor_fname = '".$data['fname']."',
                    tailor_lname = '".$data['lname']."',
                    tailor_email = '".$data['email']."',
                    tailor_phone = '".$data['phone']."',
                    tailor_address = '".$data['address']."', 
                    tailor_city = '".$data['city']."', 
                    tailor_style = '".$data['style']."', 
                    tailor_gender = '".$data['gender']."', 
                    tailor_pref = '".$data['pref']."', 
                    tailor_modify_date = CURRENT_TIMESTAMP
                WHERE tailor_id = '".$data['id']."'";

        if ($this->db->query($sql)) {
            return true;
        } else die("Query failed: " . $this->db->error());
    }


    public function file_details($data)
        {
        $this->db->insert('image_table', $data);
        }

    
       
}