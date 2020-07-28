@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Stories') }}</div>

                <div class="card-body">
                     <table class = "table">
                        <thead>
                          <tr>
                           <th> Titulo </th>
                           <th> Tipo </th>
                           <th> Estado </th>
                           <th> Acção </th>
                          </tr> 
                        </thead>
                           <tbody>
                           @foreach($stories as $story)
                             <tr>
                                <td> 
                                    Teste
                                    {{$story->title}}
                                </td>
                                <td> 
                                    Teste 
                                    {{$story->type}}
                                </td>
                                <td> 
                                    {{$story->status == 1 ? 'yes':'No'}}
                                </td>
                                <td> 
                                    
                                </td>
                             </tr>
                            @endforeach
                            <tbody>
                   </table> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
