<?php
$committee = [
   
    ['title'=>['IEEE Oversight Committee',''], 'details'=>[
    ['Prof. Sudhanshu Shekhar Jamuar','Lead-Member to Coordinate ICIERA-2024 & Member-IEEE Delhi Section STDCOM on T & P Act'],
    ['Prof. Mahesh Bundele','Executive Committee Member-IEEE Delhi Section & Member-IEEE Delhi Section STDCOM on T & P Act'],
    ['Dr. Shabana Urooj','Joint Secretary-IEEE Delhi Section & Member-IEEE Delhi Section STDCOM on T & P Act'],
    ['Dr. Rajnish Sharma','Secretary-IEEE Delhi Section & Member-IEEE Delhi Section STDCOM on T & P Act'],
    ]],
    ];
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
                            <h1>IEEE Oversight Committee</h1>
                        </div>
                        <?php for($k=0; $k<count($committee); ++$k){ $c = $committee[$k]; ?>
                        <div class="card py-3 px-4 shadow mt-4">
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
                    </div>
                    <div class="col-lg-4 d-none">

                    </div>
                </div>
            </div>
        </section>