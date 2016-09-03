<?php namespace PageInfo;

/**
 * 
 * Store info for a Dynamic Navigation bar
 *
 * @version 1.0
 * @author Steven Chorkawy
 */
class DynamicNav
{
    /*Default values */
    const ACCOUNT_LINK = "./login.php";
    const ACCOUNT_TEXT = "Login";


    /*Private Attributes */
    private $__accountLink; 
    private $__accountText; 


    /*Setters */
    public function setAccount($text, $link)
    {
        $this->setAccountText($text);
        $this->setAccountLink($link);
    }

    public function setAccountText($text)
    {
        $this->__accountText = $text;
    }

    public function setAccountLink($link)
    {
        $this->__accountLink = $link;
    }

    /*Getters*/
    public function getAccountText()
    {
        if(!isset($this->__accountText) || $this->__accountText == null || $this->__accountText == "")
        {
            return self::ACCOUNT_TEXT;
        }
        else{
            return $this->__accountText;
        }
    }

    public function getAccountLink()
    {
        if(!isset($this->__accountLink) || $this->__accountLink == null || $this->__accountLink == "")
        {
            return self::ACCOUNT_LINK;
        }
        else{
            return $this->__accountLink;
        }
    }

}