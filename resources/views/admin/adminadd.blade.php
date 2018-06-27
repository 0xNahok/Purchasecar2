@extends('layouts.appadmin')




@section('content')
<div class="container-fluid p-0">
    <br>
        <center><h2>Orden de Compra</h2>
        <hr></center>
        <br>
        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
        <div class="row" style="padding-left:5%;">       <h2>Nuevo producto</h2> </div>
   <div class="row" style="padding-left:5%;">
      
      
    <div class="col-sm-5">
            
            <div class="form-group">
                    <label> Album </label>
            
                    <input type="text"  placeholder="Album..." name="album" class="form-control{{ $errors->has('album') ? ' is-invalid' : '' }}"  value="{{ old('album') }}" required >
                    @if ($errors->has('album'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('album') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-sm-5 ">
                <label for="artist ">Artista</label>
                <select id="artist" name="artist" class="form-control{{ $errors->has('artist') ? ' is-invalid' : '' }}"  value="{{ old('artist') }}" required>
                        @if ($errors->has('artist'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('artist') }}</strong>
                        </span>
                    @endif
      <option disabled="" selected="">Select a product </option>
        @foreach($Artists as $artist)
                <option value="{{$artist->id}}">{{$artist->stagename}}</option>
        @endforeach
                  </select>
            </div>
     </div>
     <div class="row" style="padding-left:5%;">
            <div class="col-sm-4 pb-3">
                    <label for="year">Año</label>
                    <select class="form-control" id="estado" name="estado">
          <option disabled="" selected="">Seleciona un Año </option>
          <option value="2018"> 2018</option>
          <option value="2017">2017</option>
          <option value="2016">2016</option>
          <option value="2015">2015</option>
          <option value="2014">2014</option>
          <option value="2013">2013</option> 
          <option value="2012">2012</option>
          <option value="2011">2011</option>
          <option value="2010">2010</option> 
          <option value="2009">2009</option> 
          <option value="2008">2008</option>
          <option value="2007">2007</option>
          <option value="2006">2006</option>
          <option value="2005">2005</option>
          <option value="2004">2004</option>
          <option value="2003">2003</option>
          <option value="2002">2002</option> 
          <option value="2001">2001</option>
          <option value="2000">2000</option>
          <option value="90">90's</option>
          <option value="80">80's</option>
          <option value="70">70's</option>
          <option value="60">60's</option>
          <option value="50">50's</option>
                      </select>
                </div>
                <div class="col-sm-5 ">
                        <label for="genre ">Genero</label>
                        <select id="genre" name="genre" class="form-control{{ $errors->has('genre') ? ' is-invalid' : '' }}"  value="{{ old('genre') }}" required>
                                @if ($errors->has('genre'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('genre') }}</strong>
                                </span>
                            @endif
              <option disabled="" selected="">Selecionar Genero </option>
                @foreach($Genres as $Genre)
                        <option value="{{$Genre->id}}">{{$Genre->name}}</option>
                @endforeach
                          </select>
                    </div>
     </div>
     <div class="row" style="padding-left:40%;">
          
         
      
         <div class="col-sm-4 pb-3">
            
         <button class="btn btn-dark" id="sendbtn">Agregar</button>
        </div>

        </div>
         <br>
    
        </form>
     </div>
     <div class="container-fluid p-0">
            <br>
         
                <hr>
                <br>
          
<div class="row" style="padding-left:5%;">     
      <h2>Producto Existente</h2> 
</div>
   
             
             <form method="post" action="{{ route('store.store') }}" >
                {{ csrf_field() }}
                    <div class="row" style="padding-left:5%;"> 
                            <div class="col-sm-4 pb-3">
                                    <label for="article">Article</label>
                                    <select class="form-control" id="article" name="article">
                          <option disabled="" selected="">Select a product </option>
                            @foreach($Articles as $art)
                                    <option value="{{$art->id}}">{{$art->name}}</option>
                            @endforeach
                                      </select>
                                </div>
                                <div class="">
                                            <br> <br>
                                        <i class="fa fa-minus" onclick="change(false, '#add2')" style="font-size: 1.4em; color:#1C80F3;">  </i>
                                 </div>
                                 <div class="col-sm-2 ">
                                        <label for="addnumber">Cantidad</label>
                                        <input type="number" class="form-control" id="add2" name="quant"> 
                                 </div>  
                                 <div class="">
                                        <br> <br>
                                        <i class="fa fa-plus" onclick="change(true, '#add2')" style="font-size: 1.4em; color:#1C80F3;">  </i>
                                 </div>
                                 <div class="col-sm-4 pb-3">
                                        <label for="sendbtn">Enviar</label> <br>  
                                 <button class="btn btn-dark" id="sendbtn">Update</button>
                                    <input type="submit" value="asdas">
                                </div>
                         
                        </div>
             </form>
                 <br>
               
             </div>
          
@endsection
