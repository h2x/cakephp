<?php
App::uses('AppController', 'Controller');

class GalleriesController extends AppController {

    public function index() {

    }

    public function uploadphotos($id)
    {
        $path = "gallery/" . $id;

        debug($this->request->data);
        //if folder does not already exist, create it
        if(!file_exists($path))
        {
            mkdir($path);
        }

        //declare array of allowed file extensions
        $allowed_extensions = array('jpg', 'jpeg', 'png');

        //loop through them
        foreach($this->request->data as $file)
        {
            //get the file extension of the file we wish to upload
            $ext = substr(strtolower(strrchr($file['name'], '.')), 1);

            //only upload if the extension is valid (our array of vaid extensions is declared in AppController)
            if(in_array($ext, $allowed_extensions))
            {
                //move the uploaded file to its final resting place
                if(move_uploaded_file($file['tmp_name'], WWW_ROOT . $path . "/" . $file['name']))
                {
                    //if upload was successful, create record in photo table
                    $this->Gallery->create();

                    //set the foreign key in the photo table to reference the Vandalism we added earlier
                    $this->Gallery->set();

                    //store the path to the image in the database so we can easily display it
                    $this->Gallery->set('file_path', $path . "/" . $file['name']);



                    $this->Gallery->set('thumb_path', $this->generateThumb($path, $file, 100));

                    //save record in the photo table

                    if($this->Gallery->save($this->request->data) == false)

                        return false;
                }
                else
                    return false;
            }
            else
                return false;
        }



    }

    public function generateThumb($path, $image, $thumbHeight)
    {
        //Our thumbnails will will live in the same directory as their bigger brothers, and have _thumb appended to the end of their name


        $file = explode('.', $image['name']);

        if(preg_match('/jpg|jpeg/', $file[1]))
            $src_img = imagecreatefromjpeg(WWW_ROOT . $path . "/" . $image['name']);

        else if(preg_match('/png/', $file[1]))
            $src_img = imagecreatefrompng(WWW_ROOT . $path . "/" . $image['name']);


        $oldWidth = imageSX($src_img);
        $oldHeight = imageSY($src_img);

        $aspectRatio = $oldWidth / $oldHeight;

        $thumbWidth = floor($thumbHeight * $aspectRatio);

        $dst_img=ImageCreateTrueColor($thumbWidth, $thumbHeight);
        imagecopyresampled($dst_img,$src_img, 0, 0, 0, 0, $thumbWidth, $thumbHeight, $oldWidth, $oldHeight);


        if(preg_match('/jpg|jpeg/', $file[1]))
            imagejpeg($dst_img, WWW_ROOT . $path . "/" . $file[0] . "_thumb" . "." . $file[1], 90);

        else if(preg_match('/png/', $file[1]))
            imagepng($dst_img, WWW_ROOT . $path . "/" . $file[0] . "_thumb" . "." . $file[1], 2);


        imagedestroy($dst_img);
        imagedestroy($src_img);

        return $path . "/" . $file[0] . "_thumb" . "." . $file[1];

        debug($this->request->data);
    }
}