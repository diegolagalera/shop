@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Productos
                    @can('products.create')
                        <a href="{{route('products.create')}}" class="btn btn-primary float-sm-right">
                            Crear
                        </a>
                    </div>
                    @endcan

                    <div class="card-body">
                        <table>
                            <thead>
                            <tr>
                                <th width="15%">ID</th>
                                <th width="50%">Title</th>
                                <th width="30%">Descripcion</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->title }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>
                                            @can('products.show')
                                                <a href="{{route('products.show', $product->id)}}" class="btn btn-info btn-sm">
                                                    Ver
                                                </a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('products.edit')
                                                <a href="{{route('products.edit', $product->id)}}" class="btn btn-info btn-sm">
                                                    Editar
                                                </a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('products.destroy')
                                                {{ Form::open(['route'=> ['products.destroy', $product->id],
                                                'method'=>'DELETE']) }}
                                            <button class="btn btn-sm btn-danger">
                                                Eliminar
                                            </button>
                                                {{ Form::close() }}
{{--                                                <a href="{{route('products.show', $product->id)}}" class="btn btn-info btn-sm">--}}
{{--                                                    Ver--}}
{{--                                                </a>--}}
                                            @endcan
                                        </td>
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>
                        {{ $products-> render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
