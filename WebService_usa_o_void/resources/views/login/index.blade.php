@include('layout._includes.topo')

@yield('conteudo')

@include('layout._includes.footer_new')



<div class="row">
    -
</div>


        <form action="{{route('site.login.entrar')}}" method="post">
            {{csrf_field()}}


            <div class="card bg-light mb-3" style="max-width: 30rem; position: relative; left: 30%; ">
                <div class="card-header">Login</div>
                <div style="position: relative; left: 25%;">
                <img  src="{{ asset('img/logo.png') }}" width="250" height="122"/>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="email" name="email" id="email">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="form-group log-status">
                        <input type="password" class="form-control" placeholder="Senha" name="senha" id="senha">
                        <i class="fa fa-lock"></i>
                    </div>

                    <button class="btn btn-dark ">Entrar</button>
                </div>
            </div>




            <!--





            <div class="login-form">
                <img  src="{{ asset('img/logo.png') }}" width="250" height="122"/>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="email" name="email" id="email">
                    <i class="fa fa-user"></i>
                </div>
                <div class="form-group log-status">
                    <input type="password" class="form-control" placeholder="Senha" name="senha" id="senha">
                    <i class="fa fa-lock"></i>
                </div>


                <button class="btn deep-orange">Entrar</button>
            </div>












       <!-- <form class="" action="{{route('site.login.entrar')}}" method="post">
            {{csrf_field() }}


            <div class="input-field ">
                <input type="text" name="email">
                <label>e-mail</label>
            </div>

            <div class="input-field">
                <input type="password" name="senha">
                <label>Senha</label>
            </div>


            <button class="btn deep-orange">Entrar</button> -->

        </form>










