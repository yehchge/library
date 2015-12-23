<!doctype html>
<html>
<head>
    <title>JREAM Library Example</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

<div id="wrap">
<header><h1>jream\Timer</h1></header>
<div id="content">
<?php
/**
 * @author		Jesse Boyer <contact@jream.com>
 * @copyright	Copyright (C), 2011-12 Jesse Boyer
 * @license		GNU General Public License 3 (http://www.gnu.org/licenses/)
 *				Refer to the LICENSE file distributed within the package.
 *
 * @link		http://jream.com
 */
require_once '../jream/autoload.php';
new jream\Autoload('../jream');

echo '<pre>';

jream\Timer::start(1);
echo jream\Timer::stop(1);
echo "\n";

jream\Timer::start('iteration');

for ($i = 0; $i < 100000; $i++)
{
	new stdClass();
}
echo jream\Timer::stop('iteration');
?>

</div>
<!-- end:Wrap -->


<footer>
	(C) 2011 - 2012 Jesse Boyer &lt;http://jream.com&gt;
</footer>

</body>
</html>