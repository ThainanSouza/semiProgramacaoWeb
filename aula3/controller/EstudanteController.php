<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/model/estudanteModel.php';

class EstudanteController
{
    const CONTROLLER_FOLDER = '/estudante';

    public function listar()
    {
        //Instanciar a model
        //chamar o metodo listar no model
        $estudanteModel = new EstudanteModel();
        $listaEstudantes = $estudanteModel->listarModel();
        $_REQUEST['estudantes'] = $listaEstudantes;
        //renderizar a view
        //AQUI
        require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view' . self::CONTROLLER_FOLDER . '/EstudanteView.php';
    }

    public function salvar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view' . self::CONTROLLER_FOLDER . '/EstudanteForm.php';
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];

            $estudanteModel = new EstudanteModel();
            $estudanteModel->salvarModel($nome, $idade);

            header('Location: http://localhost/' . FOLDER . '/?controller=Estudante&acao=listar');
            exit();
        }
    }
}