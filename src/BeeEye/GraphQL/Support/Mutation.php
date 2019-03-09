<?php

namespace BeeEye\GraphQL\Support;

use Validator;
use BeeEye\GraphQL\Error\ValidationError;
use BeeEye\GraphQL\Support\Traits\ShouldValidate;

class Mutation extends Field
{
    use ShouldValidate;
}
