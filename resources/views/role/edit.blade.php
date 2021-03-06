@extends('layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            角色
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 设置</a></li>
            <li class="active">角色</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content ">

        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">编辑角色</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    {!! Form::model($role, ['method' => 'PATCH', 'url' => '/role/'.$role->id, 'class' => "form-horizontal"]) !!}
                    @include('include.form.role')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
@endsection
