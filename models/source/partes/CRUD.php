<?php 

    class partesCRUD extends Model {

        public function __construct() {
            parent::__construct();
        }
        function insert ($data) {
            try{
              $query = $this->db->connect()->prepare('INSERT INTO partes ( idmodelo,serializable, codpartes,stockmaximo,stockminimo,puntoreorden,estatus, stockactual ) VALUES(:idmodelo, :serializable, :codpartes, :stockmaximo, :stockminimo, :puntoreorden, :estatus, :stockactual)');
    
              $query->execute(['idmodelo'=>$data['idmodelo'], 'serializable'=>$data['serializable'],'codpartes'=>$data['codpartes'],'stockmaximo'=>$data['stockmaximo'],'stockminimo'=>$data['stockminimo'],'puntoreorden'=>$data['puntoreorden'],'estatus'=>$data['estatus'], 'stockactual'=>0 ]);
              
              return true;
            } catch(PDOException $e){
              $this->error = $e->getMessage();
              return false;
            }
          }
    
          function drop ($id) {
            try{
              $query = $this->db->connect()->prepare('DELETE FROM Partes WHERE codpartes = :id');
    
              $query->execute(['id'=>$id]);
              
              return true;
            } catch(PDOException $e){
              echo $e->getMessage();
              return false;
            }
          }
    
          function update ($data, $tipo = null) {
            try{
    
              switch ($tipo) {
                case "1":
                   $query = $this->db->connect()->prepare('UPDATE partes SET stockactual = stockactual + :cantidadparte WHERE codpartes = :codpartes');
                   $query->execute(['codpartes'=>$data['codpartes'], 'cantidadparte'=>$data['cantidadparte']]);
                  break;
    
                case "2":
                   $query = $this->db->connect()->prepare('UPDATE partes SET stockactual = stockactual - :cantidadparte WHERE codpartes = :codpartes');
                   $query->execute(['codpartes'=>$data['codpartes'], 'cantidadparte'=>$data['cantidadparte']]); 
                  break;
                
                default:
                $query = $this->db->connect()->prepare('UPDATE partes SET idmodelo = :idmodelo, serializable = :serializable, stockmaximo = :stockmaximo, stockminimo = :stockminimo, puntoreorden = :puntoreorden WHERE codpartes = :codpartes');
    
                $query->execute(['idmodelo'=>$data['idmodelo'], 'serializable'=>$data['serializable'],'codpartes'=>$data['codpartes'],'stockmaximo'=>$data['stockmaximo'],'stockminimo'=>$data['stockminimo'],'puntoreorden'=>$data['puntoreorden']]);
                  
                  break;
              }
    
              return true;
            } catch(PDOException $e){
              echo $e->getMessage();
              return false;
            }
          }
    
        public function get ($id = null) {
          $items = [];
          try {
            if ( isset($id) ) {
              $query = $this->db->connect()->prepare('SELECT * FROM partes WHERE codpartes = :id');
              $query->execute(['id'=>$id]);
            } else {
              $query = $this->db->connect()->query('SELECT * FROM partes');
            }
    
            while($row = $query->fetch()){
    
              $item = new PartesClass();
    
              $item->setCod($row['codpartes']);
              $item->setSerializable($row['serializable']);
              $item->setStockAct($row['stockactual']);
              $item->setStockMax($row['stockmaximo']);
              $item->setStockMin($row['stockminimo']);
              $item->setPuntoRe($row['puntoreorden']);
              $item->setEstatus($row['estatus']);
              $item->setIdModelo($row['idmodelo']);
    
    
              array_push($items, $item);
            }
            return $items;
          } catch (PDOException $e) {
            return [];
          }
        }
      public function getError () {
        return $this->error;
      }
    }

?>