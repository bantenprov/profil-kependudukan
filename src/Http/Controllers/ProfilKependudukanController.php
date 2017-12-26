<?php namespace Bantenprov\ProfilKependudukan\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\ProfilKependudukan\Facades\ProfilKependudukan;
use Bantenprov\ProfilKependudukan\Models\ProfilKependudukanModel;

/**
 * The ProfilKependudukanController class.
 *
 * @package Bantenprov\ProfilKependudukan
 * @author  bantenprov <developoer.bantenprov@gmail.com>
 */
class ProfilKependudukanController extends Controller
{
    public function demo()
    {
        return ProfilKependudukan::welcome();
    }
}
