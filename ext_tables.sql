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
	extlink tinytext,

	PRIMARY KEY (uid),
	KEY parent (pid)
);

#
# Table structure for table 'tx_standorte_domain_model_bibliothek'
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
	sigel varchar(20) DEFAULT '' NOT NULL,
	titel varchar(255) DEFAULT '' NOT NULL,
	lat double(30,11) DEFAULT '0.00000000000' NOT NULL,
	lon double(30,11) DEFAULT '0.00000000000' NOT NULL,
	bestand tinytext,
	strasse varchar(255) DEFAULT '' NOT NULL,
	adresszusatz varchar(255) DEFAULT '' NOT NULL,
	plz int(11) DEFAULT '0' NOT NULL,
	ort varchar(255) DEFAULT '' NOT NULL,
	ansprechpartner text,
	oeffnungszeiten text,
	zusatzinformationen text,
	bild text,
	fakultaet tinytext,
	katalog tinytext,
	katalogteilweise int(11) DEFAULT '0',
	institutskatalog tinytext,
	extlink tinytext,
	sorttitel varchar(255) DEFAULT '' NOT NULL,

	PRIMARY KEY (uid),
	KEY parent (pid)
);