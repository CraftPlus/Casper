<?php
namespace Craft;

class CasperPlugin extends BasePlugin
{

	function getName()
	{
		return Craft::t('Casper');
	}

	function getVersion()
	{
		return '0.2';
	}

	function getDeveloper()
	{
		return 'Craftpl.us';
	}

	function getDeveloperUrl()
	{
		return 'http://craftpl.us';
	}

	function hasCpSection()
    {
        return true;
    }
    public function registerCpRoutes()
    {
        return array(

    	//user this area for custom CP routes

        );

	}	
}
