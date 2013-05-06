<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */
// ------------------------------------------------------------------------

/**
 * CodeIgniter MY_HTML Helpers
 *
 * @package		CodeIgniter
 * @subpackage          Helpers
 * @category            Helpers
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/helpers/MY_html_helper.html
 */
// ------------------------------------------------------------------------


/**
 * script
 *
 * Generates script to a JS file
 *
 * @access	public
 * @param	mixed	stylesheet hrefs or an array
 * @param	string	rel
 * @param	string	type
 * @param	string	title
 * @param	string	media
 * @param	boolean	should index_page be added to the css path
 * @return	string
 */
if (!function_exists('script_tag')) {

    function script_tag($src = '', $type = 'text/javascript', $index_page = FALSE) {
        $CI = & get_instance();

        $script = '<script ';

        if (is_array($src)) {
            foreach ($src as $k => $v) {
                if ($k == 'src' AND strpos($v, '://') === FALSE) {
                    if ($index_page === TRUE) {
                        $script .= 'src="' . $CI->config->site_url($v) . '" ';
                    } else {
                        $script .= 'src="' . $CI->config->slash_item('base_url') . $v . '" ';
                    }
                } else {
                    $script .= "$k=\"$v\" ";
                }
            }

            $script .= '></script>';
        } else {
            if (strpos($src, '://') !== FALSE) {
                $script .= 'src="' . $src . '" ';
            } elseif ($index_page === TRUE) {
                $script .= 'src="' . $CI->config->site_url($src) . '" ';
            } else {
                $script .= 'src="' . $CI->config->slash_item('base_url') . $src . '" ';
            }

            $script .= 'type="' . $type . '" ';

            $script .= '></script>';
        }


        return $script;
    }

}




/* End of file html_helper.php */
/* Location: ./system/helpers/html_helper.php */