#
# Table structure for table 'tx_ajadocompanies_location'
#
CREATE TABLE tx_ajadocompanies_location (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	name tinytext,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
) ENGINE=InnoDB;



#
# Table structure for table 'tx_ajadocompanies_industry'
#
CREATE TABLE tx_ajadocompanies_industry (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	name tinytext,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
) ENGINE=InnoDB;



#
# Table structure for table 'tx_ajadocompanies_company'
#
CREATE TABLE tx_ajadocompanies_company (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	starttime int(11) DEFAULT '0' NOT NULL,
	endtime int(11) DEFAULT '0' NOT NULL,
	title tinytext,
	subtitle tinytext,
	address1 tinytext,
	address2 tinytext,
	zip tinytext,
	city tinytext,
	telephone tinytext,
	mobile tinytext,
	fax tinytext,
	email tinytext,
	state tinytext,
	country tinytext,
	url tinytext,
	location text,
	industry text,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
) ENGINE=InnoDB;