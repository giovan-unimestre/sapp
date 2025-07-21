<?php

namespace unimestre\sap\helpers;

foreach (glob(__DIR__ . "/*.php") as $i) {
    include_once($i);
}

class LoadHelpers {}