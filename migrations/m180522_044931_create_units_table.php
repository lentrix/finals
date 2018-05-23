<?php

use yii\db\Migration;

/**
 * Handles the creation of table `units`.
 */
class m180522_044931_create_units_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('units', [
            'id' => $this->primaryKey(),
            'make' => $this->string(45)->notNull(),
            'model' => $this->string(45)->notNull(),
            'plate' => $this->string(20)->notNull(),
            'condition' => $this->integer(1)->defaultValue(1),
            'dateAcquired' => $this->date()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('units');
    }
}
