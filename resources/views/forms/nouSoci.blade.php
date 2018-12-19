@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="panel-default">
                <div class="panel-header">
                    <h2>Introdueix les dades del nou/nova soci/socia</h2>
                </div>
            </div>
            
            <div class="panel-body">
                
                <div class="socies-form">
                <form class="form-horizontal" role="form" method="POST" action="#MissingAction"> 
                    <div class="form-group{{ isset($errors) && $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Nom*</label>

                                <div class="col-md-8">
                                    <input id="name" type="text" class="form-control" name="name" value="@if (null !== (old('name'))){{ old('name') }}@endif">

                                    @if (isset($errors) && $errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                    </div>
                    <div class="form-group{{ isset($errors) && $errors->has('name') ? ' has-error' : '' }}">
                        <label for="surname1" class="col-md-4 control-label">Cognom*</label>

                                <div class="col-md-8">
                                    <input id="surname1" type="text" class="form-control" name="surname1" value="@if (null !== (old('surname1'))){{ old('surname1') }}@endif">

                                    @if (isset($errors) && $errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('surname1') }}</strong>
                                    </span>
                                    @endif
                                </div>
                    </div>
                    <div class="form-group{{ isset($errors) && $errors->has('name') ? ' has-error' : '' }}">
                        <label for="surname2" class="col-md-4 control-label">Cognom*</label>

                                <div class="col-md-8">
                                    <input id="surname2" type="text" class="form-control" name="surname2" value="@if (null !== (old('surname2'))){{ old('surname2') }}@endif">

                                    @if (isset($errors) && $errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('surname2') }}</strong>
                                    </span>
                                    @endif
                                </div>
                    </div>
                    <div class="form-group{{ isset($errors) && $errors->has('NIF') ? ' has-error' : '' }}">
                        <label for="NIF" class="col-md-4 control-label">NIF/CIF*</label>

                                <div class="col-md-8">
                                    <input id="NIF" type="text" class="form-control" name="NIF" value="@if (null !== (old('NIF'))){{ old('NIF') }}@endif">

                                    @if (isset($errors) && $errors->has('NIF'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('NIF') }}</strong>
                                    </span>
                                    @endif
                                </div>
                    </div>
                    <div class="form-group{{ isset($errors) && $errors->has('address') ? ' has-error' : '' }}">
                        <label for="address" class="col-md-4 control-label">Adreça</label>

                                <div class="col-md-8">
                                    <input id="address" type="text" class="form-control" name="address" value="@if (null !== (old('address'))){{ old('address') }}@endif">

                                    @if (isset($errors) && $errors->has('address'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                    </div>
                    <div class="form-group{{ isset($errors) && $errors->has('community') ? ' has-error' : '' }}">
                        <label for="community" class="col-md-4 control-label">Poblacio</label>

                                <div class="col-md-8">
                                    <input id="community" type="text" class="form-control" name="community" value="@if (null !== (old('community'))){{ old('community') }}@endif">

                                    @if (isset($errors) && $errors->has('community'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('community') }}</strong>
                                    </span>
                                    @endif
                                </div>
                    </div>
                    <div class="form-group{{ isset($errors) && $errors->has('province') ? ' has-error' : '' }}">
                        <label for="province" class="col-md-4 control-label">Provincia</label>

                                <div class="col-md-8">
                                    <input id="province" type="text" class="form-control" name="province" value="@if (null !== (old('province'))){{ old('province') }}@endif">

                                    @if (isset($errors) && $errors->has('province'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('province') }}</strong>
                                    </span>
                                    @endif
                                </div>
                    </div>
                    <div class="form-group{{ isset($errors) && $errors->has('cp') ? ' has-error' : '' }}">
                        <label for="cp" class="col-md-4 control-label">CP:</label>

                                <div class="col-md-8">
                                    <input id="cp" type="text" class="form-control" name="cp" value="@if (null !== (old('cp'))){{ old('cp') }}@endif">

                                    @if (isset($errors) && $errors->has('cp'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('cp') }}</strong>
                                    </span>
                                    @endif
                                </div>
                    </div>
                    <div class="form-group{{ isset($errors) && $errors->has('phone-number') ? ' has-error' : '' }}">
                        <label for="phone-number" class="col-md-4 control-label">Telefon</label>

                                <div class="col-md-8">
                                    <input id="phone-number" type="text" class="form-control" name="phone-number" value="@if (null !== (old('phone-number'))){{ old('phone-number') }}@endif">

                                    @if (isset($errors) && $errors->has('phone-number'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phone-number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                    </div>
                    <div class="form-group{{ isset($errors) && $errors->has('mobile-number') ? ' has-error' : '' }}">
                        <label for="mobile-number" class="col-md-4 control-label">Telefon mòbil</label>

                                <div class="col-md-8">
                                    <input id="mobile-number" type="text" class="form-control" name="mobile-number" value="@if (null !== (old('mobile-number'))){{ old('mobile-number') }}@endif">

                                    @if (isset($errors) && $errors->has('mobile-number'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('mobile-number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                    </div>
                    <div class="form-group{{ isset($errors) && $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-mail</label>

                                <div class="col-md-8">
                                    <input id="email" type="text" class="form-control" name="email" value="@if (null !== (old('email'))){{ old('email') }}@endif">

                                    @if (isset($errors) && $errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                    </div>
                    <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary btn-sm" value="Afegir" title="Afegir socia" name="Afegir"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Afegir socia</button>
                    </div>
                </form>
                </div>
                
            </div>
            
        </div>    
    </div>
    
</div>
@endsection