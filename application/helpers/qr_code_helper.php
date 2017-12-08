<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('generate_qrc')) {
    function generate_qrc($url, $fileName){
        $CI =& get_instance();
        $CI->load->library('ciqrcode');
        $params['data'] = $url;
        $params['level'] = 'H';
        $params['size'] = 10;
        $params['savename'] = FCPATH.'/assets/uploads/qr_codes/'.$fileName.'.png';
        $CI->ciqrcode->generate($params);
    }
}

/* End of file tools_helper.php */
/* Location: ./application/helpers/tools_helper.php */
