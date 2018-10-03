<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Users extends Eloquent
{
    protected $table = 'users';
    public $timestamps = false;
}

/* End of file Users.php */
/* Location: ./application/models/Users.php */