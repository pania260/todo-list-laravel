<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contact extends Controller
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
     ' idcontact' , 'name', 'people','date','message',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function contact()
    {
        return $this->hasMany('App\controller\contact.php', 'contact_id');
    }
}
