

<!-- CAROUSEL-->
<div id="carouselSite" class="carousel slide pt-5" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
        <li data-target="#carouselSite" data-slide-to="1"></li>
        <li data-target="#carouselSite" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?=base_url("Assets/_images/slide-01.jpg");?>" class="img-fluid d-block" alt="Alternative text for slide 1">
            <div class="carousel-caption d-none d-md-block mb-5">
                <h5 class="text-dark text-uppercase">Encontre sua vaga de uma forma fácil.</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?=base_url("Assets/_images/slide-02.jpg");?>" class="img-fluid d-block" alt="Alternative text for slide 2">
            <div class="carousel-caption d-none d-md-block mb-5">
                <h1 class="text-dark text-uppercase ">Vaga já!</h1>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?=base_url("Assets/_images/slide-01.jpg");?>" class="img-fluid d-block" alt="Alternative text for slide 3">
            <div class="carousel-caption d-none d-md-block mb-5">
                <h1 class="text-dark text-uppercase">Vaga já!</h1>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="sr-only">Avançar</span>
    </a>
</div>

<!-- ***************************************************************
                card section goes here
**************************************************************** -->
<div class="title-content-page mt-1" >
    <div class="container-fluid pb-5" id="bg-card">
        <div class="row">
            <h3 class="display-4 mx-auto pt-5">Gerenciar Vagas</h3>
        </div>
        <div class="row my-3">
            <div class="mx-auto  text-center col-12">
                <a  href="<?=base_url('pages/view/page_cadastro_vaga')?>" class="btn btn-success col-2"><img height="15px" src="<?=base_url()?>Assets/_images/plus.svg"> <strong style="color:#ffffff" >Cadastrar Vaga</strong></a>
            </div>
            
            
        </div>
        <div class="row">
            
            <ul class="list-group col-10  mx-auto">
                <li class="list-group-item list-group-item-white d-flex justify-content-between align-items-center">
                    <div>
                        <small class="text-muted">1 Vaga</small>
                        <br>
                        <span style="color:#19C1C3;">
                                ESTÁGIO: Desenvolvedor Web Junior
                            </span>
                    </div>
                    <div class="badge">
                        <a href="#">
                            <button class="btn btn-info"><img height="15px" src="<?=base_url('')?>Assets/_images/view.svg"> Visualizar Candidatos</button> 
                            <button class="btn btn-warning"><img height="15px" src="<?=base_url('')?>Assets/_images/edit.svg"> Editar</button>
                            <button class="btn btn-danger"><img height="15px" src="<?=base_url('')?>Assets/_images/uncheck.svg"> Remover</button>
                        </a>
                    </div>

                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <small class="text-muted">1 Vaga</small>
                        <br>
                        <span style="color:#19C1C3;">
                                ESTÁGIO: Desenvolvedor Web Junior
                            </span>
                    </div>
                    <div class="badge">
                        <a href="#">
                            <button class="btn btn-info"><img height="15px" src="<?=base_url('')?>Assets/_images/view.svg"> Visualizar Candidatos</button> 
                            <button class="btn btn-warning"><img height="15px" src="<?=base_url('')?>Assets/_images/edit.svg"> Editar</button>
                            <button class="btn btn-danger"><img height="15px" src="<?=base_url('')?>Assets/_images/uncheck.svg"> Remover</button>
                        </a>
                    </div>

                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <small class="text-muted">1 Vaga</small>
                        <br>
                        <span style="color:#19C1C3;">
                                ESTÁGIO: Desenvolvedor Web Junior
                            </span>
                    </div>
                    <div class="badge">
                        <a href="#">
                            <button class="btn btn-info"><img height="15px" src="<?=base_url('')?>Assets/_images/view.svg"> Visualizar Candidatos</button> 
                            <button class="btn btn-warning"><img height="15px" src="<?=base_url('')?>Assets/_images/edit.svg"> Editar</button>
                            <button class="btn btn-danger"><img height="15px" src="<?=base_url('')?>Assets/_images/uncheck.svg"> Remover</button>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
