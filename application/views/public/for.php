<link rel="stylesheet" media="all" href="dist/css/for.min.css">

<body class="bg-light-o">
    <nav class="sticky-top py-2 bg-orange border-bottom">
        <div class="container d-flex flex-wrap">
            <ul class="nav me-auto">
                <li class="nav-item"><a href="home" class="nav-link link-light px-2" aria-current="page"> <em
                            class="bi bi-house"> </em> Home</a>
                </li>
                <li class="nav-item"><a href="#" class="nav-link link-light px-2 disabled"><em class="bi bi-pencil">
                        </em>Edit</a></li>
                <li class="nav-item"><a href="#" onclick="printContent('portfolio');"
                        class="nav-link link-light px-2"><em class="bi bi-printer"> </em>Print</a></li>
            </ul>

            <ul id="jumpto" class="nav">
                <li class="nav-item dropdown">
                    <a class="nav-link link-light dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                        aria-expanded="false">Jump to</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#objective">Career Objectives</a></li>
                        <li><a class="dropdown-item" href="#personal-info">Personal Information</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#educ-bg">Educational Background</a></li>
                        <li><a class="dropdown-item" href="#skills">Skills</a></li>
                        <li><a class="dropdown-item" href="#trainings">Seminars/trainings/workshops attended</a></li>
                        <li><a class="dropdown-item" href="#awards">Awards</a></li>
                        <li><a class="dropdown-item" href="#work">Work Experiences</a></li>
                        <li><a class="dropdown-item" href="#affiliation">Affilication</a></li>
                        <li><a class="dropdown-item" href="#ref">Character References</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </nav>
    <header class="py-3 mb-4 border-bottom">
        <div class="container d-flex flex-wrap justify-content-center">
            <div class="row">
                <a href="home"
                    class="col-sm-6 d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
                    <img id="ywLogo" width="30%" class="ywLogo img-fluid" src="dist/img/compo/logo_large.png"
                        alt="YouWork Club Logo" />
                </a>

                <ul class="col-sm-6 nav col-lg-auto mb-3 mb-lg-0">
                    <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Login</a></li>
                    <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Membership</a></li>
                </ul>

            </div>
        </div>
    </header>
    <main>
        <section data-bs-spy="scroll" data-bs-target="#jumpto" data-bs-smooth-scroll="true" id="portfolio"
            class="bg-white">
            <div id="initial">
                <div class="row">
                    <div class="col-sm-8">
                        <h1> MACUTAY, JUDY ANN PALATTAO </h1>
                        <ul>
                            <li>#95 Mother Ignacia Ave., Brgy. South Triangle, Quezon City </li>
                            <li> 0939-851-0790 | macutayjudyann@gmail.com</li>
                            <li> linkedin.com/in/judyannmacutay </li>
                        </ul>
                    </div>
                    <div class="col-sm pull-items-right img-container">
                        <img class="img-fluid" src="dist/img/users/jannmacutay_id.png" alt="user image" />
                    </div>
                </div>
                <div id="objective">
                    <h3> Career Objectives</h3>
                    <p class="txt-justify"> To be able to apply my technical skills, knowledge, education, and
                        experience relative to my degree while exercising my competency in attaining success for a
                        company. </p>
                </div>
            </div>
            <hr>
            <div id="personal-info">
                <h3> Personal Information</h3>
                <div class="row">
                    <div class="col-sm">
                        <table width="100%">
                            <tr>
                                <td> date of birth </td>
                                <td> 10/03/1997</td>
                            </tr>
                            <tr>
                                <td>place of birth </td>
                                <td>Maura Aparri </td>
                            </tr>
                            <tr>
                                <td>sex </td>
                                <td>female </td>
                            </tr>
                            <tr>
                                <td>citizenship </td>
                                <td>filipino </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-sm">
                        <table width="100%">
                            <tr>
                                <td> Language </td>
                                <td> english, filipino</td>
                            </tr>
                            <tr>
                                <td> civil status </td>
                                <td> single</td>
                            </tr>
                            <tr>
                                <td>religion </td>
                                <td>catholic </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <hr>
            <div id="educ-bg">
                <h3> Educational Background</h3>
                <table width="100%" class="table table-bordered">
                    <thead>
                        <tr>
                            <th> LEVEL </th>
                            <th> school </th>
                            <th> year </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Graduate Studies</td>
                            <td> Cagayan State University</td>
                            <td> 2021 - Present</td>
                        </tr>
                        <tr>
                            <td>College</td>
                            <td> Cagayan State University</td>
                            <td> 2014 - 2018</td>
                        </tr>
                        <tr>
                            <td>Secondary </td>
                            <td>Aparri East National High School </td>
                            <td>2010 - 2014</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <hr>
            <div id="skills">
                <h3>Skills</h3>
                <ul>
                    <li>Over three years of web development experience using PHP, JavaScript, SASS, and
                        Codeigniter framework</li>
                    <li>Adaptability to various programming languages, as the need arises</li>
                    <li>Database management using MS SQL Server, and MySQL</li>
                    <li>Photography and Videography</li>
                    <li>Research</li>
                </ul>
            </div>
            <hr>
            <div id="trainings">
                <h3> Seminars/trainings/workshops attended </h3>
                <ul>
                    <!-- <li><strong> </strong> <br>
                        <span> </span><br>
                        <span> </span>
                    </li> -->
                    <li><strong> Web Development for Web Developers</strong> <br>
                        <span> ICT Literacy and Competency Development Bureau </span><br>
                        <span> December 12 - 16, 2022 (40 hrs.)</span>
                    </li>
                    <li><strong> Tech Trends: Data Analytics (Intermediate Session) </strong> <br>
                        <span> Analytics Association of the Philippines </span><br>
                        <span> October 19, 2022 (2 hrs.) </span>
                    </li>
                    <li><strong> Basic Android Development </strong> <br>
                        <span> ICT Literacy and Competency Development Bureau </span><br>
                        <span> October 12, 2022 (6 hrs.) </span>
                    </li>
                    <li><strong> Computer Networking Essentials </strong> <br>
                        <span> Trend Micro </span><br>
                        <span> August 11, 2022 (1 hr.) </span>
                    </li>
                </ul>
            </div>
            <hr>
            <div id="awards">
                <h3> Awards </h3>
                <ul>
                    <li><strong> Service Award </strong> <br>
                        <span>Cagayan State University – Aparri Campus </span><br>
                        <span> June 2, 2018</span>
                    </li>
                    <li><strong> Leadership Award </strong> <br>
                        <span>Cagayan State University – Aparri Campus </span><br>
                        <span> June 2, 2018</span>
                    </li>
                </ul>
            </div>
            <hr>
            <div id="work">
                <h3> work experiences </h3>
                <ul>
                    <li><strong> part-time faculty</strong> <br>
                        <span> cagayan state university - aparri</span><br>
                        <span>aparri, cagayan</span> <br>
                        <span>september 2022 - january 2023 </span>
                    </li>
                    <li><strong> science research specialist i</strong> <br>
                        <span> national fisheries research and development institute</span><br>
                        <span>quezon city </span> <br>
                        <span>august 2019 - december 2022 </span>
                    </li>
                    <li><strong> ADMINISTRATIVE AIDE-III</strong> <br>
                        <span> LOCAL GOVERNMENT UNIT OF APARRI</span><br>
                        <span> Aparri, Cagayan</span> <br>
                        <span>november 2018 - june 2019 </span>
                    </li>
                </ul>
            </div>
            <hr>
            <div id="affiliation">
                <h3> affiliation </h3>
                <ul>
                    <li><strong> Analytics Association of the Philippines</strong> <br>
                        <span> Student Member</span><br>
                        <span>july 2022 - july 2023 </span>
                    </li>
                    <li><strong> Sangguniang Kabataan- Barangay Maura</strong> <br>
                        <span> Councilor</span><br>
                        <span>2018 - present </span>
                    </li>
                </ul>
            </div>
            <hr>
            <div id="ref">
                <h3> Character references</h3>
                <table width="100%" class="table table-bordered">
                    <thead>
                        <tr>
                            <th> name </th>
                            <th> company/position </th>
                            <th> contact </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Julieta B. Babas, DIT</td>
                            <td> Associate Dean, Cagayan State University</td>
                            <td> 0945-792-2512</td>
                        </tr>
                        <tr>
                            <td>Billy S. Javier, PhD, DIT</td>
                            <td> University Professor, Cagayan State University</td>
                            <td> 0926-663-3394</td>
                        </tr>
                        <tr>
                            <td>Mudjekeewis D. Santos, PhD, Scientist IV </td>
                            <td>Training Specialist, National Fisheries Research and Development Institute </td>
                            <td>0917-527-8289</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <hr>
            <div id="certify">
                <p> I hereby certify that the above information and facts provided herein are true and accurate to the
                    best of my knowledge, memory and ability. </p>
                <img src="dist/img/users/jannmacutay_sign.png" id="sign" class="img-fluid" width="100"> <br>
                <strong>judy ann p. macutay</strong>
            </div>



        </section>

        <!-- <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul> -->

    </main>

    <script>
        function printContent(el) {
            var restorepage = $('body').html();
            var printcontent = $('#' + el).clone();
            $('body').empty().html(printcontent);
            window.print();
            $('body').html(restorepage);
        }

        // function printContent(i) {
        //     var data = document.getElementById(i).innerHTML
        //     var myWindow = window.open('', 'My Portfolio', 'height=400, width=600')
        //     myWindow.document.write('<html><head><title>My Port</title>')
        //     myWindow.document.write('<link rel="stylesheet" href="dist/css/for.min.css" type="text/css"></head>')
        //     myWindow.document.write('<body>')
        //     myWindow.document.write(data)
        //     myWindow.document.write('</body></html>')
        //     myWindow.document.close()

        //     myWindow.onload = function () {
        //         myWindow.focus()
        //         myWindow.print()
        //         myWindow.close()
        //     }
        // }
    </script>