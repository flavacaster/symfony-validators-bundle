<?php

declare(strict_types=1);

namespace Flavacaster\SymfonyValidatorsBundle\Validator;

use Symfony\Component\Validator\Constraints\Optional as BaseOptional;

/**
 * @Annotation
 * @Target({"PROPERTY", "METHOD", "ANNOTATION"})
 */
class Optional extends BaseOptional
{
}
