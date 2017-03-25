@extends('layouts.layoutProfessor')
@section('container')
<div class="container theme-showcase" role="main"> 
    <div class="page-header">
    <h1>Listar Professores</h1>  
        <div class="btn-lateral">
            <a href="{{route('admins.professor.create')}}" type="button" class="btn btn-primary btn-md" name="cadastrar">
             Cadastrar  
            </a>
        </div>     
    </div>
        <table class="table table-responsive table-hover">                                   
            <thead>
                <tr>
                    <th>#</th>                             
                    <th>CPF</th>
                    <th>Nome</th>                    
                    <th>E-mail</th>                                                          
                </tr>                           
            </thead>
            <tbody>
                @foreach($professores as $professor)
                <tr>
                    <td>{{$professor -> id}}</td>
                    <td>{{$professor -> professor_cpf}}</td>                               
                    <td>{{$professor -> professor_nome}}</td>                    
                    <td>{{$professor -> professor_email}}</td>                   
                </tr>                        
                @endforeach                      
            </tbody>                        
        </table> 
        {!! $professores->links() !!} <!--paginação da lista de professores-->      
</div><!--container theme-showcase-->
@endsection