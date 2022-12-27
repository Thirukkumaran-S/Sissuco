@extends('dashboard')

@section('form')


<div class="container mt-5">
    <table class="table">
        <thead>
            <tr>
                <th>Sudscription_ID</th>
                <th>Priority</th>
                <th>MSISDN</th>
                
            </tr>
        </thead>
        <tbody>
            <td>
                @foreach($extensiondetails as $extension)

                <tr>
                    <td>{{$extension->subscription_id}}</td>
                    <td>{{$extension->priority}}</td>
                    <td>{{$extension->msisdn}}</td>
            </td>


            </tr>
            @endforeach

            </td>
        </tbody>
    </table>
</div>
@endsection('form')

