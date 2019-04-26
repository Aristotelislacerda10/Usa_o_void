@extends('layout._includes.site_new')

@section('titulo', 'Usa o Void')

@section('conteudo')

    <h5 class="center">Painel</h5>

   <div class="container" >
       <div class="" style="position: relative; left: 12%; width: 1020px" >

           <div class="row">

               <div class="col-md-12">
                   <h4 class="no-margin">Painel</h4>
               </div>
               </div>

           <div class="row">

               <div class="col-md-2 col-xs-6 mbot15 border-right">
                   <a href="{{route('admin.clientes._formCliente')}}">
                       <h3 class="bold">{{$qtdclientes}}</h3>
                       <span style="color:#ff2d42">Clientes</span>
                   </a>
               </div>
               <div class="col-md-2 col-xs-6 mbot15 border-right">
                   <a href="{{route('admin.produto._formProduto')}}">
                       <h3 class="bold">{{$qtdprodutos}}</h3>
                       <span style="color:indigo">Produtos</span>
                   </a>
               </div>
               <div class="col-md-2 col-xs-6 mbot15 border-right">
                   <a href="{{route('admin.fornecedor._formFornecedor')}}">
                       <h3 class="bold">{{$qtdfornecedores}}</h3>
                       <span style="color:#0b2e13 ">Fornecedores</span>
                   </a>
               </div>
               <div class="col-md-2 col-xs-6 mbot15 border-right">
                   <a href="{{route('admin.vendedor._formVendedor')}}">
                       <h3 class="bold">{{$qtdvendedores}}</h3>
                       <span style="color:#0000ff">Vendedores</span>
                   </a>
               </div>
               <div class="col-md-2 col-xs-6 mbot15 border-right">
                   <a href="#">
                       <h3 class="bold">0</h3>
                       <span style="color:#261c96">Orçamentos</span>
                   </a>
               </div>
               <div class="col-md-2 col-xs-6 mbot15 border-right">
                   <a href="#" data-cview="ticket_status_9" onclick="dt_custom_view('ticket_status_9','.tickets-table','ticket_status_9',true); return false;">
                       <h3 class="bold">0</h3>
                       <span style="color: #b21f2d ">Notas Emitidas</span>
                   </a>
               </div>

           </div>

    </div>


@endsection

