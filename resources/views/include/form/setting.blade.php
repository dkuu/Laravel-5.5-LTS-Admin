<div class="box-body">
    @foreach($settings as $setting)
    <div class="form-group">
        {!! Form::label($setting->key, $setting->title, ['class' => "col-sm-2 control-label"]) !!}

        <div class="col-sm-10">
            {!! Form::text($setting->key, $setting->value, ['class' => "form-control"]) !!}
        </div>
    </div>
    @endforeach
</div>

<div class="box-footer">
    {!! Form::button('重置', ['type' => 'reset', 'class' => "btn btn-default"]) !!}
    {!! Form::button('提交', ['type' => 'submit', 'class' => "btn btn-info pull-right"]) !!}
</div>