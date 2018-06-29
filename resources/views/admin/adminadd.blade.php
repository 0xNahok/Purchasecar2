@extends('layouts.appadmin')




@section('content')
<div class="container-fluid p-0">
    <br>
        <center><h2>Orden de Compra</h2>
        <hr></center>
        <br>
        <form method="POST" action="{{ route('article.store') }}" aria-label="{{ __('Register') }}">
            {{ csrf_field() }}
        <div class="row" style="padding-left:5%;">       <h2>Nuevo producto</h2> </div>
   <div class="row" style="padding-left:5%;">
      
      
    <div class="col-sm-5">
            
            <div class="form-group">
                    <label> Album </label>
            
                    <input type="text"  placeholder="Album..." name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"  value="{{ old('name') }}" required >
                    @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
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
                  <span> 
                        <strong> <a href="#" class="" data-toggle="modal" data-target="#artistmodal">No esta en la lista? Agregalo!</a></strong> 
                    </span>
                 
            </div>
            
            
     </div>

     <div class="row" style="padding-left:5%;">
      
      
        <div class="col-sm-5">
                
            <div class="form-group">
                <label> Descripcion </label>
        
                <input type="text"  placeholder="Descripcion..." name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"  value="{{ old('description') }}" required >
                @if ($errors->has('description'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
            
        </div>
            
            </div>
            <div class="col-sm-5 ">
                <div class="form-group">
                    <label> Precio </label>
            
                    <input type="number" step="0.01" min="0"  placeholder="Precio..." name="price" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}"  value="{{ old('price') }}" required >
                    @if ($errors->has('price'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('price') }}</strong>
                    </span>
                @endif
                
            </div>
                </div>
                
                
         </div>

   
     <div class="row" style="padding-left:5%;">
            <div class="col-sm-4 pb-3">
                    <label for="year">Año</label>
                    <input type="date" name="year" id="year">
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
                          <span> 
                                <strong> <a href="#" class="" data-toggle="modal" data-target="#genremodal">No esta en la lista? Agregalo!</a></strong> 
                            </span>
                    </div>
     </div>
     <div class="row" style="padding-left:40%;">
          
         
        <div class="col-sm-4 pb-3">
            <label for="image">Portada:</label>
            <input type="file" id="image" name="image" accept="image/png, image/jpeg" />
        </div>
      
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
   
             
             <form method="post" action="{{ route('order.store') }}" >
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
          

             <div class="modal fade" id='artistmodal'  tabindex="-1" role="dialog" aria-labelledby="artistmodallabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content modalback">
                        <div class="modal-header">
                          <h5 class="modal-title" id="artistmodallabel ">Add!</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                  
                         <div class="container">
                                <div class="row">
                                        <form action="{{ route('artist.store') }}" method="post" >
                                                {{ csrf_field() }}
                                                <label for="firstname">Firstname: </label>
                                                <input type="text" class="form-control" name="firstname" id="firstname">
                    
                                                <label for="lastname">Lastname: </label>
                                                <input type="text" class="form-control"  name="lastname" id="lastname">
                    
                                                <label for="stagename">Stagename: </label>
                                                <input type="text"  class="form-control" name="stagename" id="stagename">

                                                <input type="submit" value="Agregar">
                                        </form>
            
                                      </div>

                         </div>
                  
                    </div>
                        <div class="modal-footer">
                          
                  
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id='genremodal'  tabindex="-1" role="dialog" aria-labelledby="genremodallabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content modalback">
                            <div class="modal-header">
                              <h5 class="modal-title" id="genremodallabel ">Add!</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                      
                             <div class="container">
                                    <div class="row">
                                            <form action="{{ route('genre.store') }}" method="post" >
                                                    {{ csrf_field() }}
                                                    <label for="name">Genero: </label>
                                                    <input type="text" class="form-control" name="name" id="name">

                                                    <input type="submit" value="Agregar">
                                            </form>
                
                                          </div>
    
                             </div>
                      
                        </div>
                            <div class="modal-footer">
                              
                      
                            </div>
                          </div>
                        </div>
                      </div>
                  
@endsection
