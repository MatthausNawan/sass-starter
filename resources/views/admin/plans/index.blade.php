@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item active"><a href="#" class="active">Planos</a></li>
</ol>

<h1>Planos <a href="#" class="btn btn-dark">ADD</a></h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <form action="#" method="POST" class="form form-inline">
            @csrf
            <input type="text" name="filter" placeholder="Nome" class="form-control" value="{{ $filters['filter'] ?? '' }}">
            <button type="submit" class="btn btn-dark">Filtrar</button>
        </form>
    </div>
    <div class="card-body">
        <table class="table table-condensed">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th width="270">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($plans as $plan)
                <tr>
                    <td>
                        {{ $plan->name }}
                    </td>
                    <td>
                        R$ {{ number_format($plan->price, 2, ',', '.') }}
                    </td>
                    <td style="width=10px;">
                        <a href="#" class="btn btn-primary">Detalhes</a>
                        <a href="#" class="btn btn-info">Edit</a>
                        <a href="#" class="btn btn-warning">VER</a>
                        <a href="#" class="btn btn-warning"><i class="fas fa-address-book"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        @if (isset($filters))
        {!! $plans->appends($filters)->links() !!}
        @else
        {!! $plans->links() !!}
        @endif
    </div>
</div>
@stop