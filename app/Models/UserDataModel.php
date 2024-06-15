<?php namespace App\Models\DatabaseModel;

namespace App\Models;

use CodeIgniter\Model;

// CREATE TABLE usuarios (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     nome VARCHAR(50) NOT NULL,
//     email VARCHAR(50) NOT NULL,
//     senha VARCHAR(255) NOT NULL,
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE
//     CURRENT_TIMESTAMP
//     );

// CREATE TABLE aulasassistidas (
//     idAula INT(11) NOT NULL,
//     idAluno INT(11) NOT NULL,
//     data TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE
//     CURRENT_TIMESTAMP
//     );
    
// CREATE TABLE supporttickets (
//   idTicket INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   idAluno INT(11) NOT NULL,
//   descricao VARCHAR(255) NOT NULL,
//   data TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//   );

// CREATE TABLE aulas (
//   idAula INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   descricao VARCHAR(255) NOT NULL,
//   link  VARCHAR(255) NOT NULL
//   data TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//   );


class UserDataModel extends Model {
  protected $table = 'users';
  protected $allowedFields = ['id', 'nome', 'email', 'senha', 'reg_date'];

  public function login($email, $password)
  {
    $query = $this->db->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$password'");
    if($query->getNumRows() == 1){
      return $query->getRow()->id;
    }
    return 0;
  }

  public function cadastrar($nome, $email, $password) {
    $query = "SELECT * FROM usuarios where email = '".$email."'";
    
    if($this->db->query($query)->getNumROws() > 0) {
      return false;
    } else {
      $query = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$password')";

      $this->db->query($query);
      }
      
      return true;
  }

  public function assistir($videoId, $user) {
    $query = "INSERT INTO aulasAssistidas (idAula,idAluno) VALUES ('$videoId', '$user')";

    $this->db->query($query);
  }

  public function aulasAssistidas($user) {
    $query = "SELECT * FROM aulasAssistidas where idAluno = '$user'";


    $result = [];
    $i = 0;
    foreach ($this->db->query($query)->getResult() as $row){
      $result[$i] = $row;
      $i++;
    }
    return $result;
  }

  public function listarTodosUsuarios() {
    $query = $this->db->query("SELECT * FROM usuarios");
    $result = [];
    $i = 0;
    foreach ($query->getResult() as $row) {
        $result[$i] = $row;
        $i++;
    }
    return $result;
  }
  
  public function aulasMaisAssistidas()
  {
    $query = $this->db->query("
    SELECT 
        aa.idAula, 
        COUNT(aa.idAula) as visualizacoes, 
        a.descricao 
    FROM 
        aulasAssistidas aa
    JOIN 
        aulas a ON aa.idAula = a.idAula
    WHERE 
        a.descricao IS NOT NULL AND a.descricao != ''
    GROUP BY 
        aa.idAula, a.descricao
    ORDER BY 
        visualizacoes DESC
");

return $query->getResult();
  }



  public function insertNewTicket($idAluno, $descricao) {
    if(strlen($descricao) > 255) return -1;

    $query = "INSERT INTO supporttickets (idAluno, descricao) VALUES ('$idAluno', '$descricao')";

    $this->db->query($query);

    return 0;
  }

}

