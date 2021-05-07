<html>
<head>
    <title>DemoLaravel</title>
</head>

<style>

</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/css/dataTables.bootstrap4.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>

<link rel="stylesheet" href="https://cdn.datatables.net/responsive/1.0.7/css/responsive.dataTables.min.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css"/>

<body class="fixed-nav sticky-footer" id="page-top">

<div class="logout">
    <form class="form-logout" method="POST" action="{{ route('logout') }}">
        @csrf
        <x-jet-dropdown-link class="link" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
            <i class="fa fa-sign-out"></i>{{ __('Se Déconnecter ') }}
        </x-jet-dropdown-link>
    </form>

</div>
<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-position">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarTogglerDemo01">

            <a href="#" class="navbar-brand">
                <img class="logo-img" src="/images/logo.png" height="28" alt="CoolBrand">
            </a>

            <div class="open-time">
                <div>
                    <span>{{config('facture.phone')}}</span>
                </div>
                <div>
                    <span>{{ __('backoffice.open_time') }}</span>
                </div>
            </div>
        </div>
    </nav>
    <div class="row category">
        <span class="col">{{ __('backoffice.presentation') }}</span>
        <span class="col">{{ __('backoffice.professionals') }}</span>
        <span class="col">{{ __('backoffice.individuals') }}</span>
        <span class="col">{{ __('backoffice.blog') }}</span>
        <span class="col">{{ __('backoffice.partners') }}</span>
    </div>
    <div class="row facture">
        <div class="col-3  menu">
            <div>
                <span>{{ __('backoffice.menu') }}</span>
                <p>{{ __('backoffice.manage_my_invoices') }}</p>
            </div>
        </div>
        <div class="col-6 content">
            @section('content')
            @show
        </div>
        <div class="col-3 contact">
            <div>
                <span>{{ __('backoffice.contact_us') }}</span>
                <span>{{config('facture.phone')}}</span>
                <span>{{config('facture.email')}}</span>
            </div></div>
    </div>
</div>

<link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/1.0.7/js/dataTables.responsive.min.js"></script>
<script>
    $(document).ready(function() {
        $('#factures').DataTable({
            responsive: true,
            "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
        });
    } );
</script>


<link rel="stylesheet" href="{{ URL::asset('css/facture.css') }}" />
</body>
</html>
