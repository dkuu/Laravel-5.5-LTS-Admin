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
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">菜单列表</h3>
                        <div class="box-tools pull-right">
                            <a href="{{ url('/menu/create') }}" class="btn">新建顶级菜单</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <table class="table table-condensed">
                            <tbody>
                            <tr>
                                <th>名称</th>
                                <th>链接</th>
                                <th>排序</th>
                                <th>操作</th>
                            </tr>
                            @foreach($menus as $menu_first)
                                @if($menu_first->parent_id == 0)
                                    <tr>
                                        <td><i class="fa {{ $menu_first->icon }}"></i> {{ $menu_first->name }}</td>
                                        <td>{{ $menu_first->url }}</td>
                                        <td>{{ $menu_first->sorting }}</td>
                                        <td>
                                            <a href="{{ url('/menu/create?parent_id=' . $menu_first->id) }}">新建二级菜单</a>
                                            <a href="{{ url('/menu/' . $menu_first->id . '/edit') }}">编辑</a>
                                            {!! Form::open(['url' => 'menu/'.$menu_first->id,'method'=>'DELETE', 'class'=>'form-inline pull-right']) !!}
                                            {!! Form::submit('删除') !!}
                                            {!! Form::close()!!}
                                        </td>
                                    </tr>
                                    @foreach($menus as $menu_second)
                                        @if($menu_second->parent_id == $menu_first->id)
                                                <tr>
                                                    <td><i class="col-xs-1"></i><i class="fa {{ $menu_second->icon }}"></i> {{ $menu_second->name }}</td>
                                                    <td>{{ $menu_second->url }}</td>
                                                    <td>{{ $menu_second->sorting }}</td>
                                                    <td>
                                                        <a href="{{ url('/menu/create?parent_id=' . $menu_second->id) }}">新建三级菜单</a>
                                                        <a href="{{ url('/menu/' . $menu_second->id . '/edit') }}">编辑</a>
                                                        {!! Form::open(['url' => 'menu/'.$menu_second->id,'method'=>'DELETE', 'class'=>'form-inline pull-right']) !!}
                                                        {!! Form::submit('删除') !!}
                                                        {!! Form::close()!!}
                                                    </td>
                                                </tr>
                                                @foreach($menus as $menu_third)
                                                    @if($menu_third->parent_id == $menu_second->id)
                                                        <tr>
                                                            <td><i class="col-xs-2"></i><i class="fa {{ $menu_third->icon }}"></i> {{ $menu_third->name }}</td>
                                                            <td>{{ $menu_third->url }}</td>
                                                            <td>{{ $menu_third->sorting }}</td>
                                                            <td>
                                                                <a href="{{ url('/menu/' . $menu_third->id . '/edit') }}">编辑</a>
                                                                {!! Form::open(['url' => 'menu/'.$menu_third->id,'method'=>'DELETE', 'class'=>'form-inline pull-right']) !!}
                                                                {!! Form::submit('删除') !!}
                                                                {!! Form::close()!!}
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
@endsection
