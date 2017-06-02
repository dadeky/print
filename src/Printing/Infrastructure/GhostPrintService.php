<?php
namespace Printing\Infrastructure;

use Printing\Domain\PrintService;

class GhostPrintService extends PrintService
{
	const COMMAND_STRING = '%1$S -printer "%3$S" "%2$S"';
	const SERVICE_NAME = 'GHOST';

	protected function getCommandString()
	{
		return self::COMMAND_STRING;
	}
	
	public function getServiceName()
	{
		return self::SERVICE_NAME;
	}
}