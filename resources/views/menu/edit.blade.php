@extends('layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            菜单
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 开发模式</a></li>
            <li class="active">菜单</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content ">

        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">编辑菜单</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    {!! Form::model($menu, ['method' => 'PATCH', 'url' => '/menu/'.$menu->id, 'class' => "form-horizontal"]) !!}
                    @include('include.form.menu')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
@endsection
