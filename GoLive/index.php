<?php
define("ROOT", dirname(realpath(__FILE__))."/");

include_once "lib/core.php";
$template = new TemplateController();
$template -> Rendertemplate();

