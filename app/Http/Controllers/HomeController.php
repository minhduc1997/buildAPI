<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DataResponsitory;
use Illuminate\Http\Response;


class HomeController extends Controller
{
    // public function __construct(DataResponsitory $repository)
    // {
    //     $this->repository = $repository;
    // }

    function index(Request $request){
      
        // $output = View::make('site.contabilidad.adeudosXML')->with(compact('xml_datos', 'total'))->render();

    //   dd(dirname());

$domtree = new \DOMDocument('1.0', 'UTF-8');
$domtree->formatOutput = true;
$xmlRoot = $domtree->createElement("xml");
$xmlRoot = $domtree->appendChild($xmlRoot);
//create and append other elements

//save it to a file using a dialog box
$file_name = "myFile.xml";
header('Content-Disposition: attachment;filename=' . $file_name);
header('Content-Type: text/xml');
ob_clean();
flush();
echo $domtree->saveXML();
exit;


        // $yourFileNameHere = 'amc.xml';
        // $response = Response::create($xmlstr, 200);
        // $response->header('Content-Type', 'text/xml');
        // $response->header('Cache-Control', 'public');
        // $response->header('Content-Description', 'File Transfer');
        // $response->header('Content-Disposition', 'attachment; filename=' . $yourFileNameHere . '');
        // $response->header('Content-Transfer-Encoding', 'binary');
        // return $response;

    }
    function te(){
        $xmlstr = <<<XML
        <?xml version='1.0' standalone='yes'?>
        <movies>
         <movie>
          <title>PHP: Behind the Parser</title>
          <characters>
           <character>
            <name>Ms. Coder</name>
            <actor>Onlivia Actora</actor>
           </character>
           <character>
            <name>Mr. Coder</name>
            <actor>El Act&#211;r</actor>
           </character>
          </characters>
          <plot>
           So, this language. It's like, a programming language. Or is it a
           scripting language? All is revealed in this thrilling horror spoof
           of a documentary.
          </plot>
          <great-lines>
           <line>PHP solves all my web problems</line>
          </great-lines>
          <rating type="thumbs">7</rating>
          <rating type="stars">5</rating>
         </movie>
        </movies>
        XML;
    }
}
