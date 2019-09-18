<?php
namespace Printing\Domain;

use Symfony\Component\Filesystem\Filesystem;

abstract class PrintService 
{
	private $executable;
	
	public function __construct($executable)
	{
		$this->executable = $executable;
	}
	
	/**
	 * Prints a file
	 * @param string $file Full path and filename
	 * @param string $printerName
	 * @param bool $keepFile
	 */
	public function printFile($file, $printerName, $keepFile = false)
	{
		$command = sprintf($this->getCommandString(), $this->getExecutable(), $file, $printerName);
		shell_exec( $command);
		
		if (!$keepFile) {
		    (new Filesystem())->remove($file);
		}
	}
	
	private function getExecutable()
	{
		return $this->executable;
	}
	
	abstract protected function getCommandString();
	
	abstract public function getServiceName();
}
