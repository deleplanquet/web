<?php
class ControllerAccueil
{
    private $_jeuxManager;
    private $_view;
    
    public function __construct($url)
    {
        if(isset($url) && count($url) > 1)
        {
            throw new Exception('Page introuvable');
        }
        else
        {
            $this->jeux();
        }       
    }

    private function jeux()
    {
        $this->_jeuxManager = new JeuxManager;
        $jeux = $this->_jeuxManager->getJeux();

        require_once('views/viewAccueil.php');
    }
}