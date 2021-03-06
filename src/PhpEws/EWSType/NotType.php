<?php
/**
 * The Not element represents a search expression that negates the Boolean value
 * of the search expression that it contains.
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the NotType type.
 */
class NotType extends EWSType
{
    /**
     * Represents a search expression that enables you to perform a Boolean AND
     * operation between two or more search expressions.
     *
     * AndType
     */
    public $And;

    /**
     * Represents a search expression that determines whether a given property
     * contains the supplied constant string value.
     *
     * ContainsExpressionType
     */
    public $Contains;

    /**
     * Performs a bitwise mask of the properties.
     *
     * ExcludesType
     */
    public $Excludes;

    /**
     * Represents a search expression that returns true if the supplied property
     * exists on an item.
     *
     * ExistsType
     */
    public $Exists;

    /**
     * Represents a search expression that compares a property with either a
     * constant value or another property and evaluates to true if they are
     * equal.
     *
     * IsEqualToType
     */
    public $IsEqualTo;

    /**
     * Represents a search expression that compares a property with either a
     * constant value or another property and returns true if the first property
     * is greater than the value or property.
     *
     * IsGreaterThanType
     */
    public $IsGreaterThan;

    /**
     * Represents a search expression that compares a property with either a
     * constant value or another property and returns true if the first property
     * is greater than or equal to the value or property.
     *
     * IsGreaterThanOrEqualToType
     */
    public $IsGreaterThanOrEqualTo;

    /**
     * Represents a search expression that compares a property with either a
     * constant value or another property and returns true if the first property
     * is less than the value or property.
     *
     * IsLessThanType
     */
    public $IsLessThan;

    /**
     * Represents a search expression that compares a property with either a
     * constant value or another property and returns true if the first property
     * is less than or equal to the value or property.
     *
     * IsLessThanOrEqualToType
     */
    public $IsLessThanOrEqualTo;

    /**
     * Represents a search expression that compares a property with either a
     * constant value or another property and returns true if the values are not
     * the same.
     *
     * IsNotEqualToType
     */
    public $IsNotEqualTo;

    /**
     * Represents a search expression that negates the Boolean value of the
     * search expression it contains.
     *
     * NotType
     */
    public $Not;

    /**
     * Represents a search expression that performs a logical OR operation on
     * the search expression it contains. The Or element will return true if any
     * of its children return true.
     *
     * OrType
     */
    public $Or;
}
