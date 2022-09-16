<?php

namespace zealousweb\smartgoogleanalytics\migrations;

use Craft;
use craft\db\Migration;

/**
 * m220916_122026_changed_column_type migration.
 */
class m220916_122026_changed_column_type extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        Migration::alterColumn('{{%google_analytics_view_listing}}','gaPropertyId','string NULL DEFAULT NULL');
        // Place migration code here...
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m220916_122026_changed_column_type cannot be reverted.\n";
        return false;
    }
}
