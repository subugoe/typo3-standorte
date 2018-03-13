#
# Table structure for table 'tx_standorte_fakultaet'
#
CREATE TABLE tx_standorte_domain_model_fakultaet (
  uid              INT(11)                 NOT NULL AUTO_INCREMENT,
  pid              INT(11) DEFAULT '0'     NOT NULL,
  tstamp           INT(11) DEFAULT '0'     NOT NULL,
  crdate           INT(11) DEFAULT '0'     NOT NULL,
  cruser_id        INT(11) DEFAULT '0'     NOT NULL,
  sys_language_uid INT(11) DEFAULT '0'     NOT NULL,
  l10n_parent      INT(11) DEFAULT '0'     NOT NULL,
  l10n_diffsource  MEDIUMTEXT,
  t3ver_oid        INT(11) DEFAULT '0'     NOT NULL,
  t3ver_id         INT(11) DEFAULT '0'     NOT NULL,
  t3ver_wsid       INT(11) DEFAULT '0'     NOT NULL,
  t3ver_label      VARCHAR(30) DEFAULT ''  NOT NULL,
  t3ver_state      TINYINT(4) DEFAULT '0'  NOT NULL,
  t3ver_stage      TINYINT(4) DEFAULT '0'  NOT NULL,
  t3ver_count      INT(11) DEFAULT '0'     NOT NULL,
  t3ver_tstamp     INT(11) DEFAULT '0'     NOT NULL,
  t3_origuid       INT(11) DEFAULT '0'     NOT NULL,
  deleted          TINYINT(4) DEFAULT '0'  NOT NULL,
  hidden           TINYINT(4) DEFAULT '0'  NOT NULL,
  titel            VARCHAR(255) DEFAULT '' NOT NULL,
  extlink          TINYTEXT,

  PRIMARY KEY (uid),
  KEY parent (pid)
);

#
# Table structure for table 'tx_standorte_domain_model_bibliothek'
#
CREATE TABLE tx_standorte_domain_model_bibliothek (
  uid                 INT(11)                                NOT NULL AUTO_INCREMENT,
  pid                 INT(11) DEFAULT '0'                    NOT NULL,
  tstamp              INT(11) DEFAULT '0'                    NOT NULL,
  crdate              INT(11) DEFAULT '0'                    NOT NULL,
  cruser_id           INT(11) DEFAULT '0'                    NOT NULL,
  sys_language_uid    INT(11) DEFAULT '0'                    NOT NULL,
  l10n_parent         INT(11) DEFAULT '0'                    NOT NULL,
  l10n_diffsource     MEDIUMTEXT,
  t3ver_oid           INT(11) DEFAULT '0'                    NOT NULL,
  t3ver_id            INT(11) DEFAULT '0'                    NOT NULL,
  t3ver_wsid          INT(11) DEFAULT '0'                    NOT NULL,
  t3ver_label         VARCHAR(30) DEFAULT ''                 NOT NULL,
  t3ver_state         TINYINT(4) DEFAULT '0'                 NOT NULL,
  t3ver_stage         TINYINT(4) DEFAULT '0'                 NOT NULL,
  t3ver_count         INT(11) DEFAULT '0'                    NOT NULL,
  t3ver_tstamp        INT(11) DEFAULT '0'                    NOT NULL,
  t3_origuid          INT(11) DEFAULT '0'                    NOT NULL,
  deleted             TINYINT(4) DEFAULT '0'                 NOT NULL,
  hidden              TINYINT(4) DEFAULT '0'                 NOT NULL,
  sigel               VARCHAR(20) DEFAULT ''                 NOT NULL,
  titel               VARCHAR(255) DEFAULT ''                NOT NULL,
  lat                 DOUBLE(30, 11) DEFAULT '0.00000000000' NOT NULL,
  lon                 DOUBLE(30, 11) DEFAULT '0.00000000000' NOT NULL,
  bestand             TINYTEXT,
  strasse             VARCHAR(255) DEFAULT ''                NOT NULL,
  adresszusatz        VARCHAR(255) DEFAULT ''                NOT NULL,
  plz                 INT(11) DEFAULT '0'                    NOT NULL,
  ort                 VARCHAR(255) DEFAULT ''                NOT NULL,
  ansprechpartner     TEXT,
  oeffnungszeiten     TEXT,
  zusatzinformationen TEXT,
  bild                TEXT,
  fakultaet           TINYTEXT,
  katalog             TINYTEXT,
  katalogteilweise    INT(11)                                         DEFAULT '0',
  institutskatalog    TINYTEXT,
  extlink             TINYTEXT,
  piz_nr              INT(11) DEFAULT '0'                    NOT NULL,

  PRIMARY KEY (uid),
  KEY parent (pid)
);
