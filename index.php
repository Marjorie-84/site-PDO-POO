<?php

require_once "bin/config.php";
require_once "model/connectDB.php";

// DEFAULT PAGE
if (!isset($_GET['page']) && !isset($_GET['admin'])) {


    include "controller/home.controller.php";

}