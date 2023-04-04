<?php
class ServerLoadException extends Exception {}
class NetworkException extends Exception {}
class DiskFullException extends Exception {}
interface NetworkStorage {
    function connect();
    function getName();
    function report($data);
}
class MySQLServer implements NetworkStorage {
    function connect() {
        throw new DiskFullException;
    }
    function getName() {
        return 'MySQL';
    }
    function report($data) {
    }
}
class PostgresSQLServer implements NetworkStorage {

    function connect() {
        // return $this;
        throw new ServerLoadException;
    }
    function getName() {
        return 'PostgresSQLServer';
    }
    function report($data) {
        
    }
}
class MSSQLServer implements NetworkStorage {
    function connect() {
        // throw new NetworkException;
        return $this;
    }
    function getName() {
        return 'MSSQLServer';
    }
    function report($data) {
        
    }
}

class ConnectionPool {
    private $storage;
    private $connection;
    function __construct() {
        $this->storage = array();
    }
    function addStorage(NetworkStorage $storage) {
        array_push($this->storage, $storage);
    }
    // array(MySQLServer, post, mssql)
    function getConnection() {
        foreach($this->storage as $storage) {
            // DiskFullException
            try {
                $this->connection = $storage->connect();
            } catch(ServerLoadException $e) {
                echo $storage->getName(). " is a huge load<br/>";
                $storage->report(array('ip' => '123.234.442', 'error'=> 'load'));
            } catch(NetworkException $e) {
                echo $storage->getName(). " is having some problem with it's Network<br/>";
            } catch(DiskFullException $e) {
                echo $storage->getName(). "has its disk full<br/>";
            }
            if($this->connection) {
                break;
            }
        }
        if($this->connection) {
         return $this->connection;   
        }
        return false;
    }
}

$mysql = new MySQLServer();
$pgsql = new PostgresSQLServer();
$mssql = new MSSQLServer();
$cp = new ConnectionPool();
$cp->addStorage(($mysql));
$cp->addStorage(($pgsql));
$cp->addStorage(($mssql));

$connection = $cp->getConnection();
echo "<pre>";
print_r($connection);
echo "</pre>";