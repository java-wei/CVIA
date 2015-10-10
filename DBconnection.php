<?php

class DBConnection {

    /* declare some relevant variables */ 
    private $servername = "mysql5.000webhost.com";
    private $username = "a9386031_admin";
    private $password = "CS3219project";
    private $dbName = "a9386031_cvia"; 
    private $conn;

    public function __construct() {
        initConnection();
    }
    
    public function initConnection() {
        // Create connection
        /* make connection to database */ 
        if (!$conn = mysql_connect($this->servername, $this->username, $this->password)) {
            echo 'Could not connect to mysql';
            exit;
        }

        if (!mysql_select_db($this->dbName, $this->conn)) {
            echo 'Could not select database';
            exit;
        }
    }

    function selectUser($index) {
        $sql = "SELECT * FROM Users where user_id = $index";
        $result = $this->conn->query($sql);
        if ($result->num_rows == 0) {
            return "0 result";
        }
        else {
            $row = $result->fetch_assoc();
            return $row;
        }
    }
    
    function selectJob($index) {
        $sql = "SELECT * FROM Job where job_id = $index";
        $result = $this->conn->query($sql);
        if ($result->num_rows == 0) {
            return "0 result";
        }
        else {
            $row = $result->fetch_assoc();
            return $row;
        }
    }


    function selectCV($index) {
        $sql = "SELECT * FROM CV where cv_id = $index";
        $result = $this->conn->query($sql);
        if ($result->num_rows == 0) {
            return "0 result";
        }
        else {
            $row = $result->fetch_assoc();
            return $row;
        }
    }

    function selectMark($job_id, $cv_id) {
        $sql = "SELECT * FROM Job_CV_grade where job_id = $job_id and cv_id = $cv_id";
        $result = $this->conn->query($sql);
        if ($result->num_rows == 0) {
            return "0 result";
        }
        else {
            $row = $result->fetch_assoc();
            return $row;
        }
    }

    function addUser($user) {
        $sql = "INSERT INTO Users (email, password, first_name, last_name, gender)
                VALUES ($user->email, $user->password, $user->first_name, $user->last_name, $user->gender);";
        $result = $this->conn->query($sql);
        
        if ($result === TRUE) {
            echo "New user record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }
    
    function addJob($job) {
        $sql = "INSERT INTO Job (owner_id, job_title, job_description, job_keyword)
                VALUES ($job->owner_id, $job->job_title, $job->job_description, $job->job_keyword);";
        $result = $this->conn->query($sql);
        
        if ($result === TRUE) {
            echo "New job record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }
    
    function addCV($cv) {
        $sql = "INSERT INTO CV (owner_id, cv_keyword)
                VALUES ($cv->owner_id, $cv->cv_keyword);";
        $result = $this->conn->query($sql);
        
        if ($result === TRUE) {
            echo "New CV record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }
    
    function addGrade($grade) {
        $sql = "INSERT INTO Job_CV_grade (job_id, cv_id, grade)
                VALUES ($grade->job_id, $grade->cv_id, $grade->mark);";
        $result = $this->conn->query($sql);
        
        if ($result === TRUE) {
            echo "New CV record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }
    
    function deleteJob($job_id) {
        $sql = "DELETE FROM Job WHERE job_id=$job_id";

        if ($this->conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $this->conn->error;
        }

    }
    
    public function closeConnection() {
        $this->conn->close();
    }
    
    }


?>