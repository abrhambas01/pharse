<?php
/**
 * Should output all sections from the SRL forums (http://villavu.com/forum/)
 *
 * Demonstrates selectors
 *
 * @author RESS.IO Team
 * @package Pharse
 * @link https://github.com/ressio/pharse
 *
 * FORKED FROM
 * @author Niels A.D.
 * @package Ganon
 * @link http://code.google.com/p/ganon/
 *
 * @license http://dev.perl.org/licenses/artistic.html Artistic License
 */

include_once('../pharse.php');
//PHP4 users, make sure this path is correct!

$html = file_get_dom('http://villavu.com/forum/');


if (version_compare(PHP_VERSION, '5.3.0') >= 0) {
	//PHP 5.3.0 and higher

	foreach($html('a[href ^= forumdisplay] > strong') as $element) {
		echo $element->getPlainText(), "<br>\n";
	}

} else {
	//PHP 4 and 5.3.0 and lower

	foreach($html->select('a[href ^= forumdisplay] > strong') as $element) {
		echo $element->getPlainText(), "<br>\n";
	}
	
}


?>