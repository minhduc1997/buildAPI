<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DataResponsitory;
use Illuminate\Http\Response;
use App\Events\PodcastProcessed;
use App\Events\MessageSentEvent;

// use Barryvdh\Debugbar\Facade;


class HomeController extends Controller
{
    // public function __construct(DataResponsitory $repository)
    // {
    //     $this->repository = $repository;
    // }

    function index(Request $request)
    {
        $variable = 'ádasd';
        Facade::info($variable);
        dd(Facade);

        // // $output = View::make('site.contabilidad.adeudosXML')->with(compact('xml_datos', 'total'))->render();

        // //   dd(dirname());

        // $domtree = new \DOMDocument('1.0', 'UTF-8');
        // $domtree->formatOutput = true;
        // $xmlRoot = $domtree->createElement("xml");
        // $xmlRoot = $domtree->appendChild($xmlRoot);
        // //create and append other elements

        // //save it to a file using a dialog box
        // $file_name = "myFile.xml";
        // header('Content-Disposition: attachment;filename=' . $file_name);
        // header('Content-Type: text/xml');
        // ob_clean();
        // flush();
        // echo $domtree->saveXML();
        // exit;


        // $yourFileNameHere = 'amc.xml';
        // $response = Response::create($xmlstr, 200);
        // $response->header('Content-Type', 'text/xml');
        // $response->header('Cache-Control', 'public');
        // $response->header('Content-Description', 'File Transfer');
        // $response->header('Content-Disposition', 'attachment; filename=' . $yourFileNameHere . '');
        // $response->header('Content-Transfer-Encoding', 'binary');
        // return $response;

    }
    function event()
    {
        $order = 'string';
        $hello = '';
        $hello1 = '';
        event(new MessageSentEvent($order));
    }
    function notification()
    {
        return view('welcome');
    }
}
