<?php
/**
 * Created by PhpStorm.
 * User: idelf
 * Date: 22/05/2018
 * Time: 23:58
 */


class Pages extends CI_Controller{

    public function view($page = 'home', $status = null){
        if (! file_exists(APPPATH.'views/vj_pages/'.$page.'.php')){
            /* Erro 404 -> arquivo não encontrado: redireciona a aplicação
               para  a page Welcome personalizada */
            redirect("Welcome/page404");
        }

        $data['title'] = ucfirst($page);                                // Capitalize

        $this->load->view('BaseTemplates/header_template', $data);      // carrega o header
        $this->alertMsg($status);                                       // exibe uma mensagem de alerta
        $this->load->view('vj_pages/'.$page, $data);                    // carrega a página solicitada
        $this->load->view('BaseTemplates/footer_template', $data);      // carrega o footer
    }

    /**
    * método de exibição de dados sobre os membros
        */
    public function alertMsg($status){
        if ($status == 1){
            $this->load->view('_include/msg_success');       // sucesso
        }elseif ($status == 2){
            $this->load->view('_include/msg_danger_cpf');    // erro cpg
        }elseif ($status == 3){
            $this->load->view('_include/msg_danger_db');     // erro de consulta ao db
        }elseif ($status == 4){
            $this->load->view('_include/msg_danger');        // erro ao enviar  sms
        }elseif ($status == 5){
            $this->load->view('_include/msg_warning_cpf');   // aviso cpf
        }
    }

    public function cadastroEnpresario(){

        $this->load->model('empresa');
        $emtpo = new Empresa();

        $emtpo->cadastroEnpresa();
    }


    public  function cadastroVaga(){

    }

}