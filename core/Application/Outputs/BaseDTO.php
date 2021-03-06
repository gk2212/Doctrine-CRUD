<?php
declare(strict_types=1);
  
namespace Core\Application\Outputs;

use ReflectionClass;
use ReflectionProperty;

abstract class BaseDTO
{
    public function __construct(array $parm)
    {
        $class = new ReflectionClass(static::class);
        foreach ($class->getProperties(ReflectionProperty::IS_PUBLIC) as $reflectionProperty){
            $property =  $reflectionProperty->getName();
            $this->{$property} =  $parm[$property];
        }
    }
}
 ?>