<?php
require_once __DIR__ . '/vendor/autoload.php';
use Intervention\Image\ImageManagerStatic as Image;
$img = Image::make('phone.jpg');
$img->resize(200, null, function (\Intervention\Image\Constraint $constraint)
{
    $constraint->aspectRatio();
});
$img->text('Iphone5', 0, 13, function (\Intervention\Image\AbstractFont $font)
{
    $font->size(33);
    $font->color(2555, 255, 255, 0.3);
});
$img->save('phone2.jpg');
echo $img->response('jpg');
