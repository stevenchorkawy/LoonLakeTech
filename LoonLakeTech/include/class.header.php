<?php

/**
 * Used to include the php header file.
 *
 * To use the header.php file this class should already have been implemented. 
 *
 * @version 1.0
 * @author Steven
 * 
 */
class Header
{
    /**
     * Used to set the tab title for each page.
     * @var String
     */
    public $title = "title";

    /**
     * Determine if this current page is the home page or not.
     * This will be used to determine which NAV bar items should be shown.
     * @var boolean
     */
    public $homePage = true; 

    /**
     * Where to send the user when they click the home page button in the nav bar.
     * @var String
     */
    public $homePageLink = "#";


    /**
     * A paragraph description for each page.
     * @var String
     */
    public $pageDescription = "Page Descrption";


}