<?php
/**
 * This file is part of the Nella Project (http://nella-project.org).
 *
 * Copyright (c) Patrik Votoček (http://patrik.votocek.cz)
 *
 * For the full copyright and license information,
 * please view the file LICENSE.md that was distributed with this source code.
 */

namespace Nella\Tracy;

use Nette;

class DebugInfoExtension extends \Nette\DI\CompilerExtension
{

	public function afterCompile(Nette\PhpGenerator\ClassType $class)
	{
		$init = $class->getMethod('initialize');

		$init->addBody('\\' . DebugInfoPanel::class . '::register(\Tracy\Debugger::getBlueScreen());');
	}

}
