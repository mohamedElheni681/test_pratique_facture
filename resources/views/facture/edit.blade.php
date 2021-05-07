@extends('facture.layout')

@section('content')
@section('content_header')
    <h1>Editer Facture</h1>
@stop

<span class="msg-invoice">{{ __('backoffice.edit_invoice') }}</span>

<form action="/factures/{{$facture->id}}" method="POST">
    @csrf
    @method('PUT')
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
        <label for="" class="label form-label required">{{ __('backoffice.designation') }}</label>
        <input id="designation" name="designation" type="text" class="form-control {{ $errors->has('designation') ? 'error' : 'border-grey-light' }}" value="{{$facture->designation}}">
    </div>
    <div class="mb-3">
        <label for="" class="label form-label">{{ __('backoffice.description') }}</label>
        <input id="description" name="description" type="text" class="form-control" value="{{$facture->description}}">
    </div>
    <div class="mb-3">
        <label for="" class="label form-label required">{{ __('backoffice.price_ht') }}</label>
        <input id="price_ht" name="price_ht" type="number" step="any" class="form-control {{ $errors->has('price_ht') ? 'error' : 'border-grey-light' }}" value="{{$facture->price_ht}}">
    </div>
    <a href="/factures" class="btn btn-secondary" tabindex="5">{{ __('backoffice.cancel') }}</a>
    <button type="submit" class="btn btn-primary" tabindex="4">{{ __('backoffice.save') }}</button>
</form>
@endsection

