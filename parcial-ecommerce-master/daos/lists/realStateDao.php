<?php
namespace daos\lists;
use interfaces\IDao as IDao;
use daos\SingletonDao as SingletonDao;

class RealStateDao extends SingletonDao implements IDao
{
    private $list;
    public function __construct()
    {
        $this->list = array();
    }

    /*getSessionArtist(): Consulta si la sesión esta creada, si lo está, retorna la lista de artistas
    guardada en la sesión. De lo contrario guarda un array vacio en la sesión, y por último lo retorna*/

    public function getSessionRealState()
    {
        if (!isset($_SESSION['RealStateList'])) {
            $_SESSION['RealStateList'] = array();
        }
        return $_SESSION['RealStateList'];
    }

    /*setSessionArtist($value): Sirve para actualizar la lista de la sesión.
     Parametros: $value= la lista actualizada.*/

    public function setSessionRealState($value)
    {
        $_SESSION['RealStateList'] = $value;
    }

    /*insert($dato): Guarda en la variable $list el array de artistas retornado en getSessionArtist()
    y almacena en a última posición del array al nuevo artista que desea agregar. Finalmente llama
    a setSessionArtist() para guardar los cambios.
    Parámetros: $dato = nuevo artista a guardar.*/

    public function insert($realState)
    {
        $this->list=$this->getSessionRealState();
        array_push($this->list, $realState);
        $this->setSessionRealState($this->list);

    }

    public function delete($dato){
        $this->list=$this->getSessionRealState();
       
            foreach ($this->list as $key => $value) {
                if($value->getTitle()===$dato){
                    unset($this->list[$key]);
                    $this->setSessionRealState($this->list);
                }
            }
        
    }

    public function update($dato, $datoNuevo){
        $this->list=$this->getSessionRealState();
        if(in_array($dato,$this->list)){
            foreach ($this->list as $key => $value) {
                if($value->getName()===$dato->getName()){
                    $value->setName($datoNuevo);
                    $this->setSessionRealState($this->list);
                    return;
                }
            }
        }
        else{
            echo "El artista no existe<br>";
        }
    }

    public function retride(){
        $this->list=$this->getSessionRealState();
        return $this->list;
    }

}
