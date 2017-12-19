<?php


class LoginCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function LogincestTest(AcceptanceTester $I,\Step\Acceptance\StepLogin $stepLogin)
    {
        $stepLogin->UserLogin_Admin();
        $I->amOnPage('/auth/logout');
        $stepLogin->UserLogin_Manager();
        $I->amOnPage('/auth/logout');
        $stepLogin->UserLogin_Operator();
        $I->amOnPage('/auth/logout');
        $stepLogin->UserLogin_Accountant();
        $I->amOnPage('/auth/logout');
        $stepLogin->UserLogin_Counsellor();
        $I->amOnPage('/auth/logout');
        $stepLogin->UserLogin_Subagent();
        $I->amOnPage('/auth/logout');
    }
}
