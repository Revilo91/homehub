<?php

// HM-Sec-RHS|Fenster Praxis:0|BidCos-RF||0|VISIBLE=|OPERATE=|UNREACH=14439|STICKY_UNREACH=14435|CONFIG_PENDING=14425|LOWBAT=14429|RSSI_DEVICE=14433|RSSI_PEER=14434|
// HM-Sec-RHS|Fenster Praxis|BidCos-RF||1|VISIBLE=true|OPERATE=true|STATE=14467|ERROR=14444|LOWBAT=17872|

function HM_Sec_RHS($component) {
    if ($component['parent_device_interface'] == 'BidCos-RF' && $component['visible'] == 'true' && isset($component['STATE'])) {
        if (!isset($component['color'])) $component['color'] = '#595959';
        if (!isset($component['icon_type'])) $component['icon_type'] = 'Window';
        return '<div class="hh" style=\'border-left-color: '.$component['color'].'; border-left-style: solid;\'>'
            . '<div class="pull-left"><img src="../assets/icons/' . $component["icon"] . '" class="icon">' . $component['name'] . '</div>'
            . '<div class="pull-right">'
                . '<span class="info" data-id="' . $component['LOWBAT'] . '" data-component="' . $component['component'] . '" data-datapoint="LOWBAT"></span>'
                . '<span class="info" data-id="' . $component['STATE'] . '" data-component="' . $component['component'] . '" data-datapoint="STATE" data-icon="'. $component['icon_type'] .'"></span>'
            . '</div>'
            . '<div class="clearfix"></div>'
        . '</div>';
    }
}
