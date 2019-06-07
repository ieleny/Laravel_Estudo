
<!-- EXTENDS APP -->
@extends('app')

    @section('content')

        <div class="container">
            
            <h1>USUÁRIOS</h1>

            <a href="{{ url('create') }}" class="btn btn-info pull-right">Adicionar Novo Usuário</a>
            <table class="table table-striped table-bordered table-hover">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>AÇÃO</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($Login as $Login)
                        <tr>
                            <td>{{ $Login->id }}</td>
                            <td>{{ $Login->nome }}</td>
                            <td>
                                <a href="{{ route('Login.edit',['id'=>$Login->id]) }}" class="btn btn-success">Editar</a>
                                <a href="{{ route('Login.delete',['id'=>$Login->id]) }}" class="btn btn-info">Excluir</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    @endsection


 </body>
<html>