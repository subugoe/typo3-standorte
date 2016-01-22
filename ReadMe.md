# STANDORTE

Eingabe der Standorte im Backend

## RealURL
'fakultaet' => array(
					array(
						'GETvar' => 'tx_standorte_pi1[fakultaetUid]',
						'lookUpTable' => array(
							'table' => 'tx_standorte_domain_model_fakultaet',
							'id_field' => 'uid',
							'alias_field' => 'titel',
							'maxLength' => 50,
							'addWhereClause' => 'AND NOT deleted',
							'useUniqueCache' => 1,
							'useUniqueCache_conf' => array(
								'strtolower' => 1,
								'spaceCharacter' => '_',
							),
						),
					),
					array(
						'GETvar' => 'tx_standorte_pi1[action]'
					),
					array(
						'GETvar' => 'tx_standorte_pi1[controller]'
					),
				),

## TypoScript

* Storage Folder anlegen
* In Constants des TS:
	tx_schulungen.persistence.storagePid =
* Im Setup das mitgelieferte TypoScript einbinden
