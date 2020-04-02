<?php

namespace App\Http\Controllers;

use \Mail;
use Illuminate\Http\Request;
use Aws\S3\S3Client;
use Aws\Credentials\Credentials;
use Aws\Credentials\CredentialProvider;

class AjaxController extends Controller
{
    public function feedback(Request $request) {
        $data = $request->all();
        Mail::send('emails.feedback', ['data' => $data], function ($m) use ($data) {
            $m->from('dmres.service@gmail.com', 'Your Site');
            $m->to('plantes@rambler.ru', 'Alexandr Sergeevich')->subject('Request from site dmrem.com');
        });
        Mail::send('emails.feedback', ['data' => $data], function ($m) use ($data) {
            $m->from('dmres.service@gmail.com', 'Your Site');
            $m->to('gerovite@tut.by', 'inblat')->subject('Request from site dmrem.com');
        });
        return response()->json(['message' => 'Ваш запрос принят. Мы свяжемся с вами.']);
    }

    public function test() {
        $s3Client = new S3Client([
            'version'     => 'latest',
            'region'      => 'eu-central-1',
            'credentials' => [
                'key'    => config('aws.AWS_ACCESS_KEY_ID'),
                'secret' => config('aws.AWS_SECRET_ACCESS_KEY'),
            ],
        ]);

        $result = $s3Client->getObject([
            'Bucket' => 'mas-m',
            'Key'    => 'electronica-industrial.jpg',
        ]);
        file_put_contents(public_path('qwe.jpg'), $result['Body']);
        dump($result['Body']); exit;
    }
}
