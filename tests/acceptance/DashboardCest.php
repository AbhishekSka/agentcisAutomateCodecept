<?php


class DashboardCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function DashboardSmokeTest(AcceptanceTester $I,\Step\Acceptance\StepLogins $stepLogin)
    {
       // $I = new AcceptanceTester($I);
        $stepLogin->loginAdmin();
        $I->amOnPage('/overview');

    }
}
