<?php require_once 'config/database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAKUM Spaces</title>
    <link rel="icon" href="assest/logo-lakum- (1).png" type="image/png">
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
<style>
    .spaceImageBackground {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 30px;
}

/* LEFT SIDE — CONTENT + IMG1 */
.leftContent {
    width: 50%;
}

.leftContent h4 {
    margin-bottom: 10px;
}

.leftContent p {
    line-height: 1.6;
}

/* IMG1 UNDER CONTENT */
.img1 img {
    width: 100%;
    margin-top: 20px;
    border-radius: 10px;
}

/* RIGHT SIDE — IMG2 STARTS FROM TITLE HEIGHT */
.rightImage {
    width: 50%;
    display: flex;
    justify-content: flex-end;
}

.rightImage img {
    width: 90%;
    border-radius: 10px;
}

    .Space {
  position: relative;
  background-image: url("assest/img-3.JPG");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  width: 100%;
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  color: white;
  text-align: center;
  padding: 0 0px;
}

.Space::before {
  content: "";
  position: absolute;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background: rgba(0, 0, 0, 0.4);
  z-index: 1;
}

.nameSpace {
  position: relative;
  z-index: 2;
  margin: 5px 0;
}

.nameSpace p {
  font-size: 50px;
  margin: 0;
}

.nameSpace p span {
  font-weight: 600;
}

/* Collection row */
.CollectionSpace {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;       /* المسافة بين العناصر */
  padding: 20px 0; /* padding أعلى وأسفل */
  position: relative;
  z-index: 2;
}

.CollectionSpace p {
  margin: 0;
  font-size: 20px;
  color: white;
  padding: 8px 15px;
 
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s all ease;
}


.SpaceVENUMContainer {
  display: flex;
  flex-direction: column;
  gap: 30px;
  padding: 40px 10%; /* use percentage instead of 200px */
}

.titleSpaceVenum {
  width: 100%;
  text-align: left;
}

.titleSpaceVenum h4 {
  font-size: 36px;

  font-weight: 600;
  margin-bottom: 20px;
font-family: "Atyp Kido TRIAL";
  color: #000;
}

.SpaceVENUMContent {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  gap: 40px;
  flex-wrap: wrap; /* allow wrap on small screens */
}

    @media(max-width: 1366px){
          .card {
      flex: 0 0 calc(33.33% - 13.3px); /* 3 cards visible with gap */
      height: auto;
    }
    }
    /* 1024px */
@media (max-width: 1024px) {
    .rightImage img {
        width: 100%;
    }
    .SpaceVENUMContainer {
  display: flex;
  flex-direction: column;
  gap: 30px;
  padding: 40px 10px; /* use percentage instead of 200px */
}

}

/* 820px AND BELOW */
@media (max-width: 820px) {
    .spaceImageBackground {
        gap: 20px;
    }
}

/* 768px */
@media (max-width: 768px) {
    .spaceImageBackground {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .leftContent,
    .rightImage {
        width: 100%;
    }

    .rightImage {
        justify-content: center;
        margin-top: 20px;
    }

    .rightImage img {
        width: 100%;
    }
}

/* 520px */
@media (max-width: 520px) {
    .leftContent h4 {
        font-size: 20px;
    }

    .leftContent p {
        font-size: 14px;
    }

    .img1 img,
    .rightImage img {
        border-radius: 8px;
    }
}

/* 430px */
@media (max-width: 430px) {
    .leftContent h4 {
        font-size: 18px;
    }

    .leftContent p {
        font-size: 13px;
    }
}

/* 414px */
@media (max-width: 414px) {
    .leftContent h4 {
        font-size: 17px;
    }
    .nameSpace p {
        font-size: 25px;
    }
    .leftContent p {
        font-size: 13px;
    }
    .CollectionSpace {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
     gap: 0px; 
    padding: 20px 0;
    position: relative;
    z-index: 2;
    
}
.CollectionSpace p{
   font-size: 15px;
}

}

/* 412px */
@media (max-width: 412px) {
    .leftContent h4 {
        font-size: 17px;
    }

    .leftContent p {
        font-size: 13px;
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
                <li><a href="Space.php#form">SHOP</a></li>    
            </ul>
        </div>
    </div>

    <div class="Space" id="spaceHeroSection">
        <div class="nameSpace">
           <p>Discover Our Dynamic <span>Venus Space</span></p>
        </div>
        <div class="CollectionSpace">
            <p>Art</p>
            <p>Gallary</p>
            <p>Hub</p>
            <p>Library</p>
            <p>Shop</p>
            <p> Café</p>
        </div>
    </div>

    <div class="SpaceVENUMContainer">
        <div class="titleSpaceVenum">
            <h4>LAKUM VENUE</h4>
        </div>

        <div class="SpaceVENUMContent">
            <div class="LeftText">
                <p>
                    Lakum Artspace offers a versatile and elegantly designed venue, thoughtfully created to accommodate a 
                    wide range of events, from art exhibitions and product launches to private celebrations, talks, and cultural 
                    programs. The space unfolds across several distinctive areas, each with its own atmosphere and flexibility: 
                    Hall 1, a spacious gallery ideal for large-scale installations or receptions; Hall 2, perfectly suited for intimate 
                    showcases, creative workshops, and panel discussions; and the Mezzanine Floor, home to a welcoming 
                    café, a curated Library, and the Lakum Shop, a retail corner that encourages relaxed breaks, quiet 
                    exploration, and moments of discovery. Every corner of Lakum Artspace has been conceived with purpose, 
                    blending functionality and aesthetic warmth to cultivate an inspiring setting where creativity and connection 
                    naturally meet
                </p>
                <p>
                     To complement every occasion, Lakum offers a suite of additional services designed to ensure a seamless 
                        and memorable experience. These include valet parking, assisted catering, professional security, and access 
                        to trusted photographers and videographers to capture each moment. The venue can also accommodate live 
                        music performances, adding an artistic and atmospheric touch to any gathering. Fully equipped with an in
                        house sound system, projectors, and a curated catalogue of furniture available for rental, Lakum allows 
                        every event to be tailored to its unique atmosphere and design vision
                </p>
            </div>

            <div class="imgRightSpaceVenum">
                <img src="./HADAF Company/IMG_3946 2.png" alt="">
            </div>
        </div>
       <div class="spaceImageBackground">

    <!-- LEFT SIDE -->
    <div class="leftContent">
        <div class="titlespaceImageBackground">
            <h4>GROUND FLOOR MAP</h4>
        </div>

        <div class="paragraphspaceImageBackground">
            <p>
                Lakum is more than just a space — it's a multi-dimensional destination for art, 
                culture, and connection. Our diverse facilities are designed to inspire, engage, 
                and bring communities together.
            </p>
        </div>

        <div class="img1">
            <img src="assest/img022.png" alt="">
        </div>
    </div>

    <!-- RIGHT SIDE -->
    <div class="rightImage">
        <img src="assest/img011.png" alt="">
    </div>

</div>

        <div class="floorsection" style='display:none'>
            <div class="content">
                <div class="titleFloor">
                <h4>
                     GROUND FLOOR MAP
                </h4>
            </div>
            <div class="paragraph">
                <p>
                    Lakum is more than just a space — it's a multi-dimensional destination for art, 
                    culture, and connection. Our diverse facilities are designed to inspire, engage, 
                    and bring communities together
                </p>
            </div>
            </div>
           
            
        </div>
        <div class="ContainerSlide1">
            <div class="slider-container1">
                <button class="nav prev">&#10094;</button>
                <div class="slider-track">
                    <div class="card"><img src="HADAF Company/IMG_3941.png" alt="1"></div>
                    <div class="card"><img src="HADAF Company/IMG_3970.JPG" alt="2"></div>
                    <div class="card"><img src="HADAF Company/IMG_3942.png" alt="3"></div>
                    <div class="card"><img src="HADAF Company/IMG_3943.png" alt="4"></div>
                    <div class="card"><img src="HADAF Company/IMG_3944 2.png" alt="5"></div>
                    <div class="card"><img src="HADAF Company/IMG_3947 2.png" alt="6"></div>
                    <div class="card"><img src="HADAF Company/IMG_3949 2.png" alt="7"></div>
                </div>
                <button class="nav next">&#10095;</button>
            </div>
        </div>
    </div>

    <section id="generic_price_table">
        <div class="price-heading">
            <h1>Lakum Hall Pricing</h1>
        </div>

        <div class="flex-container">
            <div class="top-row">
                <div class="generic_content">
                    <div class="generic_head_price">
                        <div class="generic_head_content"><div class="head_bg"></div><div class="head"><span>Lakum Hall 1</span></div></div>
                        <div class="generic_price_tag"><span class="price">12,000 <img src="saudi arabia/currency.png" alt="SAR" class="currency-icon"></span></div>
                    </div>
                    <div class="generic_feature_list">
                        <ul>
                            <li>Support Services – logistical and technical support.</li>
                            <li>Custom Exhibition Stands – lighting, sound, AC, power.</li>
                        </ul>
                    </div>
                    <div class="generic_price_btn"><a href="Space.php#form">Book Now</a></div>
                </div>

                <div class="generic_content">
                    <div class="generic_head_price">
                        <div class="generic_head_content"><div class="head_bg"></div><div class="head"><span>Lakum Hall 2</span></div></div>
                        <div class="generic_price_tag"><span class="price">7,500<img src="saudi arabia/currency.png" alt="SAR" class="currency-icon"></span></div>
                    </div>
                    <div class="generic_feature_list">
                        <ul>
                            <li>Support Services – logistical and technical support.</li>
                            <li>Operational Service – lighting, sound, AC, power.</li>
                        </ul>
                    </div>
                    <div class="generic_price_btn"><a href="Space.php#form">Book Now</a></div>
                </div>

                <div class="generic_content">
                    <div class="generic_head_price">
                        <div class="generic_head_content"><div class="head_bg"></div><div class="head"><span>Lakum Hall 3</span></div></div>
                        <div class="generic_price_tag"><span class="price">4000<img src="saudi arabia/currency.png" alt="SAR" class="currency-icon"></span></div>
                    </div>
                    <div class="generic_feature_list">
                        <ul>
                            <li>Support Services – logistical and technical support.</li>
                            <li>Operational Service – lighting, sound, AC, power.</li>
                        </ul>
                    </div>
                    <div class="generic_price_btn"><a href="Space.php#form">Book Now</a></div>
                </div>
            </div>

            <div class="bottom-row">
                <div class="generic_content">
                    <div class="generic_head_price">
                        <div class="generic_head_content"><div class="head_bg"></div><div class="head"><span>Meeting Room</span></div></div>
                        <div class="generic_price_tag"><span class="price">2500<img src="saudi arabia/currency.png" alt="SAR" class="currency-icon"></span></div>
                    </div>
                    <div class="generic_feature_list"><ul><li>Coming Soon</li></ul></div>
                    <div class="generic_price_btn"><a href="Space.php#form">Get More Info</a></div>
                </div>

                <div class="generic_content">
                    <div class="generic_head_price">
                        <div class="generic_head_content"><div class="head_bg"></div><div class="head"><span>Cafe Costs</span></div></div>
                        <div class="generic_price_tag"><span class="price">3500<img src="saudi arabia/currency.png" alt="SAR" class="currency-icon"></span></div>
                    </div>
                    <div class="generic_feature_list"><ul><li>*Benefit from the same amount with orders</li></ul></div>
                    <div class="generic_price_btn"><a href="Space.php#form">Get More Info</a></div>
                </div>
            </div>
        </div>
    </section>

    <section id="form">
        <form action="" method="POST" class="contact-form">
            <div class="form-row">
                <div class="form-group">
                    <label for="firstName">Full Name</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" id="firstName" name="firstName" placeholder="John" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName">Company Name</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-building"></i>
                        <input type="text" id="lastName" name="lastName" placeholder="Doe Ltd" required>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-phone"></i>
                        <input type="tel" id="phone" name="phone" placeholder="+966 5XXXXXXXX" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" id="email" name="_replyto" placeholder="example@gmail.com" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <div class="input-icon">
                    <textarea id="message" name="message" rows="5" placeholder="Write your message here..." required></textarea>
                </div>
            </div>

            <button class="ButtonFormRow" type="submit">Submit</button>
        </form>
    </section>  

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
    
    <script>
document.addEventListener('DOMContentLoaded', () => {
    const menuIcon = document.querySelector('.ri-menu-line');
    const closeIcon = document.querySelector('.ri-close-line');
    const menu = document.querySelector('.MenuHeader ul');

    function updateMenuIcons() {
        if (window.innerWidth <= 1024) {
            menuIcon.style.display = 'block';
            closeIcon.style.display = 'none';
            menu.classList.remove('active');
        } else {
            menuIcon.style.display = 'none';
            closeIcon.style.display = 'none';
            menu.classList.remove('active');
        }
    }

    // Initial check
    updateMenuIcons();

    // Update on resize
    window.addEventListener('resize', updateMenuIcons);

    // Hamburger click
    menuIcon.addEventListener('click', () => {
        menu.classList.add('active');
        menuIcon.style.display = 'none';
        closeIcon.style.display = 'block';
        document.body.style.overflow = 'hidden'; // prevent scroll
    });

    // Close click
    closeIcon.addEventListener('click', () => {
        menu.classList.remove('active');
        menuIcon.style.display = 'block';
        closeIcon.style.display = 'none';
        document.body.style.overflow = ''; // restore scroll
    });
});




        // Load most recent event for Space hero background
        fetch('api/get_events.php?type=latest&limit=1')
            .then(response => response.json())
            .then(events => {
                if (events.length > 0 && events[0].cover_image) {
                    const spaceSection = document.getElementById('spaceHeroSection');
                    spaceSection.style.backgroundImage = `linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('${events[0].cover_image}')`;
                }
            })
            .catch(error => console.error('Error loading space background:', error));

        // Slider functionality
        const track = document.querySelector('.slider-track');
        const prevBtn = document.querySelector('.nav.prev');
        const nextBtn = document.querySelector('.nav.next');
        const cards = document.querySelectorAll('.card');

        if (track && cards.length > 0) {
            let isDragging = false;
            let startX = 0;
            let currentTranslate = 0;
            let prevTranslate = 0;
            let animationID = 0;
            const cardWidth = cards[0].offsetWidth + 20;

            track.addEventListener('mousedown', dragStart);
            track.addEventListener('mousemove', dragMove);
            track.addEventListener('mouseup', dragEnd);
            track.addEventListener('mouseleave', dragEnd);
            track.addEventListener('touchstart', dragStart);
            track.addEventListener('touchmove', dragMove);
            track.addEventListener('touchend', dragEnd);

            function dragStart(e) {
                isDragging = true;
                startX = getX(e);
                animationID = requestAnimationFrame(animation);
                track.style.transition = 'none';
            }

            function dragMove(e) {
                if (!isDragging) return;
                const currentX = getX(e);
                const diff = currentX - startX;
                currentTranslate = prevTranslate + diff;
            }

            function dragEnd() {
                cancelAnimationFrame(animationID);
                isDragging = false;
                const movedBy = currentTranslate - prevTranslate;
                if (movedBy < -50) {
                    currentTranslate = prevTranslate - cardWidth;
                } else if (movedBy > 50) {
                    currentTranslate = prevTranslate + cardWidth;
                } else {
                    currentTranslate = prevTranslate;
                }
                const maxTranslate = 0;
                const minTranslate = -(track.scrollWidth - track.parentElement.offsetWidth);
                if (currentTranslate > maxTranslate) currentTranslate = maxTranslate;
                if (currentTranslate < minTranslate) currentTranslate = minTranslate;
                prevTranslate = currentTranslate;
                track.style.transition = 'transform 0.4s ease';
                track.style.transform = `translateX(${currentTranslate}px)`;
            }

            function animation() {
                setSliderPosition();
                if (isDragging) requestAnimationFrame(animation);
            }

            function setSliderPosition() {
                track.style.transform = `translateX(${currentTranslate}px)`;
            }

            function getX(e) {
                return e.type.includes('mouse') ? e.pageX : e.touches[0].clientX;
            }

            if (nextBtn) {
                nextBtn.addEventListener('click', () => {
                    currentTranslate -= cardWidth * 3;
                    dragEnd();
                });
            }

            if (prevBtn) {
                prevBtn.addEventListener('click', () => {
                    currentTranslate += cardWidth * 3;
                    dragEnd();
                });
            }
        }
    </script>
</body>
</html>
