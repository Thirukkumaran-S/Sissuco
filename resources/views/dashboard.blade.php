@extends('header')
@section('content')

<title>SISSU</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {
        height: 1500px
    }

    /* Set gray background color and 100% height */
    .sidenav {
        background-color: lightblue;
        height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
        background-color: #555;
        color: white;
        padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
        .sidenav {
            height: auto;
            padding: 15px;
        }

        .row.content {
            height: auto;
        }
    }
</style>


<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <br>
            
            <h4>SISSU</h4><br><br>
            <ul class="nav flex-column">

                <li class="nav-item">
                    <a class="nav-link" href="/subscriptionmanager">Subscription</a>
                </li><br><br>
                <li class="nav-item">
                    <a class="nav-link" href="/extensionmanager">Extension</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/subscription-view">Subscription View</a>
                </li>


            </ul>
        </div>
        <div class="col-sm-9">
            @yield('form')
        </div>
    </div>
</div>

</div>







<!-- <div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="/subscriptionmanager" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="/extensionmanager" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                         </a>
                    </li>
                    

                    
                       
                
            </div>
        </div>

    </div>
</div> -->



@endsection('content')