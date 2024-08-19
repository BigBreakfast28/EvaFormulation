<?php 

$to = "deancameron99@gmail.com";
$from = "EVA Formulations";
$subject = "Consultation Notification";

$name = $email = $phone = $comments = '';
$nameErr = $emailErr = $phoneErr = $comments = '';
$valid = TRUE;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        $nameErr = "This is a required field!";
    } else {
        $name = form_input($_POST['name']);
        if (!preg_match("/^[a-zA-Z-]*$/",$name)) {
            $nameErr = "Only letters and white space is allowed";
            $valid = FALSE;
        }
    }
    
    if (empty($_POST['email'])) {
        $emailErr = "This is a required field!";
    } else {
        $email = form_input($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email address!";
            $valid = FALSE;
        }
    }

    if (empty($_POST['phone'])) {
        $phoneErr = "This is a required field!";
    } else {
        $phone = form_input($_POST['phone']);
        if (!preg_match('/^[0-9]{10}+$/',$phone)) {
            $phoneErr = "Please enter a valid phone number!";
            $valid = FALSE;
        }
    }

    if (empty($_POST['comments'])) {
        $comments = '';
    } else {
        $comments = form_input($_POST['comments']);
    }

    if ($valid) {
        $message = "Name: " . $name . "\n" . "Phone: " . $phone . "\n" . "Email: " . $email . "\n" . "Comments: " . $comments;

        mail($to, $subject, $message);
        
        /*echo "<script>alert('$text');</script>"*/;
    }
}

function form_input($data) {
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    $data = trim($data);
    return $data;
}
?>

<!doctype html>
<html lang="en">
    <head>
        <title>
            EVA-contact
        </title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="./styles.css">
    </head>

    <body>
        <header>
        <nav class="navbar navbar-expand-md bg-custom fixed-top">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="./index.php"><img src="./public/EVATrans.png" style="width: 120px;"></a>
                        <button class="navbar-toggler border-white bg-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
                            <ul class="navbar-nav ">
                            <li class="nav-item"><a class="nav-link text-white pt-4" href="./index.php">Home</a></li>
                                <li class="nav-item"><a class="nav-link text-white pt-4" href="./services.php">Services</a></li>
                                <li class="nav-item"><a class="nav-link text-white pt-4" href="./mission.php">Mission</a></li>
                                <li class="nav-item"><a class="nav-link text-white pt-4" href="./contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
            </nav>
        </header>


        <main>
        <div class="container-fluid">
            <div class="services">
                <h1 class="pop headliner-service service-img text-center display-1">What We Offer</h1>
            </div>
        </div>

            <div class="website-type container-fluid">
                <h1 class="pop display-3 text-indigo text-center">Types Of Websites Currently Offered</h1>
                    <div class="row">
                        <div class="col border m-3 p-5">
                            <h3 class="pop display-6">Portfolio Website</h3>
                            <p class="pop">
                            Showcase your business or art! Do you fit into this category?
                                <div class="dropdown">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                    See More
                                </button>
                                <ul class="dropdown-menu text-center p-1">
                                    <li>Photographers</li>
                                    <li>Freelancers</li>
                                    <li>Make Up Artist</li>
                                    <li>Writers</li>
                                    <li>Graphic Designers</li>
                                    <li>Students</li>
                                </ul>
                                </div>
                            </p>
                        </div>
                    
                        
                        <div class="col border m-3 p-5">
                            <h3 class="pop display-6">Nonprofit, Religious & Charitable Organizations</h3>
                            <p class="pop">
                            Organizations that operate for the benefit of others. Is this your type of organization?
                                <div class="dropdown">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                    See More
                                </button>
                                <ul class="dropdown-menu text-center p-1">
                                    <li>Youth Activist</li>
                                    <li>Recreation Club</li>
                                    <li>Public Safety</li>
                                    <li>Professional Association</li>
                                    <li>Religious Group</li>
                                    <li>Foundations</li>
                                </ul>
                                </div>
                            </p>
                        </div>

                        <div class="col border m-3 p-5">
                            <h3 class="pop display-6">Online Booking </h3>
                            <p class="pop">
                                Let clients schedule appointments and see availability.
                                <div class="dropdown">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                    See More
                                </button>
                                <ul class="dropdown-menu text-center p-1">
                                    <li>Hair Stylist/ Barbers</li>
                                    <li>Spa Services</li>
                                    <li>Nail Technicians</li>
                                    <li>Make-up Artist</li>
                                    <li>Car Detailers</li>
                                </ul>
                                </div>
                            </p>
                        </div>
                    </div>
            </div>

            <div class="marketing market-img pop container-fluid choose">
                <h1 class=" display-1 market text-center my-5">Why EVA Is The Best Option For You</h1>
                <div class="row">
                    <div class="col-sm-8">
                        <ol>
                            <li><h3 class="">EVA creates websites from scratch. This means the websites are coded using HTML, CSS, JavaScript, PHP, Bootstrap, and SQL.</h3></li>
                                <p class="">
                                    This allows EVA to offer its clients the most affordable prices possible. This is achievable because we can eliminate additional software usage.
                                </p>
                            <li><h3>EVA brings you responsive web design options. Responsive web design is essential for toggling between computer and phone screens.</h></li>
                                <p>
                                We live in an era where most people navigate the internet using their phones. However, having a desirable layout for computer screens is still mandatory.
                                </p>
                            <li><h3>Optional Hosting Service</h1>
                                <p></li>
                                If you do not want to worry about the hassle of hosting your own website, we can handle that for you as well. Hosting involves putting your website online for everyone to access.
                                </p>
                        <li><h3>Improved SEO</h3></li>
                                <p>
                                Search Engine Optimization is crucial when designing a website and ensuring it is searchable through various search engines.
                                </p>
                        <li><h3>Website Redesign</h></li>
                                <p>
                                If you already have a website but are not happy with the design, no worries! Here at EVA, we can take your preexisting website and tailor it to suit your new needs or completely recreate it.
                                </p>
                            <li><h3>Great Client Experience</h></li>
                                <p>
                                We strive to offer our clients the greatest satisfaction. We pride ourselves on working closely with clients to achieve their goals!
                                </p>
                        </ol>
                    </div>
                    <div class="col-sm-4">
                        <table class="table border">
                            <thead class="table-dark">
                            <tr>
                                <th class="text-center choose"><h4>Choose EVA</h4></th>
                            </tr>
                            </thead>
                            <tbody class="text-center p-5">
                            <tr>
                                <td>Reliable</td>
                            </tr>
                            <tr>
                                <td>Affordable</td>
                            </tr>
                            <tr>
                                <td>Customer Support</td>
                            </tr>
                            <tr>
                                <td>Straightforward</td>
                            </tr>
                            <tr>
                                <td>Authentic</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid contact-me ">
                <div class="col-md-12 text-center">
                    <h1 class="text-center pop business-liner display-1">Don't wait</h1>
                    <button type="button" class="btn btn-primary p-3  "  data-bs-toggle="modal" data-bs-target="#myModal">
                        Start Free Consultation
                    </button>
                </div>
            </div>

                    <!-- The Modal -->
            <div class="modal container-fluid" id="myModal">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header text-center">
                        <h4 class="modal-title">Contact EVA</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body bg-dark">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="eva-logo col-sm-6"></div>
                                <div class="col-sm-6 ">
                                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" class="was-validated p-5">
                                        <div class="form-floating mb-3 mt-3">
                                            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name"  value="<?php echo $name; ?>" required>
                                            <label for="name">Name:</label>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field. <?php echo $nameErr ?></div>
                                        </div>

                                        <div class="form-floating mb-3 mt-3">
                                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $email;?>" required>
                                            <label for="email">Email:</label>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field. <?php echo $emailErr ?></div>
                                        </div>

                                        <div class="form-floating mb-3 mt-3">
                                            <input type="tel" class="form-control" id="phone" placeholder="000-000-0000" name="phone" value="<?php echo $phone;?>" required>
                                            <label for="phone">Phone:</label>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field. <?php echo $phoneErr ?></div>
                                        </div>

                                        <div class="form-floating mb-3 mt-3">
                                            <textarea class="form-control" placeholder="Enter comments and questions here." col="3" row="6" name="comments"></textarea>
                                            <label for="comments">Comments:</label>
                                                
                                        </div>

                                        <div class="mb-3 text-white">*Required Field</div>

                                        <input type="submit" class="btn btn-primary p-2" id="toastbtn">

                                        <!--<div class="toast">
                                            <div class="toast-header">
                                                Submission Complete!
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
                                            </div>
                                            <div class="toast-body">
                                                Your form has been submitted successfully.
                                            </div>
                                        </div>-->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>

                    </div>
                    </div>
                </div>
            
        </main>


        <footer>
        <div class="container-fluid mt-5">
                   <div class="row">
                   <div class="col-sm-4 foot-img"></div>
                        <div class="col-sm-4 ">
                            <h3 class="display-4 text-indigo pt-4">Location & Contact</h3>
                            <ul>
                                <li>Atlanta,GA</li>
                                <li>info.contact@evaformulations.com</li>
                            </ul>
                        </div>

                        <div class="col-sm-4 icon-list">
                            <h5 class="display-4 text-indigo pt-4">Follow EVA</h5>
                            <div>
                            <ul class="row ">
                                <li class="col pt-3"><svg width="112px" height="112px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>Facebook-color</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Color-" transform="translate(-200.000000, -160.000000)" fill="#4460A0"> <path d="M225.638355,208 L202.649232,208 C201.185673,208 200,206.813592 200,205.350603 L200,162.649211 C200,161.18585 201.185859,160 202.649232,160 L245.350955,160 C246.813955,160 248,161.18585 248,162.649211 L248,205.350603 C248,206.813778 246.813769,208 245.350955,208 L233.119305,208 L233.119305,189.411755 L239.358521,189.411755 L240.292755,182.167586 L233.119305,182.167586 L233.119305,177.542641 C233.119305,175.445287 233.701712,174.01601 236.70929,174.01601 L240.545311,174.014333 L240.545311,167.535091 C239.881886,167.446808 237.604784,167.24957 234.955552,167.24957 C229.424834,167.24957 225.638355,170.625526 225.638355,176.825209 L225.638355,182.167586 L219.383122,182.167586 L219.383122,189.411755 L225.638355,189.411755 L225.638355,208 L225.638355,208 Z" id="Facebook"> </path> </g> </g> </g></svg></li>
                                <li class="col pt-3"><svg width="113px" height="113px" viewBox="0 -7 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>Youtube-color</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Color-" transform="translate(-200.000000, -368.000000)" fill="#CE1312"> <path d="M219.044,391.269916 L219.0425,377.687742 L232.0115,384.502244 L219.044,391.269916 Z M247.52,375.334163 C247.52,375.334163 247.0505,372.003199 245.612,370.536366 C243.7865,368.610299 241.7405,368.601235 240.803,368.489448 C234.086,368 224.0105,368 224.0105,368 L223.9895,368 C223.9895,368 213.914,368 207.197,368.489448 C206.258,368.601235 204.2135,368.610299 202.3865,370.536366 C200.948,372.003199 200.48,375.334163 200.48,375.334163 C200.48,375.334163 200,379.246723 200,383.157773 L200,386.82561 C200,390.73817 200.48,394.64922 200.48,394.64922 C200.48,394.64922 200.948,397.980184 202.3865,399.447016 C204.2135,401.373084 206.612,401.312658 207.68,401.513574 C211.52,401.885191 224,402 224,402 C224,402 234.086,401.984894 240.803,401.495446 C241.7405,401.382148 243.7865,401.373084 245.612,399.447016 C247.0505,397.980184 247.52,394.64922 247.52,394.64922 C247.52,394.64922 248,390.73817 248,386.82561 L248,383.157773 C248,379.246723 247.52,375.334163 247.52,375.334163 L247.52,375.334163 Z" id="Youtube"> </path> </g> </g> </g></svg></li>
                                <li class="col pt-3"><svg width="119px" height="119px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#0A66C2" d="M12.225 12.225h-1.778V9.44c0-.664-.012-1.519-.925-1.519-.926 0-1.068.724-1.068 1.47v2.834H6.676V6.498h1.707v.783h.024c.348-.594.996-.95 1.684-.925 1.802 0 2.135 1.185 2.135 2.728l-.001 3.14zM4.67 5.715a1.037 1.037 0 01-1.032-1.031c0-.566.466-1.032 1.032-1.032.566 0 1.031.466 1.032 1.032 0 .566-.466 1.032-1.032 1.032zm.889 6.51h-1.78V6.498h1.78v5.727zM13.11 2H2.885A.88.88 0 002 2.866v10.268a.88.88 0 00.885.866h10.226a.882.882 0 00.889-.866V2.865a.88.88 0 00-.889-.864z"></path></g></svg></li>
                            </ul>

                        </div>
                        </div>
                   </div>
            </div>
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
