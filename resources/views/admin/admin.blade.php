@extends('layouts.appadmin')




@section('content')
<div class="container-fluid p-0">
    <br><br><br>
      <div style="padding-left: 4%; padding-bottom: -1%;"><a href="#"><i class="fa fa-plus"></i> Agregar</a>
      </div>
      

    <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">    
        <div class="col-sm-4"> 
            <div class="form-group" style="padding-right: 5%;">
                <input type="submit"  class="btn btn-info" name="Repote 1" value = "Repote 1 ">
              </div>
        </div>

        <div class="col-sm-4"> 
            <div class="form-group">
                <input type="submit"  class="btn btn-info" name="Repote 2" value = "Repote 2 ">
              </div>
        </div>
      </div>
@endsection


