<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body {
        font-family: "Lato", sans-serif;
        background-color: #E9EAEE !important;
    }


    .sidenav {
        height: 100%;
        width: 180px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        padding-top: 20px;
    }

    .sidenav a {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 14px;
        color: #818181;
        display: block;
    }

    .sidenav a:hover {
        color: #f1f1f1;
    }

    .main {
        margin-left: 190px; /* Same as the width of the sidenav */
        font-size: 28px; /* Increased text to enable scrolling */
        padding: 0px 10px;
    }

    @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
    }
</style>



<div class="sidenav">
    <div class="center">
        <li href="/"><img  src="{{ asset('img/logo.png') }}" width="170" height="80"/></li>
    </div>
    @if(Auth::guest())
        <li><a href="{{route('site.login')}}">Login</a></li>
    @else
        <li><a href="{{route('site.login.sair')}}"><i class="material-icons left">power_settings_new</i>Bem vindo {{Auth::user()->name}}</a></li>
    @endif
    <a href="{{route('admin.clientes.consultacliente')}}"><i class="material-icons left">account_circle</i>Clientes</a>
    <a href="{{route('admin.fornecedor.consultaFornecedor')}}"><i class="material-icons left">assignment</i>Fornecedor</a>
    <a href="{{route('admin.vendedor.consultaVendedor')}}"><i class="material-icons left">account_box</i>Vendedores</a>
    <a href="{{route('admin.produto.consultaProduto')}}"><i class="material-icons left">local_offer</i>Produtos</a>
    <a href="#!"><i class="material-icons left">shopping_cart</i>Orçamentos</a>
    <a href="{{route('admin.nfe.consultanotafiscal')}}"><i class="material-icons left">find_in_page</i>Notas Fiscais</a>
    <a href="{{route('admin.emitente.dadosemitente')}}"><i class="material-icons left">portrait</i>Emitente</a>
</div>