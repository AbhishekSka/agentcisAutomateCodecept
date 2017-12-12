<?php

namespace Page;

class login
{
    // include url of current page
    public static $URL = '/';
    public static $dLeads =;
    public static $dProspects =;
    public static $dClients =;
    public static $dPartners =;
    public static $dLeads =;
    public static $dLeads =;
    public static $dLeads =;
    public static $dLeads =;
    public static $dLeads =;


    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public function __construct()
    {
    }

    public static function route($param)
    {
        return static::$URL . $param;
    }

    /**
     * @return mixed
     */
    public function Dashboard(\AcceptanceTester $I)
    {
    $I=$this

    }
}
