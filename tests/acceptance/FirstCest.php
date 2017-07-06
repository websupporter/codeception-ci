<?php
/**
 * First test
 *
 * @package tests
 */

/**
 * Class FirstCest
 */
class FirstCest
{
	/**
	 * A test.
	 *
	 * @param AcceptanceTester $i The AcceptanceTester.
	 */
    public function tryToTest( AcceptanceTester $i ) {
	    $i->amOnPage( '/' );
	    $i->see( 'Welcome' );
    }
}
