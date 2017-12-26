<?php namespace Bantenprov\ProfilKependudukan\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The ProfilKependudukanModel class.
 *
 * @package Bantenprov\ProfilKependudukan
 * @author  bantenprov <developoer.bantenprov@gmail.com>
 */
class ProfilKependudukanModel extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'profil_kependudukan';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
