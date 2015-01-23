<?php

namespace Console;

class Write
{
	/**
	 * Echo a color-coded line to STDOUT preceded by the severity level..
	 *
	 * @param $string
	 * @param string $type
	 */
	public static function line($string,$type = 'info')
	{
		$begin = $end = "\033[37m";
		switch ($type) {
			case 'success':
				$begin = "\033[32m"; // green
				break;
			case 'error':
			case 'warning':
				$begin = "\033[31m"; // red
				break;
			case 'debug':
				$begin = "\033[0;34m"; // blue
				break;
			case 'info':
			default:

				break;
		}

		echo $begin.strtoupper($type).": ".$string.$end."\n";
	}
}