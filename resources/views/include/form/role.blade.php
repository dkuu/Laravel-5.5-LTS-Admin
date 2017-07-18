<div class="box-body">
    <div class="form-group">
        {!! Form::label('name', '标识', ['class' => "col-sm-2 control-label"]) !!}

        <div class="col-sm-10">
            {!! Form::text('name', null, ['class' => "form-control"]) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('display_name', '名称', ['class' => "col-sm-2 control-label"]) !!}

        <div class="col-sm-10">
            {!! Form::text('display_name', null, ['class' => "form-control"]) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('description', '简介', ['class' => "col-sm-2 control-label"]) !!}

        <div class="col-sm-10">
            {!! Form::text('description', null, ['class' => "form-control"]) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('permissions', '权限', ['class' => "col-sm-2 control-label"]) !!}

        <div class="col-sm-10">
            @foreach($permissions as $permission)
            <div class="checkbox col-sm-2">
                <label>
                    {!! Form::checkbox('permissions[]', $permission->id, isset($permissions_list)?in_array($permission->id, $permissions_list):false) !!} {{ $permission->display_name }}
                </label>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="box-footer">
    {!! Form::button('重置', ['type' => 'reset', 'class' => "btn btn-default"]) !!}
    {!! Form::button('提交', ['type' => 'submit', 'class' => "btn btn-info pull-right"]) !!}
</div>