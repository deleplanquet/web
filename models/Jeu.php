<?php
class Jeu
{
    Private $_id;
    Private $_titre;
    Private $_temps;
    Private $_difficulte;
    Private $_multi;
    private $_possede;
    private $_idconsole;
    private $_fini;
    Private $_plateform;
    Private $_liens;
    Private $_comments;
    Private $_image;
    Private $_crosssav;
    Private $_crosstrophy;
    Private $_crossmulti;
    Private $_sstrophy;
    Private $_nd;
    Private $_physique;
    Private $_np;
    Private $_psn;
    Private $_date;

    //CONSTRUCTEUR
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    //HYDRATATION
    public function hydrate(array $data)
    {
        foreach($data as $key => $value)
        {
            $method = 'set'.ucfirst($key);
            if(method_exists($this, $method)
            {
                $this->$method($value);
            }
        }
    }

    // SETTERS
    Public function setId($id)
    {
        $id = (int) $id;
        if ($id > 0)
        {
            $this->_id = $id;
        }
    }
      
     Public function setTitre($titre)
    {
        if (is_string($titre))
        {
            $this->_titre = $titre;
        }
    }
      
    Public function setTemps($temps)
    {
        if(is_int($temps)
        {
            $this->_temps = $temps;
        }    
    }
      
    Public function setDifficulte($difficulte)
    {
        if ((is_int($difficulte)) & ($difficulte <= 10))
        {
            $this->_difficulte = $difficulte;
        }
    }
      
    Public function setMulti($multi)
    {
        return $this->_multi = $multi;
    }
      
    public function setPlateform($plateform)
    {
        return $this->_plateform = $plateform;   
    }
      
    Public function setLiens($liens)
    {
        return $this->_liens = $liens;
    }
      
    Public function setFini($fini)
    {
        return $this->_fini = $fini;
    }
      
    Public function setPossede($possede)
    {
        return $this->_possede = $possede;
    }
      
    Public function setComments($comment)
    {
        return $this->_comments = $comment;
    }
      
    Public function setImage($image)
    {
        return $this->_image = $image;
    }
      
    Public function setCrosssav($crosssav)
    {
        return $this->_crosssav = $crosssav;
    }
      
    Public function setCrosstrophy($crosstrophy)
    {
        return $this->_crosstrophy = $crosstrophy;
    }
      
    Public function setCrossmulti($crossmulti)
    {
        return $this->_crossmulti = $crossmulti;
    }

    Public function setIdconsole($idconsole)
    {
        return $this->_idconsole = $idconsole;
    }
      
    Public function setSstrophy($sstrophy)
    {
        return $this->_sstrophy = $sstrophy;
    }
      
    Public function setNd($nd)
    {
        return $this->_nd = $nd;
    }
      
    Public function setPhysique($physique)
    {
        return $this->_physique = $physique;
    }
      
    Public function setNp($np)
    {
        return $this->_np = $np;
    }
      
    Public function setPsn($psn)
    {
        return $this->_psn = $psn;
    }
    
    Public function setDate($date)
    {
        return $this->_date = $date;
    }

    //GETTERS
    Public function id()
    {
        return $this->_id;
    }
      
    Public function titre()
    {
        return $this->_titre;
    }
      
    Public function temps()
    {
        return $this->_temps;
    }
      
    Public function difficulte()
    {
        return $this->_difficulte;
    }
      
    Public function multi()
    {
        return $this->_multi;
    }
      
    Public function plateform()
    {
        return $this->_plateform;
    }
      
        
    Public function liens()
    {
        return $this->_liens;
    }
      
    Public function fini()
    {
        return $this->_fini;
    }
      
    Public function possede()
    {
        return $this->_possede;
    }
      
    Public function comments()
    {
        return $this->_comments;
    }
      
    Public function image()
    {
        return $this->_image;
    }
      
    Public function crosssav()
    {
        return $this->_crosssav;
    }
      
    Public function crosstrophy()
    {
        return $this->_crosstrophy;
    }
      
    Public function crossmulti()
    {
        return $this->_crossmulti;
    }
      
    Public function idconsole()
    {
        return $this->_idconsole;
    }
      
    Public function sstrophy()
    {
        return $this->_sstrophy;
    }
      
    Public function nd()
    {
        return $this->_nd;
    }
      
    Public function physique()
    {
        return $this->_physique;
    }
      
    Public function np()
    {
        return $this->_np;
    }
      
    Public function psn()
    {
        return $this->_psn;
    }
    
    Public function date()
    {
        return $this->_date;
    }

}