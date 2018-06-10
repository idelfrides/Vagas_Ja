

<br><br><br><br><br>
<div class="container my-5">
    <div class="row">
        <div class="col-6 mx-auto bg-jc p-5">
        
            <div class="box-parent-login ">
                <div class="well box-login">
                
                    <form role="form">
                        <fieldset>
            
                            <div class="form-group ls-login-user">
                                <label for="userLogin">Usuário</label>
                                <input class="form-control ls-login-bg-user input-lg" id="userLogin" type="text" aria-label="Usuário" placeholder="Usuário">
                            </div>
            
                            <div class="form-group ls-login-password">
                                <label for="userPassword">Senha</label>
                                <input class="form-control ls-login-bg-password input-lg" id="userPassword" type="password" aria-label="Senha" placeholder="Senha">
                            </div>
            
                            
            
                            <input type="submit" value="Entrar" class="btn btn-info btn-lg btn-block col-9 mx-auto">
                            
                            <div class="text-right">
                                
                            </div>
                            
            
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-3"></div>
    <div class="row">
        <div class="col-6 text-center mx-auto bg-jc p-3">
            <h6 class="txt-center ls-login-signup">Não possui um usuário?
                <a href="<?=base_url("pages/view/pre_cadastro");?>">Cadastre-se agora</a> <br>
                <a href="#" class="ls-login-forgot text-right">Esqueci minha senha!</a>
            </h6>
        </div>    
    
    </div>
    
</div>
<br><br><br><br><br><br>

<style>
    body {
    background-image: url("<?=base_url('Assets/_images/bg-login.png');?>");
    }
    label {
        margin-bottom: 0;
    }
</style>