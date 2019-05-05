@extends('layouts.app')
@section('content')
    <h1 class="header center grey-text">Busca Thumb</h1>
    <div class="row center">
        <div class="row">
            <h5 class="header col s12 light">
                Uma forma fácil e rápida para pegar a miniatura do Youtube! Copie e cole a URL do Youtube no campos
                abaixo.
            </h5>
            <br/><br/><br/><br/><br/><br/><br/>
            <div class="input-field col s12">
                <input id="url" type="text">
                <label for="url">URL</label>
                <span class="helper-text" data-error="wrong"
                      data-success="right">Copie e cole a URL do Youtube</span>
            </div>

            <a id='botao'>
                <img alt="" name="b1"/>
            </a>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col s12 m4">
            <div class="icon-block">
                <h2 class="center"><i class="material-icons">free_breakfast</i></h2>
                <h5 class="center">Sobre</h5>

                <p class="light">O BuscaThumb serve para buscar miniaturas por meio da URL dos vídeos do <b><a
                                href="https://www.youtube.com/" target="_blank">Youtube</a></b>.</p>
            </div>
        </div>

        <div class="col s12 m4">
            <div class="icon-block">
                <h2 class="center"><i class="material-icons">flash_on</i></h2>
                <h5 class="center">Praticidade</h5>

                <p class="light">Apenas colando a URL do vídeo do Youtube no campo URL, a miniatura já aparece
                    rapidamente abaixo do campo.</p>
            </div>
        </div>

        <div class="col s12 m4">
            <div class="icon-block">
                <h2 class="center"><i class="material-icons">settings</i></h2>
                <h5 class="center">Fácil</h5>

                <p class="light">Copie e cole a URL do vídeo que deseja no campo URL. Somente isso!</p>
            </div>
        </div>
    </div>
    </div>
    </div>

@stop