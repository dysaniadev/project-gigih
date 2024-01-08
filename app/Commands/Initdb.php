<?php

namespace App\Commands;

use App\Database\Seeds\Init;
use App\Database\Seeds\InitAllDummy;
use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;
use Config\Database;
use Exception;

class Initdb extends BaseCommand
{
    /**
     * The Command's Group
     *
     * @var string
     */
    protected $group = 'CodeIgniter';

    /**
     * The Command's Name
     *
     * @var string
     */
    protected $name = 'dysania:initdb';

    /**
     * The Command's Description
     *
     * @var string
     */
    protected $description = '';

    /**
     * The Command's Usage
     *
     * @var string
     */
    protected $usage = 'dysania:initdb [arguments] [options]';

    /**
     * The Command's Arguments
     *
     * @var array
     */
    protected $arguments = [];

    /**
     * The Command's Options
     *
     * @var array
     */
    protected $options = [];

    /**
     * Actually execute a command.
     *
     * @param array $params
     */
    public function run(array $params)
    {
        CLI::write("========================================================");
        CLI::write("Pilih instalasi db");
        CLI::write("    1. Data fix only");
        CLI::write("    2. All Data dummy");
        $option = CLI::prompt("Pilihan anda (1/2)");
        CLI::write("========================================================");
        CLI::clearScreen();
        $status = true;
        if ($option != '1') {
            if ($option != '2') {
                print "Instalasi DB gagal";
                die;
            }
        }
        CLI::write("Membuat database baru");
        CLI::write("========================================================");
        try {
            $this->call("db:create", [getenv("database.default.database")]);
            $this->call("migrate:refresh");
        } catch (Exception $th) {
            $this->showError($th);
        }
        CLI::write("========================================================");
        if ($option == '1') {
            CLI::write("Insert fix data");
            CLI::write("========================================================");
            $init = new Init(new Database());
            $init->run();
            CLI::write("========================================================");
        } else {
            CLI::write("Insert all dummy data");
            CLI::write("========================================================");
            $init = new InitAllDummy(new Database());
            $init->run();
            CLI::write("========================================================");
        }
    }
}
