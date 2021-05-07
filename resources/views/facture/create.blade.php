@extends('facture.layout')

@section('content')
@section('content_header')
    <h1>Crear Facture</h1>
@endsection

@section('content')

    <form action="/factures" method="POST">
        @csrf
        @if ($errors->any())
            <div class="upform-header">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
        <div class="mb-3">
            <label for="" class="form-label">{{ __('backoffice.designation') }}</label>
            <input id="designation" name="designation" type="text" class="form-control {{ $errors->has('designation') ? 'error' : 'border-grey-light' }}"  tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">{{ __('backoffice.description') }}</label>
            <input id="description" name="description" type="text" class="form-control border-grey-light" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">{{ __('backoffice.price_ht') }}</label>
            <input id="price_ht" name="price_ht" type="number" step="any" value="0.00" class="form-control  {{ $errors->has('price_ht') ? 'error' : 'border-grey-light' }}" tabindex="3">
        </div>
        <a href="/factures" class="btn btn-secondary" tabindex="5">{{ __('backoffice.cancel') }}</a>
        <button type="submit" class="btn btn-primary" tabindex="4">{{ __('backoffice.add') }}</button>
    </form>

@endsection
