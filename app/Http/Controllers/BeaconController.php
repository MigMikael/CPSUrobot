<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeaconController extends Controller
{
    public function handle($id)
    {
        $base_path = 'C:\\Users\\Mig\\Desktop\\';
        $file_path = $base_path . 'beacon.txt';

        $beacon_id = $id;
        //$beacon_id = 34;

        $theFile = fopen($file_path, "w") or die("Unable to open file!");
        fwrite($theFile, $beacon_id);
        fclose($theFile);

        return response()->json(['msg' => 'success']);
    }

    public function testPath()
    {
        $dir = dirname(__FILE__);
        return $dir;
    }
}
