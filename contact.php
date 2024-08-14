<?php 
$name = $email = $phone = '';
$nameErr = $emailErr = $phoneErr = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        $nameErr = "This is a required field";
    } else {
    $name = form_input($name);
    }
   
    $email = form_input($email);
    $phone = form_input($phone);
    $comments = form_input($comments);
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

        <link rel="stylesheet" href="./styles.css">
    </head>

    <body>
        <header>
        <nav class="navbar navbar-expand-md bg-custom">
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
            <h1 class="container-fluid text-indigo text-center my-5">Start free consultation </h1>

            <div class="container-fluid">
                <fieldset>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" class="was-validated border p-5">
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
                            <label for="name">Name:</label>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                            <label for="email">Email:</label>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <input type="tel" class="form-control" id="phone" placeholder="000-000-0000" name="phone" required>
                            <label for="phone">Phone:</label>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <textarea class="form-control" placeholder="Enter comments and questions here." col="5" row="5"></textarea>
                            <label for="comments">Comments:</label>
                        </div>

                        <div class="mb-3">*Required Field</div>

                        <input type="submit">

                    </form>
                </fieldset>
            </div>
        </main>


        <footer>
        <div class="container-fluid mt-5">
                   <div class="container-fluid row">
                   <div class="col-sm-3 foot-img"></div>
                        <div class="col-sm-3 ">
                            <h3 class="display-4 text-indigo pt-4">Location</h3>
                            <ul>
                                <li>Atlanta,GA</li>
                                <li>Address-info</li>
                                <li>Email-info</li>
                                <li>Possible Phone-info</li>
                            </ul>
                        </div>

                        <div class="col-sm-3 icon-list">
                            <h5 class="display-4 text-indigo pt-4">Follow EVA</h5>
                            <div>
                            <ul class="row ">
                                <li class="col pt-3"><svg viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>Facebook-color</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Color-" transform="translate(-200.000000, -160.000000)" fill="#4460A0"> <path d="M225.638355,208 L202.649232,208 C201.185673,208 200,206.813592 200,205.350603 L200,162.649211 C200,161.18585 201.185859,160 202.649232,160 L245.350955,160 C246.813955,160 248,161.18585 248,162.649211 L248,205.350603 C248,206.813778 246.813769,208 245.350955,208 L233.119305,208 L233.119305,189.411755 L239.358521,189.411755 L240.292755,182.167586 L233.119305,182.167586 L233.119305,177.542641 C233.119305,175.445287 233.701712,174.01601 236.70929,174.01601 L240.545311,174.014333 L240.545311,167.535091 C239.881886,167.446808 237.604784,167.24957 234.955552,167.24957 C229.424834,167.24957 225.638355,170.625526 225.638355,176.825209 L225.638355,182.167586 L219.383122,182.167586 L219.383122,189.411755 L225.638355,189.411755 L225.638355,208 L225.638355,208 Z" id="Facebook"> </path> </g> </g> </g></svg></li>
                                <li class="col pt-3"><svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <rect x="2" y="2" width="28" height="28" rx="6" fill="url(#paint0_radial_87_7153)"></rect> <rect x="2" y="2" width="28" height="28" rx="6" fill="url(#paint1_radial_87_7153)"></rect> <rect x="2" y="2" width="28" height="28" rx="6" fill="url(#paint2_radial_87_7153)"></rect> <path d="M23 10.5C23 11.3284 22.3284 12 21.5 12C20.6716 12 20 11.3284 20 10.5C20 9.67157 20.6716 9 21.5 9C22.3284 9 23 9.67157 23 10.5Z" fill="white"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M16 21C18.7614 21 21 18.7614 21 16C21 13.2386 18.7614 11 16 11C13.2386 11 11 13.2386 11 16C11 18.7614 13.2386 21 16 21ZM16 19C17.6569 19 19 17.6569 19 16C19 14.3431 17.6569 13 16 13C14.3431 13 13 14.3431 13 16C13 17.6569 14.3431 19 16 19Z" fill="white"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M6 15.6C6 12.2397 6 10.5595 6.65396 9.27606C7.2292 8.14708 8.14708 7.2292 9.27606 6.65396C10.5595 6 12.2397 6 15.6 6H16.4C19.7603 6 21.4405 6 22.7239 6.65396C23.8529 7.2292 24.7708 8.14708 25.346 9.27606C26 10.5595 26 12.2397 26 15.6V16.4C26 19.7603 26 21.4405 25.346 22.7239C24.7708 23.8529 23.8529 24.7708 22.7239 25.346C21.4405 26 19.7603 26 16.4 26H15.6C12.2397 26 10.5595 26 9.27606 25.346C8.14708 24.7708 7.2292 23.8529 6.65396 22.7239C6 21.4405 6 19.7603 6 16.4V15.6ZM15.6 8H16.4C18.1132 8 19.2777 8.00156 20.1779 8.0751C21.0548 8.14674 21.5032 8.27659 21.816 8.43597C22.5686 8.81947 23.1805 9.43139 23.564 10.184C23.7234 10.4968 23.8533 10.9452 23.9249 11.8221C23.9984 12.7223 24 13.8868 24 15.6V16.4C24 18.1132 23.9984 19.2777 23.9249 20.1779C23.8533 21.0548 23.7234 21.5032 23.564 21.816C23.1805 22.5686 22.5686 23.1805 21.816 23.564C21.5032 23.7234 21.0548 23.8533 20.1779 23.9249C19.2777 23.9984 18.1132 24 16.4 24H15.6C13.8868 24 12.7223 23.9984 11.8221 23.9249C10.9452 23.8533 10.4968 23.7234 10.184 23.564C9.43139 23.1805 8.81947 22.5686 8.43597 21.816C8.27659 21.5032 8.14674 21.0548 8.0751 20.1779C8.00156 19.2777 8 18.1132 8 16.4V15.6C8 13.8868 8.00156 12.7223 8.0751 11.8221C8.14674 10.9452 8.27659 10.4968 8.43597 10.184C8.81947 9.43139 9.43139 8.81947 10.184 8.43597C10.4968 8.27659 10.9452 8.14674 11.8221 8.0751C12.7223 8.00156 13.8868 8 15.6 8Z" fill="white"></path> <defs> <radialGradient id="paint0_radial_87_7153" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(12 23) rotate(-55.3758) scale(25.5196)"> <stop stop-color="#B13589"></stop> <stop offset="0.79309" stop-color="#C62F94"></stop> <stop offset="1" stop-color="#8A3AC8"></stop> </radialGradient> <radialGradient id="paint1_radial_87_7153" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(11 31) rotate(-65.1363) scale(22.5942)"> <stop stop-color="#E0E8B7"></stop> <stop offset="0.444662" stop-color="#FB8A2E"></stop> <stop offset="0.71474" stop-color="#E2425C"></stop> <stop offset="1" stop-color="#E2425C" stop-opacity="0"></stop> </radialGradient> <radialGradient id="paint2_radial_87_7153" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(0.500002 3) rotate(-8.1301) scale(38.8909 8.31836)"> <stop offset="0.156701" stop-color="#406ADC"></stop> <stop offset="0.467799" stop-color="#6A45BE"></stop> <stop offset="1" stop-color="#6A45BE" stop-opacity="0"></stop> </radialGradient> </defs> </g></svg></li>
                                <li class="col pt-3"><svg viewBox="0 0 800 800" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="m0 0h800v800h-800z"></path> <path d="m196 498.3 1.6 4.6c-.2-.5-.8-2.1-1.6-4.6zm64.9-104.9c2.9-24.9 12.7-38.8 31.1-53.1 26.4-19.3 59.3-8.4 59.3-8.4v-64.9c8-.2 16 .3 23.9 1.5v83.5s-32.9-10.9-59.3 8.4c-18.4 14.3-28.2 28.2-31.1 53.1-.1 13.5 2.3 31.2 13.5 46.4-2.8-1.5-5.6-3.2-8.5-5.1-24.5-17.2-29-43.1-28.9-61.4zm250.4-246.4c-18.1-20.7-25-41.7-27.5-56.4h22.8s-4.5 38.6 28.6 76.5l.5.5c-9-5.8-17.2-12.8-24.4-20.6zm109.9 58.8v81.8s-29.1-1.2-50.7-6.9c-30.1-8-49.4-20.3-49.4-20.3s-13.4-8.8-14.4-9.4v169c0 9.4-2.5 32.9-10 52.5-9.8 25.6-25 42.5-27.8 45.9 0 0-18.5 22.8-51 38.1-29.3 13.8-55.1 13.5-62.8 13.8 0 0-44.5 1.8-84.6-25.3-8.7-6-16.8-12.8-24.2-20.3l.2.2c40.1 27.2 84.6 25.3 84.6 25.3 7.7-.3 33.5 0 62.8-13.8 32.5-15.3 51-38.1 51-38.1 2.8-3.4 18-20.3 27.8-45.9 7.5-19.6 10-43.1 10-52.5v-168.9c1.1.6 14.4 9.4 14.4 9.4s19.3 12.3 49.4 20.3c21.6 5.7 50.7 6.9 50.7 6.9v-64.1c10 2.3 18.5 2.9 24 2.3z" fill="#ee1d52"></path> <path d="m597.2 203.4v64.1s-29.1-1.2-50.7-6.9c-30.1-8-49.4-20.3-49.4-20.3s-13.4-8.8-14.4-9.4v169c0 9.4-2.5 32.9-10 52.5-9.8 25.6-25 42.5-27.8 45.9 0 0-18.5 22.8-51 38.1-29.3 13.8-55.1 13.5-62.8 13.8 0 0-44.5 1.8-84.6-25.3l-.2-.2c-4.2-4.3-8.2-8.8-11.9-13.5-12.8-16.3-20.6-35.5-22.6-41v-.1c-3.2-9.5-9.8-32.5-8.9-54.6 1.6-39.1 14.8-63.2 18.3-69.2 9.2-16.4 21.3-31.1 35.5-43.4 12.6-10.6 26.9-19.1 42.2-25 16.6-7 34.4-10.7 52.4-11v64.9s-32.9-10.9-59.3 8.4c-18.4 14.3-28.2 28.2-31.1 53.1-.1 18.3 4.4 44.2 29 61.5 2.9 1.9 5.7 3.6 8.5 5.1 4.3 5.8 9.5 10.9 15.5 15.1 24.1 15.9 44.2 17 70 6.7 17.2-6.9 30.1-22.4 36.1-39.7 3.8-10.8 3.7-21.6 3.7-32.8v-318.6h60c2.5 14.7 9.3 35.7 27.5 56.4 7.3 7.8 15.5 14.8 24.4 20.6 2.6 2.9 16.1 16.9 33.5 25.6 8.9 4.5 18.4 7.9 28.1 10.2z" fill="#ffffff"></path> <g fill="#69c9d0"> <path d="m187.9 450.4 1.5 4.3c-.2-.5-.8-2-1.5-4.3z"></path> <path d="m298.9 278c-15.4 5.9-29.6 14.4-42.2 25-14.3 12.3-26.3 27.1-35.5 43.5-3.5 6-16.7 30-18.3 69.2-.9 22.2 5.8 45.1 8.9 54.6v.1c2 5.4 9.8 24.7 22.6 41 3.7 4.7 7.7 9.2 11.9 13.5-13.6-9.4-25.6-20.7-35.9-33.6-12.7-16.1-20.5-35.2-22.5-40.8v-.2c-3.2-9.5-9.9-32.5-8.9-54.7 1.6-39.1 14.8-63.2 18.3-69.2 9.2-16.4 21.2-31.2 35.5-43.5 12.6-10.6 26.9-19.1 42.2-25 9.6-4 19.6-6.9 29.8-8.8 15.4-2.7 31.1-2.9 46.6-.7v18.6c-18.1.3-35.9 4-52.5 11z"></path> <path d="m483.8 90.6h-60v318.6c0 11.2 0 22-3.7 32.8-6.1 17.2-19 32.8-36.1 39.7-25.8 10.4-46 9.2-70-6.7-6-4.1-11.2-9.2-15.5-15 20.5 10.9 38.8 10.7 61.5 1.6 17.2-6.9 30.1-22.5 36.1-39.7 3.8-10.8 3.7-21.6 3.7-32.8v-318.6h82.9c-.1 0-1 7.9 1.1 20.1zm113.4 95.1v17.7c-9.7-2.3-19.2-5.7-28.1-10.2-17.3-8.6-30.8-22.7-33.5-25.6 3.1 2 6.2 3.8 9.5 5.5 21.2 10.5 41.9 13.7 52.1 12.6z"></path> </g> <path d="m486.9 701.5c-.7-2.2-1-4.4-1-6.7v-.2c0 2.4.3 4.7 1 6.9zm49.5-6.9v.2c0 2.3-.3 4.5-1 6.7.7-2.2 1-4.5 1-6.9z" fill="none"></path> <path d="m485.8 694.8c0 2.3.3 4.5 1 6.7 0 .2.1.3.1.5 3.3 10.6 13.1 17.8 24.2 17.8v25.6c-12.5 0-21.4.4-35-7.6-15.4-9.2-24.1-25.9-24.1-43.3 0-17.9 9.7-35.9 26.3-44.6 12-6.3 21.1-6.3 32.9-6.3v25.6c-14 0-25.3 11.3-25.3 25.3z" fill="#69c9d0"></path> <path d="m536.6 694.8c0 2.3-.3 4.5-1 6.7 0 .2-.1.3-.1.5-3.3 10.6-13.1 17.8-24.2 17.8v25.6c12.4 0 21.4.4 34.9-7.6 15.5-9.2 24.2-25.9 24.2-43.3 0-17.9-9.7-35.9-26.3-44.6-12-6.3-21.1-6.3-32.9-6.3v25.6c14 0 25.3 11.3 25.3 25.3v.3z" fill="#ee1d52"></path> <path d="m119.5 620.4h93.7l-8.7 25.8h-24.5v98.7h-30.1v-98.7h-30.4zm248.4 0v25.8h30.4v98.7h30.2v-98.7h24.5l8.7-25.8zm-134.3 29.3c8.1 0 14.6-6.5 14.6-14.6s-6.5-14.6-14.6-14.6-14.6 6.5-14.6 14.6 6.5 14.6 14.6 14.6zm-14.6 95.1h29.6v-84.8h-29.6zm136-95.8h-34.6l-29.8 29.8v-58.4h-29.4l-.1 124.3h29.7v-32.4l9.2-8.4 28.8 40.8h31.7l-41.7-59.6zm283.8 36.2 36.2-36.2h-34.6l-29.8 29.8v-58.4h-29.4l-.2 124.4h29.7v-32.4l9.3-8.4 28.8 40.8h31.7zm-76.1 9.2c0 28.1-23.1 50.9-51.6 50.9s-51.6-22.8-51.6-50.9 23.1-50.9 51.6-50.9 51.6 22.8 51.6 50.9zm-26.3 0c0-14-11.3-25.3-25.3-25.3s-25.3 11.3-25.3 25.3 11.3 25.3 25.3 25.3 25.3-11.3 25.3-25.3z" fill="#ffffff"></path> </g></svg></li>
                                <li class="col pt-3"><svg viewBox="0 -7 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>Youtube-color</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Color-" transform="translate(-200.000000, -368.000000)" fill="#CE1312"> <path d="M219.044,391.269916 L219.0425,377.687742 L232.0115,384.502244 L219.044,391.269916 Z M247.52,375.334163 C247.52,375.334163 247.0505,372.003199 245.612,370.536366 C243.7865,368.610299 241.7405,368.601235 240.803,368.489448 C234.086,368 224.0105,368 224.0105,368 L223.9895,368 C223.9895,368 213.914,368 207.197,368.489448 C206.258,368.601235 204.2135,368.610299 202.3865,370.536366 C200.948,372.003199 200.48,375.334163 200.48,375.334163 C200.48,375.334163 200,379.246723 200,383.157773 L200,386.82561 C200,390.73817 200.48,394.64922 200.48,394.64922 C200.48,394.64922 200.948,397.980184 202.3865,399.447016 C204.2135,401.373084 206.612,401.312658 207.68,401.513574 C211.52,401.885191 224,402 224,402 C224,402 234.086,401.984894 240.803,401.495446 C241.7405,401.382148 243.7865,401.373084 245.612,399.447016 C247.0505,397.980184 247.52,394.64922 247.52,394.64922 C247.52,394.64922 248,390.73817 248,386.82561 L248,383.157773 C248,379.246723 247.52,375.334163 247.52,375.334163 L247.52,375.334163 Z" id="Youtube"> </path> </g> </g> </g></svg></li>
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
