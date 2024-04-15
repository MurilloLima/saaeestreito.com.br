@extends('admin.layouts.app')
@section('title', 'Notícias')
@section('content')
    <div class="content-wrapper" style="min-height: 1302.26px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Notícias</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Notícias</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @if ($errors->any())
                            <div class="alert alert-danger text-center" style="margin: 10px;">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li style="text-align: center">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session('msg'))
                            <div class="row text-center">
                                <div class="col-md-12" \>
                                    <div class="alert alert-success text-center" style="color: white; margin: 10px;">
                                        {{ session('msg') }}
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('admin.noticias.create') }}" class="btn btn-primary mb-2">Cadastrar</a>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Últimas adicionadas</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Título</th>
                                            <th>Descição</th>
                                            <th style="width: 40px">#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->desc }}</td>
                                                <td style="width: 95px;">
                                                    <a href="" title="Editar" style="" class="btn btn-primary btn-sm">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <form onsubmit="return confirm('Deseja excluir?');"
                                                        action="{{ route('admin.noticia.destroy', $item->id) }}"
                                                        method="POST" style="float: right;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" title="Deletar" class="btn btn-danger btn-sm">
                                                            <ion-icon name="trash-outline"></ion-icon>
                                                        </button>
                                                    </form>
                                                    {{-- <a href=""
                                                        class="btn-sm btn-primary">Fotos
                                                    </a>
                                                    <a href=""
                                                        class="btn-sm btn-success">
                                                        <ion-icon name="create-outline"></ion-icon>
                                                    </a>
                                                    <form onsubmit="return confirm('Deseja excluir?');"
                                                        action="{{ route('admin.imoveis.destroy', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            style="height: 26px">
                                                            Excluir
                                                            <ion-icon name="trash-outline"></ion-icon>
                                                        </button>
                                                    </form> --}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!--
                                                <div class="card-footer clearfix">
                                                    <ul class="pagination pagination-sm m-0 float-right">
                                                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                           -->
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
