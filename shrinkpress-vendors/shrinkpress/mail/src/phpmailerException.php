<?php 

namespace ShrinkPress\Mail;

use \Exception as Exception;

/**
 * PHPMailer exception handler
 * @package PHPMailer
 */
class phpmailerException extends Exception
{
    /**
     * Prettify error message output
     * @return string
     */
    public function errorMessage()
    {
        $errorMsg = '<strong>' . htmlspecialchars($this->getMessage()) . "</strong><br />\n";
        return $errorMsg;
    }
}

