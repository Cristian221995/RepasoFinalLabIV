<?php
namespace daos\databases;
use interfaces\IDao as IDao;
use daos\SingletonDao as SingletonDao;
use daos\databases\Connection as Connection;
use models\Mario as Mario;

class MarioDB extends SingletonDao implements IDao{

    public function __construct()
    {

    }

    public function insert($mario){

        $query = 'INSERT INTO marios (id_user, velocidad, fuerza, inteligencia, agilidad, camiseta, pantalon, calzado) VALUES (:id_user, :velocidad, :fuerza, :inteligencia, :agilidad, :camiseta, :pantalon, :calzado)';
        $parameters['id_user'] = $mario->getIdUser();
        $parameters['velocidad'] = $mario->getVelocidad();
        $parameters['fuerza'] = $mario->getFuerza();
        $parameters['inteligencia'] = $mario->getInteligencia();
        $parameters['agilidad'] = $mario->getAgilidad();
        $parameters['camiseta'] = $mario->getCamiseta();
        $parameters['pantalon'] = $mario->getPantalon();
        $parameters['calzado'] = $mario->getCalzado();
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
            return new Mario ($p['id_user'], $p['title'], $p['description'], $p['price'], $p['image'], $p['bedrooms'], $p['parking']);
        }, $value);
        return count($resp) > 1 ? $resp : $resp['0'];
    }

    public function delete($title){        

    
    }

    public function update($dato, $datoNuevo){

    }

    
}

?>