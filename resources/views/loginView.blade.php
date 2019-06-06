
<!-- EXTENDS APP -->
@extends('app')

    @section('content')

        <div class="container">
            
            <h1>USUÁRIOS</h1>

            <button href="{{ url('create') }}" class="btn btn-info pull-right">Adicionar Novo Usuário</button>
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
                                <button>Editar</button>
                                <button>Excluir</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    @endsection


 </body>
<html>