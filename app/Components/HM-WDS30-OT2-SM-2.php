<?php
function HM_WDS30_OT2_SM_2($component) {
    if ($component['parent_device_interface'] == 'BidCos-RF' && $component['visible'] == 'true' && isset($component['TEMPERATURE'])) {
        if (!isset($component['color'])) $component['color'] = '#00CC33';
        return '<div class="hh" style=\'border-left-color: '.$component['color'].'; border-left-style: solid;\'>'
            . '<div class="pull-left"><img src="../assets/icons/' . $component["icon"] . '" class="icon">' . $component['name'] . '</div>'
            . '<div class="pull-right">'
                . '<span class="info" data-id="' . $component['LOWBAT'] . '" data-component="' . $component['component'] . '" data-datapoint="LOWBAT"></span>'
                . '<span class="info" data-id="' . $component['TEMPERATURE'] . '" data-component="' . $component['component'] . '" data-datapoint="TEMPERATURE"></span>'
            . '</div>'
            . '<div class="clearfix"></div>'
        . '</div>';
    }
}
