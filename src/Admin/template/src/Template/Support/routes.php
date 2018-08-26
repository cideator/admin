<?php
/**
 * Project: support
 *
 * Author: Farhan Wazir
 * Email: farhan.wazir@gmail.com, seejee1@gmail.com
 * Date: 3/26/2017
 * Time: 5:36 AM
 *
 *
 *
 * This project file is not redistributeable without permissions.
 * For more details about redistribution and reselling, contact to provided author details.
 */

//Load assets for template
$router->group(['prefix' => 'template/assets'], function ($route) {
    $route->get('/{path}', ['as' => 'builtin.template.assets', 'uses' => function (\Illuminate\Http\Request $request) {
        try {
            $file = realpath(__DIR__ . '/../assets/' . implode('/', array_slice($request->segments(), 2)));
            return response()->make(\Illuminate\Support\Facades\File::get($file))
                ->header('Content-Type', getMime($file));
        } catch (Exception $e) {
            throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException('File not found');
        }
    }])->where('path', '.+');
});

function getMime($file)
{
    $extension = \Illuminate\Support\Facades\File::extension($file);
    $mime_types = array(
        "pdf" => "application/pdf",
        "exe" => "application/octet-stream",
        "zip" => "application/zip",
        "docx" => "application/msword",
        "doc" => "application/msword",
        "xls" => "application/vnd.ms-excel",
        "xlsx" => "application/vnd.ms-excel",
        "ppt" => "application/vnd.ms-powerpoint",
        "gif" => "image/gif",
        "png" => "image/png",
        "jpeg" => "image/jpg",
        "jpg" => "image/jpg",
        "mp3" => "audio/mpeg",
        "wav" => "audio/x-wav",
        "mpeg" => "video/mpeg",
        "mpg" => "video/mpeg",
        "mpe" => "video/mpeg",
        "mov" => "video/quicktime",
        "avi" => "video/x-msvideo",
        "3gp" => "video/3gpp",
        "css" => "text/css",
        "jsc" => "application/javascript",
        "js" => "text/javascript",
        "php" => "text/html",
        "htm" => "text/html",
        "html" => "text/html",
        "svg" => "image/svg+xml"
    );
    return array_key_exists($extension, $mime_types) ? $mime_types[$extension] : 'text/plain';
}