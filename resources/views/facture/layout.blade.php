<html>
<head>
    <title>DemoLaravel</title>
</head>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.5/umd/popper.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/js/dataTables.bootstrap4.js"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/css/dataTables.bootstrap4.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>

<body class="fixed-nav sticky-footer" id="page-top">

<div style="background: rgba(200,200,200);top: 0px;width: 100%;z-index: 10;position: fixed;" class="banner">
    <form style="float: right;padding-top: 1%;margin-right: 5%;" method="POST" action="{{ route('logout') }}">
        @csrf
        <x-jet-dropdown-link style="color:#000000;text-decoration: none;" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
            <i style="margin-right: 10px;" class="fa fa-sign-out"></i>{{ __('Se Déconnecter ') }}
        </x-jet-dropdown-link>
    </form>

</div>
<div style="height: 100%">
    <nav style="position: fixed;top: 55px;width: 100%;z-index: 5;" class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div style="justify-content: space-between" class="collapse navbar-collapse" id="navbarTogglerDemo01">

            <a href="#" class="navbar-brand">
                <img style="height: 44px;" src="/images/logo.png" height="28" alt="CoolBrand">
            </a>

            <div style="margin-right: 5%;text-align: center;">
                <div>
                    <span>{{config('facture.phone')}}</span>
                </div>
                <div>
                    <span>{{ __('backoffice.open_time') }}</span>
                </div>
            </div>
        </div>
    </nav>
    <div style="margin: 110px 10px 0 0;position: fixed;top: 0px;padding: 10px 0px;width: 100%;z-index: 1;height: 40px;background-color: aliceblue;" class="row">
        <div style="text-align: center;" class="col">{{ __('backoffice.presentation') }}</div>
        <div style="text-align: center;" class="col">{{ __('backoffice.professionals') }}</div>
        <div style="text-align: center;" class="col">{{ __('backoffice.individuals') }}</div>
        <div style="text-align: center;" class="col">{{ __('backoffice.blog') }}</div>
        <div style="text-align: center;" class="col">{{ __('backoffice.partners') }}</div>
    </div>
    <div style="height: 100%" class="row">
        <div style="border-right: 50px solid white;background-color: #007bff;" class="col-3">
            <div style="position: fixed;top: 172px;left: 8%;display: flex;flex-direction: column;flex-wrap: wrap;align-content: flex-start;justify-content: space-evenly;align-items: center;">
                <span>{{ __('backoffice.menu') }}</span>
                <p>{{ __('backoffice.manage_my_invoices') }}</p>
            </div>
        </div>
        <div style="margin-top: 200px" class="col-6">
            @section('content')
            @show
        </div>
        <div style="border-left: 50px solid white;background-color: #007bff;" class="col-3"><div style="position: fixed;top: 172px;right: 8%;display: flex;flex-direction: column;flex-wrap: wrap;align-content: flex-start;justify-content: space-evenly;align-items: center;">
                <span>{{ __('backoffice.contact_us') }}</span>
                <span>{{config('facture.phone')}}</span>
                <span>{{config('facture.email')}}</span>
            </div></div>
    </div>
</div>

{{--<link rel="stylesheet" href="/css/admin_custom.css">--}}
<link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#factures').DataTable({
            "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
        });
    } );
</script>




{{--<script type="text/javascript" src="{{ URL::asset('js/test.js') }}"></script>--}}
<link rel="stylesheet" href="{{ URL::asset('css/test.css') }}" />
</body>
</html>
