<?php

if (!function_exists('setting')) {
    function setting($key, $default = null) {
        // Retrieve the value from the database or cache
        $value = \App\Models\Setting ::where('key', $key)->value('value');
        $longValue = \App\Models\Setting ::where('key', $key)->value('longValue');
        return $value !== null ? $value : ($longValue !== null ? $longValue : $default);
    }
}


