<?php
    $test=false;
    require_once('core/secure_db.php');
    require_once('core/secure_core.php');
    
    function initialize(){
        global $test;
        session_start();
        $boostrapcss="<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css'>";
        $style="<link rel='stylesheet' href='style/style.css'>";
        $fonts="<link rel='stylesheet' href='style/typography.css'>";
        $base="<link rel='stylesheet' href='style/base.css'>";
        echo $boostrapcss;
        echo $style;
        echo $base;
        echo $fonts; 
        if ($test==true){
            echo "<p>Initialization✅</p>";
        }
    }
    function terminate($test=false){
        echo "<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js'></script>";
        echo "<script src='style/npm_js_core2.11.8.min.js'></script>";
        echo "<script src='style/cdn.jsdelivr.net_npm_chart.js'></script>";
        echo "<script src='style/script.js'></script>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<?php
    initialize();
    require_once('core/conn_db.php');
?>
    <div>
        <div class="bgimg">
            <div class="container-xl">
                <div class="pt-5 mx-md-5 mx-3 mb-5" id="nav">        
                    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded-1 px-5">
                        <!-- Navbar title -->
                        <a class="navbar-brand" href="/"><strong>NCUTSCL</strong></a>
                        <!-- Collapsible button -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <!-- links 
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="/all">All Categories</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/all">item1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/all">item2</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="/all">item2</a>
                                </li>
                            </ul>
                                
                             Login/Sign Out Button -->
                             <div class="navbar-nav ms-auto">
                                    <button class="btn btn-dark text-center" type="button" href="#" disabled>Sign in</button>
                            </div>   
                        </div>
                    </nav>
                </div>
            </div>
            <div  class="container-sm">
                <div class="row mt-5 justify-content-around ml-3" id="key">
                    <div id="PageTitle" class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <p id="specialkeytext">Financial Statistics</p>
                            <p class="mt-2 mb-4">Data about the society's performance.</p>        
                    </div>
                    <div class="logo col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <img id="img" src="imgs/bg/image002b.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div id="bgcards" class="py-5">       
                <div class="row d-flex justify-content-center text-align-center align-items-stretch g-1" id="cards">
                    <div class="col-lg-3">
                        <div class="card border-1 h-100">
                            <div class="card-body text-center">
                                <h1 class="card-title" id="card3">4%</h1>
                                <p class="card-text my-3" style="color:black;">Interest Rate for Optional Deposits.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card border-1 h-100">
                            <div class="card-body text-center">
                                <h1 class="card-title" id="card3">5%</h1>
                                <p class="card-text my-3" style="color:black;">Dividend Paid for 2022-23.</p>
                            </div>
                        </div>
                    </div>    
                    <div class="col-lg-3">
                        <div class="card border-1 h-100">
                            <div class="card-body text-center">
                                <h1 class="card-title" id="card1">8%</h1>
                                <p class="card-text my-3" style="color:black;">Compulsory Deposit Interest rate.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card border-1 h-100">
                            <div class="card-body text-center">
                                <h1 class="card-title" id="card2">12%</h1>
                                <p class="card-text my-3" style="color:black;">Interest Rate for Loans.</p>
                            </div>
                        </div>
                    </div>  
                    <div class="col-lg-12">
                        <div class="card border-1 h-100">
                            <div class="card-body text-center">
                                <h1 class="card-title" id="card3">₹ 1,50,000</h1>
                                <p class="card-text my-3" style="color:black;">Maximum Loan Amount</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card border-1 h-100">
                            <div class="card-body text-center">
                                <h1 class="card-title" id="card3">₹ 200</h1>
                                <p class="card-text my-3" style="color:black;">Monthly Compulsory Deposit Amount</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card border-1 h-100">
                            <div class="card-body text-center">
                                <h1 class="card-title" id="card3">₹ 25,000</h1>
                                <p class="card-text my-3" style="color:black;">Death Benefit from Membership Welfare Fund</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
    <div class="container" id="base">        
        <div class="row g-5">
            <div class="col-md-8">
            <article class="blog-post">
                <h2 class="display-5 link-body-emphasis mb-1">Dividend Payout Amount</h2>
                <p class="blog-post-meta">The Amount paid out to members by the society.</p>
                <div class="my-2"><canvas id="dividendchart"></canvas></div>
                <p><br>the dividend paid to members by our society, which is the amount of money that our society distributes to its members as a reward for their participation and contribution. A higher dividend means that our society has more surplus.</p>
                <p>As you can see, the direct income of our society has increased remarkably from 2018 to 2023, reaching a stunning 414,151 INR in 2023. This shows that our society has been able to grow its loan portfolio and generate more revenue from its interest and fees. We have also maintained a low cost of funds and a high recovery rate, which have enhanced our margins and returns</p>
                <br>
                <p>We assure you that we will continue to strive for excellence and efficiency in our loan operations and generate more surplus for our society and its members. We hope that you will feel more motivated and valued by being a part of our society.</p>
            </article>
            <article class="blog-post">
                <h2 class="display-5 link-body-emphasis mb-1">Loan Data</h2>
                <p class="blog-post-meta">Annual Loan (Outstanding) values issued to members.</p>
                <div class="my-2"><canvas id="loanchart"></canvas></div>
                <p class="mt-5">An important source of income for the society are loans issued to members. This is the total amount of loans that we have granted to our members for various purposes, such as education, health, business, agriculture, and personal needs. Loans are issued following a singular 12% interest scheme.
                </p><br><p>As you can see, the issued loan amount to members has increased steadily from 2018 to 2021, reaching a peak of 626,352 INR in 2023. This shows that our society has been able to meet the growing demand for loans from our members and support their various needs and aspirations. We have also maintained a high standard of quality and transparency in our loan approval and disbursement process.</p>
            </article>
            <article class="blog-post">
                <h2 class="display-5 link-body-emphasis mb-1">Amount Reserved in Banks</h2>
                <p class="blog-post-meta">Net total Amount reserved as fixed deposits in banks.</p>
                <div class="my-2"><canvas id="fdchart"></canvas></div>
                <p><br>One more statistic that we would like to share with you is the bank reserves, which is the amount of money that our society keeps in its bank account as a safety net and a source of liquidity. A higher bank reserve means that our society has more financial stability and security.<br><br>As you can see, the bank reserves have increased significantly from 2018 to 2023, reaching a whopping 1,094,010 INR in 2023. This shows that our society has been able to generate a healthy surplus from its loan operations and save it for future contingencies. We have also followed a prudent and conservative approach in managing our funds and avoiding unnecessary expenses.</p>
            </article>
            <article class="blog-post">
                <h2 class="display-5 link-body-emphasis mb-1">Society Member Count</h2>
                <p class="blog-post-meta">Total number of members in the society.</p>
                <div class="my-2"><canvas id="memberchart"></canvas></div>
                <p><br>The member count of our society, which is the number of people who have joined our society and are eligible to avail of our loans and services.<br><br>This shows that our society has been able to attract and retain more members over the years and expand its reach and impact.
                However, we would also like to point out that our society is not interested in increasing its member count at the cost of quality and integrity. We have a strict and rigorous process for selecting and screening our members, based on their eligibility criteria, credit history, income level, and social responsibility. We only admit those who share our vision and values and are willing to abide by our rules and regulations.
                <br><br>
                We believe that this approach has helped us to maintain a high level of trust and satisfaction among our members and ensure their active participation and contribution in our society. We have also avoided the problems of over-indebtedness, default, fraud, and mismanagement that plague some of the other cooperative societies.
                <br><br>
                We would like to thank all our members for their commitment and loyalty to our society. We assure you that we will continue to uphold our standards and principles in admitting new members and serving existing members. We hope that you will feel proud and honored to be a part of our society.</p> 
            </article>
            <article class="blog-post">
                <h2 class="display-5 link-body-emphasis mb-1">Direct Income</h2>
                <p class="blog-post-meta">Net Income of the society.</p>
                <div class="my-2"><canvas id="dirincchart"></canvas></div>
                <p><br>The direct income of our society is the amount of money that our society earns from its loan operations, excluding the expenses and taxes. A higher direct income means that our society has more profitability and efficiency</p>
                <p>As you can see, the dividend paid to members by our society has increased significantly from 2018 to 2022, reaching a peak of 177,661 INR in 2022. This shows that our society has been able to generate a substantial surplus from its loan operations and share it with its members. We have also followed a fair and transparent policy in calculating and distributing the dividend based on the members’ share capital and loan transactions.</p>
            </article>
            <nav class="blog-pagination" aria-label="Pagination">
                <a class="btn btn-outline-secondary rounded-pill disabled" href="#">Next</a>
                <a class="btn btn-outline-secondary rounded-pill disabled" aria-disabled="true">Previous</a>
            </nav>

            </div>      
            <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-body-tertiary rounded">
                <h4 class="fst-italic">About</h4>
                <p class="mb-0">Navumang Cooperative (Urban) Thrift and Credit Society came into existence in June 2018 and it has grown leaps and bounds in its service to its community. Strictly based on the very principles of co-operative movement in our Country.<br><br>NCUTCSL has completed 5 years of operation and today it is a family of around 100 members.</p>
                </div>

                <div class="p-4">
                <h4 class="fst-italic">Archives</h4>
                <ol class="list-unstyled mb-0">
                    <li><a href="imgs\Registration Certificate.jpg">Registration Certificate</a></li>
                    <li><a href="#" data-bs-toggle="tooltip" data-bs-title="Member Login Required">Society Bye-Laws</a></li>
                </ol>
                </div>
            </div>
            </div>
        </div>
    </div>
  
    <footer class="container py-5">
  
    <div class="row">
    <div class="col-3 col-md">
        <img src="imgs\bg\image002b.png" style="max-width=150px;" class="img-fluid" alt="">
      <small class="d-block mb-3 text-muted">© 2024</small>
    </div>
    <div class="col-3 col-md">
      <h5>Download Resources</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="imgs\Registration Certificate.jpg">Registration Certificate</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>About</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Financial Statistics</a></li>
        <li><a class="link-secondary" href="#">About Us</a></li>
      </ul>
    </div>
  </div>
</footer>
</body>
</html>
<?php
terminate();
?>