<?php
/**
 * This file is part of the LuneticsZodiacBundle
 *
 * (c) Matthias Breddin / Lunetics Networks
 *
 * @author Matthias Breddin <mb@lunetics.com>
 * @link(https://www.github.com/lunetics/ZodiacBundle)
 * @link(http://www.lunetics.com
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */
 
if (!is_file($autoloadFile = __DIR__.'/../vendor/autoload.php')) {
    throw new \LogicException('Could not find autoload.php in vendor/. Did you run "composer install --dev"?');
}

require $autoloadFile;
