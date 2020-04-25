<?php

Class Speedometer
{
	const milesEnKilometre = 1.609;
	const kilometreEnMiles = 0.621;

	public static function convertMilesEnKm(float $vitesse) : float
	{
		return $vitesse * self::milesEnKilometre;
	}

	public static function convertKmEnMiles(float $vitesse) : float
	{
		return $vitesse * self::kilometreEnMiles;
	}
}