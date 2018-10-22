<?php
require_once "DBConnection.php";
require_once "Prateleira.php";
require_once "Biblioteca.php";

class CrudBiblioteca
{
    public $conexao;

    public function __construct()
    {
        $this->conexao = DBConnection::getConexao();
    }

    public function addPrateleira($adiciona)
    {
        $sql = "INSERT INTO prateleira (pr_id,pr_descricao,pr_idusuario,pr_datacriacao,pr_status) VALUES (null ,'{$adiciona->pr_descricao}','{$adiciona->pr_idusuario}','{$adiciona->pr_datacriacao}',null)";
//        echo $sql;die;
        $this->conexao->exec($sql);
    }

    public function getPrateleiras($usuario)
    {
        //RETORNA UMA CATEGORIA, DADO UM ID
        //FAZER A CONSULTA
        $sql = "select * from prateleira where pr_idusuario='{$usuario->us_id}'";
//        print_r($sql);die;
        $resultado = $this->conexao->query($sql);
        //FETCH - TRANSFORMA O RESULTADO EM UM ARRAY ASSOCIATIVO
        $prateleiras = $resultado->fetchAll(PDO::FETCH_ASSOC);
        foreach ($prateleiras as $prateleira) {
            $pr_id = $prateleira['pr_id'];
            $pr_descricao = $prateleira['pr_descricao'];
            $pr_idusuario = $prateleira['pr_idusuario'];
            $pr_datacriacao = $prateleira['pr_datacriacao'];
            $pr_status = $prateleira['pr_status'];
            $obj = new Prateleira($pr_id, $pr_descricao, $pr_idusuario, $pr_datacriacao, $pr_status);
            $ListaPrateleiras[] = $obj;
        }
        if($ListaPrateleiras[0] == ''){
            $ListaPrateleiras = 0;
            return $ListaPrateleiras;
        }

        //RETORNAR UM OBJETO CATEGORIA COM OS VALORES
        return $ListaPrateleiras;
    }

    public function getLivrosPrateleira($prateleira)
    {

        $sql = "select * from biblioteca where bi_idprateleira='{$prateleira->pr_id}'";
        $resultado = $this->conexao->query($sql);
        //FETCH - TRANSFORMA O RESULTADO EM UM ARRAY ASSOCIATIVO
        $bibliotecas = $resultado->fetchAll(PDO::FETCH_ASSOC);
        foreach ($bibliotecas as $biblioteca) {
            $bi_id = $biblioteca['bi_id'];
            $bi_idlivro = $biblioteca['bi_idlivro'];
            $bi_idprateleira = $biblioteca['bi_idprateleira'];
            $bi_datainclusao = $biblioteca['bi_datainclusao'];
            $bi_observacao = $biblioteca['bi_observacao'];
            $obj = new Biblioteca($bi_id, $bi_idlivro, $bi_idprateleira, $bi_datainclusao, $bi_observacao);
            $ListaBibliotecas[] = $obj;
        }
        if($ListaBibliotecas[0] == ''){
            $ListaBibliotecas = 0;
            return $ListaBibliotecas;
        }
        //RETORNAR UM OBJETO CATEGORIA COM OS VALORES
        return $ListaBibliotecas;
    }

    public function addBiblioteca($adiciona)
    {
        $sql = "INSERT INTO biblioteca (bi_id,bi_idlivro,bi_idprateleira,bi_datainclusao,bi_observacao) VALUES (null ,'{$adiciona->bi_idlivro}','{$adiciona->bi_idprateleira}','{$adiciona->bi_datainclusao}',null)";
//        echo $sql;die;
        $this->conexao->exec($sql);
    }

}