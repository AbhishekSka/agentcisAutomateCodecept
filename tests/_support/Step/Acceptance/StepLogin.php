<?php
namespace Step\Acceptance;

use Page\POMLogin;

class StepLogin extends \AcceptanceTester
{

    public function UserLogin_Admin()
    {
        $login = new POMLogin($this);
        $login->Login("abhishek.shakya@introcept.co", "agentcis");
        return $login;
    }

    public function UserLogin_Operator()
    {
        $login = new POMLogin($this);
        $login->Login("avseqksy.a@gmail.com", "agentcis");
        return $login;
    }

    public function UserLogin_Manager()
    {
        $login = new POMLogin($this);
        $login->Login("avseq.skya@gmail.com", "agentcis");
        return $login;
    }

    public function UserLogin_Accountant()
    {
        $login = new POMLogin($this);
        $login->Login("avseqs.kya@gmail.com", "agentcis");
        return $login;
    }
    public function UserLogin_Counsellor()
    {
        $login = new POMLogin($this);
        $login->Login("avseqsk.ya@gmail.com", "agentcis");
        return $login;
    }

    public function UserLogin_Subagent()
    {
        $login = new POMLogin($this);
        $login->Login("avseqskgmail.com", "agentcis");
        return $login;
    }
}