<?php
namespace Pegziq\MigrationsIncrease\Commands;

use Illuminate\Console\Command;

class MigrationsIncreaseCommand extends Command
{

    protected $name = 'migrations:increase';
    protected $description = '创建增量数据表迁移';

    public function __construct()
    {
        parent::__construct();
    }

    public function fire(){

    }

}