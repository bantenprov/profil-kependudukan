<?php namespace Bantenprov\ProfilKependudukan\Console\Commands;

use Illuminate\Console\Command;

/**
 * The ProfilKependudukanCommand class.
 *
 * @package Bantenprov\ProfilKependudukan
 * @author  bantenprov <developoer.bantenprov@gmail.com>
 */
class ProfilKependudukanCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'profil-kependudukan:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install command for Bantenprov\ProfilKependudukan package';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    protected $stubsController = [                  
        'controllers' => [
            'PendudukController.stub'
        ]                
    ];

    protected $stubsApiController = [                  
        'controllersapi' => [
            'PendudukApiController.stub'
        ]                
    ];

    protected $stubsModel = [                  
        'models' => [
            'Penduduk.stub'
        ]                
    ];

    protected $stubsMiddleware = [                  
        'middlewares' => [
            'PendudukApiMiddleware.stub'
        ]                
    ];

    protected $stubsPenduduk = [                  
        'Penduduk' => [
            'index.blade.stub',
            'create.blade.stub',
            'show.blade.stub',
            'edit.blade.stub'
        ]                    
    ];



    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }


    protected function viewCreate()
    {        
        
        foreach($this->stubsPenduduk['penduduk'] as $stub)
        {
            File::put(base_path('resources/views/penduduk/').str_replace('stub','php',$stub),File::get(__DIR__.'/../../stub/views/penduduk/'.$stub));            
        }
        
    }



    protected function controllerCreate()
    {        
        
        foreach($this->stubsController['controllers'] as $stub)
        {
            File::put(base_path('app/Http/Controllers/').str_replace('stub','php',$stub),File::get(__DIR__.'/../../stub/controllers/'.$stub));            
        }
        
    }

    protected function modelCreate()
    {
        foreach($this->stubsModel['models'] as $stub)
        {
            File::put(base_path('app/').str_replace('stub','php',$stub),File::get(__DIR__.'/../../stub/models/'.$stub));            
        }
    }

    protected function middlewareCreate()
    {
        foreach($this->stubsMiddleware['middlewares'] as $stub)
        {
            File::put(base_path('app/Http/Middleware/').str_replace('stub','php',$stub),File::get(__DIR__.'/../../stub/middleware/'.$stub));            
        }
    }

    protected function controllerApiCreate()
    {        
        
        foreach($this->stubsApiController['controllersapi'] as $stub)
        {
            File::put(base_path('app/Http/Controllers/Api/').str_replace('stub','php',$stub),File::get(__DIR__.'/../../stub/controllers/api/'.$stub));            
        }
        
    }


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {   
        File::makeDirectory(base_path('app/Http/Controllers/Api'));
        File::makeDirectory(base_path('resources/views/penduduk'));
        File::append(base_path('routes/web.php'),"\n".File::get(__DIR__.'/../../stub/web.stub'));        
        File::append(base_path('routes/api.php'),"\n".File::get(__DIR__.'/../../stub/api.stub'));
        
        $this->viewCreate();
        $this->controllerCreate();
        $this->modelCreate();
        $this->middlewareCreate();
        $this->controllerApiCreate();
        $this->info('Installation Success');
    }
}
