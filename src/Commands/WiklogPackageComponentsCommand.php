<?php

namespace Wiklog\WiklogPackageComponents\Commands;

use Illuminate\Console\Command;

class WiklogPackageComponentsCommand extends Command
{
    public $signature = 'wiklog-components:publish';

    public $description = 'Publie et crée les différents composants dans le projet Laravel';

    public $composer;

    public function __construct()
    {
        parent::__construct();

        $this->composer = app()['composer'];
    }

    public function handle(): int
    {
        $component_dir = app_path('View/Components/Inputs');
        $input_component_content = file_get_contents(__DIR__ . '/../components/InputText.php');
        $this->createFile($component_dir . DIRECTORY_SEPARATOR, 'InputText.php', $input_component_content);

        $view_path = resource_path('views/components/inputs');
        $input_view_content = file_get_contents(__DIR__ . '/../views/input-text.blade.php');
        $this->createFile($view_path . DIRECTORY_SEPARATOR, 'input-text.blade.php', $input_view_content);

        $this->comment('Composants publiés');

        $this->composer->dumpOptimized();
        $this->comment('Package installé');

        return self::SUCCESS;
    }

    public static function createFile($path, $filename, $contents)
    {
        if (! file_exists($path))
        {
            mkdir($path, 0755, true);
        }
        file_put_contents($path.$filename, $contents);
    }
}
