<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;




/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * Constructor.
     */
    protected $test; // Bad Name - What are we "Finding"?

    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
    }


    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
    }

    public function getData($tbl, $row = '*', $arrWhere = array(), $limit = '', $arrJoin = array(), $orderBy = '')
    {
        $db = model('App\Models\Base_model', false);
        return $db->getData($tbl, $row, $arrWhere, $limit, $arrJoin, $orderBy);
    }

    public function insert($tbl, $arrData)
    {
        $db = model('App\Models\Base_model', false);
        return $db->insertData($tbl, $arrData);
    }
    public function delete($tbl, $arrWhere)
    {
        $db = model('App\Models\Base_model', false);
        return $db->deleteData($tbl, $arrWhere);
    }
    public function update($tbl, $arrData, $arrWhere)
    {
        $db = model('App\Models\Base_model', false);
        return $db->updateData($tbl, $arrData, $arrWhere);
    }
    public function set($tbl, $arrData, $arrWhere)
    {
        $db = model('App\Models\Base_model', false);
        return $db->setData($tbl, $arrData, $arrWhere);
    }

    //function 
    public function encrypter($string)
    {
        $encrypter = \Config\Services::encrypter();
        return $encrypter->encrypt($string);
    }
}
