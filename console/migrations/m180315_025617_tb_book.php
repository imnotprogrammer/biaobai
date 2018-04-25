<?php

use yii\db\Migration;

/**
 * Class m180315_025617_tb_book
 */
class m180315_025617_tb_book extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
		$this->createTable('tb_book', [
            'id' => $this->primaryKey(),
            'content' => $this->string(300),
            'create_time' => $this->dateTime(300),
            
        ]);
		$this->addColumn('{{tb_book}}', 'auditor', 'INT(10) NOT NULL COMMENT "审核人" AFTER 'user_id', CHANGE COLUMN `status` `status` tinyint(4) NOT NULL COMMENT "绑定状态，0：解绑 1：绑定" AFTER 'auditor'');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180315_025617_tb_book cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
		$this->addColumn('{{tb_book}}', 'auditor', 'INT(10) NOT NULL COMMENT "审核人" AFTER 'user_id', CHANGE COLUMN `status` `status` tinyint(4) NOT NULL COMMENT "绑定状态，0：解绑 1：绑定" AFTER 'auditor'');
    }

    public function down()
    {
        echo "m180315_025617_tb_book cannot be reverted.\n";

        return false;
    }

}
