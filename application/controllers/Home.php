<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->model('Home_model','HM');
	}
	public function index(){
        echo $this->load->template('home');
	}
	public function callpapers(){
        echo $this->load->template('call_for_papers/call_for_papers');
	}
	public function importantdates(){
        echo $this->load->template('call_for_papers/important_dates');
    }
	public function specialsessions(){
        echo $this->load->template('call_for_papers/special_sessions');
    }
	
	public function about_aimtheme(){
        echo $this->load->template('about/aim_theme');
    }
	public function about_patronschairs(){
        echo $this->load->template('about/patrons_chairs');
    }
	public function about_ieeecommittees(){
        echo $this->load->template('about/ieee_oversight');
    }
	public function about_organizingcommittees(){
        echo $this->load->template('about/org_comm');
    }
	public function about_invitedspeakers(){
        echo $this->load->template('about/invited_speakers');
    }
	public function about_venue(){
        echo $this->load->template('about/venue');
	}
	
	public function attend_papersubmission(){
        echo $this->load->template('author/paper_submission');
    }
	public function attend_registrationfee(){
        echo $this->load->template('author/reg_guidelines');
    }
	public function regfeenew(){
        echo $this->load->template('author/reg_guidelines_new');
    }
	public function attend_conferenceschedule(){
        echo $this->load->template('author/schedule');
    }
	public function attend_conferenceawards(){
        echo $this->load->template('author/awards');
    }
	public function attend_conferencecontact(){
        echo $this->load->template('author/contact');
    }
}