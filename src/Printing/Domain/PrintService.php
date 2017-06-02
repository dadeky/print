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
	 */
	public function printFile($file, $printerName)
	{
		$command = sprintf($this->getCommandString(), $this->getExecutable(), $file, $printerName);
		shell_exec( $command);
		(new Filesystem())->remove($file);
	}
	
	private function getExecutable()
	{
		return $this->executable;
	}
	
	abstract protected function getCommandString();
	
	abstract public function getServiceName();
}