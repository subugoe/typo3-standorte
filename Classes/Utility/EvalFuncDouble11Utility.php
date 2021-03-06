<?php

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Dominic Simm <dominic.simm@sub.uni-goettingen.de>, Goettingen State Library
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */

/**
 * Helper-Class add eval-function for double with precision 11
 */
class tx_standorte_double11
{

    public static function evaluateFieldValue($value, $is_in, &$set)
    {
        $theDec = 0;
        for ($a = strlen($value); $a > 0; $a--) {
            // Search for the dot '.'|','
            if (substr($value, $a - 1, 1) == '.' || substr($value, $a - 1, 1) == ',') {
                $theDec = substr($value, $a);        // Float part
                $value = substr($value, 0, $a - 1);        // Integer
                break;
            }
        }
        $theDec = preg_replace('[^0-9]', '',
                $theDec) . '00000000000';                // Remove all "not" Decimals, append 11*'0'
        $value = intval(str_replace(' ', '', $value)) . '.' . substr($theDec, 0,
                11);    // Remove all blanks in Integer-part, cut to float precision=6
        return $value;
    }

    public function returnFieldJS()
    {
        return "
			var theVal = ''+value;
			var dec=0;
			if (!value)    return 0;
			for (var a=theVal.length; a>0; a--)    {
				if (theVal.substr(a-1,1)=='.' || theVal.substr(a-1,1)==',')    {
					dec = theVal.substr(a);
					theVal = theVal.substr(0,a-1);
					break;
				}
			}
			dec = evalFunc.getNumChars(dec)+'00000000000';
			theVal=evalFunc.parseInt(evalFunc.noSpace(theVal))+TS.decimalSign+dec.substr(0,11);
			return theVal;
		";
    }
}
