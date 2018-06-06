<?php
/**
 * Created by PhpStorm.
 * User: idelf
 * Date: 22/05/2018
 * Time: 23:58
 */

/* Códigos de controle de alert:
 * 1 -> Operação realizada c/ sucesso
 * 2 -> Erro do cpf/cnpj
 * 3 -> Erro de consultado ao DB
 * 4 -> Erro ao enviar mensagem
 * 5 -> Aviso
 */

class Empresa extends CI_Controller
{

    public function dbManag(){

        $this->load->model('userdbmodel');
        $usr = new UserDBModel();

        print_r($usr->getUser('obama'));
        print_r($usr->getUser(''));
        print_r($usr->getUser('wm'));

    }

    public function cadastroEnpresa(){

        include('ValidaCPFCNPJ.php');                          // inclui o controller ValidaCPFCNPJ

        $dadosForm['nome'] = $this->input->post('InputName');
        $dadosForm['CPF'] = $this->input->post('InputCPF');
        $dadosForm['email'] = $this->input->post('InputEmail');
        $dadosForm['tel'] = $this->input->post('InputTel');
        $dadosForm['endereco'] = $this->input->post('InputEnd');
        $dadosForm['cidade'] = $this->input->post('InputCid');
        $dadosForm['site'] = $this->input->post('InputSite');

        $cpfaux = $this->input->post('InputCPF');

        // criptografar a senha antes de enserir do db
        // $senha = $this->input->post('InputSenha');
        // $dadosVaga['senha'] = md5($this->senha);

        $cpf_cnpj_v = $this->input->post('InputCPF');


        $vcpfo = new ValidaCPFCNPJ($cpf_cnpj_v);         // Cria um objeto sobre a classe

        $formated = $vcpfo->formatar();                  // Opção de CPF ou CNPJ formatado no padrão
        $validation = $vcpfo->validar();                 // Opção de CPF ou CNPJ formatado,  precisa apenas validação no padrão

        if ($formated || $validation){
            $this->load->model('userdbmodel');
            $dbo = new UserDBModel();

            $auxQuery =  $dbo->cadastrarEnpresa($dadosForm);
            $dados2Form['cpf'] = $cpfaux;

            if ($auxQuery == true){
                //sleep(3);
                $this->load->view('BaseTemplates/header_template');
                $this->load->view('vj_pages/page_cadastro_vaga', $dados2Form);
                $this->load->view('BaseTemplates/footer_template');
               //redirect('pages/view/page_cadastro_vaga/1', $dadosForm);   // sucesso
            }

        }else{
            redirect('pages/view/page_cadastro_empresario/2');    // alert danger: cpf/cnpj invalido
        }
    }

    public function cadastroVaga(){

        $dadosVaga['tipo_oportuidade'] = $this->input->post('InputTipVaga');
        $dadosVaga['cargo'] = $this->input->post('InputCargo');
        //$dadosVaga['cpf'] = $this->input->post('InputCPF');
        $dadosVaga['descricao_oportunidade'] = $this->input->post('InputDesc');
        $dadosVaga['area_atuacao'] = $this->input->post('InputAreAtuacao');
        $dadosVaga['perfil'] = 'eu coloquei inteligent';
        $dadosVaga['num_vagas'] = $this->input->post('InputNumVagas');
        $dadosVaga['cidade'] = $this->input->post('InputCid');

        $this->load->model('userdbmodel');
        $dbo = new UserDBModel();
        $dbo->cadastrarVaga($dadosVaga);
    }

}