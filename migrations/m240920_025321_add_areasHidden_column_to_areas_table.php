<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%areas}}`.
 */
class m240920_025321_add_areasHidden_column_to_areas_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('areas', 'areasHidden', $this->boolean());
        $this->addColumn('localityes', 'localityesHidden', $this->boolean());
        $this->addColumn('payamounts', 'payamountsHidden', $this->boolean());
        $this->addColumn('privilegies', 'privilegiesHidden', $this->boolean());
        $this->addColumn('solutiontypes', 'solutiontypesHidden', $this->boolean());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('areas', 'areasHidden');
        $this->dropColumn('localityes', 'localityesHidden');
        $this->dropColumn('payamounts', 'payamountsHidden');
        $this->dropColumn('privilegies', 'privilegiesHidden');
        $this->dropColumn('solutiontypes', 'solutiontypesHidden');
    }
}
