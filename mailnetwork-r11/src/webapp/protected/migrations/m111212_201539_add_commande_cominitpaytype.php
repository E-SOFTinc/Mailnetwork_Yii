<?php

class m111212_201539_add_commande_cominitpaytype extends CDbMigration
{
	public function up()
	{
    $this->addColumn('commande', 'cominitpaytype', 'string');
	}

	public function down()
	{
    $this->dropColumn('commande', 'cominitpaytype');
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
