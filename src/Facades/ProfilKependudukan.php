<?php namespace Bantenprov\ProfilKependudukan\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The ProfilKependudukan facade.
 *
 * @package Bantenprov\ProfilKependudukan
 * @author  bantenprov <developoer.bantenprov@gmail.com>
 */
class ProfilKependudukan extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'profil-kependudukan';
    }
}
