<?php
/**
 *
 * Contains the Stripe class
 *
 * @author Chris Rasmussen, digitalformula.net
 * @category Libraries & Utilities
 * @license MIT
 * @package DigitalFormula\Laravel
 *
 */

namespace DigitalFormula\Laravel;

use Sentinel;

class Stripe
{

	/**
	 * Get the logged-in user's Stripe ID
	 */
	public static function myStripeId()
	{
		$user = Sentinel::getUser();
		return $user->stripe_id;
	}

}