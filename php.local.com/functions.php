<?php
function checkInputBox($inputName, $inputValue) {
    if(isset($_REQUEST[$inputName]) && is_array($_REQUEST[$inputName]) && in_array($inputValue, $_POST[$inputName])) {
        echo 'checked';
    }
}

function showLang($languages, $selected_language) {
    $selected = '';
    foreach($languages as $lang) {
        if(in_array($lang, $selected_language)) {
            $selected = 'selected';
        } else {
            $selected = '';
        }
        printf('<option value="%s" %s>%s</option>', strtolower($lang),$selected, ucwords($lang));
    }
}