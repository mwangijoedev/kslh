<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function create(){

        // $response = Http::get('https://jsonplaceholder.typicode.com/users');

        // $response = Http::withUrlParameters([
        //     'endpoint' => 'https://jsonplaceholder.typicode.com',
        //     'search' => 'users',
        //     'id' => '1',
        // ])->dd()->get('{+endpoint}/{search}/{id}');  //you can dd the outgoing request before it is sent and terminate the script


        // dd($response->json());

        //response inspection methods:
    //     $response->body() : string;
    //     $response->json($key = null, $default = null) : mixed;
    //     $response->object() : object;
    //     $response->collect($key = null) : Illuminate\Support\Collection;
    //     $response->status() : int;
    //     $response->successful() : bool;
    //     $response->redirect(): bool;
    //     $response->failed() : bool;
    //     $response->clientError() : bool;
    //     $response->header($header) : string;
    //     $response->headers() : array;



    // $response = Http::get('https://jsonplaceholder.typicode.com/posts');
    
  //   $response = Http::asForm()->post('https://jsonplaceholder.typicode.com/posts', [
  //     'name' => 'Sara',
  //     'role' => 'Privacy Consultant',
  // ]);

  //incase of sending a raw request body use withBody() and specify the content type as the second argument

//   $response = Http::withBody(
//     base64_encode($photo), 'image/jpeg'
// )->post('http://example.com/photo');

//MULTI-PART requests  use attatch($stringname, $fileContents, $fileName=null, $headers): pendingRequest
  // $response = Http::attach(
  //   'attachment', file_get_contents('photo.jpg'), 'photo.jpg', ['Content-Type' => 'image/jpeg']
  // )->post('http://example.com/attachments');

//MULTI-PART requests using a stream resource fopen() and fclose() methods
  /*If you would like to send files as multi-part requests,
    you should call the attach method before making your request. 
    This method accepts the name of the file and its contents.
    If needed, you may provide a third argument which will be considered the file's filename,
    while a fourth argument may be used to provide headers associated with the file:
  */

  // $response = Http::attach(
  //     'attachment', file_get_contents('photo.jpg'), 'photo.jpg', ['Content-Type' => 'image/jpeg']
  // )->post('http://example.com/attachments');
  
  // Instead of passing the raw contents of a file, you may pass a stream resource:
  
  // $photo = fopen('photo.jpg', 'r');  //('r)=> referes to Read-Only mode
  // $response = Http::attach(
  //     'attachment', $photo, 'photo.jpg'
  // )->post('http://example.com/attachments');



    // dd($response->json());

    // $response = Http::get('https://jsonplaceholder.typicode.com/posts/1');

    // dd($response->status());

    // dd('requests');

  //Using withHeaders() method to add headers to the request
        //withHeaders() accepts an associative array 
    /*  Http::withHeaders([
        'foo'=>'bar',
      ])->get(' ')
    */ 

Http::acceptJson()->get('http://jsonplaceholder.typicode.com/albums');

 
}
}
