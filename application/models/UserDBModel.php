<?php
/**
 * Created by PhpStorm.
 * User: idelf
 * Date: 23/05/2018
 * Time: 01:55
 */

class UserDBModel extends CI_Model
{
   /* public function __construct(){
        $this->load->database();
    }*/


    //Função para recuperar usuários
    public function getUser($user_name = null) {
        if ($user_name === null) {
            $query = $this->db->get('empresario'); // tabela: empresario
            return $query->result_array();
        }
        $query = $this->db->get_where('empresario', array('nome' => $user_name));

        return $query->row_array();
    }

    public function cadastrarEnpresa($dados = null){
        if ($dados == null){
            show_404();
        }else{
             $query = $this->db->insert('empresario', $dados);
        }

        if ($query){
            return true;
        }else{
            redirect('main/view/page_cadastro_vaga/3');    // erro ao inserir dados na tabela empresario
        }
    }

    public function cadastrarVaga($dados = null){

        $query = $this->db->insert('postagem', $dados);

        if ($query){
            redirect('pages/view/page_cadastro_vaga/1');   // sucesso
        }else{
            redirect('main/view/page_cadastro_vaga/3');    // erro ao inserir dados na tabela postagem
        }
    }

    public function validationCPF($cpf){

        $sql = "SELECT empresario.nome FROM vagajadb.empresario  WHERE empresario.CPF = ?";
        $consulta = $this->db->query($sql, array($cpf));

        if ($consulta !== null){
            return true;
        }else{
            return false;
        }
    }

}