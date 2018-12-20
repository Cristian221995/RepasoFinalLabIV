<?php
namespace daos\databases;
use interfaces\IDao as IDao;
use daos\SingletonDao as SingletonDao;
use daos\databases\Connection as Connection;
use models\realState as realState;

class realStateDB extends SingletonDao implements IDao{

    public function __construct()
    {

    }

    public function insert($realState){

        $query = 'INSERT INTO real_states (id_user, title, description, price, bedrooms, parking, image) VALUES (:id_user, :title, :description, :price, :bedrooms, :parking, :image)';
        $parameters['id_user'] = $realState->getUser();
        $parameters['title'] = $realState->getTitle();
        $parameters['description'] = $realState->getDescription();
        $parameters['price'] = $realState->getPrice();
        $parameters['bedrooms'] = $realState->getBedrooms();
        $parameters['parking'] = $realState->getParking();
        $parameters['image'] = $realState->getImage();
        try{
            $pdo = Connection::getInstance();
            $pdo->connect();
            $pdo->executeNonQuery($query, $parameters);
        }
        catch(\PDOException $ex){
            throw $ex;
        }
    }


    public function retride(){

        $query = 'SELECT * FROM real_states order by id_real_state';
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


    protected function mapear($value) {
        $value = is_array($value) ? $value : [];
        $resp = array_map(function ($p) {
            return new RealState ($p['id_user'], $p['title'], $p['description'], $p['price'], $p['image'], $p['bedrooms'], $p['parking']);
        }, $value);
        return count($resp) > 1 ? $resp : $resp['0'];
    }

    public function delete($title){        

        $query = 'DELETE FROM real_states WHERE title = :title';
        $parameters['title'] = $title;

            try{
                $pdo = Connection::getInstance();
                $pdo->connect();
                $pdo->executeNonQuery($query, $parameters);
            }
            catch(\PDOException $ex){
                throw $ex;
            }
    
    }

    public function update($dato, $datoNuevo){

    }

    
}

?>