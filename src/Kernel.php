<?php
namespace App;

use RestOnPhp\Kernel as RestOnPhpKernel;

class Kernel extends RestOnPhpKernel {
    public function getProjectDir() {
        return __DIR__ . '/../';
    }
}
