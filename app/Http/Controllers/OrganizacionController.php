<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrganizacionController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function consulta(Request $request)
  {
      //dump($request->organizacion);

      $user = 'alepandis';
      $pwd = '-ciencias01';

      $url = $request->organizacion;
      $cInit = curl_init();
      curl_setopt($cInit, CURLOPT_URL, $url);
      curl_setopt($cInit, CURLOPT_RETURNTRANSFER, 1); // 1 = TRUE
      curl_setopt($cInit, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
      curl_setopt($cInit, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
      curl_setopt($cInit, CURLOPT_USERPWD, $user . ':' . $pwd);

      $output = curl_exec($cInit);

      $info = curl_getinfo($cInit, CURLINFO_HTTP_CODE);
      $result = json_decode($output);

      curl_close($cInit);

      $organizacion = DB::table('organizaciones')->insert([
          'organizacion' => $request->organizacion,
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' =>date('Y-m-d H:i:s')
        ]);

      foreach ($result as $resultado) {
        $repositorio = DB::table('repositorios')->insert([
            'nombre' => $resultado->name,
            'id_organizacion' => '1',
            'fecha_commit' => date('Y-m-d H:i:s'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' =>date('Y-m-d H:i:s')
          ]);
      }

      return view('repositorios', compact('result', 'url'));
  }
}
