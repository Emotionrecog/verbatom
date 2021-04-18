<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VerbAtom</title>
    <link rel="icon" href="images/lg2.png">
    
    <!-- Link to stylesheet -->
    <link rel="stylesheet" href="style3.css" />
    <!-- Link to font awesome online -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
    <!-- Link to selected google fonts  -->
    <link
      href="https://fonts.googleapis.com/css2?family=PT+Serif:ital@1&family=Roboto+Slab:wght@100&display=swap&family=Baloo+Da+2:wght@400;500;600;700;800&family=Josefin+Slab:ital,wght@0,400;0,600;1,300;1,400;1,600&family=Muli:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" 
    href="path/to/font-awesome/css/font-awesome.min.css"/>
  </head>


  <body>
    
    <div class="spinner-container">
      <div class="circles">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>

    <div class="container">
      <div class="hamburger-menu">
        <div class="line line-1"></div>
        <div class="line line-2"></div>
        <div class="line line-3"></div>
        <span>Close</span>
      </div>
      
      <header class="header">
        <div class="img-wrapper">
          <img src="images/bg.jpg" />
        </div>
        <div class="banner">
          
          <h1><img src="images/lg1.png"></h1>
          <P class="uder"></P>
          <p><b>More than you feel|More than you realize</b></p>
          <div></div>
          <i class="fa fa-smile-o" aria-hidden="true"></i>
          <a href="#about"><button>Discover now</button></a>
        </div>
      </header>

      <section class="sidebar">
        <ul class="menu">
          <li class="menu-item">
            <a href="#" class="menu-link" data-content="Home">Home</a>
          </li>
          <li class="menu-item">
            <a href="#about" class="menu-link" data-content="About">About</a>
          </li>
          <li class="menu-item">
            <a href="#services" class="menu-link" data-content="Services">Services</a>
          </li>
          <li class="menu-item">
            <a href="#howtouse" class="menu-link" data-content="How to use">How to use?</a>
          </li>
          <li class="menu-item">
            <a href="#team" class="menu-link" data-content="Team">Team</a>
          </li>
          <li class="menu-item">
            <a href="#contact" class="menu-link" data-content="Contact">Contact</a>
          </li>
        </ul>
        
      </section>


<!-- For About -->
<section id="about" class="about">
  <div class="section-header">
    <h1 class="section-heading">About</h1>
    <div class="underline"></div>
    <div class="question">
      <h1 ><b>What?</b></h1>
      <h2 >VerbAtom is an Automatic Emotion Recognition System (AERS), which is the process of determining the basic emotional state of a person by analysing certain abstract features and later classifying them into human recognisable manner.</h2>
    </div>
    <div class="question">
      <h2 >In this era of growing Human Machine Interface (HMI) technology, the automatic recognition of emotion is a crucial task. Although it is straightforward to sense other people’s emotion, it still takes paramount effort for machines to precisely interpret the complicated emotions of a human. So we have built a modal that could make this task easier.</h1>
      <h1 ><b>Why?</b></h2>
  </div>
  </div>
</section>
<!-- End of About -->

<!-- For Services -->
<section id="services" class="service">
  <div class="service-header">
    <h1 class="service-heading">Services</h1>
    <div class="underline"></div>
    <div class="service-question">
      <h1>The primary idea was to develop an AERS which could recognize four major emotions of the subject:</h1>
      
      <div class="emotic">
        
      <div class="emoji emoji--haha">
        <div class="emoji__face">
          <div class="emoji__eyes"></div>
          <div class="emoji__mouth">
            <div class="emoji__tongue"></div>
          </div>
        </div>
      </div>
      
      <div class="emoji emoji--yay">
        <div class="emoji__face">
          <div class="emoji__eyebrows"></div>
          <div class="emoji__mouth"></div>
        </div>
      </div>
      <div class="emoji emoji--wow">
        <div class="emoji__face">
          <div class="emoji__eyebrows"></div>
          <div class="emoji__eyes"></div>
          <div class="emoji__mouth"></div>
        </div>
      </div>
      <div class="emoji emoji--sad">
        <div class="emoji__face">
          <div class="emoji__eyebrows"></div>
          <div class="emoji__eyes"></div>
          <div class="emoji__mouth"></div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<!-- End of Services -->

<!-- For how to use -->
<section id="howtouse" class="about">
  <div class="section-header">
    <h1 class="section-heading">How to use?</h1>
    <div class="underline"></div>
    <h2 class="multimodal"> <b>The model takes multimodality inputs and fuse them</b></h2>

    <div class="cards-wrapper">
      <div class="card" data-tilt>
        <div class="card-img-wrapper">
          <img src="images/face2.jpg" alt="Niranjan" />
        </div>
        <div class="card-info">
            <h5><b>Modality: 1</b></h5>
          <h2><b>Facial Expressions</b></h2>
          <br>
          <h3>Facial expression is the motion or position of the muscles beneath the skin of the face.</h3>
        </div>
      </div>

      <div class="card" data-tilt>
        <div class="card-img-wrapper">
          <img src="images/Speech.png" alt="Gokul" />
        </div>
        <div class="card-info">
        <h6><b>Modality: 2</b></h6>
          <h2><b>Speech signal</b></h2>
          <br>
          <h3>Speech signal (Audio) is the recording of the waves genereated by the vocal tract and glottal pulse.</h3>
        </div>
      </div>
      
      <div class="card" data-tilt>
        <div class="card-img-wrapper">
          <img src="images/EEG.jpg" alt="Noviya" />
        </div>
  
        <div class="card-info">
            <h4><b>Modality: 3</b></h4>
          <h2><b>Electroencephalogram</b></h2>
          <br>
          <h3>Electroencephalogram (EEG) is a recording of the electrical activity of the brain from the scalp. This waveforms reflect the cortical electrical activity.</h3>
        </div>
      </div>

    </div>
    
    <section id="about" class="about">
      <div class="section-header">
        <h1 class="section-heading">4 Easy steps to configure</h1>
      


        <section id="timeline">
          <article>
            <div class="inner">
              <span class="date">
                <span class="day">Step 1</span>
                
              </span>
              <h2>Extract Raw Information</h2>
              <p>1. Facial expression using camera</p>
              <p>2. Speech signal using voice recorder</p>
              <p>3. EEG signal using electrodes based on "International 10/20 system"</p>
            </div>
          </article>
          <article>
            <div class="inner">
              <span class="date">
                <span class="day">Step 2</span>
              </span>
              <h2>Restructue Extracted Data</h2>
              <p>1. Resize the facial image dimention to [48,48,1]</p>
              <p>2. Sample the audio signal at 3.5Secs offset</p>
              <p>3. Extract only prefrontal and temporal lobe channel info from EEG signal </p>
              <p>Use the given code to do the following    <a href=#><i class="fab fa-github"></i></a></p>
            </div>
          </article>
          <article>
            <div class="inner">
              <span class="date">
                <span class="day">Step 3</span>
              </span>
              <h2>Convert and extract features</h2>
              <p>1. Convert the time series data to MFCCs</p>
              <p>2. Extract the features using PTMs</p>
              <p>Use the given code to do the following    <a href=#><i class="fab fa-github"></i></a></p>
            </div>
          </article>
          <article>
            <div class="inner">
              <span class="date">
                <span class="day">Step 4</span>
              </span>
              <h2>Find subject's emotion </h2>
              <p>1. Fuse the unimodal features</p>
              <p>2. Find the emotion</p>
              <p>Use the given code to do the following    <a href=#><i class="fab fa-github"></i></a></p>
            </div>
          </article>
        </section>




        <img class="block" src="images/newblock2.png">




      </div>
      </div>
    </section>
    
    




  </div>
</section>
<!-- End of how to use -->

<!-- For Our team-->
<section id="team" class="team">
  <div class="guide-header">
    <h1 class="service-heading">Our Team</h1>
    <div class="underline"></div>
  </div>

  <h1 class="guide-heading"><b>Guide</b></h1>
  <section>
    <div class="gcontainer">
        <div class="ggrid">
            <div class="gleft">
                <img src="images/aravinth sir.jpg" alt="Dr. J Aravinth">
            </div>
            <div class="gright">
                <h1>Dr. J Aravinth</h1>
                <p>Currently serving as an Assistant Professor (Senior Grade) at the the Department of Electronics and Communication Engineering, Amrita Vishwa Vidyapeetham, Coimbatore campus.</p>
                <a href="https://scholar.google.co.in/citations?user=3I_UfcgAAAAJ&hl=en" target="_blank"><i class="fab fa-google"></i></a>
                <a href="https://www.amrita.edu/faculty/j-aravinth" target="_blank"><i class="fas fa-university"></i></a>
                <a href="mailto: j_aravinth@cb.amrita.edu" target="_blank"><i class="fas fa-envelope"></i></a>
                <a href="https://www.linkedin.com/in/aravinth-j-b8337625/" target="_blank"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </div>
</section>

  <h1 class="guide-heading"><b>Team members</b></h1>
  <br><br><br><br><br>


  <div class="tcontainer">
    <div class ="tcard">
      <div class="timgbx">
        <img src="images/n1.JPG">
      </div>
      <div class="tcontent">
        <h2><b>Niranjan Cholendiran</b></h2>
        <p>Student at ASE</p>
            <a href="mailto:niranjancholendiran@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a>
            <a href="https://www.linkedin.com/in/niranjan-cholendiran" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="https://www.instagram.com/niranjan_ajay_/" target="_blank"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class ="tcard">
      <div class="timgbx">
        <img src="images/noviya.jpg">
      </div>
      <div class="tcontent">
        <h2><b>Noviya Balasubramaniyam</b></h2>
        <p>Student at ASE</p>
            <a href="mailto:noviya2000@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a>
            <a href="https://www.linkedin.com/in/noviyab/" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="https://www.instagram.com/__novi_ya__/" target="_blank"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class ="tcard">
      <div class="timgbx">
        <img src="images/person-3.jpg">
      </div>
      <div class="tcontent">
        <h2><b>Gokul Subramanian</b></h2>
        <p>Student at ASE</p>
            <a href="mailto:gokulspriv@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a>
            <a href="https://www.linkedin.com/in/gokul-subramanian-3a2788182/" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="https://www.instagram.com/supwithgok/"target="_blank"><i class="fab fa-instagram"></i></a>
          
      </div>
    </div>
    <div class ="tcard">
      <div class="timgbx">
        <img src="images/person-4.jpg">
      </div>
      <div class="tcontent">
        <h2><b>Prathyusha Kotapati</b></h2>
        <p>Student at ASE</p>
            <a href="mailto:prathyusha.kotapati31@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a>
            <a href="https://www.linkedin.com/in/prathyusha-kotapati-048765146/" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="https://www.instagram.com/_prathy_usha/" target="_blank"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  
  </div>
  
</section>

<!-- End of our team-->

<!-- For contact us-->
<section id="contact" class="contact">
  <div class="contact-wrapper">
    <div class="contact-left"></div>
    <div class="contact-right">
      <h1 class="contact-heading">Contact</h1>
      <form action="https://formspree.io/f/xeqvoaya" method="POST">
        <div class="input-group">
          <input type="text" name="name" class="field" />
          <label class="input-label">Full Name</label>
        </div>
        <div class="input-group">
          <input type="email" name="email" class="field" />
          <label class="input-label">Email</label>
        </div>
        <div class="input-group">
          <textarea class="field" name="message"></textarea>
          <label class="message">Message</label>
        </div>
        <input type="submit" class="submit-btn" value="Submit" />
      </form>
    </div>
  </div>
</section>
<!-- End of contact us-->


      <footer class="footer">
        <div class="footer-content">
          <p class="copyright">
            Copyright &copy; 2021, CodeAndCreate - All Rights Reserved
          </p>
          
        </div>
      </footer>
      <a href="#" class="scroll-btn">
        <i ><img class="rotate_03" src="images/logo1.png"></i>
      </a>
    </div>
    


    <script src="script.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"
    ></script>
    <script src="tilt.js"></script>
  </body>
</html>













