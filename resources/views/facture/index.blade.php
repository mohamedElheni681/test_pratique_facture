@extends('facture.layout')

@section('content')
    <span class="msg-invoice">{{ __('backoffice.invoices_list') }}</span>
    <a href="factures/create" class="btn btn-primary mb-3">{{ __('backoffice.create_new_invoice') }}</a>

    <table id="factures" class="table table-striped table-bordered shadow-lg mt-4">
        <thead class="bg-primary text-white">
        <tr>
            <th scope="col">N°</th>
            <th scope="col">{{ __('backoffice.designation') }}</th>
            <th scope="col">{{ __('backoffice.price_ht') }}</th>
            <th scope="col">{{ __('backoffice.tva') }}</th>
            <th scope="col">{{ __('backoffice.price_ttc') }}</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($factures as $facture)
            <tr>
                <td>{{ $facture->id}}</td>
                <td>{{$facture->designation}}</td>
                <td>{{$facture->price_ht}}</td>
                <td>{{config('facture.tva')}}</td>
                <td>{{$facture->price_ht * (1 + config('facture.tva')/100)}}</td>
                <td>
                    <form action="{{ route ('factures.destroy',$facture->id)}}" method="POST">
                        <a href="/factures/{{ $facture->id}}/edit" class="btn btn-info">{{ __('backoffice.edit') }}</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">{{ __('backoffice.remove') }}</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection