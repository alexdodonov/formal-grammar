<?php
namespace Mezon\Rules\Terminal\CharSet;

use Mezon\StringIterator;
use Mezon\Rules\RuleInterface;

/**
 * Rule wich allows the defined set of characters or nothing
 *
 * @package FormalGrammar
 * @subpackage OneOrMore
 * @author Dodonov A.A.
 * @version v.1.0 (2021/12/29)
 * @copyright Copyright (c) 2021, aeon.org
 */

/**
 * Rule wich allows the defined set of characters or nothing
 * Empty strings are allowed
 *
 * @author gdever
 */
class OneOrMoreOrNothing extends OneOrMoreBase
{

    /**
     *
     * {@inheritdoc}
     * @see RuleInterface::validate()
     */
    public function validate(StringIterator $iterator, bool &$ruleWasApplied): StringIterator
    {
        $ruleWasApplied = true;

        return $this->validateStrict($iterator, $ruleWasApplied);
    }
}
