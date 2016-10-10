<?php
/**
 * sb
 *
 * rpsimao
 * 09/10/16
 */


namespace SBCustom;


class Porfolio
{


    /**
     * ID for flip back
     * @var string
     */
    private $id;

    /**
     * Set the front image of gallery
     * @var string
     */
    private $imageFront;

    /**
     * Set the back image of gallery
     * @var string
     */
    private $imageBack;

    /**
     * Folder path of images
     * @var string
     */
    private $imageFolder;

    /**
     * The name of the project
     * @var string
     */
    private $projectName;

    /**
     * The text body of the project
     * @var string
     */
    private $projectText;


    /**
     * The caption of the photo
     * @var string
     */
    private $caption;

    /**
     * @var string
     */
    private $goToGalleryURL;

    /**
     * @var string
     */
    private $projectType;

    /**
     * @return string
     */
    private function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    private function getImageFront()
    {
        return $this->getImageFolder().$this->imageFront;
    }

    /**
     * @param string $imageFront
     */
    public function setImageFront($imageFront)
    {
        $this->imageFront = $imageFront;
    }

    /**
     * @return string
     */
    private function getImageBack()
    {
        return $this->getImageFolder().$this->imageBack;
    }

    /**
     * @param string $imageBack
     */
    public function setImageBack($imageBack)
    {
        $this->imageBack = $imageBack;
    }

    /**
     * @return string
     */
    private function getProjectName()
    {
        return $this->projectName;
    }

    /**
     * @param string $projectName
     */
    public function setProjectName($projectName)
    {
        $this->projectName = $projectName;
    }

    /**
     * @return string
     */
    private function getProjectText()
    {
        return $this->projectText;
    }

    /**
     * @param string $projectText
     */
    public function setProjectText($projectText)
    {
        $this->projectText = $projectText;
    }

    /**
     * @return string
     */
    private function getImageFolder()
    {
        return $this->imageFolder;
    }

    /**
     * @param string $imageFolder
     */
    public function setImageFolder($imageFolder)
    {
        $this->imageFolder = $imageFolder;
    }

    /**
     * @return mixed
     */
    private function getCaption()
    {
        return $this->caption;
    }

    /**
     * @param mixed $caption
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;
    }

    /**
     * @return string
     */
    private function getGoToGalleryURL()
    {
        return $this->goToGalleryURL;
    }

    /**
     * @param string $goToGalleryURL
     */
    public function setGoToGalleryURL($goToGalleryURL)
    {
        $this->goToGalleryURL = $goToGalleryURL;
    }

    /**
     * @return string
     */
    private function getProjectType()
    {
        return $this->projectType;
    }

    /**
     * @param string $projectType
     */
    public function setProjectType($projectType)
    {
        $this->projectType = $projectType;
    }



    /**
     * Render the Gallery HTML
     * @return string
     */
    public function render()
    {
       $html = '<!-- Portfolio Image --><div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix '.$this->getProjectType().'" style="display: inline-block;"><div class="project"><figure><img src="'.$this->getImageFront().'" alt=""><figcaption>'.$this->getCaption().'</figcaption></figure><div class="ovrly"></div><div class="buttons"><a href="'.$this->getGoToGalleryURL().'" class="fa fa-picture-o"></a><a href="#'.$this->getId().'" class="fa fa-info-circle show-popup"></a></div></div></div><!-- Popup Content --><div class="pop-up-box" id="'.$this->id.'"><img alt="" src="'.$this->getImageBack().'" class=" hidden-xs"><div class="popup-content"><h3>'.$this->getCaption().'</h3><p>'.$this->getProjectText().'</p><a href="'.$this->getGoToGalleryURL().'"><i class="fa fa-picture-o" aria-hidden="true"></i> PREVIEW</a></div></div><!-- Single Portfolio Item [ END ] -->';

        return $html;

    }
}






