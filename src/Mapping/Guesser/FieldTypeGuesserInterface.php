<?php

namespace Arthem\GraphQLMapper\Mapping\Guesser;

use Arthem\GraphQLMapper\Mapping\Context\FieldContext;
use Arthem\GraphQLMapper\Mapping\Guesser\Guess\TypeGuess;

interface FieldTypeGuesserInterface extends GuesserInterface
{
    /**
     * Guess the GraphQL type of a field
     *
     * @param FieldContext $fieldContext
     * @return TypeGuess
     */
    public function guessFieldType(FieldContext $fieldContext);
}
