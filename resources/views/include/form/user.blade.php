<div class="box-body">
    <div class="form-group">
        {!! Form::label('name', '用户名', ['class' => "col-sm-2 control-label"]) !!}

        <div class="col-sm-10">
            {!! Form::text('name', null, ['class' => "form-control"]) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('email', '邮箱', ['class' => "col-sm-2 control-label"]) !!}

        <div class="col-sm-10">
            {!! Form::email('email', null, ['class' => "form-control"]) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('password', '密码', ['class' => "col-sm-2 control-label"]) !!}

        <div class="col-sm-10">
            {!! Form::password('password', ['class' => "form-control"]) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('roles', '角色', ['class' => "col-sm-2 control-label"]) !!}

        <div class="col-sm-10">
            @foreach($roles as $role)
                <div class="checkbox col-sm-2">
                    <label>
                        {!! Form::checkbox('roles[]', $role->id, isset($roles_list)?in_array($role->id, $roles_list):false) !!} {{ $role->display_name }}
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