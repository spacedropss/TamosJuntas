<?php

include_once("ConectaBD.php");

class Pergunta {

    public function selecionaPergunta($tpPergunta) {

        ConectaBD::conectarBanco();
        $sql = "SELECT * FROM tbpergunta WHERE IDtpViolencia = '$tpPergunta'";
        $resultado = ConectaBD::realizarSelect($sql);
        ConectaBD::fecharBanco();
        return $resultado;
    }
    public function selecionaTpViolenciaPergunta($idPergunta) {
      
        ConectaBD::conectarBanco();
        $sql = "SELECT IDtpViolencia FROM tbpergunta WHERE IDpergunta = '$idPergunta'";
        ConectaBD::fecharBanco();
        return $resultado;
    }
    
    public function selecionaTpViolencia() {
      
        ConectaBD::conectarBanco();
        $sql = "SELECT * FROM tbtipoviolencia";
        $resultado = ConectaBD::realizarSelect($sql);
        ConectaBD::fecharBanco();
        return $resultado;
    }

    public function selecionaRespostas($idPergunta) {
        ConectaBD::conectarBanco();
        $sql = "SELECT * FROM tbresposta WHERE IDpergunta = '$idPergunta'";
        $resultado = ConectaBD::realizarSelect($sql);
        ConectaBD::fecharBanco();
        return $resultado;
    }
    
     public function verResposta($idResposta) {
        ConectaBD::conectarBanco();
        $sql = "SELECT * FROM tbresposta WHERE IDresposta = '$idResposta'";
        $resultado = ConectaBD::realizarSelect($sql);
        ConectaBD::fecharBanco();
        return $resultado;
    }
    
    

}

?>