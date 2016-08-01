<?php
/**
 * @package Instinctools_Lead_Statistics
 * @version 1.0
 */
/*
Plugin Name: Instinctools Lead Statistics
Plugin URI: http://instinctools.eu
Author: Pavel Ageichyk
Version: 1.0
Author URI: http://siteg.by/
*/

/**
 * ILS(Instinctools lead statistics) as identificator
 */

const ILS_ROUTE_BY_DAY = 'by_day';

function curlSendToZoho($xml)
{
    $url = "https://crm.zoho.com/crm/private/xml/Notes/insertRecords";
    $query = "newFormat=1&authtoken=37512ead35195b71191864cc981aa63b&scope=crmapi&xmlData={$xml}";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}


function curlSendToZohoUpdateLeadReadEmail($xml, $id)
{
    $url = "https://crm.zoho.com/crm/private/xml/Leads/updateRecords";
    $query = "newFormat=1&authtoken=37512ead35195b71191864cc981aa63b&scope=crmapi&id={$id}&xmlData={$xml}";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}


function curlGetUserInfoFromZoho($id)
{

    $info = array();
    $url = "https://crm.zoho.com/crm/private/xml/Leads/getRecordById";
    $query = "authtoken=889c54f5db2c4702d443557ea228d53f&scope=crmapi&id={$id}";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
    $response = curl_exec($ch);
    $simpleXml = simplexml_load_string($response);

    foreach (@$simpleXml->result->Leads->row->FL as $row) {

        foreach ($row->attributes() as $attribute) {
            if ($attribute == 'Company') {
                $info['company'] = (string)$row;
            } else if ($attribute == 'First Name') {
                $info['firstName'] = (string)$row;
            } else if ($attribute == 'Last Name') {
                $info['lastName'] = (string)$row;
            } else if ('Email' == $attribute) {
                $info['email'] = (string)$row;
            }
        }
    }

    curl_close($ch);
    return $info;
}

function instinctools_lead_statistics_get_user_info_by_zoho_id($zoho_id)
{
    global $wpdb;
    $result = array();
    $full_info = $wpdb->get_results("SELECT * FROM wp_instinctools_lead_statistics_full_info WHERE zoho_id = '{$zoho_id}'", ARRAY_A);
    if ($wpdb->num_rows === 1) {
        $result = $full_info[0];
    } else {
        $full_info = curlGetUserInfoFromZoho($zoho_id);
        $result = array(
            'zoho_id' => $zoho_id,
            'full_name' => $full_info['lastName'] . ' ' . $full_info['firstName'],
            'company' => $full_info['company']
        );
        $wpdb->insert(
            'wp_instinctools_lead_statistics_full_info',
            $result,
            array('%s', '%s', '%s')
        );
    }

    return $result;
}

function curlGetContactInfoFromZoho($id)
{

    $info = array();
    $url = "https://crm.zoho.com/crm/private/xml/Contacts/getRecordById";
    $query = "authtoken=889c54f5db2c4702d443557ea228d53f&scope=crmapi&id={$id}";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
    $response = curl_exec($ch);
    $simpleXml = simplexml_load_string($response);

    foreach (@$simpleXml->result->Contacts->row->FL as $row) {

        foreach ($row->attributes() as $attribute) {
            if ($attribute == 'Company') {
                $info['company'] = (string)$row;
            } else if ($attribute == 'First Name') {
                $info['firstName'] = (string)$row;
            } else if ($attribute == 'Last Name') {
                $info['lastName'] = (string)$row;
            } else if ('Email' == $attribute) {
                $info['email'] = (string)$row;
            }
        }
    }

    curl_close($ch);
    return $info;
}

function checkInstinctoolsIp($checkIp)
{
    $ips = array(
        '82.209.219.185',
        '178.168.144.17',
        '86.57.162.48',
        '86.57.162.49',
        '62.116.172.80',
        '62.116.172.81',
        '62.116.172.82',
        '62.116.172.83',
    );
    foreach ($ips as $ip) {
        if ($checkIp == $ip) {
            return true;
        }
    }
    return false;
}

function zohoTrackerByCookie()
{
    $link = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    if (isset($_COOKIE['zohoId'])) {

        $zohoId = $_COOKIE['zohoId'];

        $xml = '<?xml version="1.0" encoding="UTF-8"?>
		<Notes>
		    <row no="1">
			<FL val="entityId">' . $zohoId . '</FL>
			<FL val="Note Title"> </FL>
			<FL val="Note Content">User returned a second time. Link: ' . $link . ' </FL>
		    </row>
		</Notes>';

        curlSendToZoho($xml);

    } else if (isset($_COOKIE['zohoContactId'])) {

        $zohoId = $_COOKIE['zohoContactId'];
        $xml = '<?xml version="1.0" encoding="UTF-8"?>
		<Notes>
		    <row no="1">
			<FL val="entityId">' . $zohoId . '</FL>
			<FL val="Note Title"> </FL>
			<FL val="Note Content">Contact returned a second time. Link: ' . $link . ' </FL>
		    </row>
		</Notes>';
        curlSendToZoho($xml);
    }
}

function zohoTracker()
{
    if (isset($_GET['linzok']) || isset($_GET['imzog'])) {

        $zohoId = ($_GET['linzok']) ? $_GET['linzok'] : $_GET['imzog'];
        $userInfo = curlGetUserInfoFromZoho($zohoId);

        if (!empty($userInfo)) {
            setcookie("zohoId", $zohoId, mktime(0, 0, 0, 12, 31, 2022));
            setcookie("zohoCompany", $userInfo['company'], mktime(0, 0, 0, 12, 31, 2022));
            setcookie("zohoFirstName", $userInfo['firstName'], mktime(0, 0, 0, 12, 31, 2022));
            setcookie("zohoLastName", $userInfo['lastName'], mktime(0, 0, 0, 12, 31, 2022));
            setcookie("zohoEmail", $userInfo['email'], mktime(0, 0, 0, 12, 31, 2022));
        }

        if (!empty($userInfo)) {
        global $wpdb;
        $wpdb->insert(
            'wp_instinctools_lead_statistics',
            array('zoho_id' => $zohoId, 'time' => time()),
            array('%s', '%d')
        );
        }

        $xmlOpen = '<?xml version="1.0" encoding="UTF-8"?>
		<Notes>
		    <row no="1">
			<FL val="entityId">' . $zohoId . '</FL>
			<FL val="Note Title"> </FL>
			<FL val="Note Content">Email has been opened</FL>
			<FL val="Read Our Mail">1</FL>
		    </row>
		</Notes>
		';

        $xmlUpdateLead = '<?xml version="1.0" encoding="UTF-8"?>
		<Leads>
		    <row no="1">
			<FL val="Read Our Mail">true</FL>
		    </row>
		</Leads>
		';


        if (isset($_GET['imzog']) && $_GET['imzog']) {
            curlSendToZoho($xmlOpen);
            curlSendToZohoUpdateLeadReadEmail($xmlUpdateLead, $zohoId);

            header("Content-type: image/png");
            echo file_get_contents(__DIR__ . "/instinctools-logo.png");
            die();
        }

    } else {

        zohoTrackerByCookie();

    }

}


function zohoContactTracker()
{
    if ($_GET['contakzot']) {

        $id = $_GET['contakzot'];
        $contactInfo = curlGetContactInfoFromZoho($id);
        $link = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $xmlClick = '<?xml version="1.0" encoding="UTF-8"?>
		<Notes>
		    <row no="1">
			<FL val="entityId">' . $id . '</FL>
			<FL val="Note Title"> </FL>
			<FL val="Note Content">Contact - Link has been clicked. Link: ' . $link . '</FL>
		    </row>
		</Notes>
		';

        curlSendToZoho($xmlClick);

        if (!empty($contactInfo)) {
            setcookie("zohoContactId", $id, mktime(0, 0, 0, 12, 31, 2022), '/');
            setcookie("zohoCompany", $contactInfo['company'], mktime(0, 0, 0, 12, 31, 2022), '/');
            setcookie("zohoFirstName", $contactInfo['firstName'], mktime(0, 0, 0, 12, 31, 2022), '/');
            setcookie("zohoLastName", $contactInfo['lastName'], mktime(0, 0, 0, 12, 31, 2022), '/');
            setcookie("zohoEmail", $contactInfo['email'], mktime(0, 0, 0, 12, 31, 2022), '/');
        }

    }
}

add_action('init', 'zoho_tracker_execute');

function zoho_tracker_execute()
{
    zohoTracker();
    zohoContactTracker();
}

function wp_corenavi($max)
{
    global $wp_query;

    $pages = '';
    $current = (isset($_GET['paged']) && (int)$_GET['paged']) ? (int)$_GET['paged'] : 1;
    $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
    $a['total'] = $max;
    $a['current'] = $current;

    $total = 1;
    $a['mid_size'] = 5;
    $a['end_size'] = 1;
    $a['prev_text'] = '«';
    $a['next_text'] = '»';

    if ($max > 1) echo '<div class="navigation">';
    if ($total == 1 && $max > 1) $pages = '<span class="pages">Страница ' . $current . ' из ' . $max . '</span>' . "\r\n <br>";
    echo $pages . paginate_links($a);
    if ($max > 1) echo '</div>';
}

function instinctools_lead_statistics_menu()
{
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <?php

    $route = $_GET['route'];

    if (!$route) {
        instinctools_lead_statistics_default_route();
    } else if ($route === ILS_ROUTE_BY_DAY) {
        instinctools_lead_statistics_by_day_route();
    };


}

function instinctools_lead_statistics_default_route()
{
    global $wpdb;
    $statistics = $wpdb->get_results("SELECT * FROM wp_instinctools_lead_statistics ORDER BY id DESC", ARRAY_A);
    $current_page = (isset($_GET['paged']) && (int)$_GET['paged']) ? (int)$_GET['paged'] : 1;
    $count_on_page = 15;

    $tmp = array();
    foreach ($statistics as $item) {
        $key = date('d-m-Y', (int)$item['time']);
        if (isset($tmp[$key])) {
            $tmp[$key]['count']++;
        } else {
            $tmp[$key]['count'] = 1;
            $tmp[$key]['day'] = $key;
        }
    }
    $statistics = $tmp;
    unset($tmp);

    $count_elements = count($statistics);
    $max_page = ceil($count_elements / $count_on_page);
    $statistics = array_values($statistics);
    $statistics_current_page = array();
    $finish = $current_page * $count_on_page;
    $start = $finish - $count_on_page;
    for ($i = $start; $i < $finish; $i++) {
        if ($statistics[$i]) {
            $statistics_current_page[] = $statistics[$i];
        }
    }

    ?>

    <h3>Статистика открытий писем лидами</h3>

    <table class="table">
        <thead>
        <tr>
            <th>Дата</th>
            <th>Количество</th>
        </tr>
        </thead>
        <tbody>

        <?php if ($statistics_current_page): ?>
            <?php foreach ($statistics_current_page as $item): ?>
                <tr>
                    <td>
                        <a href="<?php echo $_SERVER["REQUEST_URI"] . '&route=' . ILS_ROUTE_BY_DAY . '&selected_day=' . $item['day'] ; ?>">
                            <?php echo $item['day'] ?>
                        </a>
                    </td>
                    <td><?php echo $item['count'] ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td>Еще ничего не зафиксировано</td>
                <td></td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
    <?php
    wp_corenavi($max_page);
}

function instinctools_lead_statistics_by_day_route() {
    global $wpdb;
    $day = addslashes($_GET['selected_day']);
    $start_day = strtotime($day);
    $finish_day = $start_day + 86400;
    $statistics_by_day = $wpdb->get_results("SELECT * FROM wp_instinctools_lead_statistics WHERE time > $start_day AND time <= $finish_day ORDER BY id DESC", ARRAY_A);
    ?>
    <br>
    <ul class="breadcrumb">
        <li><a href="/wp-admin/admin.php?page=instinctools-lead-statistics.php">Statistics Lead`s</a></li>
        <li class="active">By day: <?php echo $day; ?> </li>
    </ul>
    <h3>Подробная статистика за: <?php echo $day; ?></h3>

    <table class="table">
        <thead>
        <tr>
            <th>Имя</th>
            <th>Компания</th>
            <th>Время</th>
        </tr>
        </thead>
        <tbody>

        <?php if ($statistics_by_day): ?>
            <?php foreach ($statistics_by_day as $item): ?>
                <?php $item_full_info = instinctools_lead_statistics_get_user_info_by_zoho_id($item['zoho_id']); ?>
                <tr>
                    <td>
                        <?php echo $item_full_info['full_name'] ?>
                    </td>
                    <td>
                        <?php echo $item_full_info['company']; ?>
                    </td>
                    <td>
                        <?php echo date("G:i:s", $item['time']); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td>Еще ничего не зафиксировано</td>
                <td></td>
                <td></td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
<?php

}


function instinctools_lead_statistics_menu_page()
{
    add_menu_page('Statistics Lead`s', 'Statistics Lead`s', 8, basename(__FILE__), 'instinctools_lead_statistics_menu');
}

add_action('admin_menu', 'instinctools_lead_statistics_menu_page');


?>