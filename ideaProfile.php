<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Coffee Website</title>
    <link rel ="stylesheet" href = "ideaProfile.css">
    <link rel = "stylesheet"
    href = "https://unpkg.com/boxicons@latest/css/boxicons.min.css">
 
</head>
<body>
    <header>
        <a href ="#" class="title">
            <h3>personal.details</h3>
        </a>
        
        <ul class="navbar">
            <li><a href="#home">Home</a></li> <!--Same also to this-->
            <li><a href="#members">Members</a></li> <!--What does this do beside the style is once it clicked we will move the id reference below that is also "about" info-->
            <li><a href="#profile" id="show-profile">Profile</a></li> <!--Same to this-->
            <li><a href="#others" id="show-others">Others</a></li> <!--And this-->
        </ul>
        
        <div class="hamburger">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
           </div>
    </header>
    
    <!--Home Structure starts here-->
    <section class="home" id="home">
        <div class="home-text">
            <h1>Meet and Greet <br> us Juniors</h1>
            <p>Start your day by meeting us, your juniors with fresh faces, Group No. 6. Get to know us by exploring our personal backgrounds, hobbies, and favorites. Be inspired by our mottos and life beliefs, and discover the unique qualities that each of us brings to the table. From our passions to our aspirations, we invite you to delve into the stories that shape who we are</p>
        </div>
    </section>
   
    <!--Members design starts here-->
    <section class="members" id="members">
        <div class="heading">
            <h2>༘⋆🌷🫧💭₊˚ෆMembers༘⋆🌷🫧💭₊˚ෆ</h2>
        </div>
        <!--Container-->
        <div class="members-container"> <!--The products container is the whole container for the products-->
            <div class="box">
                <img src="images/Joanne1.jpg" alt="">
                <h3>Joanne Bosogon</h3>
                <button type="button" id="show-container1">See Status</button>

            </div>
            <div class="box">
                <img src="images\monica-img1.jpg" alt="">
                <h3>Monica Masangya</h3>
                <button type="button" id="show-container2">See Status</button>

            </div>
            <div class="box">
                <img src="images/dani-img1.jpg" alt="">
                <h3>Danielle Celecio</h3>
                <button type="button" id="show-container3">See Status</button>

            </div>
            <div class="box">
                <img src="images/angel2.jpg" alt="">
                <h3>Angel Cuevas</h3>
                <button type="button" id="show-container4">See Status</button>

            </div>
            <div class="box">
                <img src="images/marky1.jpeg" alt="">
                <h3>Reymark Malabarbas</h3>
                <button type="button" id="show-container5">See Status</button>

            </div>
            <div class="box">
                <img src="images/Karl1.jpeg" alt="">
                <h3>John Karl Diaz</h3>
                <button type="button" id="show-container6">See Status</button>

            </div>
        </div>
    </section>
    
    <!--Profile structure starts-->
    <section class="profile" id="profile">
        <div class="heading">
            <h2>ִֶָ⋆ ˚｡⋆୨🍓୧⋆ ˚｡⋆Profile Informationsִֶָ⋆ ˚｡⋆୨🍓୧⋆ ˚｡⋆</h2>
        </div>

        <div class="profile-container">
            <div class="profile-item">
                <div class="profile-image">
                    <img src="images/Joanne2.jpg" alt="">
                </div>
                <div class="profile-info">
                    <h3>Name: Joanne Bosogon</h3>
                    <h3>Age: 20 years old </h3>
                    <h3>Birthday: May 31, 2004 </h3>
                    <h3>Birthplace: San Antonio Northern Samar </h3>
                    <h3>Address: Udings Coumpound Alabang, Muntinlupa City</h3>
                    <h3>Pronouns: She/Her</h3>
                </div>
                <div class="box">
                    <h2>Favorites</h2>
                    <div class="favorites-images">
                        <img src="images/hopya-removebg-preview.png" alt="Pizza">
                        <img src="images/ice-cream1-removebg-preview.png" alt="Chicken">
                        <img src="images/fries-removebg-preview.png" alt="Fries">
                    </div>
                </div>
            </div>
    

            <div class="profile-item">
                <div class="profile-image">
                    <img src="images/monica-img2.jpg" alt="">
                </div>
                <div class="profile-info">
                    <h3>Name: Monica Masangya</h3>
                    <h3>Age: 20 years old </h3>
                    <h3>Birthday: December 7, 2003 </h3>
                    <h3>Birthplace: Malvar, Batangas Province </h3>
                    <h3>Address: Tunasan, Muntinlupa</h3>
                    <h3>Pronouns: She/Her</h3>
                </div>
                <div class="box">
                    <h2>Favorites</h2>
                    <div class="favorites-images">
                        <img src="images/chocolate-removebg-preview.png" alt="Pizza">
                        <img src="images/chicken-removebg-preview.png" alt="Chicken">
                        <img src="images/fries-removebg-preview.png" alt="Fries">
                    </div>
                </div>
            </div>

            <div class="profile-item">
                <div class="profile-image">
                    <img src="images/dani-img2.jpg" alt="">
                </div>
                <div class="profile-info">
                    <h3>Name: Danielle Celecio</h3>
                    <h3>Age: 21 years old </h3>
                    <h3>Birthday: September 26, 2002 </h3>
                    <h3>Birthplace: Muntinlupa City </h3>
                    <h3>Address: Poblacion, Muntinlupa City</h3>
                    <h3>Pronouns: She/Her</h3>
                </div>
                <div class="box">
                    <h2>Favorites</h2>
                    <div class="favorites-images">
                        <img src="images/ice-cream1-removebg-preview.png" alt="Pizza">
                        <img src="images/milktea2-removebg-preview.png" alt="Chicken">
                        <img src="images/coffee-removebg-preview.png" alt="Fries">
                    </div>
                </div>
            </div>

            <div class="profile-item">
                <div class="profile-image">
                    <img src="images/angel1.jpg" alt="">
                </div>
                <div class="profile-info">
                    <h3>Name: Angel C. Cuevas </h3>
                    <h3>Age: 20 years old </h3>
                    <h3>Birthday: October 13, 2003 </h3>
                    <h3>Birthplace: Manila pabelia hospital, Manila City </h3>
                    <h3>Address: Tunasan, Muntinlupa City</h3>
                    <h3>Pronouns: She/Her</h3>
                </div>
                <div class="box">
                    <h2>Favorites</h2>
                    <div class="favorites-images">
                        <img src="images/pizza-removebg-preview.png" alt="Pizza">
                        <img src="images/milktea2-removebg-preview.png" alt="Chicken">
                        <img src="images/fries-removebg-preview.png" alt="Fries">
                    </div>
                </div>
            </div>

            <div class="profile-item">
                <div class="profile-image">
                    <img src="images/marky-img2.png" alt="">
                </div>
                <div class="profile-info">
                    <h3>Name: Rey Mark E. Malabarbas </h3>
                    <h3>Age: 21 years old </h3>
                    <h3>Birthday: June 2, 2003 </h3>
                    <h3>Birthplace: Las Piñas, City </h3>
                    <h3>Address: Almanza Dos, Las Piñas City</h3>
                    <h3>Pronouns: He/Him</h3>
                </div>
                <div class="box">
                    <h2>Favorites</h2>
                    <div class="favorites-images">
                        <img src="images/pizza-removebg-preview.png" alt="Pizza">
                        <img src="images/chicken-removebg-preview.png" alt="Chicken">
                        <img src="images/coffee-removebg-preview.png" alt="Fries">
                    </div>
                </div>
            </div>

            <div class="profile-item">
                <div class="profile-image">
                    <img src="images/Karl2.jpg" alt="">
                </div>
                <div class="profile-info">
                    <h3>Name:  John Karl Diaz</h3>
                    <h3>Age: 22 years old </h3>
                    <h3>Birthday: April 25, 2002 </h3>
                    <h3>Birthplace: Barangay Poblacion Muntinlupa, City </h3>
                    <h3>Address:  Poblacion, Muntinlupa City</h3>
                    <h3>Pronouns: He/Him</h3>
                </div>
                <div class="box">
                    <h2>Favorites</h2>
                    <div class="favorites-images">
                        <img src="images/adobo-removebg-preview.png" alt="Pizza">
                        <img src="images/macaroni-removebg-preview.png" alt="Chicken">
                        <img src="images/fruit_salad-removebg-preview.png" alt="Fries">
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <!--Profile structure ends-->
    
    <!--Others structure starts here-->
    <section class="others" id="others">

        <div class="heading">
            <h2>˗ˏˋ ★ ˎˊ˗Others (Beliefs&Motto)˗ˏˋ ★ ˎˊ˗</h2>
        </div>
        <div class="others-container">
            <div class="others-item">
                <div class="others-image">
                    <img src="images/Joanne2.jpg" alt="">
                </div>
                <div class="others-info">
                   <h2>"Seize the Day."</h2>
                  <p>The phrase 'Seize the day' always reminds me that 'At least' is better than 'What if.' So, I always strive to do the things I want, but I keep in mind to do them with virtue and honor. I'm a nostalgic person, and I tend to reminisce about the past often. I don't want the past I remember to be full of regrets. I don't want to be burdened by regret or spend sleepless nights thinking about 'what if' scenarios. I want to live my life to the fullest, and those words are my mantra that help me truly live life to its fullest.</p>
                </div>
            </div>

            <div class="others-item">
                <div class="others-image">
                    <img src="images/monica-img2.jpg" alt="">
                </div>
                <div class="others-info">
                   <h2>"Embrace the struggles and pain, for they are the stepping <br>stones to growth and the path to your true strength."</h2>
                   <p>I've chosen this motto because I've learned that every struggle and pain I've faced has shaped who I am today. Each challenge has taught me resilience and strength, reminding me that growth comes from pushing through the hard times. I know that enduring these difficulties is what will lead me to become a stronger and better version of myself.</p>
                </div>
            </div>

            <div class="others-item">
                <div class="others-image">
                    <img src="images/dani-img2.jpg" alt="">
                </div>
                <div class="others-info">
                   <h2>“If you never bleed you’re never gonna grow.”</h2>
                   <p>I've chosen this motto because it encourages me to take risks, face challenges, and push myself out of my comfort zones. It serves as a reminder that growth and success rarely come without obstacles and failure. it suggests that to truly make progress in life, one must be willing to take action and embrace the possibility of failure. It also reminds me that growth often involves difficult experiences, including emotional pain, which can ultimately lead to greater resilience and a more fulfilling life.</p>
                </div>
            </div>

            <div class="others-item">
                <div class="others-image">
                    <img src="images/angel-img1.jpg" alt="">
                </div>
                <div class="others-info">
                   <h2>"Embrace the journey, not just the destination."</h2>
                   <p>I've chosen this motto because this motto encourages us to focus on the experiences, lessons, and growth that happen along the way, rather than fixating solely on the end goal. Life is full of unexpected twists, challenges, and moments of joy that shape who we are. By embracing the journey, we learn to find meaning and fulfillment in the present, appreciating each step for what it brings. This mindset helps us stay resilient and open-minded, making the destination not just an achievement but a reflection of a rich and well-lived life.</p>
                </div>
            </div>

            <div class="others-item">
                <div class="others-image">
                    <img src="images/marky-img2.png" alt="">
                </div>
                <div class="others-info">
                   <h2>"Time is gold."</h2>
                   <p>"Time is gold" is my favorite motto since it's a profound statement rather than just a simple one. And the reason I chose it is that 'time' is a very important aspect of life; it's like a valuable resource because our time here on Earth is limited. Additionally, as time passes by so quickly and each day is valuable, we should cherish all aspect of our lives, including our relationships, jobs, families, and education. for us to be able to create a happy memory out of it. Finally, that term teaches us something that will always be with us and cannot be taken away.</p>
                </div>
            </div>

            <div class="others-item">
                <div class="others-image">
                    <img src="images/Karl2.jpg" alt="">
                </div>
                <div class="others-info">
                   <h2>"Believe in your self" </h2>
                   <p>This word proves that you trust yourself and trust other people as well. Believe in yourself and before others believe you, overcome every challenge in life, never give up, fight what you have to fight for, the time will come when you and only you will benefit from the things in this world. If you're tired, take a break and don't let it stop you, we're not always at the bottom, all of that will be brought about by our efforts. We don't know where we are headed, and choose what makes you happy then what you are good at. Where is it comfortable that no matter where you are you can do it well and you won't panic.</p>
                </div>
            </div>

        </div>
    </section>
    

    <section>
        <!--Joanne-->
        <div class="container-details" id="joanne">
         <div class="info-image">
          <p>˗ˏˋ ★ ˎˊ˗ <img src="images/Joanne2.jpg" alt="Profile picture of Joanne Nofies Bosogon">˗ˏˋ ★ ˎˊ˗</p>
             <div class="info">
                    <h3 class="name">Joanne Nofies Bosogon</h3>
                    <h4 class="role">Project Leader</h4>
             </div>
             <div class="social-links">
                <a href="https://web.facebook.com/Senkuhh13/" target="_blank"><i class="bx bxl-facebook-square"></i></a>
                <a href="http://www.linkedin.com/in/joan-bosogon-a6bba9320" target="_blank"><i class="bx bxl-linkedin-square"></i></a>
                <a href="#"><i class="bx bxl-instagram" target="_blank"></i></a>
                <a href="https://github.com/jj0a" target="_blank"><i class="bx bxl-github"></i></a>
            </div>
         </div>
            
          <div class="knowledge">
                <h3 class="status">Web Development Knowledge</h3>
                <div class="skill">
                    <h3 class="percent">HTML</h3><span class="bar-per" style="width: 80%;"></span>
                </div>
                <div class="skill">
                    <h3 class="percent">CSS</h3><span class="bar-per" style="width: 40%;"></span>
                </div>
                <div class="skill">
                    <h3 class="percent">JavaScript</h3><span class="bar-per" style="width: 30%;"></span>
                </div>
                <div class="skill">
                    <h3 class="percent">PHP</h3><span class="bar-per" style="width: 50%;"></span>
                </div>
            </div>
        </div>

        <!--Monica-->
        <div class="container-details" id="monica">
            <div class="info-image">
            <p>˗ˏˋ ★ ˎˊ˗ <img src="images/monica-img2.jpg" alt="Profile picture of Monica">˗ˏˋ ★ ˎˊ˗</p>
                <div class="info">
                       <h3 class="name">Monica Masangya</h3>
                       <h4 class="role">System Analyst</h4>
                </div>
                <div class="social-links">
                    <a href="https://web.facebook.com/monicamasangya.7/?_rdc=1&_rdr" target="_blank"><i class="bx bxl-facebook-square"></i></a>
                    <a href="https://www.linkedin.com/in/monica-masangya-b9489930b/" target="_blank"><i class="bx bxl-linkedin-square"></i></a>
                    <a href="https://www.instagram.com/its_monica07/" target="_blank"><i class="bx bxl-instagram"></i></a>
                    <a href="https://github.com/Monica0717" target="_blank"><i class="bx bxl-github"></i></a>
               </div>
            </div>
               
             <div class="knowledge">
                   <h3 class="status">Web Development Knowledge</h3>
                   <div class="skill">
                       <h3 class="percent">HTML</h3><span class="bar-per" style="width: 80%;"></span>
                   </div>
                   <div class="skill">
                       <h3 class="percent">CSS</h3><span class="bar-per" style="width: 40%;"></span>
                   </div>
                   <div class="skill">
                       <h3 class="percent">JavaScript</h3><span class="bar-per" style="width: 20%;"></span>
                   </div>
                   <div class="skill">
                       <h3 class="percent">PHP</h3><span class="bar-per" style="width: 50%;"></span>
                   </div>
               </div>
           </div>

           <!--Danielle-->
           <div class="container-details" id="danielle">
            <div class="info-image">
            <p>˗ˏˋ ★ ˎˊ˗ <img src="images/dani-img2.jpg" alt="Profile picture of Dani">˗ˏˋ ★ ˎˊ˗</p>
                <div class="info">
                       <h3 class="name">Danielle Celecio</h3>
                       <h4 class="role">Web Designer</h4>
                </div>
                <div class="social-links">
                    <a href="https://www.facebook.com/daniellediocareza.celecio/" target="_blank"><i class="bx bxl-facebook-square"></i></a>
                    <a href="https://www.linkedin.com/in/danielle-lauren-celecio-539a29322/" target="_blank"><i class="bx bxl-linkedin-square"></i></a>
                    <a href="https://www.instagram.com/daniiiluvie/?fbclid=IwY2xjawE-LkFleHRuA2FlbQIxMAABHZ7q2zlHrAXDqTpDC1VUvTk4txMZvbpQzi_EE-uXczr9ONa5VFwnbIxq1w_aem_8azNDoeJfYz9R3rEXDS73w" target="_blank"><i class="bx bxl-instagram"></i></a>
                    <a href="github.com/UrDaniiee" target="_blank"><i class="bx bxl-github" target="_blank"></i></a>
               </div>
            </div>
               
             <div class="knowledge">
                   <h3 class="status">Web Development Knowledge</h3>
                   <div class="skill">
                       <h3 class="percent">HTML</h3><span class="bar-per" style="width: 60%;"></span>
                   </div>
                   <div class="skill">
                       <h3 class="percent">CSS</h3><span class="bar-per" style="width: 50%;"></span>
                   </div>
                   <div class="skill">
                       <h3 class="percent">JavaScript</h3><span class="bar-per" style="width: 30%;"></span>
                   </div>
                   <div class="skill">
                       <h3 class="percent">PHP</h3><span class="bar-per" style="width: 30%;"></span>
                   </div>
               </div>
           </div>

           <!--Angel-->
           <div class="container-details" id="angel">
            <div class="info-image">
            <p>˗ˏˋ ★ ˎˊ˗<img src="images/angel2.jpg" alt="Profile picture of Angel"> ˗ˏˋ ★ ˎˊ˗</p>
                <div class="info">
                       <h3 class="name">Angel Cuevas</h3>
                       <h4 class="role">Front-End Developer</h4>
                </div>
                <div class="social-links">
                    <a href="https://web.facebook.com/cuenca.cuevas.3?mibextid=ZbWKwL&_rdc=1&_rdr" target="_blank"><i class="bx bxl-facebook-square"></i></a>
                    <a href="https://www.facebook.com/cuenca.cuevas.3?mibextid=ZbWKwL" target="_blank"><i class="bx bxl-linkedin-square"></i></a>
                    <a href="https://www.instagram.com/_ig.yuri/?igsh=MWlidmdraHdqMDd0Zg%3D%3D" target="_blank"><i class="bx bxl-instagram"></i></a>
                    <a href="https://github.com/Angeeeeel13"><i class="bx bxl-github" target="_blank"></i></a>
               </div>
            </div>
               
             <div class="knowledge">
                   <h3 class="status">Web Development Knowledge</h3>
                   <div class="skill">
                       <h3 class="percent">HTML</h3><span class="bar-per" style="width: 50%;"></span>
                   </div>
                   <div class="skill">
                       <h3 class="percent">CSS</h3><span class="bar-per" style="width: 20%;"></span>
                   </div>
                   <div class="skill">
                       <h3 class="percent">JavaScript</h3><span class="bar-per" style="width: 30%;"></span>
                   </div>
                   <div class="skill">
                       <h3 class="percent">PHP</h3><span class="bar-per" style="width:10%;"></span>
                   </div>
               </div>
           </div>

           <!--Reymark-->
           <div class="container-details " id="reymark">
            <div class="info-image">
            <p>˗ˏˋ ★ ˎˊ˗ <img src="images/marky-img2.png" alt="Profile picture of Reymark">˗ˏˋ ★ ˎˊ˗</p>
                <div class="info">
                       <h3 class="name">Reymark Malabarbas</h3>
                       <h4 class="role">Content Creator Writer</h4>
                </div>
                <div class="social-links">
                    <a href="https://web.facebook.com/reymark.malabarbas.7?mibextid=ZbWKwL&_rdc=1&_rdr" target="_blank"><i class="bx bxl-facebook-square"></i></a>
                    <a href="https://www.linkedin.com/in/rey-mark-malabarbas-428930322?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank"><i class="bx bxl-linkedin-square"></i></a>
                    <a href="https://www.instagram.com/_eunoia.cuore/?igsh=MW0yYmZ6cWlwZ2N5Mg%3D%3D" target="_blank"><i class="bx bxl-instagram"></i></a>
                    <a href="https://github.com/malabarbasreymark02"><i class="bx bxl-github" target="_blank"></i></a>
               </div>
            </div>
               
             <div class="knowledge">
                   <h3 class="status">Web Development Knowledge</h3>
                   <div class="skill">
                       <h3 class="percent">HTML</h3><span class="bar-per" style="width: 80%;"></span>
                   </div>
                   <div class="skill">
                       <h3 class="percent">CSS</h3><span class="bar-per" style="width: 40%;"></span>
                   </div>
                   <div class="skill">
                       <h3 class="percent">JavaScript</h3><span class="bar-per" style="width: 30%;"></span>
                   </div>
                   <div class="skill">
                       <h3 class="percent">PHP</h3><span class="bar-per" style="width: 50%;"></span>
                   </div>
               </div>
           </div>

           <!--Karl-->
           <div class="container-details" id="karl">
            <div class="info-image">
            <p>˗ˏˋ ★ ˎˊ˗<img src="images/Karl2.jpg" alt="Profile picture of Karl">˗ˏˋ ★ ˎˊ˗</p>
                <div class="info">
                       <h3 class="name">John Karl Diaz</h3>
                       <h4 class="role">Back-End Developer</h4>
                </div>
                <div class="social-links">
                    <a href="https://web.facebook.com/Gliane9?mibextid=kFxxJD&_rdc=1&_rdr" target="_blank"><i class="bx bxl-facebook-square"></i></a>
                    <a href="https://www.linkedin.com/in/john-karl-diaz-282941322" target="_blank"><i class="bx bxl-linkedin-square"></i></a>
                    <a href="https://web.facebook.com/Gliane9?mibextid=kFxxJD&_rdc=1&_rdr" target="_blank"><i class="bx bxl-instagram"></i></a>
                    <a href="https://github.com/JohnKarl110"><i class="bx bxl-github" target="_blank"></i></a>
               </div>
            </div>
               
             <div class="knowledge">
                   <h3 class="status">Web Development Knowledge</h3>
                   <div class="skill">
                       <h3 class="percent">HTML</h3><span class="bar-per" style="width: 10%;"></span>
                   </div>
                   <div class="skill">
                       <h3 class="percent">CSS</h3><span class="bar-per" style="width: 40%;"></span>
                   </div>
                   <div class="skill">
                       <h3 class="percent">JavaScript</h3><span class="bar-per" style="width: 10%;"></span>
                   </div>
                   <div class="skill">
                       <h3 class="percent">PHP</h3><span class="bar-per" style="width: 50%;"></span>
                   </div>
               </div>
           </div>
    </section>

    <!--Php Code-->
    <footer>
        <div class="footer">
        <p>&copy; <?php echo date("Y"); ?> Group6. All rights reserved.</p>
        </div>
    </footer>


    <script src="ideaProfile.js"></script>
    
</body>
</html>