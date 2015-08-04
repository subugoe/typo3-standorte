<?php
namespace Subugoe\Standorte\Hooks;

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Dominic Simm <dominic.simm@sub.uni-goettingen.de>, Goettingen State Library
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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

require_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('nkwlib') . 'class.tx_nkwlib.php');
require_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('standorte') . '/Classes/Utility/EvalFuncDouble11Utility.php');

/**
 * Hooks
 */
class user_Tx_Standorte_Classes_Hooks_BackendEdit
{

    /**
     * Hook fuer das ProProcessing des zu aendernden FieldArrays (Datenbank-Eintrags)
     * @param array &$incomingFieldArray
     * @param string $table
     * @param string $id
     * @param object &$pObj
     */
    public function processDatamap_preProcessFieldArray(&$incomingFieldArray, $table, $id, &$pObj)
    {

        $modified = false;
        $nkwlib = new \tx_nkwlib();

        if ($table == 'tx_standorte_domain_model_bibliothek') {
            // Check modified fields of interest
            $field_list = array('strasse', 'plz', 'ort');
            $fields = array();
            foreach (array_keys($incomingFieldArray) as $field) {
                if (in_array($field, $field_list)) {
                    $fields[] = $field;
                }
            }
            if (count($fields) > 0) {
                list($values) = $GLOBALS['TYPO3_DB']->exec_SELECTgetRows(implode(',', $fields), $table, 'uid=' . $id);
                foreach ($fields as $field) {
                    if (($modified = ($values[$field] != $incomingFieldArray[$field]))) {
                        break;
                    }
                }
                if ($modified) {
                    $address = $incomingFieldArray["strasse"] . ", " . $incomingFieldArray["plz"] . ", " . $incomingFieldArray["ort"];
                    $geo = $nkwlib->geocodeAddress($address);
                    \TYPO3\CMS\Core\Utility\GeneralUtility::devLog('processDatamap: Request coordinates from Google Maps API',
                        'standorte', -1, array($geo));
                    if ($geo["status"] == "OK") {
                        \TYPO3\CMS\Core\Utility\GeneralUtility::devLog('processDatamap: Status OK', 'standorte', -1,
                            array());
                        // If values differ take new ones ...
                        if ($incomingFieldArray['lat'] != ($lat = floatval($geo["results"][0]["geometry"]["location"]["lat"]))) {
                            $incomingFieldArray['lat'] = \tx_standorte_double11::evaluateFieldValue($lat, '', $pObj);
                        }
                        if ($incomingFieldArray['lon'] != ($lon = floatval($geo["results"][0]["geometry"]["location"]["lng"]))) {
                            $incomingFieldArray['lon'] = \tx_standorte_double11::evaluateFieldValue($lon, '', $pObj);
                        }
                        \TYPO3\CMS\Core\Utility\GeneralUtility::devLog('processDatamap: Actualized FieldArray',
                            'standorte', -1, array($incomingFieldArray));
                    } else {
                        \TYPO3\CMS\Core\Utility\GeneralUtility::devLog('processDatamap: Request failed', 'standorte', 3,
                            array($geo));
                    }
                } else {
                    \TYPO3\CMS\Core\Utility\GeneralUtility::devLog('processDatamap: No address field was modified',
                        'standorte', 0, array($geo));
                }
            }
        }
    }

}
