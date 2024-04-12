<?php

class DwdHelpers {
	public static function getConstantOrDefault( $constant, $default ) {
		if ( ! defined( $constant ) ) {
			return $default;
		}

		return constant( $constant );
	}
}