@extends('layouts.app')

@section('content')
<h1 style="text-align:center">Bill </h1>
<br>
{!! Form::open(['url'=>'/pay']) !!}
<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Sub-Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach($datas as $key=>$data)
            <tr>
                <td>
                    {{$data->Name}}
                </td>
                <td>
                    ${{$data->Price}}
                </td>
                <td>
                    {{$data->Cantidad}}
                </td>
                <td>
                    $<span class="subtotal">{{$data->Price*$data->Cantidad}}</span>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<right><h1>Total: <span id="total"></span> </h1></right>

{!! Form::hidden('data', json_encode((array)$datas)) !!}

{!! Form::text('totalfrom', '', ['style'=>'display:none', 'id'=>'totalfrom', 'disabled'=>'']) !!}


<center>
    <a href="/dashboard/cart" class="btn btn-primary" >Back</a>
</center>
{!! Form::close() !!}
@endsection