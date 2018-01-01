

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
    public function tryToTest(AcceptanceTester $I)
    {

        $dashboard = new \Page\Acceptance\POMDashboard($I);
        $I->canSee('Welcome to Agentcis', '.left floated seven wide column>h4');
        $I->click($dashboard::$dashWelcome);
        $I->click($dashboard::$dashBranchList);




    }
}
