@foreach($data as $key=>$data)
@if($key!='_token')
{{toJSON($data)}}
@endif
@endforeach