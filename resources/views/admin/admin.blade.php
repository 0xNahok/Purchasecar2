@extends('layouts.appadmin')




@section('content')
<div class="container-fluid p-0">
    <br><br><br>
      <div style="padding-left: 4%; padding-bottom: -1%;"><a href="#"><i class="fa fa-plus"></i> Agregar</a>
      </div>
      

    <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">    
        <div class="col-sm-4"> 
            <div class="form-group" style="padding-right: 5%;">
                <a href="{{ route('order.pdf') }}" class="btn btn-sm btn-primary">
                    Descargar productos en PDF
                </a>
              </div>
        </div>

        <div class="col-sm-4"> 
            <div class="form-group" style="padding-right: 5%;">
                <a href="{{ route('article.pdf') }}" class="btn btn-sm btn-primary">
                    Descargar productos en PDF
                </a>
              </div>
        </div>
      </div>
@endsection




