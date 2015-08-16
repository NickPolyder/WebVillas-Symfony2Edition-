<?php
namespace WebVL\WebVillasBundle\Entity\Forms;

class Search
{
    protected $SearchText;
    
    public function GetSearchText()
    {
        return $this->SearchText;
    }
    
    public function SetSearchText($Text)
    {
        $this->SearchText = $Text;
    }
}

