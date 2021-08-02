<?php
class JeuxManager extends Model
{
    public function getJeux()
    {
        $this->getAll('jeux', 'Jeu');    
    }
}