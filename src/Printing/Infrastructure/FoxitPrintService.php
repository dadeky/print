<?php
namespace Printing\Infrastructure;

use Printing\Domain\PrintService;

class FoxitPrintService extends PrintService
{
	const COMMAND_STRING = '"%1$s" /t "%2$s" "%3$s"';
	const SERVICE_NAME = 'FOXIT';
	
	protected function getCommandString()
	{
		return self::COMMAND_STRING;
	}
	
	public function getServiceName()
	{
		return self::SERVICE_NAME;
	}
	
}