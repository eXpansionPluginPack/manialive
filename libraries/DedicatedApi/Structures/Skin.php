<?php
/**
 * Represents a Dedicated TrackMania Server Skin
 * ManiaLive - TrackMania dedicated server manager in PHP
 * 
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision$:
 * @author      $Author$:
 * @date        $Date$:
 */
namespace DedicatedApi\Structures;

class Skin extends AbstractStructure
{
	public $orig;
	public $name;
	public $checksum;
	public $url;
}