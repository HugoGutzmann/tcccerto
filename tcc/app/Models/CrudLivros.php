<?php
/**
 * Created by PhpStorm.
 * User: Hugo
 * Date: 21/07/2018
 * Time: 19:03
 */
require_once "DBConnection.php";
require_once "Livros.php";
require_once "FatorLivro.php";
require_once "CrudGenero.php";

class CrudLivros
{
    private $conexao;
    public $livros;
public function __construct()
{
    $this->conexao = DBConnection::getConexao();
}

public function addLivro(Livros $livros){

//    print_r($livros->li_idusuario);die;
    $sql = "INSERT INTO livro (li_ano, li_autor, li_censura, li_editora,li_paginas,li_titulo,li_idlivro, li_idusuario) VALUES ('{$livros->li_ano}' ,'{$livros->li_autor}','{$livros->li_censura}','{$livros->li_editora}','{$livros->li_paginas}','{$livros->li_titulo}',null,'{$livros->li_idusuario}')";
//    echo $sql;die;
    $this->conexao->exec($sql);
    $idlivro = $this->conexao->lastInsertId();
    return $idlivro;
}

public function excluirLivro($idlivro){
    $sql1 = "DELETE FROM generolivro WHERE gl_idlivro = {$idlivro};";
    $sql2= "DELETE FROM fatorlivro WHERE fl_idlivro = {$idlivro};";
    $sql3 = "DELETE FROM livro WHERE li_idlivro = {$idlivro};";

    $this->conexao->exec($sql1);
    $this->conexao->exec($sql2);
    $this->conexao->exec($sql3);
}

    public function editarLivro(array $livro){
        $sql = "UPDATE livro SET li_ano = '{$livro['li_ano']}', li_autor = {$livro['li_autor']}, li_censura= '{$livro['li_censura']}', li_editora= {$livro['li_editora']}, li_paginas= {$livro['li_paginas']}, li_titulo= {$livro['li_titulo']} WHERE li_idlivro = {$livro['li_idlivro']}";

        $this->conexao->exec($sql);
    }


    public function buscarLivros($busca){

            $sql = $this->conexao->query("SELECT * FROM livro WHERE li_titulo = '{$busca}' ");
//            print_r($sql);die;

            $livros = $sql->fetchAll(PDO::FETCH_ASSOC);
            foreach ($livros as $livro) {
                $li_ano = $livro['li_ano'];
                $li_autor = $livro['li_autor'];
                $li_censura = $livro['li_censura'];
                $li_editora = $livro['li_editora'];
                $li_paginas = $livro['li_paginas'];
                $li_titulo = $livro['li_titulo'];
                $li_idlivro = $livro['li_idlivro'];
                $li_idusuario = $livro['li_idusuario'];
                $obj = new Livros($li_ano,$li_autor,$li_censura,$li_editora,$li_paginas,$li_titulo,$li_idlivro,$li_idusuario);
                $ListaLivros[] = $obj;
            }
            return $ListaLivros;

    }

    public function getLivros(){
        $consulta = $this->conexao->query("SELECT * FROM livro");

        $livros = $consulta->fetchAll(PDO::FETCH_ASSOC);
        foreach ($livros as $livro) {
            $li_ano = $livro['li_ano'];
            $li_autor = $livro['li_autor'];
            $li_censura = $livro['li_censura'];
            $li_editora = $livro['li_editora'];
            $li_paginas = $livro['li_paginas'];
            $li_titulo = $livro['li_titulo'];
            $li_idlivro = $livro['li_idlivro'];
            $li_idusuario = $livro['li_idusuario'];
            $obj = new Livros($li_ano,$li_autor,$li_censura,$li_editora,$li_paginas,$li_titulo,$li_idlivro,$li_idusuario);
            $ListaLivros[] = $obj;
        }
        return $ListaLivros;
    }

    public function getLivro($idlivro){
        //RETORNA UMA CATEGORIA, DADO UM ID
        //FAZER A CONSULTA
        $sql = "select * from livro where li_idlivro='{$idlivro}'";
        $resultado = $this->conexao->query($sql);
        //FETCH - TRANSFORMA O RESULTADO EM UM ARRAY ASSOCIATIVO
        $livro = $resultado->fetch(PDO::FETCH_ASSOC);
        //CRIAR OBJETO DO TIPO CATEGORIA - USANDO OS VALORES DA CONSULTA
        $objetoLivro = new Livros(
            $livro['li_ano'],
            $livro['li_autor'],
            $livro['li_censura'],
            $livro['li_editora'],
            $livro['li_paginas'],
            $livro['li_titulo'],
            $livro['li_idlivro'],
            $livro['li_idusuario']

        );
        //RETORNAR UM OBJETO CATEGORIA COM OS VALORES
        return $objetoLivro;
    }

    public function addResenha(Resenha $sinopseLivro)
    {
        $sql = "INSERT INTO resenha (re_id,re_idlivro,re_idusuario,re_data,re_textoresenha,re_status) VALUES (null ,'{$sinopseLivro->re_idlivro}','{$sinopseLivro->re_idusuario}','{$sinopseLivro->re_data}','{$sinopseLivro->re_textoresenha}','{$sinopseLivro->re_status}')";
//        echo $sql; die;
        $this->conexao->exec($sql);


    }
    public function getResenhas($idlivro){
        //RETORNA UMA CATEGORIA, DADO UM ID
        //FAZER A CONSULTA
        $sql = "select * from resenha where re_idlivro='{$idlivro}'";
        $resultado = $this->conexao->query($sql);
        //FETCH - TRANSFORMA O RESULTADO EM UM ARRAY ASSOCIATIVO
        $resenha = $resultado->fetch(PDO::FETCH_ASSOC);
        //CRIAR OBJETO DO TIPO CATEGORIA - USANDO OS VALORES DA CONSULTA
        $objetoResenha = new Resenha(
        $resenha['re_id'],
        $resenha['re_idlivro'],
        $resenha['re_idusuario'],
        $resenha['re_data'],
        $resenha['re_textoresenha'],
        $resenha['re_status']
        );
        return $objetoResenha;
    }


    public function addFatoresLivro(Livros $id_livro,$livro, $generoDesseLivro){


        $sql1 = "INSERT INTO fatorlivro (fl_id,fl_idfator,fl_idlivro,fl_idusuario,fl_valor) VALUES (null, 1, '{$id_livro->li_idlivro}','{$livro->li_idusuario}', '{$livro->li_paginas}')";
        $sql2 = "INSERT INTO fatorlivro (fl_id,fl_idfator,fl_idlivro,fl_idusuario,fl_valor) VALUES (null, 2, '{$id_livro->li_idlivro}','{$livro->li_idusuario}', '{$generoDesseLivro}')";
        $sql3 = "INSERT INTO fatorlivro (fl_id,fl_idfator,fl_idlivro,fl_idusuario,fl_valor) VALUES (null, 4, '{$id_livro->li_idlivro}','{$livro->li_idusuario}', '{$livro->li_ano}')";
        $sql4 = "INSERT INTO fatorlivro (fl_id,fl_idfator,fl_idlivro,fl_idusuario,fl_valor) VALUES (null, 5, '{$id_livro->li_idlivro}','{$livro->li_idusuario}', '{$livro->li_censura}')";

//        print_r($sql1);
//        print_r($sql2);
//        print_r($sql3);
//        print_r($sql4);
//        die;


        $this->conexao->exec($sql1);
        $this->conexao->exec($sql2);
        $this->conexao->exec($sql3);
        $this->conexao->exec($sql4);

    }
    public function getLivroPorUsuario($usuario){
        //RETORNA O MAIOR ID LIVRO QUE AQUELE USUARIO ADICIONOU
        //FAZER A CONSULTA
        $sql = "select * from livro where li_idusuario='{$usuario}' GROUP BY li_idlivro DESC ";
        $resultado = $this->conexao->query($sql);
        //FETCH - TRANSFORMA O RESULTADO EM UM ARRAY ASSOCIATIVO
        $livro = $resultado->fetch(PDO::FETCH_ASSOC);
        //CRIAR OBJETO DO TIPO CATEGORIA - USANDO OS VALORES DA CONSULTA
        $objetoLivro = new Livros(
            $livro['li_ano'],
            $livro['li_autor'],
            $livro['li_censura'],
            $livro['li_editora'],
            $livro['li_paginas'],
            $livro['li_titulo'],
            $livro['li_idlivro'],
            $livro['li_idusuario']

        );
        //RETORNAR UM OBJETO CATEGORIA COM OS VALORES
        return $objetoLivro;
    }
}