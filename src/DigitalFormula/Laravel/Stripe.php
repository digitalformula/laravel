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
	 * Information about the logged-in user
	 *
	 * @var
	 */
	var $user;

	/**
	 * Instantiate the class
	 */
	public function __construct()
	{
		$this->user = Sentinel::getUser();
	}

	/**
	 * Get the logged-in user's Stripe ID
	 */
	public function myStripeId()
	{
		return $this->user->stripe_id;
	}

}