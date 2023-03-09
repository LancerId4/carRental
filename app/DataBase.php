<?php
require "DataBaseConfig.php";

class DataBase
{
    public $connect;
    public $data;
    private $sql;
    protected $servername;
    protected $email;
    protected $username;
    protected $password;
    protected $databasename;
    protected $number;
    protected $id_car;
    protected $id_dropoff;
    protected $id_pickup;
    protected $id_user;
    protected $date_pickup;
    protected $date_dropoff;


    public function __construct()
    {
        $this->connect = null;
        $this->data = null;
        $this->sql = null;
        $dbc = new DataBaseConfig();
        $this->servername = $dbc->servername;
        $this->username = $dbc->username;
        $this->password = $dbc->password;
        $this->databasename = $dbc->databasename;
    }

    function dbConnect()
    {
        $this->connect = mysqli_connect($this->servername, $this->username, $this->password, $this->databasename);
        return $this->connect;
    }

    function prepareData($data)
    {
        return mysqli_real_escape_string($this->connect, stripslashes(htmlspecialchars($data)));
    }

    function logIn($table, $email, $password)
    {
        $email = $this->prepareData($email);
        $password = $this->prepareData($password);
        $this->sql = "select * from " . $table . " where email = '" . $email . "'";
        $result = mysqli_query($this->connect, $this->sql);
        $row = mysqli_fetch_assoc($result);
        if (mysqli_num_rows($result) != 0) {
            $dbemail = $row['email'];
            $dbpassword = $row['password'];
            if ($dbemail == $email && password_verify($password, $dbpassword)) {
                $login = true;
            } else $login = false;
        } else $login = false;

        return $login;
    }

    function signUp($table, $email, $username, $password)
    {
        $username = $this->prepareData($username);
        $password = $this->prepareData($password);
        $email = $this->prepareData($email);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $this->sql =
            "INSERT INTO " . $table . " (username, password, email) VALUES ('" . $username . "','" . $password . "','" . $email . "')";
        if (mysqli_query($this->connect, $this->sql)) {
            return true;
        } else return false;
    }


    function bookingSubmit($table, $id_booking, $id_user, $id_car, $id_pickup, $date_pickup, $id_dropoff, $date_dropoff, $email, $number)
    {
        $id_user = $this->prepareData($id_user);
        $id_car = $this->prepareData($id_car);
        $id_pickup = $this->prepareData($id_pickup);
        $date_pickup = $this->prepareData($date_pickup);
        $id_dropoff = $this->prepareData($id_dropoff);
        $date_dropoff = $this->prepareData($date_dropoff);   
        $email = $this->prepareData($email);      
        $number= $this->prepareData($number);
        $this->sql =
            "INSERT INTO " . $table . " (id_user, id_car, id_pickup, date_pickup, id_dropoff, date_dropoff, email, number) VALUES ('" . $id_user . "','" . $id_car . "','" . $id_pickup . "','" . $date_pickup . "','" . $id_dropoff . "','" . $date_dropoff . "','" . $email ."','" . $number . "')";
        if (mysqli_query($this->connect, $this->sql)) {
            return true;
        } else return false;
    }

}

?>
