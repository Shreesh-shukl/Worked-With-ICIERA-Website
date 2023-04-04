<?php

/**
 * custom loader file extends CI_Loader
 */
$autoload['libraries'] = array('database','session');
class MY_Loader extends CI_Loader {

    /**
     * This variable hold default setting of Captcha
     * @var type array
     */
    private $captcha_config = [];
    private $ci = [];
    
    public function __construct() {
        parent::__construct();
    }
    
    public function template($template_name, $vars = array(), $return = TRUE) {
        $ci_instance = & get_instance();

        $vars['aim'] = "The aim of this conference is to showcase the latest technologies, strategies and challenges in the area of electrical & electronics for the enhancement of industrial processes, which will be achieved through the various activities listed above.";
        $vars['theme'] = "The underlying theme of the proposed conference is “Industrial Electronics for Smart Systems” and is intended to meet the needs of modern industry. It would be accomplished through the related tracks, as proposed. The organising team is open for suggestions and would continually be updating the proposed technical activities, as shall be decided by its highly qualified advisers and technical team members.";

        $vars['invited_speakers'] =[
            ['Prof. Pierluigi Siano','University of Salerno, Italy'],
            ['Prof. Hassan Haes Alhelou','University College Dublin, Ireland'],
            ['Prof. Bhim Singh','IIT Delhi, New Delhi'],
            ['Prof. Brejesh Lall','IIT Delhi, New Delhi'],
            ['Prof. Prerna Gaur','NSUT, New Delhi'],
            ['Prof. Swagatam Das','Indian Statistical Institute, Kolkata'],
            ['Prof. Debashis De','Maulana Abul Kalam Azad University of Technology, West Bengal'],
            ['Prof. Singam Jayanthi','NIT Rourkela, Odisha'],
        ];

        $content = $this->view('includes/header', $vars, $return); // header
        $content .= $this->view($template_name, $vars, $return); // view
        $content .= $this->view('includes/footer', $vars, $return); // footer
        if ($return) {
            echo $content;
        } else {
            return $content;
        }
        
    }

}

?>