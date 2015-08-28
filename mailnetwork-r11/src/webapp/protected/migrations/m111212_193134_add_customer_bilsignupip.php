<?php

class m111212_193134_add_customer_bilsignupip extends CDbMigration
{
	public function up()
	{
    $this->addColumn('customer', 'bilsignupip', 'string');
	}

	public function down()
	{
    $this->dropColumn('customer', 'bilsignupip');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}
