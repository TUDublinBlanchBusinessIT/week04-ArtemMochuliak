<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $table = "customer";    
    public $timestamps = false;    

    // setter for firstname
    public function setFirstname($fn)
    {
        $this->attributes['firstname'] = $fn;
    }

    // setter for surname
    public function setSurname($sn)
    {
        $this->attributes['surname'] = $sn;
    }
}