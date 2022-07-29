<h3>Fornecedor Index</h3>



{{-- Forma de fazer comentarios no blade --}}

@php
    // PHP nativo dentro do blade
    echo 'Olá mundo';

    // if(){

    // } elseif() {

    // } else {

    // }

@endphp

{{-- Só é possivel imprimir um array com o dd, que originalmente serve para depuração do código --}}

{{-- @dd($fornecedores) --}}

{{-- O isset verifica se a variavel existe antes de executar o código --}}

@isset($fornecedores)
            
    {{-- If executa se o retorno for true --}}

    @if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3> Existem alguns fornecedores cadastrados! <h3>
    @elseif(count($fornecedores) > 10)
    <h3> Existem vários fornecedores cadastrados! <h3>
    @else
    <h3> Ainda não existem fornecedores cadastrados! <h3>
    @endif

    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    @if ($fornecedores[0]['status'] == 'N')
    <h3>O status do seu fornecedor não está autorizado.</h3>
    {{-- @else
    <h3>O status do seu fornecedor está autorizado.</h3> --}}
    @endif

    {{-- Unless executa a linha de comando se o que for passado for false --}}
    @unless ($fornecedores[0]['status'] == 'S')
    <h3>O status do seu fornecedor não está autorizado. Com unless :)</h3>

    @endunless

    {{-- Unless executa se o retorno for false --}}

@endisset


{{-- Muitos dos comando utilizados no blade são similares aos comandos utilizados no php
     puro, muitos conceitos basicos de programação.
    --}}