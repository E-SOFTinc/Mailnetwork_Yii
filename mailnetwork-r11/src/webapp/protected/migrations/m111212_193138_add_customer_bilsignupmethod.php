<?php

class m111212_193138_add_customer_bilsignupmethod extends CDbMigration
{
	public function up()
	{
    $this->addColumn('customer', 'bilsignupmethod', 'string');
	}

	public function down()
	{
    $this->dropColumn('customer', 'bilsignupmethod');
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
