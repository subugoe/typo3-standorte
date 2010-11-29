#
# Table structure for table 'tx_standorte_fakultaet'
#
CREATE TABLE tx_standorte_domain_model_fakultaet (
    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,
    tstamp int(11) DEFAULT '0' NOT NULL,
    crdate int(11) DEFAULT '0' NOT NULL,
    cruser_id int(11) DEFAULT '0' NOT NULL,
    sys_language_uid int(11) DEFAULT '0' NOT NULL,
    l10n_parent int(11) DEFAULT '0' NOT NULL,
    l10n_diffsource mediumtext,
    deleted tinyint(4) DEFAULT '0' NOT NULL,
    hidden tinyint(4) DEFAULT '0' NOT NULL,
    titel varchar(255) DEFAULT '' NOT NULL,
	bibliothek int(11) DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid)
);




#
# Table structure for table 'tx_standorte_bibliothek_ansprechpartner_mm'
#
#
CREATE TABLE tx_standorte_domain_model_bibliothek_ansprechpartner_mm (
  uid_local int(11) DEFAULT '0' NOT NULL,
  uid_foreign int(11) DEFAULT '0' NOT NULL,
  tablenames varchar(60) DEFAULT '' NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL,
  sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,
  KEY uid_local (uid_local),
  KEY uid_foreign (uid_foreign)
);




#
# Table structure for table 'tx_standorte_bibliothek_fakultaet_mm'
#
#
CREATE TABLE tx_standorte_domain_model_bibliothek_fakultaet_mm (
  uid_local int(11) DEFAULT '0' NOT NULL,
  uid_foreign int(11) DEFAULT '0' NOT NULL,
  tablenames varchar(60) DEFAULT '' NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL,
  sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,
  KEY uid_local (uid_local),
  KEY uid_foreign (uid_foreign)
);



#
# Table structure for table 'tx_standorte_bibliothek'
#
CREATE TABLE tx_standorte_domain_model_bibliothek (
    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,
    tstamp int(11) DEFAULT '0' NOT NULL,
    crdate int(11) DEFAULT '0' NOT NULL,
    cruser_id int(11) DEFAULT '0' NOT NULL,
    sys_language_uid int(11) DEFAULT '0' NOT NULL,
    l10n_parent int(11) DEFAULT '0' NOT NULL,
    l10n_diffsource mediumtext,
    deleted tinyint(4) DEFAULT '0' NOT NULL,
    hidden tinyint(4) DEFAULT '0' NOT NULL,
    sigel varchar(3) DEFAULT '' NOT NULL,
    titel varchar(255) DEFAULT '' NOT NULL,
    lat double(11,2) DEFAULT '0.00' NOT NULL,
    lon double(11,2) DEFAULT '0.00' NOT NULL,
    bestand tinytext,
    strasse varchar(255) DEFAULT '' NOT NULL,
    plz int(11) DEFAULT '0' NOT NULL,
    ort varchar(255) DEFAULT '' NOT NULL,
    ansprechpartner int(11) DEFAULT '0' NOT NULL,
    zusatzinformationen text,
    bild text,
    fakultaet int(11) DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid)
);