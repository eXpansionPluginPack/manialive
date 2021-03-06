<?php
/**
 * Represents the system which hosts a Dedicated Server
 * ManiaLive - TrackMania dedicated server manager in PHP
 * 
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision$:
 * @author      $Author$:
 * @date        $Date$:
 */
namespace DedicatedApi\Structures;

class SystemInfos extends AbstractStructure
{
	public $publishedIp;
	public $port;
	public $p2PPort;
	public $titleId;
	public $serverLogin;
	public $serverPlayerId;
	public $connectionDownloadRate;
    public $connectionUploadRate;
	public $isServer;
	public $isDedicated;
}
?>