@extends('layouts.app')

@section('content')
<h1 style="text-align:center">Cart</h1>
<br>
<div class="container">
    @if(sizeof($datas)>0)
    {!! Form::open(['url'=>'/buy']) !!}
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Sub-Total</th>
                <th>Buy</th>
                <th>Delete</th>
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
                        ${{$data->Price*$data->Cantidad}}
                    </td>
                    <td>
                        {!! Form::checkbox('buy'.$key, json_encode((array)$data)) !!}
                    </td>
                    <td>
                    <a href="cart/delete/{{$data->user_id}}/{{$data->article_id}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <center>{!! Form::submit('Buy (selected)', ['class'=>'btn btn-primary','id'=>'buy-btn','disabled'=>'']) !!}</center>
    {!! Form::close() !!}
    @else
    <div class="jumbotron">
            <center>
                <h1 class="display-4">Hello, {{Auth::user()->firstname}} you havent added nothing yet</h1>
                <p>Check our <a href="/">Stack</a></p>
                
            </center>
            
        </div>
        @endif
</div>


@if(session()->has('purchases'))
{{session()->get('purchases')}}
@endif
@endsection