<!doctype html>
<html class="no-js" lang="zxx">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>CANATECH</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
</head>
 <style>
    body {
      font-family: Arial, sans-serif;
      background: #f9f9f9;
      margin: 0;
      padding: 20px;
    }

    .section-title {
      text-align: center;
      margin-bottom: 50px;
    }

    .section-title h2 {
      font-size: 2.5rem;
      margin-bottom: 10px;
      color: #333;
    }

    .section-title p {
      font-size: 1.1rem;
      color: #666;
    }

    .services-grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
    }

    .flip-box {
      background-color: transparent;
      width: 300px;
      height: 350px;
      perspective: 1000px;
    }

    .flip-box-inner {
      position: relative;
      width: 100%;
      height: 100%;
      text-align: center;
      transition: transform 0.8s;
      transform-style: preserve-3d;
    }

    .flip-box:hover .flip-box-inner {
      transform: rotateY(180deg);
    }

    .flip-box-front, .flip-box-back {
      position: absolute;
      width: 100%;
      height: 100%;
      backface-visibility: hidden;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      padding: 20px;
      background: white;
    }

    .flip-box-front {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .flip-box-back {
      transform: rotateY(180deg);
      background-color: #003366;
      color: white;
    }

    .flip-box svg {
      width: 50px;
      height: 50px;
      margin-bottom: 20px;
      fill: #0073e6;
    }

    .flip-box h3 {
      font-size: 1.3rem;
      margin-bottom: 10px;
    }

    .flip-box p {
      font-size: 0.95rem;
    }

    .feature-list {
      list-style: none;
      padding: 0;
      text-align: left;
      margin-top: 15px;
    }

    .feature-list li::before {
      content: "✔ ";
      color: #00ffcc;
    }

    @media (max-width: 768px) {
      .services-grid {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
<body>
  <?=view('/include/navbar')?>

<section class="portfolio-section mt-5">
  <div class="container">
    <div class="about-area  ">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-8">
            <div class="title-area text-center">
              <h2 class="sec-title mb-20 text-anime-style-3"  style="font-size:40px;">GIS Development</h2>
               <p class="sec-text wow fadeInUp" data-wow-delay=".3s">Turn your vision into reality with our innovative GIS solutions.</p>
            </div>
         </div>
      </div>

      <!-- Project 1 -->
      <div class="row gy-30   align-items-center">
         <div class="col-lg-6">
            <div class="about-image ab-img16 global-img">
               <img src="<?= base_url(); ?>public/assets/img/normal/GIS1.jpg" alt="GIS">
            </div>
         </div>
         <div class="col-lg-6">
            <div class="about-item style-16 ps-xxl-4 ms-xxl-4">
               <div class="about-content">
                  <h4 class="  text-anime-style-2">Navigate Your Future with our tailored Geospatial Apps</h4>
                  <p class="about-text wow fadeInUp" data-wow-delay=".3s">We develop custom geospatial applications to meet specific business needs, leveraging the latest ESRI and open-source technologies to deliver innovative and efficient solutions.
                  </p>    
               </div>
            </div>
         </div>
      </div>

  </div>
  </div>
  </div>
</section>

<section class="what-we-do mb-50">
    <div class="section-title">
      <h2  style="font-size:40px;">What Do We Do?</h2>
      <p>Explore our GIS development services tailored to empower your organization with innovative technology solutions.</p>
    </div>

    <div class="services-grid">
      <!-- GIS Mobile Application -->
      <div class="flip-box">
        <div class="flip-box-inner">
          <div class="flip-box-front">
            <svg viewBox="0 0 64 64">
              <path d="M32 0C14.4 0 0 14.4 0 32s14.4 32 32 32 32-14.4 32-32S49.6 0 32 0zm0 58C17 58 6 47 6 32S17 6 32 6s26 11 26 26-11 26-26 26z"/>
            </svg>
            <h3>GIS Mobile Application</h3>
            <p>We provide GIS mobile apps that enhance field operations, offering seamless mapping, real-time data updates, and precise geotagging to improve efficiency and accuracy in the field.</p>
          </div>
          <div class="flip-box-back">
            <h3 class="text-white">Features</h3>
            <ul class="feature-list">
             <li>User Centric design</li>
			<li>Platform Compatibility</li>
			<li>Offline Mode</li>
			            </ul>
          </div>
        </div>
      </div>

      <!-- GIS Web Application -->
      <div class="flip-box">
        <div class="flip-box-inner">
          <div class="flip-box-front">
           <svg viewBox="0 0 64 64">
              <path d="M32 0C14.4 0 0 14.4 0 32s14.4 32 32 32 32-14.4 32-32S49.6 0 32 0zm0 58C17 58 6 47 6 32S17 6 32 6s26 11 26 26-11 26-26 26z"/>
            </svg>
            <h3>GIS Web Application Development	</h3>
            <p>deliver Geospatial web apps for data visualization, real-time monitoring, and spatial analysis, featuring robust reporting and a seamless user experience.</p>
          </div>
          <div class="flip-box-back">
            <h3 class="text-white">Features</h3>
            <ul class="feature-list">
             <li>Responsive Design</li>
			<li>Scalable Architecture</li>
			<li>Data Visualization</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="flip-box">
        <div class="flip-box-inner">
          <div class="flip-box-front">
            <svg viewBox="0 0 64 64">
              <path d="M32 0C14.4 0 0 14.4 0 32s14.4 32 32 32 32-14.4 32-32S49.6 0 32 0zm0 58C17 58 6 47 6 32S17 6 32 6s26 11 26 26-11 26-26 26z"/>
            </svg>
            <h3>Desktop <br>Customization</h3>
            <p>	We develop user-friendly GIS plugins,<br> tools, and extensions to enhance solutions and optimize spatial data analysis and <br>integration.</p>
          </div>
          <div class="flip-box-back">
            <h3 class="text-white">Features</h3>
            <ul class="feature-list">
             <li>Tool Development</li>
			<li>Extension Development</li>
			<li>Add In Development</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
 </section>

<?=view('/include/footer')?>
</body>
</html>