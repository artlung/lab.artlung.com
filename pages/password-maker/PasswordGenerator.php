<?php

/**
 * Class PasswordGenerator
 */
class PasswordGenerator
{

    public static $letters = "2346789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghjkmnopqrstuvwxyz";
    public static $length = "20";
    public $letters_array;

    /**
     * PasswordGenerator constructor.
     */
    function __construct()
    {
        $this->letters_array = array();

        for ($a = 0; $a < strlen(self::$letters); $a++) {
            $this->letters_array[] = self::$letters[$a];
        }
    }


    /**
     * Make password
     *
     * @return string
     */
    function make(): string
    {
        $password = '';
        for ($i = 0; $i < self::$length; $i++) {
            srand((float)microtime() * 10000000);
            $password .= $this->letters_array[array_rand($this->letters_array)];
        }
        return $password;

    }

    /**
     * Print one password
     *
     * @return void
     */
    function printOne()
    {
        print $this->make();
    }

    /**
     * Print many passwords
     *
     * @param  $num
     * @return void
     */
    function printMany($num)
    {
        for ($i = 0; $i < $num; $i++) {
            $this->printOne();
            print "\n";
        }
    }


}