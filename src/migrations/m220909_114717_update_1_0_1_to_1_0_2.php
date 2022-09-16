<?php

namespace zealousweb\smartgoogleanalytics\migrations;

use Craft;
use craft\db\Migration;

/**
 * m220909_114717_update_1_0_1_to_1_0_2 migration.
 */
class m220909_114717_update_1_0_1_to_1_0_2 extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        Migration::addColumn('{{%google_analytics_view_listing}}','gaReportType','text');
        Migration::alterColumn('{{%google_analytics_view_listing}}','gaPropertyId','string NULL DEFAULT NULL');

        // Place migration code here...
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m220909_114717_update_1_0_1_to_1_0_2 cannot be reverted.\n";
        return false;
    }
}
