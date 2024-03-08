@extends('layouts.main')
@section('title','Clientes - Exata TI')
@section('content')
<div class="row">
    <div class="col-md-12">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Todos os Clientes</h6>
            </div>

            <div class="card-body">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Whatsapp</th>
                            <th>E-mail</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Whatsapp</th>
                            <th>E-mail</th>
                            <th>Ação</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->nome }}</td>
                            <td>{{ $cliente->cpf }}</td>
                            <td>{{ $cliente->whatsapp }}</td>
                            <td>{{ $cliente->email }}</td>
                            <td>
                                <button class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></button>
                                <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fa fa-ban"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection