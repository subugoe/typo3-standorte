# STANDORTE (Locations)

This Extension – based on Extbase and Fluid  – shows all libraries and faculties in the current Installation.
First it shows a list of faculties and after clicking one you can find all Libraries belonging to this particular faculty. Each library provides many Fields and it's possible to enter the opening hours. Based on that this extension is able to determine whether the library ist currently closed or opened.

## Installation

Just install the extension with the extension manager and insert a general plugin on the page. Now choose “SUB Standorte” from the plugin tab – delete the cache and you are ready for the next step.
In your main template you have to add static TypoScript from this Extension.
After this you need to create or define a storage folder within your installation where all records are being stored.
This is simply done via TypoScript, ie:
`plugin.tx_standorte.persistence.storagePid = 1190`
`tx_standorte.persistence.storagePid = 1190​`

In the example above our storage folder has the PID 1190.
Be aware that some PHP Accelerators strip comments from your PHP Code – for Extbase Extensions you do need comments to validate fields. Please ensure that this option is switched off in your PHP configuration or override it in .htacces with ie.:
`php_flag eaccelerator.enable off`
`php_flag eaccelerator.optimizer off`

## RealURL Configuration

The RealURL configuration should look like

```php
'fakultaet' => [
    [
        'GETvar' => 'tx_standorte_pi1[fakultaetUid]',
        'lookUpTable' => [
            'table' => 'tx_standorte_domain_model_fakultaet',
            'id_field' => 'uid',
            'alias_field' => 'titel',
            'maxLength' => 50,
            'addWhereClause' => 'AND NOT deleted',
            'useUniqueCache' => 1,
            'useUniqueCache_conf' => [
                'strtolower' => 1,
                'spaceCharacter' => '_',
            ],
        ],
    ],
    [
        'GETvar' => 'tx_standorte_pi1[action]'
    ],
    [
        'GETvar' => 'tx_standorte_pi1[controller]'
    ],
],
```
