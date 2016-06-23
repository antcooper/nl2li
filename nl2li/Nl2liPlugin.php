<?php

namespace Craft;

class Nl2liPlugin extends BasePlugin
{
	public function getName()
	{
		return Craft::t('nl2li');
	}

	public function getVersion()
	{
		return '1.0';
	}

	public function getDeveloper()
	{
		return 'Ant Cooper';
	}

	public function getDeveloperUrl()
	{
		return 'http://antcooper.com';
	}

	public function getPluginUrl()
	{
		return 'https://github.com/antcooper/nl2li';
	}
	
	public function addTwigExtension()
	{
		Craft::import('plugins.nl2li.twigextensions.Nl2liTwigExtension');
		return new Nl2liTwigExtension();
	}
}
