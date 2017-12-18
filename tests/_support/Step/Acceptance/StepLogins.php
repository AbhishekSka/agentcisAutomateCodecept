<?php
namespace Step\Acceptance;

use Page\POMLogin;

class StepLogins extends \AcceptanceTester
{

    public function loginAdmin(){
        $loginPage = new POMLogin($this);
        $loginPage->Login('abhishek.shakya@introcept.co', 'agentcis');
        return $loginPage;
    }


    /**
     * @return \Codeception\Scenario
     */
    protected function getScenario()
    {
        // TODO: Implement getScenario() method.
    }
}