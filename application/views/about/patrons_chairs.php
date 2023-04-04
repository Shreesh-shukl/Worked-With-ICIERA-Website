<?php 
$committee = [['title'=>['General Chairs',''], 'details'=>[
    ['Prof. Alok Prakash Mittal','NSUT, New Delhi'],
    ['Prof. Sunil Kumar','MAIT, New Delhi'],
    ]],
    ['title'=>['Technical Chairs',''], 'details'=>[
    ['Prof. Brejesh Lall','IIT Delhi, New Delhi'],
    ['Prof. D.K. Jain','DCRUST, Murthal, Haryana'],
    ['Prof. Amit Parkash','GGSIPU, New Delhi'],
    ]],
    ['title'=>['Publication Chairs',''], 'details'=>[
    ['Prof. Ahteshamul Haque','Jamia Milia Islamia (JMI), New Delhi'],
    ['Dr. Neelu Nagpal','MAIT, New Delhi'],
    ]],
    ['title'=>['Program Chairs',''], 'details'=>[
    ['Prof. Alka Singh','DTU, New Delhi'],
    ['Prof. Anubha Gupta','IIIT Delhi, New Delhi'],
    ['Prof. R. S. Gupta','MAIT, New Delhi'],
    ]],
    ['title'=>['Organizing Chairs:',''], 'details'=>[
    ['Dr. Nitin Sharma','MAIT, New Delhi'],
    ['Mr. Rohit Rana','MAIT, New Delhi'],
    ]]];
?>
    <!-- Container -->
    <div id="container">
        <!-- Header
		    ================================================== -->
        <?php include("./application/views/includes/navigation.php"); ?>
        <section class="py-5 speaking-section">
            <div class="container">
                <div class="row">
                    <div class="col text-justify">
                        <div class="title-section">
                            <h1>Patrons and Conference Chairs</h1>
                        </div>
                        <div class="card py-3 px-4 shadow">
                            <div class="title-section mb-2">
                                <h1 class="sub-head">Chief Patrons</h1>
                            </div>
                            <div class="row committee">
                                <div class="col">
                                    <h2 class="name">Dr. N. K. Garg</h2>
                                    <span class="designation">Founder Chairman MATES, Chancellor, MAU, Himachal Pradesh</span>
                                    
                                    <h2 class="name">Prof. Mahesh Verma</h2>
                                    <span class="designation">Vice-Chancellor GGSIP University, New Delhi</span>
                                </div>
                            </div>
                        </div>
                        <div class="card py-3 px-4 shadow mt-4">
                            <div class="title-section mb-2">
                                <h1 class="sub-head">Patrons</h1>
                            </div>
                            <div class="row committee">
                                <div class="col">
                                    <h2 class="name">Prof. Yogesh Singh</h2>
                                    <span class="designation">Vice-Chancellor DTU, New Delhi</span>
                                    
                                    <h2 class="name">Prof. J.P. Saini</h2>
                                    <span class="designation">Vice-Chancellor NSUT, New Delhi</span>

                                    <h2 class="name">Prof. Bhim Singh</h2>
                                    <span class="designation">IIT Delhi, New Delhi</span>

                                    <h2 class="name">Prof. M. L. Goyal</h2>
                                    <span class="designation">Vice-Chairman (Academics), MATES, New Delhi</span>

                                    <h2 class="name">Prof. Neelam Sharma</h2>
                                    <span class="designation">Director MAIT, New Delhi</span>
                                </div>
                            </div>
                        </div>
                        <?php for($k=0; $k<count($committee); ++$k){ $c = $committee[$k]; ?>
                        <div class="card py-3 px-4 shadow mt-4">
                            <div class="title-section mb-2">
                                <h1 class="sub-head"><?=$c['title'][0]?></h1>
                            </div>
                            <?php for($l=0; $l<count($c['details']);++$l){ ?>
                            <div class="row committee">
                                <div class="col">
                                    <h2 class="name"><?=$c['details'][$l][0]?></h2>
                                    <span class="designation"><?=$c['details'][$l][1]?></span>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <?php } ?>
                            <div class="row speakers-box d-none">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="speaker-post">
                                        <a href="#"><img src="upload/speakers/1.jpg" alt=""></a>
                                        <div class="speaker-content">
                                            <h2><a href="#">Daniel Robert</a></h2>
                                            <span>CEO, Founder at GBC</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                    <div class="col-lg-4 d-none">

                    </div>
                </div>
            </div>
        </section>