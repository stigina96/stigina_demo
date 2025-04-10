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
    body{
      background-color: #D9D9D94F;
    }
    .navbar-brand span {
      color: #9d4f9d;
      font-weight: bold;
      font-size: 20px;
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
  /* height: 100%; */
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #D9D9D94F;
  text-align: center;
  color: #fff;
  padding: 0 20px;
  height: 1000px;
}

.main_section-content {
  /* max-width: 600px; */
  margin-top: 40px !important;
  
}

.main_section h3 {
    font-family: Roboto;
}
.main_section_head{
        /* width: 1004px;  */
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
        /* margin-top: 30px; */
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
  justify-content: center;
  margin: 0 auto;
  width: 800px;
  max-width: 100%; /* Allow it to shrink on smaller screens */
  backdrop-filter: blur(1px);
  background: rgba(34, 32, 32, 0.4);
  border: 1px solid rgba(255, 255, 255, 0.3); 
  border-radius: 20px; 
  padding: 4px 21px; 
  gap: 30px;
  top: 612px; 
  margin-top: 20px;
  flex-wrap: wrap; /* Allow wrapping on smaller screens */
}

/* Responsive breakpoint for tablets and smaller devices */
@media (max-width: 768px) {
  .category-container {
    width: 90%;
    padding: 10px;
    gap: 20px;
  }

  .category-card {
    width: 120px;
    height: 120px;
  }

  .category-card img {
    width: 80px;
    height: 80px;
  }
}

/* Extra small devices (phones) */
@media (max-width: 480px) {
  .category-container {
    flex-direction: column;
    align-items: center;
  }

  .category-card {
    width: 100px;
    height: 100px;
  }

  .category-card img {
    width: 70px;
    height: 70px;
  }
}

/* Search Bar */
.search-container {
            display: flex;
            align-items: center;
            width: 100%;
            max-width: fit-content;
            margin-top: 16px;
            /* max-width: 1000px; */
            background-color: rgba(76, 76, 73, 0.6);
            backdrop-filter: blur(5px);
            border-radius: 52px;
            /* padding: 10px 15px; */
            margin: 0 auto;
        }

        .search-item {
            display: flex;
            align-items: center;
            padding: 8px 16px;
            color: #fff;
            flex: 1;
            min-width: 0; /* Prevents flex items from overflowing */
        }

        .search-item:last-child {
            flex: 0.5;
            justify-content: flex-end;
        }

        .search-item svg {
            margin-right: 10px;
            min-width: 20px;
            flex-shrink: 0;
        }

        .search-item input {
            background: transparent;
            border: none;
            color: #fff;
            font-size: 16px;
            width: 100%;
            outline: none;
            padding-left: 5px;
            text-overflow: ellipsis;
        }

        .search-item input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .enquire-btn {
            background-color: #fff;
            color: #0084ff;
            font-weight: 600;
            border: none;
            border-radius: 25px;
            padding: 12px 28px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        .enquire-btn:hover {
            background-color: #f2f2f2;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .search-container {
                flex-wrap: nowrap;
                overflow-x: auto;
                padding: 10px;
            }
            
            .search-item {
                padding: 8px;
                min-width: 120px;
            }
            
            .search-item input {
                font-size: 14px;
            }
            
            .enquire-btn {
                padding: 10px 20px;
                font-size: 14px;
            }
        }




/* Floating Buttons */
.floating-buttons {
  position: fixed;
  right: 20px;
  bottom: 40px;
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.call-btn, .whatsapp-btn {
  width: 40px;
  /* height: 40px; */
  /* background: white; */
  border-radius: 50%;
  text-align: center;
  line-height: 40px;
  font-size: 20px;
  text-decoration: none;
  color: black;
}
.holidaypackage_container{
            display: flex;
            align-items: left;  
            width: 100%;
            justify-content: flex-start;  
            /* backdrop-filter: blur(5px); */
            width: 358px;
            height: 42px;
            top: 922px;
            font-family: Roboto;
            font-weight: 600;
            font-size: 36px;
            line-height: 100%;
            letter-spacing: 0%;

}

.carousel-container {
  max-width: 100%;
  overflow: hidden;
  padding-bottom: 20px;
  margin-top: 76px;
  display: flex;
  flex-direction: column;
  align-items: center; /* centers the nav buttons too */
}
.carousel-container1 {
  max-width: 100%;
  overflow: hidden;
  padding-bottom: 20px;
  display: flex;
  padding-top: 21px;
  flex-direction: column;
  align-items: center; /* centers the nav buttons too */
}

.carousel {
  display: flex;
  gap: 56px;
  overflow-x: auto;
  scroll-behavior: smooth;
  padding: 10px 0;
}

.card {
  flex: 0 0 auto;
  width: 250px;
  height: 160px;
  border-radius: 12px;
  overflow: hidden;
  position: relative;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
}

.card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

.label {
  position: absolute;
  bottom: 10px;
  left: 10px;
  color: white;
  font-weight: bold;
  background: rgba(0, 0, 0, 0.5);
  padding: 4px 10px;
  border-radius: 6px;
  font-size: 14px;
}

.nav-buttons {
  margin-top: 20px;
  display: flex;
  gap: 6px;
  justify-content: flex-end; /* aligns buttons to the right */
  width: 100%; /* take full width so justify works */
  padding-right: 10px; /* optional: adds a little space from the edge */
  /* background-color: #D9D9D94F; */
}
.nav-buttons1 {
  display: flex;
  gap: 6px;
  justify-content: flex-end; /* aligns buttons to the right */
  width: 100%; /* take full width so justify works */
  padding-top: 20px;
  padding-right: 10px; /* optional: adds a little space from the edge */
  /* background-color: #D9D9D94F; */
}


.nav {
  background: white;
  border: none;
  padding: 8px 12px;
  border-radius: 20px;
  font-size: 18px;
  cursor: pointer;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
}

.nav:hover {
  background-color: #f0f0f0;
}
.btn_knowmore {
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
        margin-top: 30px;
        
}
.found_text{
  font-family: Roboto;
font-weight: 400;
font-size: 20px;
line-height: 100%;
letter-spacing: 0%;
text-align: justify;
}
.toptext{
  font-family: Roboto;
font-weight: 600;
font-style: italic;
font-size: 48px;
line-height: 67px;
letter-spacing: -4%;
text-transform: lowercase;

}
.card-texts{
    font-family: Roboto;
    font-weight: 400;
    font-size: 20px;
    line-height: 100%;
    letter-spacing: 0%;
    text-transform: capitalize;
}
.ad-banner {
      display: flex;
      border: 2px solid #007bff;
      border-radius: 10px;
      max-width: 600px;
      font-family: Arial, sans-serif;
      overflow: hidden;
    }

    .ad-banner img {
      width: 200px;
      height: auto;
      border-radius: 10px 0 0 10px;
      object-fit: cover;
    }

    .ad-content {
      padding: 16px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .ad-content small {
      color: gray;
      font-size: 0.85rem;
    }

    .ad-content h3 {
      margin: 8px 0;
      font-size: 1.1rem;
    }

    .ad-content p {
      margin: 4px 0 16px;
      color: #555;
      font-size: 0.9rem;
    }

    .ad-content button {
      padding: 10px 20px;
      background-color: #026DB8;
      color: white;
      border: none;
      border-radius: 20px;
      cursor: pointer;
    }

    .container {
            display: flex;
            gap: 10px;
            max-width: 1000px;
            width: 100%;
        }
        
        .feature-box {
            background-color: white;
            border-radius: 10px;
            padding: 30px 20px;
            text-align: center;
            width: calc(33.33% - 10px);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border: 1px solid #e0e0e0;
        }
        
        
        
        .feature-icon {
            color: #0078d4;
            font-size: 32px;
            margin-bottom: 15px;
        }
        
        .feature-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }
        
        .feature-description {
            font-size: 12px;
            color: #666;
            line-height: 1.5;
        }
    .add-containers{
      display: flex;
      flex-direction: row;
      gap: 20px; /* Space between banners */
      /* max-width: 1200px; */
    }
    @media (max-width: 768px) {
    .add-containers {
      flex-direction: column;
      align-items: center;
    }

    .ad-banner {
      max-width: 90%;
    }
  }
    .container67 {
            display: flex;
            gap: 10px;
            /* max-width: 1000px; */
            width: 100%;
            background-color: #D4D4D4;
            ;
        }
        
        .feature-box {
            background-color: #D9D9D94F;
            border-radius: 10px;
            padding: 30px 20px;
            text-align: center;
            width: calc(33.33% - 10px);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border: 1px solid #978d8d;
        }
        
        .feature-box.active {
            border: 2px solid #0078d4;
            box-shadow: 0 2px 10px rgba(0, 120, 212, 0.2);
        }
        
        .feature-icon {
            color: #0078d4;
            font-size: 32px;
            margin-bottom: 15px;
        }
        
        .feature-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }
        
        .feature-description {
            font-size: 12px;
            color: #666;
            line-height: 1.5;
        }
        .testimonials-heading {
            color: #0078d4;
            font-size: 16px;
            margin-bottom: 8px;
        }
        
        h2 {
            font-size: 24px;
            margin-bottom: 24px;
        }
        
        .testimonials-container {
            display: flex;
            gap: 16px;
            overflow-x: auto;
            padding: 10px 0;
        }
        
        .testimonial-card {
            background-color: white;
            border-radius: 12px;
            padding: 28px;
            min-width: 280px;
            flex: 1;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .quote-icon {
            color: #0078d4;
            font-size: 32px;
            line-height: 1;
            margin-bottom: 10px;
        }
        
        .testimonial-text {
            color: #333;
            font-size: 14px;
            line-height: 1.5;
            margin-bottom: 20px;
        }
        
        .star-rating {
            color: #ffd700;
            font-size: 18px;
            margin-bottom: 16px;
        }
        
        .customer-info {
            display: flex;
            align-items: center;
        }
        
        .customer-image {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 12px;
        }
        
        .customer-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .customer-name {
            color: #0078d4;
            font-weight: bold;
            margin-bottom: 4px;
        }
        
        .customer-title {
            color: #666;
            font-size: 14px;
        }
        
        .navigation {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
            gap: 10px;
        }
        
        .nav-button {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: white;
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }
        
        .nav-button:hover {
            background-color: #f5f5f5;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        .container89 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .blogs-header {
            color: #0078d7;
            margin-bottom: 5px;
        }
        .blog-title {
            font-size: 24px;
            margin-top: 0;
            margin-bottom: 30px;
        }
        .blog-grid {
            display: flex;
            overflow-x: auto;
            gap: 20px;
            padding-bottom: 15px;
        }
        .blog-grid1 {
            display: flex;
            overflow-x: auto;
            gap: 20px;
            padding-bottom: 15px;
        }
        .blog-card {
            flex: 0 0 calc(33.3% - 14px);
            min-width: 300px;
            background-color: white;
            border-radius: 5px;
            overflow: hidden;
            position: relative;
        }
        .blog-image {
            height: 250px;
            position: relative;
        }
        .blog-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .blog-image1 {
            height: 250px;
            position: relative;
        }
        .blog-image img1 {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .image-icon {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: rgba(255, 255, 255, 0.7);
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .blog-content {
            padding: 15px;
        }
        .blog-content h2 {
            margin-top: 0;
            font-size: 18px;
        }
        .date {
            color: #666;
            font-size: 14px;
            margin-bottom: 10px;
        }
        .excerpt {
            color: #666;
            font-size: 14px;
            line-height: 1.5;
        }
        .blog-footer {
            display: flex;
            justify-content: space-between;
            padding: 15px;
            border-top: 1px solid #eee;
        }
        .view-post {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
        .share-count {
            color: #999;
            font-size: 14px;
            display: flex;
            align-items: center;
        }
        .share-icon {
            margin-right: 5px;
            color: #999;
        }
        
        /* Hide scrollbar for Chrome, Safari and Opera */
        .blog-grid::-webkit-scrollbar {
            display: none;
        }
        
        /* Hide scrollbar for IE, Edge and Firefox */
        .blog-grid {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
        .container001 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1rem;
            /* background-color: #D9D9D94F; */
        }
        
        .testimonials-header {
            color: #0076c0;
            font-size: 1rem;
            margin-bottom: 0.5rem;
        }
        
        .testimonials-title {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 2rem;
        }
        
        .testimonials-row {
            display: flex;
            gap: 1rem;
            justify-content: space-between;
            width: 100%;
        }
        
        .testimonial-card {
            background-color: white;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            flex: 1;
            min-width: 0; /* Allows cards to shrink below content size */
        }
        
        .quote-icon {
            color: #0076c0;
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }
        
        .testimonial-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 1rem;
            font-size: 0.9rem;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        .stars {
            color: #ffb400;
            font-size: 1.2rem;
            margin-bottom: 0.75rem;
        }
        
        .reviewer {
            display: flex;
            align-items: center;
        }
        
        .reviewer-img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 0.75rem;
        }
        
        .reviewer-name {
            color: #0076c0;
            font-weight: bold;
            margin-bottom: 0.1rem;
            font-size: 0.9rem;
        }
        
        .reviewer-title {
            color: #666;
            font-size: 0.8rem;
        }
        
        .navigation {
            display: flex;
            justify-content: flex-end;
            margin-top: 1rem;
        }
        
        .nav-btn {
            background-color: #f0f0f0;
            border: 1px solid #ddd;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 0.5rem;
            cursor: pointer;
        }
        
        .nav-btn:hover {
            background-color: #e0e0e0;
        }
        .header {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3)), 
                              url('https://example.com/travel-bg.jpg');
            background-size: cover;
            padding: 15px 20px;
            color: white;
        }
        
        h1 {
            margin: 0;
            font-weight: 500;
        }
        
        .packages-container {
            display: flex;
            overflow-x: auto;
            padding: 20px;
            gap: 15px;
        }
        
        .package-card {
            min-width: 300px;
            height: 180px;
            border-radius: 15px;
            overflow: hidden;
            position: relative;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
            flex-shrink: 0;
        }
        
        .package-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .package-card .destination {
            position: absolute;
            bottom: 15px;
            left: 15px;
            color: white;
            font-size: 20px;
            font-weight: bold;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.8);
        }
        
        .salalah {
            border: 2px solid #2196F3;
        }
        
        .navigation {
            display: flex;
            justify-content: flex-end;
            padding: 0 20px 20px;
            gap: 10px;
        }
        
        .nav-button {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            border: 1px solid #ddd;
            color: #666;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        
        .header-container01 {
            display: flex;
            width: 100%;
            border-bottom: 1px solid #e0e0e0;
        }
        
        .left-section {
            width: 50%;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: white;
        }
        
        .right-section {
            width: 50%;
            padding: 40px;
            background-color: #fff;
            font-size: 15px;
            line-height: 1.6;
            color: #333;
        }
        
        .about-us {
            color: #0077c8;
            font-size: 16px;
            margin-bottom: 10px;
        }
        
        .main-heading {
            font-size: 28px;
            font-weight: bold;
            line-height: 1.3;
            margin-bottom: 30px;
            color: #222;
        }
        
        .know-more-btn {
       
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
        text-decoration: none;
        padding-left: 23px;
        
}
        
        
        .stats-container {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
        }
        
        .stat-item {
            text-align: center;
            flex: 1;
        }
        
        .stat-number {
            font-size: 32px;
            font-weight: bold;
            color: #0077c8;
            margin-bottom: 10px;
        }
        
        .stat-text {
            font-size: 14px;
            color: #444;
        }
        .faq-header {
            color: #0088cc;
            font-size: 16px;
            font-weight: normal;
            margin-bottom: 10px;
        }
        
        h1 {
            font-size: 24px;
            margin-bottom: 30px;
        }
        
        .faq-container {
          max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            margin-bottom: 40px;
        }
        
        .faq-item {
            margin-bottom: 10px;
            border-radius: 4px;
            overflow: hidden;
            background-color: #e9e9e9;
        }
        
        .faq-question {
            padding: 20px;
            background-color: #e9e9e9;
            cursor: pointer;
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 500;
        }
        
        .faq-answer {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, padding 0.3s ease;
            background-color: #f5f5f5;
        }
        
        .faq-answer.active {
            max-height: 500px;
            padding: 20px;
        }
        
        .arrow {
            border: solid #333;
            border-width: 0 2px 2px 0;
            display: inline-block;
            padding: 4px;
            transform: rotate(45deg);
            transition: transform 0.3s ease;
        }
        
        .arrow.up {
            transform: rotate(-135deg);
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
       
        body {
            margin: 0;
            padding: 0;
        }
       
        footer {
            background-color: #121212;
            color: #ffffff;
            padding: 50px 20px 20px;
        }
       
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
       
        .footer-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 30px;
        }
       
        .footer-description {
            flex: 1 1 300px;
            font-size: 14px;
            line-height: 1.6;
        }
       
        .footer-links {
            flex: 0 1 150px;
        }
       
        .footer-links h5 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 20px;
        }
       
        .footer-links ul {
            list-style: none;
        }
       
        .footer-links li {
            margin-bottom: 10px;
        }
       
        .footer-links a {
            color: #ffffff;
            text-decoration: none;
            transition: color 0.3s;
        }
       
        .footer-links a:hover {
            color: #cccccc;
        }
       
        .contact-info {
            flex: 1 1 200px;
            font-size: 14px;
            line-height: 1.8;
        }
       
        .payment-info {
            flex: 1 1 200px;
            font-size: 14px;
        }
       
        .payment-options {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
            margin-top: 15px;
        }
       
        .payment-card {
            background-color: #3a3a3a;
            border-radius: 4px;
            padding: 5px 10px;
            font-size: 12px;
        }
       
        .social-icons {
            display: flex;
            align-items: center;
            margin-top: 20px;
            gap: 15px;
        }
       
        .social-icons a {
            color: #ffffff;
            font-size: 18px;
        }
       
        .copyright {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #333;
            font-size: 12px;
        }
       
        .terms a {
            color: #ffffff;
            text-decoration: none;
        }
       
        @media (max-width: 768px) {
            .footer-content {
                flex-direction: column;
                gap: 30px;
            }
           
            .copyright {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
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
    <div class="main_section-content" style="width: 100%;">
        <h3 class="main_section_head">Discover the world with citron tours,<br> your journey begins here</h3>
          <div class="customers">
                <div class="avatars">
                  <img src="/images/Ellipse 164.png" alt="User 1" />
                  <img src="/images/Ellipse 165.png" alt="User 2" />
                  <img src="/images/Ellipse 166.png" alt="User 3" />
                  <img src="/images/Ellipse 167.png" alt="User 4" />
                </div><br>
            <div>
              <div class="text-white text-lg font-bold strong-text">5000+<br/>
                <span class="text-sm happy_customer_text">Happy Customers</span>
                </div>
            </div>
          </div>
       <a href="#" class="enquire-button">Enquire</a>

    <div>

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
      
      <div class="search-container" style="margin-top: 20px;">
            <div class="search-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
                <input type="text" placeholder="Search destinations">
            </div>
            <div class="search-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                    <circle cx="12" cy="10" r="3"></circle>
                </svg>
                <input type="text" placeholder="From">
            </div>
            <div class="search-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                    <circle cx="12" cy="10" r="3"></circle>
                </svg>
                <input type="text" placeholder="To">
            </div>
            <div class="search-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="16" y1="2" x2="16" y2="6"></line>
                    <line x1="8" y1="2" x2="8" y2="6"></line>
                    <line x1="3" y1="10" x2="21" y2="10"></line>
                </svg>
                <input type="text" placeholder="Travel Date">
            </div>
            <div class="search-item">
                <button class="enquire-btn">Enquire</button>
            </div>
        </div>
      <div class="floating-buttons">
        <a href="#" class="call-btn"><img src="/images/phone.png" alt="City Tours"></a>
        <a href="#" class="whatsapp-btn"><img src="/images/wtsp.png" alt="City Tours"></a>
      </div>
    </div>
<!-----end next section--->
   
<!-----corousel---->
<!-- <div class="container-fluid holidaypackage_container">
    <h3 class="holiday_section_head">Top Holiday Packages</h3>
    </div>
<div class="carousel-container" style="background-color: #D4D4D4;">
  <div class="carousel">
    <div class="card">
      <img src="/images/frst.png" alt="USA" />
      <div class="label">USA</div>
    </div>
    <div class="card">
      <img src="/images/scnd.png" alt="Salalah" />
      <div class="label">Salalah</div>
    </div>
    <div class="card">
      <img src="/images/thrd.png" alt="Thailand" />
      <div class="label">Thailand</div>
    </div>
    <div class="card">
      <img src="/images/frth.png" alt="Armenia" />
      <div class="label">Armenia</div>
    </div>
    <div class="card">
      <img src="/images/scnd.png" alt="Armenia" />
      <div class="label">Armenia</div>
    </div>
    
  </div>

  <div class=" container-fluid nav-buttons " style="background-color: #D9D9D94F;">
    <button class="nav left">&#8592;</button>
    <button class="nav right">&#8594;</button>
  </div>
</div> -->





 
<!---corousel end---->
</div> 
  </section>
  
  
  <div class="header">
        <h1>Top Holiday Packages</h1>
    </div>
    
    <div class="packages-container">
        <div class="package-card">
        <img src="/images/frst.png" alt="USA" />
            <div class="destination">USA</div>
        </div>
        
        <div class="package-card salalah">
            <img src="/images/scnd.png" alt="Salalah Waterfall">
            <div class="destination">Salalah</div>
        </div>
        
        <div class="package-card">
            <img src="/images/frth.png" alt="Thailand Islands">
            <div class="destination">Thailand</div>
        </div>
        
        <div class="package-card">
            <img src="/images/thrd.png" alt="Armenia Monastery">
            <div class="destination">Armenia</div>
        </div>
    </div>
    
    <div class="navigation">
        <div class="nav-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M15 18l-6-6 6-6"/>
            </svg>
        </div>
        <div class="nav-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M9 18l6-6-6-6"/>
            </svg>
        </div>
    </div>
  <!-- <div class="container-fluid" style="background:#FFFFFF;padding-top:66px;margin-top:34px;">
  <div class="row">
    <div class="col-sm-6">
            <p class="card-title" style="color: #006FCF;padding-left:7px;">About Us</p>
            <b><h4 class="card-text p-2" style="font-weight: 700;">Your Trusted Partner in Curating Unforgettable<br> Travel Experiences</h4></b>
            <a href="#" class="btn btn_knowmore">Know More</a>
    </div>
    <div class="col-sm-6">
     <p class="found_text">Founded in 2015, Citron Tourism is a Destination Management Company based in UAE licensed by the Government of Dubai’s Department of Tourism and Commerce Marketing (DTCM). We’re on a journey to transform ordinary trips into extraordinary ones. We are your guide, bringing you personal experiences. Wherever your travels take you, we’ll show you the unique and unmissable things to do in your destination. With Citron Tourism on your side (and in your pocket), creating memorable</p>
     <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col-sm-2">
        <h5 class="toptext" style="color: #006FCF;">25k+</h5>
        <p class="card-texts">happy travelers</p>
  </div>
  <div class="col-sm-2">
        <h5  class="toptext" style="color: #006FCF;">4.8/5</h5>
        <p class="card-texts">Rating on google</p>
  </div>
  <div class="col-sm-2">
        <h5  class="toptext" style="color: #006FCF;">10+</h5>
        <p class="card-texts">years of experience</p>
  </div>
</div>
    </div>
  </div>
</div> -->

<div class="header-container01">
        <div class="left-section">
            <div class="about-us">About Us</div>
            <h1 class="main-heading">Your trusted partner in curating unforgettable travel experiences</h1>
            <a href="#" class="know-more-btn">Know More</a>
        </div>
        
        <div class="right-section">
            <p>Founded in 2015, Citron Tourism is a Destination Management Company based in UAE licensed by the Government of Dubai's Department of Tourism and Commerce Marketing (DTCM). We're on a journey to transform ordinary trips into extraordinary ones. We are your guide, bringing you personal experiences. Wherever your travels take you, we'll show you the unique and unmissable things to do in your destination. With Citron Tourism on your side (and in your pocket), creating memorable experiences.</p>
            
            <div class="stats-container">
                <div class="stat-item">
                    <div class="stat-number">25k+</div>
                    <div class="stat-text">Happy Travelers</div>
                </div>
                
                <div class="stat-item">
                    <div class="stat-number">4.8/5</div>
                    <div class="stat-text">Rating On Google</div>
                </div>
                
                <div class="stat-item">
                    <div class="stat-number">10+</div>
                    <div class="stat-text">Years Of Experience</div>
                </div>
            </div>
        </div>
    </div>

<div class="container-fluid add-containers" style="background:#D9D9D94F;padding-top:66px;margin-top:34px;display:flex;">
<div class="ad-banner">
  <img src="/images/image 19.png" alt="Flight wing view" />
  <div class="ad-content">
    <small>Domestic Flights</small>
    <h3>Huge savings on flight with trxvl.</h3>
    <p>Book domestic flights starting @ just ₹1459</p>
    <button>Book Now</button>
  </div>
</div>
<div class="ad-banner">
  <img src="/images/frame 31.png" alt="Flight wing view" />
  <div class="ad-content">
    <small>Domestic Flights</small>
    <h3>Huge savings on flight with trxvl.</h3>
    <p>Book domestic flights starting @ just ₹1459</p>
    <button>Book Now</button>
  </div>
</div>
<div class="ad-banner">
  <img src="/images/frame 30.png" alt="Flight wing view" />
  <div class="ad-content">
    <small>Domestic Flights</small>
    <h3>Huge savings on flight with trxvl.</h3>
    <button>Book Now</button>
  </div>
</div>

</div>
<div class=" container-fluid nav-buttons1 " style="background-color: #D4D4D4;">
    <button class="nav left">&#8592;</button>
    <button class="nav right">&#8594;</button>
</div>
  <div class="carousel-container1" style="background-color: #D4D4D4;">
    <img src="/images/group1.png " style=" width: 1465px ;height: 295px;" alt="Flight wing view" >
  </div>

  <div class="container89">
        <h4 class="blogs-header">Why Choose Us</h4>
        <h1 class="blog-title">Your Trusted Partner in Curating Unforgettable Travel Experiences</h1>
        
        <div class="blog-grid1" style="height:300px;border-radius:10px;">
            <!-- Blog Card 1 -->
            <div class="bg-white border rounded-xl shadow-sm p-6 text-center w-64">
      <div class="text-blue-600 text-3xl mb-4 pt-4">
      <img src="/images/Boarding Pass.png" alt="Desert scene with SUV">
      </div>
      <h3 class="font-semibold text-lg mb-2">Competitive Pricing</h3>
      <p class="text-sm text-gray-600">
        Enjoy top-notch travel services at unbeatable rates. We prioritize offering the best value for your dream journeys without compromising quality.
      </p>
    </div>
            
            <!-- Blog Card 2 -->
            <div class="bg-white border rounded-xl shadow-sm p-6 text-center w-64">
      <div class="text-blue-600 text-3xl mb-4 pt-4">
      <img src="/images/Group 2.png" alt="Desert scene with SUV">
      </div>
      <h3 class="font-semibold text-lg mb-2">Expert Assistance
      </h3>
      <p class="text-sm text-gray-600">
        Enjoy top-notch travel services at unbeatable rates. We prioritize offering the best value for your dream journeys without compromising quality.
      </p>
    </div>
            
            <!-- Blog Card 3 -->
            <div class="bg-white border rounded-xl shadow-sm p-6 text-center w-64">
      <div class="text-blue-600 text-3xl mb-4 pt-4">
      <img src="/images/Vector (2).png" alt="Desert scene with SUV">
      </div>
      <h3 class="font-semibold text-lg mb-2">Worldwide Coverage
      </h3>
      <p class="text-sm text-gray-600">
        Enjoy top-notch travel services at unbeatable rates. We prioritize offering the best value for your dream journeys without compromising quality.
      </p>
    </div>
            </div>
        </div>
    </div>
<!------------>
<div class="container001" >
        <p class="testimonials-header">Testimonials</p>
        <h2 class="testimonials-title">Our Customer Reviews</h2>
        
        <div class="testimonials-row">
            <!-- Testimonial Card 1 -->
            <div class="testimonial-card">
                <div class="quote-icon">&#8220;</div>
                <p class="testimonial-text">"I had the most incredible vacation experience thanks to the amazing team at XYZ Travel Agency! From the moment I contacted them, their friendly and knowledgeable staff helped me plan the perfect itinerary.</p>
                <div class="stars">★ ★ ★ ★ ★</div>
                <div class="reviewer">
                    <img src="/images/Ellipse 165.png" alt="Nora Acholo" class="reviewer-img">
                    <div>
                        <p class="reviewer-name">Nora Acholo</p>
                        <p class="reviewer-title">Tripster</p>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial Card 2 -->
            <div class="testimonial-card">
                <div class="quote-icon">&#8220;</div>
                <p class="testimonial-text">"I had the most incredible vacation experience thanks to the amazing team at XYZ Travel Agency! From the moment I contacted them, their friendly and knowledgeable staff helped me plan the perfect itinerary.</p>
                <div class="stars">★ ★ ★ ★ ★</div>
                <div class="reviewer">
                    <img src="/images/Ellipse 166.png" alt="Nora Acholo" class="reviewer-img">
                    <div>
                        <p class="reviewer-name">Nora Acholo</p>
                        <p class="reviewer-title">Tripster</p>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial Card 3 -->
            <div class="testimonial-card">
                <div class="quote-icon">&#8220;</div>
                <p class="testimonial-text">"I had the most incredible vacation experience thanks to the amazing team at XYZ Travel Agency! From the moment I contacted them, their friendly and knowledgeable staff helped me plan the perfect itinerary.</p>
                <div class="stars">★ ★ ★ ★ ★</div>
                <div class="reviewer">
                    <img src="/images/Ellipse 167.png" alt="Nora Acholo" class="reviewer-img">
                    <div>
                        <p class="reviewer-name">Nora Acholo</p>
                        <p class="reviewer-title">Tripster</p>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial Card 4 -->
            <div class="testimonial-card">
                <div class="quote-icon">&#8220;</div>
                <p class="testimonial-text">"I had the most incredible vacation experience thanks to the amazing team at XYZ Travel Agency! From the moment I contacted them, their friendly and knowledgeable staff helped me plan the perfect itinerary.</p>
                <div class="stars">★ ★ ★ ★ ★</div>
                <div class="reviewer">
                    <img src="/images/Ellipse 164.png" alt="Nora Acholo" class="reviewer-img">
                    <div>
                        <p class="reviewer-name">Nora Acholo</p>
                        <p class="reviewer-title">Tripster</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="navigation">
            <button class="nav-btn">&#8592;</button>
            <button class="nav-btn">&#8594;</button>
        </div>
    </div>

<!------thrd div start---->
    <div class="container89">
        <h4 class="blogs-header">Blogs</h4>
        <h1 class="blog-title">Our Latest News And Blogs</h1>
        
        <div class="blog-grid">
            <!-- Blog Card 1 -->
            <div class="blog-card">
                <div class="blog-image">
                    <img src="/images/rect1.png" alt="Person in red dress at rock formation">
                    <div class="image-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 16a6 6 0 0 0 6-6c0-1.655-1.122-2.904-2.432-4.362C10.254 4.176 8.75 2.503 8 0c0 0-6 5.686-6 10a6 6 0 0 0 6 6zM6.646 4.646l.708.708c-.29.29-.582.58-.875.87.418.896.705 1.78.87 2.66.228 1.233.336 2.485.125 3.696-.146.857-.44 1.69-.872 2.43-.288-.28-.592-.55-.92-.806-.231-.18-.483-.345-.753-.495.431-.7.693-1.43.81-2.193.19-.968.09-2.008-.122-3.063-.16-.817-.397-1.624-.766-2.403-.56.562-1.12 1.124-1.68 1.683L2.343 6.66c.72-.72 1.44-1.44 2.166-2.157.235-.236.471-.468.707-.704z"/>
                        </svg>
                    </div>
                </div>
                <div class="blog-content">
                    <h2>A Food Lover's Guide to Culinary Hotspots</h2>
                    <div class="date">June 28, 2018</div>
                    <div class="excerpt">
                        Aenean eleifend ante maecenas pulvinar montes lorem et pede dis dolor pretium donec dictum. Vici consequat justo enim. Venenatis eget adipiscing luctus lorem.
                    </div>
                </div>
                <div class="blog-footer">
                    <a href="#" class="view-post">View Post</a>
                    <div class="share-count">
                        <span class="share-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/>
                            </svg>
                        </span>
                        1K shares
                    </div>
                </div>
            </div>
            
            <!-- Blog Card 2 -->
            <div class="blog-card">
                <div class="blog-image">
                    <img src="/images/rect2.png" alt="Desert scene with SUV">
                    <div class="image-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 16a6 6 0 0 0 6-6c0-1.655-1.122-2.904-2.432-4.362C10.254 4.176 8.75 2.503 8 0c0 0-6 5.686-6 10a6 6 0 0 0 6 6zM6.646 4.646l.708.708c-.29.29-.582.58-.875.87.418.896.705 1.78.87 2.66.228 1.233.336 2.485.125 3.696-.146.857-.44 1.69-.872 2.43-.288-.28-.592-.55-.92-.806-.231-.18-.483-.345-.753-.495.431-.7.693-1.43.81-2.193.19-.968.09-2.008-.122-3.063-.16-.817-.397-1.624-.766-2.403-.56.562-1.12 1.124-1.68 1.683L2.343 6.66c.72-.72 1.44-1.44 2.166-2.157.235-.236.471-.468.707-.704z"/>
                        </svg>
                    </div>
                </div>
                <div class="blog-content">
                    <h2>A Food Lover's Guide to Culinary Hotspots</h2>
                    <div class="date">June 28, 2018</div>
                    <div class="excerpt">
                        Aenean eleifend ante maecenas pulvinar montes lorem et pede dis dolor pretium donec dictum. Vici consequat justo enim. Venenatis eget adipiscing luctus lorem.
                    </div>
                </div>
                <div class="blog-footer">
                    <a href="#" class="view-post">View Post</a>
                    <div class="share-count">
                        <span class="share-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/>
                            </svg>
                        </span>
                        1K shares
                    </div>
                </div>
            </div>
            
            <!-- Blog Card 3 -->
            <div class="blog-card">
                <div class="blog-image">
                    <img src="/images/rect3.png" alt="Coastal resort aerial view">
                    <div class="image-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 16a6 6 0 0 0 6-6c0-1.655-1.122-2.904-2.432-4.362C10.254 4.176 8.75 2.503 8 0c0 0-6 5.686-6 10a6 6 0 0 0 6 6zM6.646 4.646l.708.708c-.29.29-.582.58-.875.87.418.896.705 1.78.87 2.66.228 1.233.336 2.485.125 3.696-.146.857-.44 1.69-.872 2.43-.288-.28-.592-.55-.92-.806-.231-.18-.483-.345-.753-.495.431-.7.693-1.43.81-2.193.19-.968.09-2.008-.122-3.063-.16-.817-.397-1.624-.766-2.403-.56.562-1.12 1.124-1.68 1.683L2.343 6.66c.72-.72 1.44-1.44 2.166-2.157.235-.236.471-.468.707-.704z"/>
                        </svg>
                    </div>
                </div>
                <div class="blog-content">
                    <h2>A Food Lover's Guide to Culinary Hotspots</h2>
                    <div class="date">June 28, 2018</div>
                    <div class="excerpt">
                        Aenean eleifend ante maecenas pulvinar montes lorem et pede dis dolor pretium donec dictum. Vici consequat justo enim. Venenatis eget adipiscing luctus lorem.
                    </div>
                </div>
                <div class="blog-footer">
                    <a href="#" class="view-post">View Post</a>
                    <div class="share-count">
                        <span class="share-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/>
                            </svg>
                        </span>
                        1K shares
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="faq-container">
        <h4 class="faq-header">Faqs</h4>
        <h1>Frequently Asked Questions</h1>
        
        <div class="faq-item">
            <div class="faq-question">
                What Is The Best Time To Visit Dubai?
                <span class="arrow"></span>
            </div>
            <div class="faq-answer">
                <p>The best time to visit Dubai is during the winter months from November to March when the weather is pleasant with temperatures ranging from 20°C to 30°C (68°F to 86°F). This period offers comfortable conditions for outdoor activities and sightseeing.</p>
                <p>Summer months (June to September) are extremely hot with temperatures often exceeding 40°C (104°F), making outdoor activities challenging. However, this is also the low season with better hotel rates and fewer tourists.</p>
                <p>The shoulder seasons of October and April offer a good balance between weather and crowds.</p>
            </div>
        </div>
        
        <div class="faq-item">
            <div class="faq-question">
                What Is The Local Currency, And Where Can I Exchange Money?
                <span class="arrow"></span>
            </div>
            <div class="faq-answer">
                <p>The local currency is the United Arab Emirates Dirham (AED). The exchange rate is fixed to the US dollar at approximately 3.67 AED to 1 USD.</p>
                <p>Money can be exchanged at:</p>
                <ul>
                    <li>Dubai International Airport (24/7 service)</li>
                    <li>Banks (typically open Saturday to Thursday, 8am to 2pm)</li>
                    <li>Shopping malls (currency exchange counters are common)</li>
                    <li>Dedicated exchange houses like Al Ansari Exchange and UAE Exchange</li>
                </ul>
                <p>Credit cards are widely accepted at most establishments, and ATMs are readily available throughout the city.</p>
            </div>
        </div>
        
        <div class="faq-item">
            <div class="faq-question">
                What Is The Main Language Spoken, And Is English Widely Understood?
                <span class="arrow"></span>
            </div>
            <div class="faq-answer">
                <p>Arabic is the official language of Dubai and the UAE. However, English is widely spoken and understood throughout the city, especially in business, tourism, and service sectors.</p>
                <p>Most road signs, restaurant menus, and official information are provided in both Arabic and English. Many service staff also speak Hindi, Urdu, Filipino, and various other languages reflecting Dubai's international workforce.</p>
                <p>Visitors who speak English will have no trouble communicating during their stay in Dubai.</p>
            </div>
        </div>
        
        <div class="faq-item">
            <div class="faq-question">
                What Are The Local Customs Or Cultural Etiquettes To Be Aware Of?
                <span class="arrow"></span>
            </div>
            <div class="faq-answer">
                <p>When visiting Dubai, it's important to respect local customs and traditions:</p>
                <ul>
                    <li><strong>Dress modestly</strong> in public places, especially religious sites and government buildings. Shoulders and knees should be covered.</li>
                    <li><strong>Public displays of affection</strong> should be limited to holding hands.</li>
                    <li><strong>Ramadan observances</strong> - during the holy month, eating, drinking, and smoking in public during daylight hours should be avoided.</li>
                    <li><strong>Photography</strong> - ask permission before photographing local people, especially women.</li>
                    <li><strong>Alcohol consumption</strong> is only permitted in licensed venues like hotels, restaurants, and bars.</li>
                    <li><strong>Use your right hand</strong> for eating, shaking hands, or passing items as the left hand is considered unclean in Arab culture.</li>
                </ul>
                <p>While Dubai is more liberal than other parts of the region, respecting these customs will ensure a smooth and enjoyable visit.</p>
            </div>
        </div>
    </div>

  <!---third div end---->

  <footer>
    <div class="container">
        <div class="footer-content">
            <!-- Company Description -->
            <div class="footer-description">
                <p>We're on a journey to transform ordinary trips into extraordinary ones. We are your guide, bringing you personal experiences. Wherever your travels take you, we'll show you the unique and unmissable things to do in your destination.</p>
                <div class="social-icons">
                    <span>Get Social:</span>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-tripadvisor"></i></a>
                </div>
            </div>

            <!-- Navigation Links -->
            <div class="footer-links">
                <h5>Explore</h5>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Our Service</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Offers</a></li>
                    <li><a href="#">Blogs</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Information -->
            <div class="contact-info">
                <h5>Contact</h5>
                <p>Zaina Mohela Plaza Building Near Burjuman Metro Station<br>
                Bur Dubai, Dubai, UAE. PO Box No: 181425</p>
                <p>Telephone:<br>
                +44 114 404 0307</p>
                <p>E-Mail:<br>
                reception@citrontourism.com</p>
            </div>

            <!-- Payment Options -->
            <div class="payment-info">
                <p>Pay any way you choose, no matter Whether cash or an international payment card, we support all of those payment options.</p>
                <div class="payment-options">
                    <span class="payment-card">VISA</span>
                    <span class="payment-card">PayPal</span>
                    <span class="payment-card">MasterCard</span>
                    <span class="payment-card">American Express</span>
                </div>
            </div>
        </div>

        <!-- Copyright and Terms -->
        <div class="copyright">
            <div class="copy-text">
                <p>2024 Citron Tourism, All right reserved</p>
            </div>
            <div class="terms">
                <a href="#">Terms of use</a> / <a href="#">Privacy policy</a>
            </div>
        </div>
    </div>
</footer>
  <!-- Bootstrap JS -->
  <script>
  const carousel = document.querySelector('.carousel');
  const leftBtn = document.querySelector('.nav.left');
  const rightBtn = document.querySelector('.nav.right');

  leftBtn.addEventListener('click', () => {
    carousel.scrollBy({ left: -300, behavior: 'smooth' });
  });

  rightBtn.addEventListener('click', () => {
    carousel.scrollBy({ left: 300, behavior: 'smooth' });
  });
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const answer = question.nextElementSibling;
                const arrow = question.querySelector('.arrow');
                
                // Toggle active class on answer
                answer.classList.toggle('active');
                
                // Toggle arrow direction
                arrow.classList.toggle('up');
            });
        });
  
</script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
 
</body>
</html>
<?php /**PATH C:\Users\nimmy\Documents\citronSite\resources\views/citronSite.blade.php ENDPATH**/ ?>