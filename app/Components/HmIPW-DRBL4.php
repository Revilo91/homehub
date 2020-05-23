<?php

// Validated by Gerti

function HmIPW_DRBL4($component) {

    global $export;
    $obj = $export;
    $channel = intval(substr($component['address'],-1));
    if ($channel <= 4) { $stat_channel = "1"; }
    elseif ($channel <= 8) { $stat_channel = "5"; }
    elseif ($channel <= 12) { $stat_channel = "9"; }
    elseif ($channel <= 16) { $stat_channel = "13"; }
    
    $key = array_search(substr($component['address'], 0, -1).$stat_channel, array_column($obj['channels'], 'address'));
    foreach($obj['channels'][$key]['datapoints'] as $datapoint)
    { $state_component[$datapoint['type']] = $datapoint['ise_id']; }
 
    if ($component['parent_device_interface'] == 'HmIP-RF' && $component['visible'] == 'true' && isset($component['STOP'])) {
        $modalId = mt_rand();
        if (!isset($component['color'])) $component['color'] = '#0033FF';
        return '<div class="hh" style=\'border-left-color: '.$component['color'].'; border-left-style: solid;\'>'
            . '<div data-toggle="collapse" data-target="#' . $modalId . '">'
                . '<div class="pull-left"><img src="../assets/icons/' . $component["icon"] . '" class="icon">' . $component['name'] . '</div>'
            . '</div>'    
            . '<div class="pull-right">' 
                . '<button type="button" class="btn btn-noicon set" data-set-id="' . $component['LEVEL'] . '" data-set-value="1.0">'
                    . '<img src="../assets/icons/control_centr_arrow_up.png" />'
                . '</button>'
                . '<button type="button" class="btn btn-noicon set" data-set-id="' . $component['LEVEL'] . '" data-set-value="0.0">'
                . '<img src="../assets/icons/control_centr_arrow_down.png" />'                
                . '</button>'
                . '&nbsp;&nbsp;&nbsp;'
                . '<button type="button" class="btn btn-noicon set" data-set-id="' . $component['STOP'] . '" data-set-value="1">'  
                    . '<span class="info noicon" data-id="' . $component['LEVEL']. '" data-component="' . $component['component'] . '" data-datapoint="LEVEL"></span>'
                . '</button>' 
            . '</div>'
            . '<div class="clearfix"></div>'
            . '<div class="hh2 collapse" id="' . $modalId . '">'
                . '<div class="row text-center">'
                    . '<div class="btn-group">'
                        . '<button type="button" class="btn btn-primary set" data-set-id="' . $component['LEVEL'] . '" data-set-value="1.0">'
                            . '<img src="../assets/icons/fts_window_2w.png" />'
                        . '</button>'
                        . '<button type="button" class="btn btn-primary set" data-set-id="' . $component['LEVEL'] . '" data-set-value="0.8">'
                            . '<img src="../assets/icons/fts_shutter_20.png" />'
                        . '</button>'
                        . '<button type="button" class="btn btn-primary set" data-set-id="' . $component['LEVEL'] . '" data-set-value="0.6">'
                            . '<img src="../assets/icons/fts_shutter_40.png" />'
                        . '</button>'
                        . '<button type="button" class="btn btn-primary set" data-set-id="' . $component['LEVEL'] . '" data-set-value="0.4">'
                            . '<img src="../assets/icons/fts_shutter_60.png" />'
                        . '</button>'
                        . '<button type="button" class="btn btn-primary set" data-set-id="' . $component['LEVEL'] . '" data-set-value="0.2">'
                            . '<img src="../assets/icons/fts_shutter_80.png" />'
                        . '</button>'
                        . '<button type="button" class="btn btn-primary set" data-set-id="' . $component['LEVEL'] . '" data-set-value="0.0">'
                            . '<img src="../assets/icons/fts_shutter_100.png" />'
                        . '</button>'
                    . '</div>'
                . '</div>'
                . '<div class="row text-center top15">'
                    . '<div class="btn-group">'
                        . '<button type="button" class="btn btn-primary set" data-set-id="' . $component['LEVEL'] . '" data-set-value="1.0">'
                            . '<img src="../assets/icons/control_centr_arrow_up.png" />'
                        . '</button>'
                        . '<button type="button" class="btn btn-primary set" data-set-id="' . $component['STOP'] . '" data-set-value="1">'
                            . '<img src="../assets/icons/message_stop.png" />'
                        . '</button>'
                        . '<button type="button" class="btn btn-primary set" data-set-id="' . $component['LEVEL'] . '" data-set-value="0.0">'
                            . '<img src="../assets/icons/control_centr_arrow_down.png" />'
                        . '</button>'
                    . '</div>'
                . '</div>'
            . '</div>'
        . '</div>';
    }
}
