<?php
/**
 * @file
 * Provides ExternalModule class for Field Notes Display.
 */

namespace FieldNotesDisplay\ExternalModule;

use ExternalModules\AbstractExternalModule;
use ExternalModules\ExternalModules;

/**
 * ExternalModule class for Field Notes Display.
 */
class ExternalModule extends AbstractExternalModule {

    /**
     * @inheritdoc
     */
    function hook_every_page_top($project_id) {
        if (PAGE == 'Design/online_designer.php' && $project_id) {
            $this->includeJs('js/helper.js');
        }

        if (!in_array(PAGE, array('DataEntry/index.php', 'surveys/index.php', 'Surveys/theme_view.php'))) {
            return;
        }

        if (empty($_GET['id'])) {
            return;
        }

        // Checking additional conditions for survey pages.
        if (PAGE == 'surveys/index.php' && !(isset($_GET['s']) && defined('NOAUTH'))) {
            return;
        }

        global $Proj;
        $settings = array();

        foreach (array_keys($Proj->forms[$_GET['page']]['fields']) as $field_name) {
            $field_info = $Proj->metadata[$field_name];
            if (!$field_notes = $field_info['element_note']) {
                continue;
            }

            if (!$display_mode = \Form::getValueInQuotesActionTag($field_info['misc'], '@FIELD-NOTES-DISPLAY')) {
                continue;
            }

            if (!isset($settings[$display_mode])) {
                $settings[$display_mode] = array();
            }

            $settings[$display_mode][$field_name] = $field_notes;
        }

        if (empty($settings)) {
            return;
        }

        $this->includeJs('js/field_notes_display.js');
        echo '<script>var fieldNotesDisplay = ' . json_encode($settings) . ';</script>';
    }

    /**
     * Includes a local JS file.
     *
     * @param string $path
     *   The relative path to the js file.
     */
    protected function includeJs($path) {
        echo '<script src="' . $this->getUrl($path) . '"></script>';
    }
}
