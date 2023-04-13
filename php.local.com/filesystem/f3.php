<?php
class Dir {
	private $directories = [];
	private $files = [];
	private $path;
	function __construct($path) {
		if(is_readable($path)) {
			$this->path = $path;
			$entries = scandir($path);
			foreach($entries as $entry) {
				if('.' != $entry && '..' != $entry) {
					if(is_dir($path.DIRECTORY_SEPARATOR.$entry)) {
						array_push($this->directories, $entry);
					} else {
						array_push($this->files, $entry);
					}
				}
			}
		}
	}
	function getDirectory($index) {
		if(isset($this->directories[$index])) {
			return new Dir($this->path.DIRECTORY_SEPARATOR.$this->directories[$index]);
		} else {
			throw new Exception('Directory doesnt exists');
		}
		return false;
	}
	function getDirectories() {
		return $this->directories;
	}
	function getFiles() {
		return $this->files;
	}
}
$directory = new Dir(getcwd());
print_r($directory->getDirectories());
print_r($directory->getFiles());

$oop = $directory->getDirectory(0);
print_r($directory->getDirectories(0));