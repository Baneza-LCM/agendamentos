<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agendamentos</title>

    <!--<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'><link rel="stylesheet" href="/css/welcome.blade.css"> -->

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
       </script>
</head>

<body>

<!-- 
<nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="welcome.blade.php">Principal</a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i>Cadastrar</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>Editar</a>
            </ul>

        </div>
    </nav> -->



    <div class="container mt-5">
        <form method="POST" action="/adicionar">
            @csrf
            <div class="form-group mb-2">
                <label for="exampleInputPassword1">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Nome">
            </div>
            <div class="form-group mb-2">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="email" placeholder="exemplo@gmail.com">
            </div>
            <div class="form-group mb-2">
                <label for="exampleInputPassword1">Telefone</label>
                <input type="text" class="form-control" name="telefone" placeholder="11 9876-54321">
            </div>
            <div class="form-group mb-2">
                <label for="exampleInputPassword1">Endereço</label>
                <input type="text" class="form-control" name="endereco" placeholder="Rua Exemplo, 123">
            </div>
            <div class="form-group mb-2">
                <label for="exampleInputPassword1">CPF</label>
                <input type="text" class="form-control" name="cpf" placeholder="123.456.789-00">
            </div>
            <div class="form-group mb-2">
                <label for="exampleInputPassword1">Nascimento</label>
                <input type="text" class="form-control" name="nascimento" placeholder="01/02/2024">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>

        <table class="table mt-8">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Nascimento</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @if (count($contato) > 0)
                    @foreach ($contato as $cont)
                        <tr>
                            <th>{{ $cont->id }}</th>
                            <th>{{ $cont->nome }}</th>
                            <th>{{ $cont->email }}</th>
                            <th>{{ $cont->telefone }}</th>
                            <th>{{ $cont->endereco }}</th>
                            <th>{{ $cont->cpf }}</th>
                            <th>{{ $cont->nascimento }}</th>
                            <th><a href="/editar/{{ $cont->id }}" class="btn btn-primary">Editar</a>
                                <a href="/excluir/{{ $cont->id }}" class="btn btn-danger">Excluir</a>
                            </th>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th>Sem registros!</th>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>

<!--
<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script><script  src="./js/welcome.blade.js"></script>
-->
    
</body>

</html>
