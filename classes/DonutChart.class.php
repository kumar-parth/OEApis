<?php
include_once '../conn.php';

class DonutChart  {
    public function __construct() {

    }
    public $arr;
    public function handle() {
        $connection = new Conn();
        $sql = "SELECT count(APP_NUMBER) as countofcases, app_cache_view.USR_UID as userId, users.USR_USERNAME as userName FROM `app_cache_view`, `users` where app_cache_view.USR_UID = users.USR_UID group by app_cache_view.USR_UID";
        $result = $connection->conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            $arr = array();
            $i=0;
            while($row = $result->fetch_assoc()) {
                $arr[$i]['userId'] = $row['userId'];
                $arr[$i]['countofcases'] = $row['countofcases'];
                $arr[$i]['userName'] = $row['userName'];
                $i++;
            }
        } else {
            echo "0 results";
        }
        $chartType = array();
        $chartType['chartname'] = 'DonutChart';
        $chartDetail = array();
        $chartDetail['chartDetail'] = $arr;
        $barChartArr = array_merge($chartType, $chartDetail);
        echo json_encode($barChartArr, true);exit;
        $connection->conn->close();
    }
}