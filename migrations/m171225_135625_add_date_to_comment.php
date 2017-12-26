<?php

use yii\db\Migration;

/**
 * Class m171225_135625_add_date_to_comment
 */
class m171225_135625_add_date_to_comment extends Migration
{
    /**
     * @inheritdoc
     */
   /* public function safeUp()
    {

    }*/

    /**
     * @inheritdoc
     */
   /* public function safeDown()
    {
        echo "m171225_135625_add_date_to_comment cannot be reverted.\n";

        return false;
    }*/

    public function up()
    {
        $this->addColumn('comment','date', $this->date());
    }

    public function down()
    {
        $this->dropColumn('comment','date');
    }
    /*
    // Use up()/down() to run migration code without a transaction.


    public function down()
    {
        echo "m171225_135625_add_date_to_comment cannot be reverted.\n";

        return false;
    }
    */
}
