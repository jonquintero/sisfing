@extends('layouts.app')

@section('title', "Crear Dependencia")

@section('content')
    @card
    @slot('header', 'Nueva dependencia')

        <section class="content">
            <!-- TO DO List -->
            <div class="box box-primary">

                <!-- /.box-header -->
                <div class="box-body col-md-8 col-md-offset-2">
                    <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->

                    <div class="panel-body">
                    @include('shared._errors')

                    <form method="POST" action="{{ url('dependencias') }}" class="form-horizontal">
                        @render('DependenciesFields', ['dependency' => $dependency])

                        <div class="form-group mt-4 row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">Crear dependencia</button>
                                <a href="{{ route('dependencies.index') }}" class="btn btn-link">Regresar al listado de dependencias</a>
                            </div>
                        </div>
                    </form>
                    </div>

                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix no-border">
                    <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
                </div>
            </div>
            <!-- /.box -->

            <div class="box box-info">
                <div class="box-header">
                    <i class="fa fa-envelope"></i>

                    <h3 class="box-title">@slot('header', 'Nueva dependencia')</h3>
                    <!-- tools box -->

                    <!-- /. tools -->
                </div>
                <div class="box-body">
                    <form method="POST" action="{{ url('dependencias') }}" class="form-horizontal">
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nombre:</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                            </div>
                        </div>

                    </form>
                </div>
                <div class="box-footer clearfix">
                    <button type="button" class="pull-right btn btn-default" id="sendEmail">Send
                        <i class="fa fa-arrow-circle-right"></i></button>
                </div>
            </div>
        </section>

    @endcard


@endsection
