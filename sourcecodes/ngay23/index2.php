<?php
// trong abstract class . class con muốn kế thừa
// dùng từ khóa extends
// classCon extends classCha {}

// với interface dùng từ khóa implements interface
// class ClassA implements interfaceName {}

interface Database {

    public function connect();

    public function readData();
}

class DatabaseMysql implements Database {

    public $conn;
    public function connect() {
        $servername = "localhost";
        $username = "username";
        $password = "password";

        // Create connection
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
        $this->conn = $conn;
    }

    public function readData()
    {
        $sql = "SELECT id, firstname, lastname FROM MyGuests";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            }
        } else {
            echo "0 results";
        }
    }

}

class DatabaseRedis implements Database {

    public $conn;

    public function connect() {
        //Connecting to Redis server on localhost
        $redis = new Redis();
        $redis->connect('127.0.0.1', 6379);
        echo "Connection to server sucessfully";
        //check whether server is running or not
        echo "Server is running: ".$redis->ping();
        $this->conn = $redis;
    }

    public function readData() {
        // Get the stored data and print it
        echo "Stored string in redis:: " .$this->conn→get("tutorial-name");
    }
}
