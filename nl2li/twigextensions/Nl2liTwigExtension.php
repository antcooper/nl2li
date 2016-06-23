<?php

namespace Craft;

class Nl2liTwigExtension extends \Twig_Extension
{
	protected $env;

	public function getName()
	{
		return 'Nl2li';
	}

	public function getFilters()
	{
		return array('nl2li' => new \Twig_Filter_Method($this, 'nl2li', array('is_safe' => array('html'))));
	}
	
	public function initRuntime(\Twig_Environment $env)
	{
		$this->env = $env;
	}

	public function nl2li($text)
	{
		// Check for http at beginning of string
		return '<li>'.str_replace( "\n", "</li><li>", $text ).'</li>';
	}
	
}