@extends('app')

    @section('content')

        <div class="container">

            <h1>Editar Usuário: {{$login->nome}}</h1>

            {!! Form::open(['url'=>"Login/$login->id/update", 'method'=>'put'])!!}

            <!-- Nome Form Input -->
                <div class="form-group">
                    {!! Form::label('nome', 'Nome:') !!}
                    {!! Form::text('nome', $login->nome, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Salvar Login', ['class'=>'btn btn-primary']) !!}
                </div>

            {!! Form::close() !!}

        </div>

    @endsection