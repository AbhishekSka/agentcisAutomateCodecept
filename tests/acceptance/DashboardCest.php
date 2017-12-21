<?php

class DashboardCest
{
    public function _before(AcceptanceTester $I, \Step\Acceptance\StepLogin $user)
    {
        $user->UserLogin_Admin();
    }

    // test

    public function something(AcceptanceTester $I)
    {

        $modules = [
            '/clients' => 200,
            '/partners' => 200,
            '/prospects' => 200,
            //'/teams' => 200,
            '/profile' => 200,
            //'/invoice'=>200,
            //'/service/1/general/workflow/1'
        ];

        foreach ($modules as $module => $status) {
            $I->amOnPage($module);
            $I->canSeeResponseCodeIs($status);
        }
    }

    public function _after(AcceptanceTester $I)
    {

    }
}