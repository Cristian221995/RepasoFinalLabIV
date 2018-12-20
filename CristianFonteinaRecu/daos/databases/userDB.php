<?php
namespace daos\databases;
use interfaces\IDao as IDao;
use daos\SingletonDao as SingletonDao;
use daos\databases\Connection as Connection;
use models\User as User;

class UserDB extends SingletonDao implements IDao{

    public function __construct()
    {

    }

    public function insert($user){

        $query = 'INSERT INTO users (user_email, user_pass) VALUES (:user_email, :user_pass)';
        $parameters['user_email'] = $user->getEmail();
        $parameters['user_pass'] = $user->getPass();
        try{
            $pdo = Connection::getInstance();
            $pdo->connect();
            $pdo->executeNonQuery($query, $parameters);
        }
        catch(\PDOException $ex){
            throw $ex;
        }
    }
    public function delete($user){
        
    }

    public function update($dato, $datoNuevo){

    }

    public function retride(){

        $query = 'SELECT * FROM users order by id_user';
        try{
            $pdo = Connection::getInstance();
            $pdo->connect();
            $result = $pdo->execute($query);
        }
        catch(\PDOException $ex){
            throw $ex;
        }
        if(!empty($result)){
            return $this->mapear($result);
        }
        else{
            return false;
        }
    }

    public function retrideById($id){

        $query = "SELECT * FROM users where id_user = :id_user";
        $parameters['id_user'] = $id;
        try {
            $this->connection = Connection::getInstance();
            $this->connection->connect();
            $result = $this->connection->execute($query, $parameters);
        }
        catch(Exception $ex) {
            throw $ex;
        }
        if (!empty($result)){
            return $this->mapear($result);
        }
        else{
            return false;
        }
    }

    public function getIdByName($name){

        $query = "SELECT id_user FROM users WHERE user_name = :user_name";
        $parameters['user_name'] = $name;
        try {
            $this->connection = Connection::getInstance();
            $this->connection->connect();
            $result = $this->connection->execute($query, $parameters);
        }
        catch(Exception $ex) {
            throw $ex;
        }
        if (!empty($result)){
            return $this->mapear($result);
        }
        else{
            return false;
        }
    }

    public function searchByUsername($user_email){

        $query = "SELECT * FROM users WHERE user_email = '$user_email'";
        try {
            $this->connection = Connection::getInstance();
            $this->connection->connect();
            $result = $this->connection->execute($query);
        }
        catch(Exception $ex) {
            throw $ex;
        }
        if (!empty($result)){
            return $this->mapear($result);
        }
        else{
            return false;
        }
    }

    protected function mapear($value) {
        $value = is_array($value) ? $value : [];
        $resp = array_map(function ($p) {
            return new User ($p['id_user'], $p['user_email'], $p['user_pass']);
        }, $value);
        return count($resp) > 1 ? $resp : $resp['0'];
    }
    
}

?>