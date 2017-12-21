<?php
namespace Step\Acceptance;

class StepDashboard extends \AcceptanceTester
{
    public function Linktest()
    {

        $modules = [
            '/clients' => 200,
            '/partners' => 404,
            '/prospects',
            '/teams' => 302,
            '/profile',
            'invoice',
            '/service/1/general/workflow/1'
        ];

        foreach ($modules as $module => $status) {
            $I->amOnPage($module);
            $I->seeResponseCodeIs($status);
        }
    }
}

