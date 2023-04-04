<?php
$data = [
    [
        "position"=>"For customized acceptance letter, invitation letter & Visa related queries",
        "people"=>[
            ["Ms. Sapna Gupta", "sapnagupta@mait.ac.in"],
            ["Ms. Sumedha Gupta", "sumedhagpt5@gmail.com"]
        ]
    ],
    [
        "position"=>"For website related queries",
        "people"=>[
            ["Mr. Ajay Gupta", "ajayece2006@gmail.com"],
            ["Mr. Nitish Uppal", "nitish.uppal.1106@gmail.com"],
            ["Ms. Shalu Garg", "er.shalugarg@gmail.com"]
        ]
    ],
    [
        "position"=>"For payment/sponsorship related queries",
        "people"=>[
            ["Mr. Vaibhav Nijhawan", "vaibh99@gmail.com"],
            ["Mr. Priyank Kr. Saxena", "priyank.saxena08@gmail.com"],
            ["Ms. Neeraj", "s.neerumalik@gmail.com"]
        ]
    ],
    [
        "position"=>"For queries related to conference schedule",
        "people"=>[
            ["Ms. Swati Sharma", "swati1986sharma@gmail.com"],
            ["Ms. Anubha Goel", "anubhagoel15@gmail.com"],
            ["Ms. Preeti Goyal", "preetigoyal.s@gmail.com"]
        ]
    ],
    [
        "position"=>"For any other query",
        "people"=>[
            ["Dr. Nitin Sharma", "nitinsharma@mait.ac.in"],
            ["Mr. Rohit Rana", "rohitrana@mait.ac.in"]
        ]
    ],
];
?>
    <div id="container">
        <?php include("./application/views/includes/navigation.php"); ?>
        <section class="contact-section3 mb-0 pb-0">
			<div class="container">
				<div class="title-section">
                    <span>Important Contacts for Attendees</span>
					<h1>Contact Us</h1>
				</div>
				<div class="contact-box">
					<div class="contact-info">
                        <div class="row justify-content-center">
                            <div class="col col-lg-10 table-responsive">
                                <table class="table table-striped text-left card">
                                    <?php for($k=0; $k<count($data); ++$k){ ?>
                                    <tr>
                                        <th style="width:50%"><?=$data[$k]['position']?></th>
                                        <td>
                                            <?php for($l=0; $l<count($data[$k]['people']); ++$l){ ?>
                                            <h5 class="w400 mt-3 mb-0"><?=$data[$k]['people'][$l][0]?></h5>
                                            <a class="d-block cursive mb-3" href="mailto:<?=$data[$k]['people'][$l][1]?>"><?=$data[$k]['people'][$l][1]?></a>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
						<div class="row justify-content-center">
							<div class="col-md-4">
								<p><i class="ionicons ion-ios-location-outline"></i>Maharaja Agrasen Institute of Technology<br> New Delhi 110086</p>
							</div>
							<div class="col-md-4 d-none">
								<p><i class="ionicons ion-ios-telephone-outline"></i>1-800-123-1234</p>
							</div>
							<div class="col-md-4">
								<p><i class="ionicons ion-ios-email-outline"></i>iciera2024@gmail.com</p>
							</div>
						</div>
					</div>
				</div>
			</div>
        </section>
        <div class="mapouter" style="width:100%"><div class="gmap_canvas" style="width:100%"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=maharaja%20agrasen%20institute%20of%20technology%20delhi&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:100px;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100px;}</style></div></div>