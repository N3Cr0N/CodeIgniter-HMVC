<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * CodeIgniter-HMVC
 *
 * @package    CodeIgniter-HMVC
 * @author     N3Cr0N (N3Cr0N@list.ru)
 * @copyright  2019 N3Cr0N
 * @license    https://opensource.org/licenses/MIT  MIT License
 * @link       <URI> (description)
 * @version    GIT: $Id$
 * @since      Version 0.0.1
 * @filesource
 * @todo       (description)
 *
 */

class FrontendController extends MY_Controller
{
    //
    public $CI;

    /**
     * An array of variables to be passed through to the
     * view, layout
     */
    protected $data = array();

    /**
     * [__construct description]
     *
     * @method __construct
     */
    public function __construct()
    {
        //
        parent::__construct();

        // CI Profiler for debugging
        $this->output->enable_profiler(true);

        // This function returns the main Code Igniter object.
        // Normally, to call any of the available Code Igniter object or pre defined library classes then you need to declar.
        $CI =& get_instance();

        // Example data
        // Site name
        $this->data['sitename'] = 'CodeIgniter-HMVC';

        // Example data
        // Browser tab
        $this->data['site_title'] = ucfirst('Frontend');
    }
}
