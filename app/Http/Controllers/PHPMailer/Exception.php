<?php

namespace App\Http\Controllers\PHPMailer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Exception extends Controller
{
    /**
     * Prettify error message output.
     *
     * @return string
     */
    public function errorMessage()
    {
        return '<strong>' . htmlspecialchars($this->getMessage()) . "</strong><br />\n";
    }
}
