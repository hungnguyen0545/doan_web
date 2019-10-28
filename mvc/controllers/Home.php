<?php
class Home extends Controller{
    function GotoHome(){
        // goi view - landing page
        $this->Views("landingpage",
        []);
    }    
    function signin(){
        $this->Views("login",[]);
    }
}
?>