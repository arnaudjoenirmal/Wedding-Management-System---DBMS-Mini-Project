
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dbms.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Playfair Display', serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .about-us-content {
            max-width: 1000px;
            margin: 40px auto;
            padding: 20px;
            text-align: justify;
        }

        .about-us-content h2 {
            color: #333;
            text-align: center;
        }

        .about-us-content p {
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .about-us-images {
            display: flex;
            justify-content: space-around;
            margin-top: 200px;
            flex-wrap: wrap;
        }

        .about-us-images img {
            width: 200px;
            height: 200px;
            border-radius: 20px;
            object-fit: cover;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
            margin-bottom: 20px;
        }

        .about-us-images img:hover {
            transform: scale(1.1);
        }

        .testimonial-section {
            background-color: #f8f8f8;
            padding: 200px;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .testimonial-left {
            flex: 1;
            text-align: left;
            margin-right: 20px;
        }

        .testimonial-right {
            flex: 1;
            text-align: left;
        }

        .testimonial-image img {
            max-width: 50%;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
        }

        .testimonial-image img:hover {
            transform: scale(1.1);
        }

        .testimonial-text {
            font-style: italic;
            color: #555;
        }

        .location-details {
            background-color: #f8f8f8;
            color: #9e9e9e;
            padding: 40px;
            text-align: center;
        }
    </style>
    <title>About Us - Heavenly Day Events</title>
</head>
<body>
    <div class="main-container">
        <div class="topbar">
            <div class="navbar left-links">
                <a href="frontend1.php">Home</a>
            </div>
            <div class="navbar left-links">
                <a href="about.php">About</a>
            </div>
            <div class="navbar left-links">
                <a href="services.php">Service</a>
            </div>
            <div class="logo">
                <img src="https://images.squarespace-cdn.com/content/51f030f9e4b07a9944dcd049/bae93830-8528-4129-89d9-ae7a33eba0de/2.png?format=1000w&content-type=image%2Fpng" alt="Logo">
            </div>
            <div class="navbar right-links">
                <a href="gallery.php">Gallery</a>
            </div>
            <div class="navbar right-links">
                <a href="contact.php">Contact</a>
            </div>
            <div class="navbar right-links">
          <?php 
            
             session_start();
             if(isset($_SESSION['uname'])){
              $un=$_SESSION['uname'];
              echo "<a href='frontend.html'>Hello, ".htmlspecialchars($un) . "!</a>";
             }
             else{
              echo "Hello user";
             }
          ?>
        </div>
        </div>
        <div class="about-us-content">
            <h2>About Us</h2>
            <p>
                At [Company Name], we believe that every love story is unique and deserves to be celebrated in a way that reflects the personalities and dreams of the couple. Established with a passion for creating unforgettable moments, we are a dedicated team of wedding enthusiasts committed to turning your vision into a reality.
            </p>
            <h2>Our Philosophy!</h2>
            <p>
                At the heart of [Company Name] is a deep appreciation for love, commitment, and the joy that weddings bring. We understand that planning a wedding can be both exciting and overwhelming, and that's where we come in. Our philosophy revolves around personalized, stress-free, and meticulously planned celebrations. We strive to transform your dreams into a seamless and magical reality, leaving you free to savor every precious moment of your special day.
            </p>
            <h2>Why US?</h2>
             <p>
                At [Company Name], we stand out in the world of wedding management with our unwavering commitment to turning your special day into an extraordinary, stress-free celebration. Our seasoned team, fueled by a passion for perfection, brings years of collective experience to the table. What sets us apart is our dedication to understanding your unique vision and personal style, allowing us to tailor our services to suit your dreams. Whether it's full-service planning, partial assistance, or day-of coordination, we seamlessly handle every detail. Your wedding journey with us is not just about planning; it's about crafting an experience that resonates with the essence of your love story. With [Company Name], your wedding day becomes a momentous, flawlessly executed celebration, leaving you to bask in the joy of the occasion. Choose us, and let's transform your dreams into an unforgettable reality.
            </p>
        </div>

        <div class="about-us-images">
            <img src="https://www.marthastewart.com/thmb/06sKEtn4ZXpqKmlEnuj6MeMX_PQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/alpana-sunny-wedding-couple-9302-1118-2000-442fd63b3e2342a9a3458d3d860f7ac7.jpg" alt="About Image 1">
            <img src="data:image/jpeg;base64,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" alt="About Image 2">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhB2cTHEQYtf1IP4sw3BLfw_f-OihAZpDDaQ&usqp=CAU" alt="About Image 3">
        </div>



        <div class="testimonial-section">
            <div class="testimonial-left">
                <br>
                <br>
                    <br>
                    <br>
                    <br>
                    <br>
                <div class="testimonial-image">
                    <img src="https://t3.ftcdn.net/jpg/06/35/75/98/240_F_635759862_7vkseVER6sTfz9MpCOOaW2sA1VaGfk7z.jpg" alt="Testimonial Image">
                </div>
            </div>
            <br>
            <div class="testimonial-right">
                <div class="testimonial-text">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    "Heavenly Day Events is your go-to partner for creating magic in Indian weddings! Our software is your secret weapon for stress-free wedding planning. From crafting dreamy decor to managing guest lists with flair, we've got it all covered. Picture this: seamless coordination, easy budget tracking, and a touch of tech-savvy elegance. Our platform is not just about planning; it's about turning your wedding into a heavenly affair. So, wave goodbye to wedding worries and say hello to hassle-free celebrations. Let's make your big day the talk of the town with Heavenly Day Events!"
                    <br>


                    <br>
                    - JOEL
                </div>
            </div>
        </div>
   
    </div>
</body>
</html>
