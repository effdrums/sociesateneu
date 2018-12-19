@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="d-inline">Socies</h2>
                    <div class="col-md-2 d-inline">
                    <a href="{{url('/nouSoci')}}" type="submit" class="btn btn-primary btn-sm float-right ml-2" role="button" title="Afegir Socia"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Afegir</a>
                    </div>
                    <div class="col-md-2 d-inline">
                    <a href="" type="button" class="btn btn-danger btn-sm float-right" role="button" title="Baixa"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Baixa</a>
                    </<div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
