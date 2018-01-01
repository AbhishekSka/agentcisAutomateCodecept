<?php
namespace Page\Acceptance;

class POMDashboard
{
    // include url of current page
    public static $URL = '\overview';
    public static $dashWelcome = '.left floated seven wide column>h4';
    //Branches
    public static $dashBranchList ='.dropdown icon';
    public static $dashBranch = '.dropdown icon >input';
    public static $dashInviteAllUsers ='';
    public static $dashLeads ='';
    public static $dashProspects ='';
    public static $dashClients ='';
    public static $dashPartners ='';
    public static $dashAppointment ='';
    public static $dashTask ='';

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
    public static function route($param)
    {
        return static::$URL.$param;
    }

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }




}
