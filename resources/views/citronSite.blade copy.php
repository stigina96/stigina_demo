<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Citron Holidays</title>
  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;600&display=swap" rel="stylesheet">

  <style>
    .navbar-brand span {
      color: #9d4f9d;
      font-weight: bold;
      font-size: 20px;
    }

    .category-container {
  /* display: flex; */
  /* justify-content: center;  */
  /* align-items: center;      */
  /* gap: 30px; */
  /* padding: 20px 40px; */
  /* background: rgba(34, 32, 32, 0.4); */
  /* border: 1px solid rgba(255, 255, 255, 0.3); */
  /* border-radius: 20px; */
  /* backdrop-filter: blur(1px); */
  /* margin-bottom: 20px; */
  /* width: 710px; */
  /* height: 191px; */
  /* top: 612px; */
  /* margin-top: 20px; */
 /* margin-left: 20%; */


  display: flex;
  justify-content: center;
  margin: 0 auto;
  max-width: fit-content;
  backdrop-filter: blur(1px);
  background: rgba(34, 32, 32, 0.4);
  border: 1px solid rgba(255, 255, 255, 0.3); 
  border-radius: 20px; 
  padding: 10px 30px; 
  gap: 30px;
  top: 612px; 
  margin-top: 20px;
  height: 191px;
}

    .navbar-nav .nav-link {
      color: #000 !important;
      font-size: 16px !important;
      margin-right: 15px;
      transition: color 0.3s;
      font-family: Roboto;
        font-weight: 400;
        line-height: 100%;
        letter-spacing: 0%;
        text-transform: capitalize;
    }

    .navbar-nav .nav-link.active,
    .navbar-nav .nav-link:hover {
      color: #0072ce !important;
    }

    .btn-contact {
        width: 133px;
        height: 52px;
        padding-top: 18px !important;
        /* padding-left: 1745px !important; */
        border-radius: 35px;
        background-color: #026DB8;
        font-family: Roboto, sans-serif;
        font-weight: 600;
        font-size: 16px;
        line-height: 100%;
        letter-spacing: 0;
        text-transform: capitalize;
        color: #fff;
        
}

    .btn-contact:hover {
      background-color: #005fa3;
      color: #fff;
    }

    .logo-img {
        width: 213;
        height: 119;
        top: -17px;
        left: 57px;

    }
    body {
  margin: 0;
  font-family: 'Roboto', sans-serif;
}

.main_section {
  background-image: url('/images/maincover.png');
  background-size: cover;
  background-position: center;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  color: #fff;
  padding: 0 20px;
}

.main_section-content {
  /* max-width: 600px; */
  margin-bottom: 20% !important;
  
}

.main_section h3 {
    font-family: Roboto;
}
.main_section_head{
        width: 1004px; 
        /* height: 134px;   */
        top: 206px; 
        left: 466px; 
        font-family: Roboto;
        font-weight: 500;
        font-size: 40px;
        line-height: 41px;
        letter-spacing: -0.5px;
        text-align: center;
        padding-left:22px;
        /* text-transform: capitalize; */


}

.customers {
  display: flex;
  flex-direction: column;
  align-items: center;
  /* margin-bottom: 20px; */
  margin-top: 25px !important;
}

.avatars {
  display: flex;
  align-items: center;
}

.avatars img {
    width: 181;
    height: 60.0552978515625;
    top: 369px;
    left: 876px;
    border-width: 3px;
    border-radius: 50%;
    border: 1px solid #fff; /* Optional: white border around avatars */
    margin-left: -21px; /* Overlap effect */
    object-fit: cover;
}

.enquire-button {
  display: inline-block;
  padding: 10px 30px;
  border: 1px solid #fff;
  color: #fff;
  text-decoration: none;
  font-weight: 500;
  transition: background 0.3s;
  width: 173px;
/* height: 47; */
/* top: 524px; */
/* left: 873px; */
border-radius: 35.42px;
border-width: 1px;
width: 61;
height: 21;
top: 13px;
left: 56px;
opacity: 0.7;
margin-top: 20px;
}

.enquire-button:hover {
  background: rgba(255, 255, 255, 0.2);
}
.strong-text{
    font-size: 24px ;
    line-height: 0.7;
}
.happy_customer_text{
    font-size:12px;
    font-family: Roboto;
    color: #FFFFFFC4;
    margin-top: 20px;
}


/* Category Cards */
.category-container {
  display: flex;
  gap: 30px;
  padding: 20px 40px;
  background: rgba(0, 0, 0, 0.4);
  border: 1px solid rgba(255, 255, 255, 0.3);
  border-radius: 20px;
  backdrop-filter: blur(10px);
  margin-bottom: 20px;
  width: 600px;
  justify-items: center;
  /* height: 191px; */
  top: 612px;

}

.category-card {
  text-align: center;
  color: white;
}

.category-card img {
  width: 70px;
  height: 70px;
  border-radius: 50%;
  object-fit: cover;
  margin-bottom: 8px;
  border: 2px solid white;
}

/* Search Bar */
.search-bar {
  display: flex;
  gap: 15px;
  background: rgba(255, 255, 255, 0.3);
  padding: 12px 20px;
  border-radius: 30px;
  backdrop-filter: blur(5px);
  align-items: center;
}

.search-bar input {
  padding: 8px 12px;
  border: none;
  border-radius: 20px;
  outline: none;
}

.enquire-btn {
  background: white;
  color: #000;
  border: none;
  padding: 10px 20px;
  border-radius: 20px;
  cursor: pointer;
}

/* Floating Buttons */
.floating-buttons {
  position: fixed;
  right: 20px;
  bottom: 20px;
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.call-btn, .whatsapp-btn {
  width: 40px;
  height: 40px;
  background: white;
  border-radius: 50%;
  text-align: center;
  line-height: 40px;
  font-size: 20px;
  text-decoration: none;
  color: black;
}

.whatsapp-btn {
  background: #25d366;
  color: white;
}





</style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-white shadow-sm px-4">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="/images/citron.png" alt="Citron Logo" class="logo-img"/>
        <!-- <img src="logo.png" alt="Citron Logo" class="logo-img"> -->
       
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav align-items-center">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Holiday</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Visa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">City Tours</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Offers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blogs</a>
          </li>
          <li class="nav-item ms-2">
            <a href="#" class="btn btn-contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section class="main_section">
    <div class="main_section-content">
      <h3 class="main_section_head">Discover the world with citron tours,<br> your journey begins here</h3>
      <div class="customers">
        <div class="avatars">
          <img src="/images/Ellipse 164.png" alt="User 1" />
          <img src="/images/Ellipse 165.png" alt="User 2" />
          <img src="/images/Ellipse 166.png" alt="User 3" />
          <img src="/images/Ellipse 167.png" alt="User 4" />
        </div>
        <br>
        <div>
          <div class="text-white text-lg font-bold strong-text">5000+<br/>
            <span class="text-sm happy_customer_text">Happy Customers</span>
            </div>
        </div>
      </div>
      <a href="#" class="enquire-button">Enquire</a>
<!---next section--->
<div class="category-container">
    <div class="category-card">
      <img src="/images/image1.png" alt="Holiday">
      <p>Holiday</p>
    </div>
    <div class="category-card">
      <img src="/images/image2.png" alt="Visa">
      <p>Visa</p>
    </div>
    <div class="category-card">
      <img src="/images/image3.png" alt="City Tours">
      <p>City Tours</p>
    </div>
    <div class="category-card">
      <img src="/images/image4.png" alt="Offers">
      <p>Offers</p>
    </div>
  </div>
  <div class="search-bar">
    <input type="text" placeholder="🔍 Search destinations">
    <input type="text" placeholder="📍 From">
    <input type="text" placeholder="📍 To">
    <input type="date" placeholder="📅 Travel Date">
    <button class="enquire-btn">Enquire</button>
  </div>
  <div class="floating-buttons">
    <a href="#" class="call-btn">📞</a>
    <a href="#" class="whatsapp-btn">🟢</a>
  </div>
<!-----end next section--->



    </div>
  </section>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>











<div class="testimonials-section pt-5" style="background-color: #D9D9D94F;">
        <div class="testimonials-heading pl-5" style="padding-left:10px;">Testimonials</div>
        <b><h2 class="nexttest pl-5" style="font-weight: 700;padding-left:10px;">Our Customer Reviews</h2></b>
        
        <div class="testimonials-container">
            <!-- Testimonial 1 -->
            <div class="testimonial-card">
                <div class="quote-icon">&#8220;</div>
                <p class="testimonial-text">"I had the most incredible vacation experience thanks to the amazing team at XYZ Travel Agency! From the moment I contacted them, their friendly and knowledgeable staff helped me plan the perfect itinerary.</p>
                <div class="star-rating">★ ★ ★ ★ ★</div>
                <div class="customer-info">
                    <div class="customer-image">
                        <img src="/images/Ellipse 165.png" alt="Nora Acholo profile picture">
                    </div>
                    <div>
                        <div class="customer-name">Nora Acholo</div>
                        <div class="customer-title">Tripster</div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="testimonial-card">
                <div class="quote-icon">&#8220;</div>
                <p class="testimonial-text">"I had the most incredible vacation experience thanks to the amazing team at XYZ Travel Agency! From the moment I contacted them, their friendly and knowledgeable staff helped me plan the perfect itinerary.</p>
                <div class="star-rating">★ ★ ★ ★ ★</div>
                <div class="customer-info">
                    <div class="customer-image">
                        <img src="/images/Ellipse 165.png" alt="Nora Acholo profile picture">
                    </div>
                    <div>
                        <div class="customer-name">Nora Acholo</div>
                        <div class="customer-title">Tripster</div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="testimonial-card">
                <div class="quote-icon">&#8220;</div>
                <p class="testimonial-text">"I had the most incredible vacation experience thanks to the amazing team at XYZ Travel Agency! From the moment I contacted them, their friendly and knowledgeable staff helped me plan the perfect itinerary.</p>
                <div class="star-rating">★ ★ ★ ★ ★</div>
                <div class="customer-info">
                    <div class="customer-image">
                        <img src="/images/Ellipse 165.png" alt="Nora Acholo profile picture">
                    </div>
                    <div>
                        <div class="customer-name">Nora Acholo</div>
                        <div class="customer-title">Tripster</div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 4 -->
            <div class="testimonial-card">
                <div class="quote-icon">&#8220;</div>
                <p class="testimonial-text">"I had the most incredible vacation experience thanks to the amazing team at XYZ Travel Agency! From the moment I contacted them, their friendly and knowledgeable staff helped me plan the perfect itinerary.</p>
                <div class="star-rating">★ ★ ★ ★ ★</div>
                <div class="customer-info">
                    <div class="customer-image">
                        <img src="/images/Ellipse 165.png" alt="Nora Acholo profile picture">
                    </div>
                    <div>
                        <div class="customer-name">Nora Acholo</div>
                        <div class="customer-title">Tripster</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="navigation">
            <div class="nav-button">←</div>
            <div class="nav-button">→</div>
        </div>
    </div>


















    nnnnnn


    <div class="container-fluid" style="background-color: #D4D4D4;">
  <div class="row">
    <div class="col-sm-6">
            <p class="card-title" style="color: #006FCF;padding-left:7px;">Why Choose us</p>
            <b><h4 class="card-text p-2" style="font-weight: 700;">Your Trusted Partner in Curating Unforgettable<br> Travel Experiences</h4></b>
    </div>
  </div>
  </div>
  <!------------>
  <div class="container67">
        <div class="feature-box">
            <div class="feature-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                </svg>
            </div>
            <div class="feature-title">Competitive Pricing</div>
            <div class="feature-description">
                Enjoy top-notch travel services at unbeatable rates. We prioritize offering the best value for your dream journeys without compromising quality.
            </div>
        </div>
        
        <div class="feature-box">
            <div class="feature-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                </svg>
            </div>
            <div class="feature-title">Expert Assistance</div>
            <div class="feature-description">
                Enjoy top-notch travel services at unbeatable rates. We prioritize offering the best value for your dream journeys without compromising quality.
            </div>
        </div>
        
        <div class="feature-box">
            <div class="feature-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zM4.882 1.731a.482.482 0 0 0 .14.291.487.487 0 0 1-.126.78l-.291.146a.721.721 0 0 0-.188.135l-.48.48a1 1 0 0 1-1.023.242l-.02-.007a.996.996 0 0 0-.462-.04 7.03 7.03 0 0 1 2.45-2.027zm-3 9.674.86-.216a1 1 0 0 0 .758-.97v-.184a1 1 0 0 1 .445-.832l.04-.026a1 1 0 0 0 .152-1.54L3.121 6.621a.414.414 0 0 1 .542-.624l1.09.818a.5.5 0 0 0 .523.047.5.5 0 0 1 .724.447v.455a.78.78 0 0 0 .131.433l.795 1.192a1 1 0 0 1 .116.238l.73 2.19a1 1 0 0 0 .949.683h.058a1 1 0 0 0 .949-.684l.73-2.189a1 1 0 0 1 .116-.238l.791-1.187A.454.454 0 0 1 11.743 8c.16 0 .306.084.392.218.557.875 1.63 2.282 2.365 2.282a.61.61 0 0 0 .04-.001 7.003 7.003 0 0 1-12.658.905z"/>
                </svg>
            </div>
            <div class="feature-title">Worldwide Coverage</div>
            <div class="feature-description">
                Enjoy top-notch travel services at unbeatable rates. We prioritize offering the best value for your dream journeys without compromising quality.
            </div>
        </div>
    </div>