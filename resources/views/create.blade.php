@extends('app')

    @section('content')

    <div class="container">
        <h1>USUÁRIOS</h1>
        
        {!! Form::open(['url'=>'Login/create']) !!}

            <!-- Nome Form Input -->
                <div class="form-group input-group-sm">
                    {!! Form::label('nome', 'Nome:') !!}
                    {!! Form::text('nome', 'Informe seu nome aqui', ['class'=>'form-control','required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Criar Produto', ['class'=>'btn btn-primary']) !!}
                </div>

        {!! Form::close()   !!}

    </div>

@endsection