<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Documents\Controller;

use Application\Controller\BaseController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

class IndexController extends BaseController {

    public function indexAction() {
        $docsModel = new \Application\Model\DocumentModel($GLOBALS["em"]);
        $data = $docsModel->findAll();
        $title = "Tài liệu học tiếng Anh";
        return new ViewModel(array(
            'title' => $title,
            'docs' => $data
        ));
    }

    public function webuploadAction() {
        $action = "Upload";
        return new ViewModel(array(
            'action' => $action,
        ));
    }

    public function uploadAction() {
        $allowedExts = array("gif", "jpeg", "jpg", "png");
        $temp = explode(".", $_FILES["file"]["name"]);
        $file = $_FILES;
        $extension = end($temp);
        if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/pjpeg") || ($_FILES["file"]["type"] == "image/x-png") || ($_FILES["file"]["type"] == "image/png")) && ($_FILES["file"]["size"] < 500000) && in_array($extension, $allowedExts)) {
            if ($_FILES["file"]["error"] > 0) {
                echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
            } else {
                echo "Upload: " . $_FILES["file"]["name"] . "<br>";
                echo "Type: " . $_FILES["file"]["type"] . "<br>";
                echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
                echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

                if (file_exists("Upload/" . $_FILES["file"]["name"])) {
                    echo $_FILES["file"]["name"] . " already exists. ";
                } else {
                    move_uploaded_file($_FILES["file"]["tmp_name"], "Upload/" . $_FILES["file"]["name"]);
                    echo "Stored in: " . "Upload/" . $_FILES["file"]["name"];
                }
            }
        } else {
            echo "Invalid file";
        }

        //return new JsonModel($result);
    }

    public function editAction() {
        $action = "edit action";
        $request = $this->getRequest();
        if ($request->isPost()) {
            $post = $request->getPost();
        } else {
            //$post = "is not a post";
            $post = (int) $this->params()->fromRoute('id', 0);
        }
        return new ViewModel(array(
            'action' => $action,
            'post' => $post
        ));
    }

    public function deleteAction() {
        var_dump("delete");
        die();
    }

}
