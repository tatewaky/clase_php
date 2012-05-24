<?php

class vista {

    private $header;
    private $footer;

    public function __construct() {
        $this->header = file_get_contents(ROOT.'/view/header.php');
        $this->footer = file_get_contents(ROOT.'/view/footer.php');
    }

    public function get_content(){
        $output = $this->header;
        $output .= exec('whoami');
        $output .= $this->footer;
        return $output;
    }

}
?>
