<?php require_once 'config/database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAKUM</title>
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="me.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <style>
        /* ===== GRID LAYOUT ===== */
.overlay {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 30px;
  width: 100%;
  max-width: 1300px;
  margin: 0 auto;
}

/* ===== CARD ===== */
.overlay1 {
  display: flex;
  flex-direction: column;
  background: #f6f6eb;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 4px 10px rgba(0,0,0,0.08);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.overlay1:hover {
  transform: translateY(-6px);
  box-shadow: 0 8px 18px rgba(0,0,0,0.12);
}

/* ===== IMAGE ===== */
.overlay1 img {
  width: 100%;
  height: 260px;
  object-fit: cover;
  display: block;
}

/* ===== DETAILS SECTION ===== */
.event-details {
  padding: 15px 20px;
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.details-row {
  display: flex;
  gap: 20px;
  align-items: center;
}
.paragraphAboutUs p {
 
  line-height: 1.7;
  
}
.details-row h4 {
  font-size: 17px;
  font-family: "Poppins", sans-serif;
  color: #333;
  margin: 0;
  font-weight: 500;
}
@media (min-width: 2560px) {
    .imgAboutUs img {
        width: 100%;
        /* max-width: 1300px; */
        margin-left: -80px;
    }

  .overlay {
    grid-template-columns: repeat(4, 1fr); /* more columns for large screens */
    gap: 50px; /* larger gap between cards */
    max-width: 2200px; /* expand container width */
    margin: 0 auto;
  }

  .overlay1 img {
    height: 360px; /* taller images */
  }

  .details-row h4 {
    font-size: 20px; /* slightly bigger text */
  }
}
@media (max-width: 1675px) {
  
  .overlay {
    grid-template-columns: repeat(3, 1fr); /* fewer columns for narrower screens */
    gap: 40px; /* smaller gap between cards */
    max-width: 1200px; /* reduce container width */
    margin: 0 auto;
  }

  .overlay1 img {
    height: 320px; /* adjust image height */
  }

  .details-row h4 {
    font-size: 18px; /* slightly smaller text for balance */
  }
 

  .infiniteSlider{
    max-width: 1250px;
  }
}
@media (max-width:1366px){
  .aboutUs {
        flex-direction: row;
        align-items: center;
        text-align: left;
     
        
    }
        .imgAboutUs img {
        width: 100%;
       height:auto;
       
        padding-top: 50px;
        border-radius: 0px;
    }
     .bannerText {
  max-width: 100%;
  text-align: left; 
}

.bannerText h2 {
  font-size: 32px;
  text-align: left;
}
.bannerText p {
  font-size: 18px;
  text-align: left; 
}

}
/* ===== RESPONSIVE ===== */
@media (max-width: 1024px) {
    .aboutUs {
    flex-direction: row; /* stack content */
    align-items: center;
    text-align: left;
    
    padding: 60px 50px;
    gap: 30px;
  
  }
  .overlay {
    grid-template-columns: repeat(3, 1fr);
    max-width: 90%;
    margin: 0 auto;        /* centers the grid */
    padding: 0 20px;       /* adds left & right spacing */
    box-sizing: border-box;
  }
  .overlay1 img {
    height: 240px;
  }
.bannerImage {
    width: 100%;
  }
    
}


/* ===== 430px & below breakpoint ===== */

@media (max-width: 820px) {
  .overlay {
    grid-template-columns: repeat(2, 1fr);
  }
  .overlay1 img {
    height: 220px;
  }
    .bannerText h2 {
    font-size: 28px;                /* Slightly smaller for tablet */
    padding-left: 0;                /* Remove extra padding */
    text-align: center;
  }
}

@media (max-width: 768px) {
  .overlay {
    grid-template-columns: 1fr;
  }
  .overlay1 img {
    height: 200px;
  }
    .bannerText h2 {
    font-size: 26px;                /* Slightly smaller heading */
    padding-left: 0;                /* Remove extra left padding */
    text-align:center;
    width: 100%;
  }
}

@media (max-width: 540px) {
  .overlay {
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    padding: 0 12px;
  }

  .overlay1 img {
    height: 220px;
  }

  .details-row h4 {
    font-size: 16px;
  }
 .bannerImage{
    width: 100%;
  }
 
 .bannerText p {
    font-size: 15px;
    line-height: 1.5;
    text-align: center;
    width: 100%;
  }
  
  .overlay1 img {
    height: 180px;
  }
  .details-row h4 {
    font-size: 16px;
  }
   .bannnerArtPaceGallary .Higlight {
    font-size: 20px;
  }
 .previousEventContainer {
    
  }
}


@media (max-width: 430px) {
  .overlay {
    grid-template-columns: 1fr;
    gap: 16px;
    padding: 0 10px;
  }

  .overlay1 img {
    height: 200px;
  }

  .event-details {
    padding: 12px 15px;
    gap: 8px;
  }

  .details-row {
    gap: 12px;
  }
    .paragraphAboutUs p {
        font-size: 16px;
        line-height: 1.5;
    }

  .details-row h4 {
    font-size: 15px;
  }
    .bannerText h2 { font-size: 24px;  text-align:center}
      .bannerText p {
    font-size: 16px;
    line-height: 1.5;
    width: 100%;
      text-align: center;
   padding-left:0px;
  }
}

@media (max-width: 414px) {
  /* Overlay grid */
  .overlay {
    display: grid;
    grid-template-columns: 1fr; /* single column */
    gap: 16px; /* smaller gap for mobile */
    width: 100%;
    max-width: 100%;
    margin: 0 auto;
     /* some side padding */
    box-sizing: border-box;
  }

  /* Card */
  .overlay1 {
    flex-direction: column;
    background: #f6f6eb;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 3px 8px rgba(0,0,0,0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .overlay1:hover {
    transform: translateY(-4px);
    box-shadow: 0 6px 14px rgba(0,0,0,0.1);
  }

  /* Image */
  .overlay1 img {
    width: 100%;
    height: 200px; /* smaller for mobile */
    object-fit: cover;
    display: block;
  }

  /* Details section */
  .event-details {
    padding: 12px 15px;
    gap: 8px;
  }
   .imgAboutUs img {
      
        padding-top: 60px;
    }
  .details-row {
    display: flex;
    gap: 12px;
    align-items: center;
  }

  .details-row h4 {
    font-size: 16px; /* smaller for mobile */
    font-family: "Poppins", sans-serif;
    color: #333;
    margin: 0;
    font-weight: 500;
  }

   .paragraphAboutUs p {
    font-size: 15px;
    line-height: 1.4;
  }

  .bannerText p {
  font-size: 18px;
  line-height: 1.6;
  color: #333;
   font-family: 'Atyp Kido TRIAL', sans-serif;
  font-weight: 400;
  text-align: center;
  font-style: normal;
  width: 100%;
   padding-left:0px;
}
    .bannerText h2 {
        font-size: 22px;
        text-align: center;
    }
}

    </style>
</head>
<body>
    <div class="headerContainer">
        <i class="ri-menu-line"></i>
        <i class="ri-close-line"></i>
        <div class="logo">
            <img src="assest/logo-lakum- (1).png" alt="">
        </div>
        <div class="MenuHeader">
            <ul>
              <li><a href="index.php">HOME</a></li>
                <li><a href="AboutUs.php">ABOUT US</a></li>
                <li><a href="Space.php">LAKUM SPACES</a></li>
                <li><a href="HomeLukum.php">EXHIBITIONS</a></li>
                <li><a href="HomeLukum.php#upcoming">EVENTS & WORKSHOPS</a></li>
                <li><a href="Calender.php">CALENDER</a></li>
                <li><a href="Shop.php">SHOP</a></li>  
            </ul>
        </div>
    </div>

    <div class="HomeContainer">
        <img src="assest/img-4.png" alt="">
    </div>

    <div class="aboutUs">
        <div class="textAboutUs">
            <div class="titleAboutUs">
                <h4>ABOUT US</h4>
            </div>
            <div class="paragraphAboutUs">
                <p>
                 <strong>Lakum Artspace</strong>  is more than a gallery.  It is a living space for connection. Rooted in Riyadh and reaching 
                  beyond, Lakum Artspace has evolved into a multidisciplinary platform where artists, thinkers, makers, and 
                  audiences come together
                   We believe art is not only seen but shared, not only displayed but lived. At Lakum Artspace, exhibitions  transform into gatherings, ideas become collaborations, and disciplines intersect to form new ways of 
                      engaging with culture.
                </p>
                
                <p>
                   As a dynamic space for cultural exchange, Lakum Artspace embraces the unexpected. Our programming 
                    spans art, design, sound, film, food, and performance, guided by curiosity, critical thought, and care. Each 
                    encounter is an invitation to witness, participate, and contribute to the evolving cultural dialogue.
                </p>
                <p>
                   For those who seek meaning through connection, <strong>this is the new face of Lakum Artspace.</strong> 

                </p>
            </div>
        </div>
        <div class="imgAboutUs" id="imgAboutUsSection">
            <img src='About Us/1.JPG' alt="" >
        </div>
    </div>

    <div class="banner">
        <div class="bannerImage" id="bannerImageSection">
            <img src="About Us/2.JPG" alt="Lakum Artspace" >
        </div>
        <div class="bannerText">
            <h2>WORKSHOPS & SEMINARS</h2>
            <p>
                 Designed as a space for learning, making, and meeting, Lakum offers rooms for workshops, talks, 
                screenings, and community gatherings. Its dedicated workshop area hosts public programs, discussions, 
                and hands-on activities in an environment that sparks curiosity. Lakum Artspace is a welcoming home for 
                independent creatives and a community hub for anyone seeking connection through culture.
            </p>
        </div>
    </div>

    <div class="numberCount">
        <div class="Exhibition">
            <a href="">+39</a>
            <p>Exhibitions <br> &Workshops</p>
        </div>
        <div class="ArtPieces">
            <a href="">+200K</a>
            <p>Art <br> Pieces</p>
        </div>
        <div class="Artisinstructor">
            <a href="">+300K</a>
            <p>Artist & Instructor</p>
        </div>
        <div class="vistor">
            <a href="">+55K</a>
            <p>Participants & <br> Visitors</p>
        </div>
    </div>

    <div class="bannnerArtPaceGallary">
        <div class="hilightBanner">
            <p class="Higlight">Artspace, Gallary,Hub, Library, Shop,Café</p>
            <p>Where Encounters Shape Culture</p>
        </div>
    </div>

    <div class="ForOurClient">
        <div class="titleForOurClient">
            <h4>OUR CLIENTS</h4>
        </div>
        <div class="infiniteSlider">
            <div class="sliderTrack" id="sliderTrack">
                <div class="slide"><img src="Logo/eyewa.png" alt=""></div>
                <div class="slide"><img src="Logo/SHEIN.png" alt=""></div>
                <div class="slide"><img src="Logo/Namshi.png" alt=""></div>
                <div class="slide"><img src="Logo/بنك التنمية الإجتماعية.png" alt=""></div>
                <div class="slide"><img src="Logo/huda-beauty.webp" alt=""></div>
                <div class="slide"><img src="Logo/Sephora-Logo.png" alt=""></div>
            </div>
        </div>
    </div>

    <div class="ContainLakum">
        <div class="overlay" id="upcomingEventsContainer">
            <!-- Events will be loaded here dynamically -->
        </div>
    </div>

    <div class="buttonDiscoverMore">
        <button onclick="window.location.href='HomeLukum.php'">Discover More</button>
    </div>

    <footer class="FOOTER1">
        <div class="footer-container">
            <div class="footer-logo">
                <img src="assest/logo-lakum- (1).png" alt="">
            </div>
            <div class="MenuFooter">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="AboutUs.php">ABOUT US</a></li>
                    <li><a href="Space.php">LAKUM SPACES</a></li>
                    <li><a href="HomeLukum.php">EXHIBITIONS</a></li>
                    <li><a href="HomeLukum.php#upcoming">EVENTS & WORKSHOPS</a></li>
                    <li><a href="Calender.php">CALENDER</a></li>
                    <li><a href="Space.php#form">SHOP</a></li>  
                </ul>
            </div>
            <div class="social-icons">
                <a href="#"><i class="ri-facebook-fill"></i></a>
                <a href="#"><i class="ri-instagram-fill"></i></a>
                <a href="#"><i class="ri-twitter-x-fill"></i></a>
                <a href="#"><i class="ri-linkedin-fill"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 LAKUM. All rights reserved.</p>
        </div>
    </footer>

    <script src="Home.js"></script>
    <script>
        // Load dynamic images from latest events
        fetch('api/get_events.php?type=latest&limit=2')
            .then(response => response.json())
            .then(events => {
                if (events.length > 0) {
                    // Update imgAboutUs with first event image
                    const imgAboutUs = document.getElementById('imgAboutUsImage');
                    if (imgAboutUs && events[0].cover_image) {
                        imgAboutUs.src = events[0].cover_image;
                        console.log('imgAboutUs: Updated with', events[0].cover_image);
                    }
                    
                    // Update bannerImage with second event image (or first if only one exists)
                    const bannerImg = document.getElementById('bannerImageImg');
                    if (bannerImg) {
                        const bannerEvent = events.length > 1 ? events[1] : events[0];
                        if (bannerEvent.cover_image) {
                            bannerImg.src = bannerEvent.cover_image;
                            console.log('bannerImage: Updated with', bannerEvent.cover_image);
                        }
                    }
                }
            })
            .catch(error => console.error('Error loading images:', error));

        // Load upcoming events for homepage (up to 3, but only as many as exist)
        fetch('api/get_events.php?type=closest&limit=3')
            .then(response => response.json())
            .then(events => {
                const container = document.getElementById('upcomingEventsContainer');
                container.innerHTML = '';
                
                if (events.length === 0) {
                    container.innerHTML = '<p style="text-align: center; padding: 40px; color: #666; grid-column: 1 / -1;">No upcoming events yet.</p>';
                    return;
                }
                
                events.forEach(event => {
                    const eventCard = `
                        <div class="overlay1" onclick="window.location.href='event-detail.php?id=${event.id}'" style="cursor: pointer;">
                            <div class="imagCover">
                                <img src="${event.cover_image || 'assest/img-3.JPG'}" alt="${event.title}">
                            </div>
                            <div class="event-details">
                                <div class="details-row">
                                    <div class="date">
                                        <h4>${event.day} ${event.month_short.toUpperCase()}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                    container.innerHTML += eventCard;
                });
            })
            .catch(error => console.error('Error loading events:', error));
    </script>
</body>
</html>
