<?php

namespace Page;

class POMLogin
{
    // include url of current page
    // public static $URL = '/';
    const URL = '/';
    public static $username='//input[@id="email"]';
    public static $password = '//input[@id="password"]';
    public static $loginButton = '//button[@name="Login"]';
   /* public static $URL = '/';
    public static $dLeads =;
    public static $dProspects =;
    public static $dClients =;
    public static $dPartners =;
    public static $dLeads =;
    public static $dLeads =;
    public static $dLeads =;
    public static $dLeads =;
    public static $dLeads =;*/


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
    protected $tester;
    public function __construct(\AcceptanceTester $I)
    {
        $this->tester=$I;
    }

    public static function route($param)
    {
        return static::$URL . $param;
    }

    /**
     * @param $email
     * @param $password
     * @return mixed
     */
    public function Login($email,$password)
    {
        $I=$this->tester;
        $I->amOnPage(self::URL);
         $I->fillField(self::$username, $email);
         $I->fillField(self::$password,$password);
         $I->click(self::$loginButton);
         $I->amOnPage("/overview");
        return $this;
    }

}
