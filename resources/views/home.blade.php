@extends('layouts.app')

@section('content')
<div id="wowslider-container1">
        <div class="ws_images"><ul>
                <li><img src="{{ asset ('data1/images/niallbanner.jpg')}}" alt="" title="" id="wows1_0"/></li>
                <li><a href="http://wowslider.net"><img src="{{ asset ('data1/images/taylorbanner.jpg')}}" alt="bootstrap carousel" title="" id="wows1_1"/></a></li>
                <li><img src="{{ asset ('data1/images/btsbanner.jpg')}}" alt="" title="" id="wows1_2"/></li>
            </ul></div>
            <div class="ws_bullets"><div>
                <a href="#" title=""><span><img src="{{ asset ('data1/tooltips/niallbanner.jpg')}}" alt=""/>1</span></a>
                <a href="#" title=""><span><img src="{{ asset ('data1/tooltips/taylorbanner.jpg')}}" alt=""/>2</span></a>
                <a href="#" title=""><span><img src="{{ asset ('data1/tooltips/btsbanner.jpg')}}" alt=""/>3</span></a>
            </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery slider</a> by WOWSlider.com v8.8</div>
        <div class="ws_shadow"></div>
        </div>	 

        <center>
          <h2>Products</h2>
            <hr>
        </center>

        <br>
<div class="container">
        <div class="row">
            <div class="card-deck">
        @foreach($Articles as $Article)
        <div class="col-lg-3">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ asset("img/albums/".$Article->img_route.".png") }}" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">{{$Article->name}}</h5>
            <p class="card-text">{{$Article->description}}</p>
            
            @guest
                 
            @else
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$Article->id}}">Add to the cart!</a>
              @endguest
            </div>
            <div class="card-footer">
                <small class="text-muted"></small>
              </div>
          </div>
        </div>
    </div>


<div class="modal fade" id='exampleModal{{$Article->id}}'  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modalback">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row">
            <div class= "col-6" >
            <img class="card-img-top" src="{{ asset("img/albums/".$Article->img_route.".png") }}" alt="Card image cap">
        </div>
       <div class= "col-6" >Name: {{$Article->name}} <br> Price: {{$Article->price}} $ <br> Existencia: {{$Article->exist}}
       {!! Form::open(['url'=>'/create_purchase']) !!}
       {!! Form::label('cantidad', 'Cantidad') !!}
       {!! Form::number('cantidad', '1', ['class'=>'form-control', 'min'=>'1', 'max'=>$Article->exist]) !!}
       @if(Auth::check())
       {!! Form::hidden('user_id',Auth::user()->id) !!}
       @endif
       {!! Form::hidden('art_id',$Article->id) !!}
       {!! Form::submit('Add', ['class'=>'btn btn-primary']) !!}
       {!! Form::close() !!}
                
        </div>

  </div>
      <div class="modal-footer">
        

      </div>
    </div>
  </div>
</div>
</div>
@endforeach

        </div>

    </div>
        <script type="text/javascript" src="{{ asset('engine1/wowslider.js') }}" defer ></script>
        <script type="text/javascript" src="{{ asset('engine1/script.js') }}" defer></script>


        


@endsection
