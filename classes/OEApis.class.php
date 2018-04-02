<?php

include_once 'LineChart.class.php';
include_once 'BarChart.class.php';
include_once 'PieChart.class.php';
include_once 'DonutChart.class.php';


class OEApis {

    private $apis = array();

    private $filters = array();

    public function __construct() {

    }

    public function dispatch() {
        try {
            $uri = $_SERVER['REQUEST_URI'];
            $user_agent = $_SERVER['HTTP_USER_AGENT'];
            $request_method = $_SERVER['REQUEST_METHOD'];
            $chartType = $_GET['chartType'];
            $selectionType = $_GET['selectionType'];
           // error_log(print_r($chartType), true);
            //error_log(print_r($selectionType), true);
            // Call the corresponding handlers
            $chartTypes = array();
            $chartTypes['chartType'] = $chartType;
            $classObj = new  $chartTypes['chartType']();
            $classObj->handle();
            break;  
        } catch(Exception $e) {

        }
    }
}
