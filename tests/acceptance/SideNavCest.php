<?php

class DashboardCest
{
    public function _before(AcceptanceTester $I, \Step\Acceptance\StepLogin $user)
    {
        //$user->UserLogin_Admin();
    }

    // test

    public function SideNavLinkCheck(AcceptanceTester $I, \Step\Acceptance\StepLogin $user)
    {
        $user->UserLogin_Admin();
        $modules = [
            '/overview'=>200,
            '/#/'=>200,
            '/prospects' => 200,
            '/clients' => 200,
            '/partners' => 200,
            '/product'=>200,
            '/quotations'=>200,
            '/invoice/to-do'=>200,
            '/payment'=>200,
            '/payables'=>200,
            '/recievables'=>200,
            '/branch'=>200,
            '/users'=>200,
            '/referrer'=>200,
            '/tasks/assigned-to-me'=>200,
            /*'/report/#/client'=>200,
            '/report/#/application'=>200,
            '/report/#/invoice'=>200,*/
            //'/service/1/general/workflow/1'
            //'/invoice'=>200,
            //'/teams' => 200,
            //'/profile' => 200,

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