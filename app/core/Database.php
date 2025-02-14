<?php 
namespace App\Core;

class Database {
    public function connect() {
        $string = "mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset=utf8mb4";

        try {
            $con = new \PDO($string, DBUSER, DBPASS, [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION, 
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC, 
            ]);
            return $con;
        } catch (\PDOException $e) {
            if (DEBUG) {
                die("Erro na conexão com o banco de dados: " . $e->getMessage());
            } else {
                die("Erro na conexão com o banco de dados.");
            }
        }
    }
    public function bancoDados(){
        $sql = "SELECT * FROM logs";
        $con = $this->connect();
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(); 
        return $result;
    }
}
