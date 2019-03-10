
@extends('index')


@section('content')

                   
                      
                      

 <table class="table table-striped jambo_table bulk_action">
                      <thead class="headings">
                        <tr>
                          <th >Адресс</th>
                          <th>Долгота</th>
                          <th>Широта</th>


                        </tr>
                      </thead>
                      <tbody>



                        
@foreach ($cities as $s)
                        <tr>
                          <td >{{$s->address}}</td>
<td >{{$s->lat}}</td>
<td >{{$s->lng}}</td>

                        </tr>
                      
 
@endforeach
                        
 
                
                      </tbody>
 </table>


@stop