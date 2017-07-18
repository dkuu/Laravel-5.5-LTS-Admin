<div class="box-body">
    {!! Form::hidden('parent_id', isset($parent_id) ? $parent_id : null) !!}
    <div class="form-group">
        {!! Form::label('icon', '图标', ['class' => "col-sm-2 control-label"]) !!}

        <div class="col-sm-10">
            {!! Form::text('icon', null, ['class' => "form-control"]) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('name', '名称', ['class' => "col-sm-2 control-label"]) !!}

        <div class="col-sm-10">
            {!! Form::text('name', null, ['class' => "form-control"]) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('url', '链接', ['class' => "col-sm-2 control-label"]) !!}

        <div class="col-sm-10">
            {!! Form::text('url', null, ['class' => "form-control"]) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('sorting', '排序', ['class' => "col-sm-2 control-label"]) !!}

        <div class="col-sm-10">
            {!! Form::number('sorting', null, ['class' => "form-control"]) !!}
        </div>
    </div>
</div>

<div class="box-footer">
    {!! Form::button('重置', ['type' => 'reset', 'class' => "btn btn-default"]) !!}
    {!! Form::button('提交', ['type' => 'submit', 'class' => "btn btn-info pull-right"]) !!}
</div>