@extends('layouts.layoutProva')
@section('container')
<div class="container theme-showcase" role="main"> 
    <div class="page-header">    
    <h1>Listar Provas</h1>
    <div class="btn-lateral">                            
        <a href="{{route('professor.prova.create')}}" type="button" class="btn btn-primary btn-md">
        Cadastro  
        </a>
    </div>
    </div> 
    <!--listando os dados do gabarito na tabela--> 
    <table class="table table-responsive table-hover">                                     
            <thead>
                <tr>                                
                    <th>#</th>                                
                    <th>Assunto</th>                    
                    <th>Status</th>
                    <th>Data</th>
                    <th>Ações</th>                                                           
                </tr>                           
            </thead>   
            <tbody>
                @foreach($provas as $prova)
                @if($prova->prova_status == 'ativo')
    
                <tr>                                
                    <td>{{$prova -> id}}</td>      
                    <td>{{$prova -> assunto_nome}}</td>                           
                    <td>{{$prova -> prova_status}}</td>          
                    <td>{{date('d/m/Y',strtotime($prova -> prova_data))}}</td>
                    <td><a href="{{route('professor.prova.edit',$prova->id)}}"><span class="glyphicon glyphicon-pencil text-primary" aria-hidden="true"></span></a></td>                
                </tr>                                                                         @endif       
                @endforeach                      
            </tbody>                        
        </table>                                                          
    </div><!--container theme-showcase-->                                  
@endsection