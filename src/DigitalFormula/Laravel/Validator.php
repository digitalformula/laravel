<?php
/**
 *
 * Contains the Validator class
 *
 * @author Chris Rasmussen, digitalformula.net
 * @category Libraries & Utilities
 * @license MIT
 * @package DigitalFormula\Laravel
 *
 */

namespace DigitalFormula\Laravel;

/**
 *
 * The Validator class
 *
 * @package DigitalFormula\Laravel
 *
 */
class Validator
{
    /**
     * Validate a Laravel form
     * @param array $rules The form rules to compare against
     * @param array $input The form data to use as input
     * @returns bool Whether or not the form is valid
     */
    public static function ValidateForm( $rules, $input )
    {
        $validation = \Validator::make( $input, $rules );
        return( $validation->fails() ? false : true );
    }
    /* ValidateForm */

}
/* Validator */