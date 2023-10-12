<?php

require_once('../../../vendor/autoload.php');

use Symfony\Component\Yaml\Yaml;

function readTemplate() {
    $template = './template.yml';

    if (file_exists($template )) {
        $parsedTemplate = Yaml::parse($template);
    }
}

readTemplate();
