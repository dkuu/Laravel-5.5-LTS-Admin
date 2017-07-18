<div class="box-body">
    <div class="form-group">
        {!! Form::label('realname', '真实姓名', ['class' => "col-sm-2 control-label"]) !!}

        <div class="col-sm-10">
            {!! Form::text('realname', null, ['class' => "form-control"]) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('ui_skin', '主题', ['class' => "col-sm-2 control-label"]) !!}

        <div class="col-sm-10">
            {!! Form::select('ui_skin', $skins_list, null, ['class' => "form-control"]) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('ui_layout', '布局', ['class' => "col-sm-2 control-label"]) !!}

        <div class="col-sm-10">
            {!! Form::select('ui_layout', $layouts_list, null, ['class' => "form-control"]) !!}
        </div>
    </div>
</div>

<div class="box-footer">
    {!! Form::button('重置', ['type' => 'reset', 'class' => "btn btn-default"]) !!}
    {!! Form::button('提交', ['type' => 'submit', 'class' => "btn btn-info pull-right"]) !!}
</div>