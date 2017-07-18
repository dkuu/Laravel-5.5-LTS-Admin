<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $primaryKey = 'user_id';
    public $incrementing = false;

    protected $fillable = [
        'user_id',
        'realname',
        'ui_skin',
        'ui_layout',
    ];

    public function skin()
    {
        return $this->belongsTo('App\UiSkin', 'ui_skin');
    }

    public function layout()
    {
        return $this->belongsTo('App\UiLayout', 'ui_layout');
    }


}
