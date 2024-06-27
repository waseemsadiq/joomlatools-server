---
@layout: 
    path: /default
    pageclass: landing
@form:
    name: contact-us
    processors:
        - 'email':
            recipients:
                - info@wfcs.co.uk
            title: WFCS
            subject: New message from the wfcs contact form
    schema:
        firstName: [string, required]
        lastName: [string, required]
        email: [email, required]
        phone: [string, required]
        message: [string, required]
    
    redirect: /thank-you
    honeypot: message_x6aGCRQ3

name: Well Foundation Community Sports
title: WFCS | Well Foundation Community Sports
summary: Well foundation community sports helps young people transition into uninterrupted education, meaningful training and fulfilling work by leveraging sports-based personal growth.
---
    <!-- Hero Section -->
        <?= import('/partials/page/hero'); ?>
    <!-- End Hero Section -->

    <!-- ====== Services and Support Section Start -->
    <section class="pb-8 pt-20 dark:bg-dark lg:pb-[70px] lg:pt-[120px]">
      <div class="container">
        <div class="-mx-4 flex flex-wrap">
          <div class="w-full px-4">
            <div class="mx-auto mb-12 max-w-[485px] text-center lg:mb-[70px]">
              <span class="mb-2 block text-lg font-semibold text-primary"> How we help </span>
              <h2 class="mb-3 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2]"> We provide helpful services and support </h2>
              <p class="text-base text-body-color dark:text-dark-6"> We offer comprehensive support services to help our participants develop into well-rounded, productive members of the community. </p>
            </div>
          </div>
        </div>
        <div class="-mx-4 flex flex-wrap">
          <div class="w-full px-4 md:w-1/2 lg:w-1/4">
            <div class="wow fadeInUp group mb-12" data-wow-delay=".1s">
              <div class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
                <span class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                <svg width="37" height="37" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.5,5C14.878,5 16,3.879 16,2.5C16,1.121 14.878,0 13.5,0C12.122,0 11,1.121 11,2.5C11,3.879 12.122,5 13.5,5ZM13.5,1C14.327,1 15,1.673 15,2.5C15,3.327 14.327,4 13.5,4C12.673,4 12,3.327 12,2.5C12,1.673 12.673,1 13.5,1ZM3.5,10C4.878,10 6,8.879 6,7.5C6,6.121 4.878,5 3.5,5C2.122,5 1,6.121 1,7.5C1,8.879 2.122,10 3.5,10ZM3.5,6C4.327,6 5,6.673 5,7.5C5,8.327 4.327,9 3.5,9C2.673,9 2,8.327 2,7.5C2,6.673 2.673,6 3.5,6ZM23.229,13.08L18,16.454L18,14.5C18,13.673 17.327,13 16.5,13L16,13L16,7L19.5,7C19.776,7 20,6.776 20,6.5L20,5.209L23.435,3.489C23.789,3.246 24,2.833 24,2.385C24,1.937 23.789,1.525 23.435,1.281C23.41,1.263 21.107,0.23 21.107,0.23C20.95,0.16 20.79,0.1 20.629,0.052C20.25,-0.064 19.847,0.008 19.524,0.248C19.196,0.491 19.001,0.879 19.001,1.285L19.001,5.998L13.501,5.998C12.76,5.998 12.093,6.323 11.635,6.837L8.656,9.727C8.447,9.93 8.185,10.067 7.901,10.123L2.584,11.173C1.623,11.553 1.002,12.466 1.002,13.499L1.002,21.381L0.055,23.276C-0.069,23.523 0.032,23.823 0.279,23.947C0.351,23.983 0.427,24 0.502,24C0.686,24 0.862,23.898 0.95,23.724L1.95,21.724C1.985,21.655 2.003,21.578 2.003,21.5L2.003,19L6.503,19C6.779,19 7.003,19.225 7.003,19.5L7.003,23.5C7.003,23.776 7.227,24 7.503,24L8.003,24C8.099,24 8.193,23.973 8.274,23.92L23.774,13.92C24.006,13.771 24.073,13.461 23.923,13.229C23.774,12.999 23.465,12.928 23.232,13.081L23.229,13.08ZM20,1.287C20,1.155 20.083,1.08 20.119,1.053C20.148,1.032 20.202,1.001 20.27,1.001C20.292,1.001 20.579,1.091 20.696,1.144L22.894,2.127C22.96,2.187 22.999,2.281 22.999,2.386C22.999,2.504 22.95,2.609 22.927,2.63L19.999,4.092L19.999,1.287L20,1.287ZM17,14.5L17,17C17,17.032 17.003,17.063 17.009,17.093L12,20.325L12,14L16.5,14C16.776,14 17,14.225 17,14.5ZM15,7L15,13L12,13L12,8.5C12,7.672 12.672,7 13.5,7L15,7ZM2,13.5C2,12.88 2.373,12.332 2.862,12.129L5,11.71L5,18L2,18L2,13.5ZM8,22.906L8,19.5C8,18.673 7.327,18 6.5,18L6,18L6,11.515L8.091,11.106C8.567,11.012 9.002,10.785 9.351,10.447L11,8.848L11,20.971L8,22.906Z" fill="white"/>
                </svg>
              </div>
              <h4 class="mb-3 text-xl font-bold text-dark dark:text-white"> Mentoring </h4>
              <p class="mb-8 text-body-color dark:text-dark-6 lg:mb-9"> Our dedicated mentors offer personalised support, guidance, and inspiration to participants both during and after our programs. </p>
            </div>
          </div>
          <div class="w-full px-4 md:w-1/2 lg:w-1/4">
            <div class="wow fadeInUp group mb-12" data-wow-delay=".15s">
              <div class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
                <span class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                <svg width="36" height="36" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M18,15.5C18,13.019 15.981,11 13.5,11L6.5,11C4.019,11 2,13.019 2,15.5L2,20L0,20L0,21L1,21L1,24L2,24L2,21L18,21L18,24L19,24L19,21L20,21L20,20L18,20L18,15.5ZM17,15.5L17,20L12.39,20L11.038,14.594L12.767,12L13.499,12C15.429,12 16.999,13.57 16.999,15.5L17,15.5ZM10,14.348L8.434,12L11.565,12L9.999,14.348L10,14.348ZM10,14.56L11.36,19.999L8.64,19.999L10,14.56ZM3,15.499C3,13.569 4.57,11.999 6.5,11.999L7.232,11.999L8.961,14.593L7.609,19.999L3,19.999L3,15.499ZM10,9.999C12.757,9.999 15,7.756 15,4.999C15,2.242 12.757,0 10,0C7.243,0 5,2.243 5,5C5,7.757 7.243,10 10,10L10,9.999ZM10,0.999C12.206,0.999 14,2.793 14,4.999C14,7.205 12.206,8.999 10,8.999C7.794,8.999 6,7.205 6,4.999C6,2.793 7.794,1 10,1L10,0.999ZM24,-0.001L17,-0.001L17,0.999L18,0.999L18,7.706L20.5,5.206L23,7.706L23,1L24,1L24,-0.001ZM22,5.292L20.5,3.792L19,5.292L19,1L22,1L22,5.293L22,5.292Z" fill="white"/>
                </svg>
              </div>
              <h4 class="mb-3 text-xl font-bold text-dark dark:text-white"> Career planning </h4>
              <p class="mb-8 text-body-color dark:text-dark-6 lg:mb-9"> We help young people prepare for their future careers with our comprehensive support services, including assistance with crafting their CV, honing interview skills, exploring career options, and practicing through mock interviews. </p>
            </div>
          </div>
          <div class="w-full px-4 md:w-1/2 lg:w-1/4">
            <div class="wow fadeInUp group mb-12" data-wow-delay=".2s">
              <div class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
                <span class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                <svg width="37" height="37" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M24,7.99C24,6.854 23.369,5.813 22.271,5.183L14.515,1.641C12.988,0.762 11.013,0.763 9.525,1.62L1.729,5.184C1.715,5.191 1.701,5.198 1.688,5.205C0.631,5.813 0.001,6.854 0.001,7.99C0.001,9.126 0.632,10.167 1.73,10.797L4.001,11.834L4.001,18.017C4.001,19.947 5.196,21.648 6.975,22.25C8.446,22.748 10.137,23 12.001,23C13.865,23 15.557,22.748 17.027,22.25C18.805,21.647 20.001,19.946 20.001,18.017L20.001,11.833L22.313,10.776C22.568,10.629 22.798,10.455 23.001,10.263L23.001,20.501C23.001,20.777 23.225,21.001 23.501,21.001C23.777,21.001 24.001,20.777 24.001,20.501L24.001,7.991L24,7.99ZM19,18.016C19,19.517 18.078,20.837 16.706,21.302C15.339,21.765 13.755,21.999 12,21.999C10.245,21.999 8.661,21.765 7.294,21.302C5.922,20.837 5,19.517 5,18.016L5,12.29L9.484,14.337C10.253,14.779 11.134,14.999 12.01,14.999C12.875,14.999 13.735,14.784 14.474,14.358L18.999,12.289L18.999,18.016L19,18.016ZM21.855,9.886L14.017,13.47C12.79,14.176 11.206,14.176 9.941,13.449L2.185,9.908C1.432,9.474 0.999,8.775 0.999,7.99C0.999,7.212 1.424,6.517 2.166,6.083L9.981,2.509C11.208,1.802 12.792,1.804 14.057,2.53L21.813,6.072C22.566,6.506 22.999,7.205 22.999,7.99C22.999,8.775 22.566,9.474 21.854,9.886L21.855,9.886Z" fill="white"/>
                </svg>
              </div>
              <h4 class="mb-3 text-xl font-bold text-dark dark:text-white"> Educational support </h4>
              <p class="mb-8 text-body-color dark:text-dark-6 lg:mb-9"> Our sports and recreation programs aim to boost student achievement, attendance, positive behaviour, engagement, and aspirations. </p>
            </div>
          </div>
          <div class="w-full px-4 md:w-1/2 lg:w-1/4">
            <div class="wow fadeInUp group mb-12" data-wow-delay=".25s">
              <div class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
                <span class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                <svg width="37" height="37" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <<path d="M19.5,3L4.5,3C2.019,3 0,5.019 0,7.5L0,16.5C0,18.981 2.019,21 4.5,21L19,21C21.36,21 24,19.075 24,16.5L24,7.5C24,5.019 21.981,3 19.5,3ZM23,15L20.5,15C20.224,15 20,14.775 20,14.5L20,9.5C20,9.225 20.224,9 20.5,9L23,9L23,15ZM12,15C10.346,15 9,13.654 9,12C9,10.346 10.346,9 12,9C13.654,9 15,10.346 15,12C15,13.654 13.654,15 12,15ZM1,9L3.5,9C3.776,9 4,9.225 4,9.5L4,14.5C4,14.775 3.776,15 3.5,15L1,15L1,9ZM1,16.5L1,16L3.5,16C4.327,16 5,15.327 5,14.5L5,9.5C5,8.673 4.327,8 3.5,8L1,8L1,7.5C1,5.57 2.57,4 4.5,4L11.5,4L11.5,8.051C9.532,8.3 8,9.966 8,12C8,14.034 9.532,15.7 11.5,15.949L11.5,20L4.5,20C2.57,20 1,18.43 1,16.5ZM19,20L12.5,20L12.5,15.949C14.468,15.7 16,14.034 16,12C16,9.966 14.468,8.3 12.5,8.051L12.5,4L19.5,4C21.43,4 23,5.57 23,7.5L23,8L20.5,8C19.673,8 19,8.673 19,9.5L19,14.5C19,15.327 19.673,16 20.5,16L23,16L23,16.5C23,18.471 20.85,20 19,20Z" fill="white"/>
                </svg>
              </div>
              <h4 class="mb-3 text-xl font-bold text-dark dark:text-white"> Sports &amp; activities </h4>
              <p class="mb-8 text-body-color dark:text-dark-6 lg:mb-9"> Participating in our sports and recreational programs helps young people stay active, develop valuable life skills, and build new social connections. </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Services and Support Section End -->
    
    <!-- ====== About Section Start -->
    <section id="about" class="bg-gray-1 pb-8 pt-20 dark:bg-dark-2 lg:pb-[70px] lg:pt-[120px]">
      <div class="container">
        <div class="wow fadeInUp" data-wow-delay=".2s">
          <div class="-mx-4 flex flex-wrap items-center">
            <div class="w-full px-4 lg:w-1/2">
              <div class="mb-12 max-w-[540px] lg:mb-0">
                <h2 class="mb-5 text-3xl font-bold leading-tight text-dark dark:text-white sm:text-[40px] sm:leading-[1.2]"> Our entire focus is on transforming the lives of young people. </h2>
                <p class="mb-10 text-base leading-relaxed text-body-color dark:text-dark-6"> The Well Foundation Community Sports hub and Academy has successfully provided underserved children in the BME community with access to sports and activities they often lack. <br />
                  <br /> For instance, by collaborating with youth football teams, the organisation has integrated children from diverse backgrounds, enabling them to enjoy sports in safe, professional settings.
                </p>
              </div>
            </div>
            <div class="w-full px-4 lg:w-1/2">
              <div class="-mx-2 flex flex-wrap sm:-mx-4 lg:-mx-2 xl:-mx-4">
                <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
                  <div class="mb-4 sm:mb-8 sm:h-[400px] md:h-[540px] lg:h-[400px] xl:h-[500px]">
                    <img src="images://about/about-image-01.jpg" alt="about image" class="h-full w-full object-cover object-center" />
                  </div>
                </div>
                <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
                  <div class="mb-4 sm:mb-8 sm:h-[220px] md:h-[346px] lg:mb-4 lg:h-[225px] xl:mb-8 xl:h-[310px]">
                    <img src="images://about/about-image-02.jpg" alt="about image" class="h-full w-full object-cover object-center" />
                  </div>
                  <div class="relative z-10 mb-4 flex items-center justify-center overflow-hidden bg-primary px-6 py-12 sm:mb-8 sm:h-[160px] sm:p-5 lg:mb-4 xl:mb-8">
                    <div>
                      <span class="block text-5xl font-extrabold text-white"> 1,786 </span>
                      <span class="block text-base font-semibold text-white"> Young people </span>
                      <span class="block text-base font-medium text-white text-opacity-70"> Attended one of our sessions </span>
                    </div>
                    <div>
                      <span class="absolute left-0 top-0 -z-10">
                        <svg width="106" height="144" viewBox="0 0 106 144" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect opacity="0.1" x="-67" y="47.127" width="113.378" height="131.304" transform="rotate(-42.8643 -67 47.127)" fill="url(#paint0_linear_1416_214)" />
                          <defs>
                            <linearGradient id="paint0_linear_1416_214" x1="-10.3111" y1="47.127" x2="-10.3111" y2="178.431" gradientUnits="userSpaceOnUse">
                              <stop stop-color="white" />
                              <stop offset="1" stop-color="white" stop-opacity="0" />
                            </linearGradient>
                          </defs>
                        </svg>
                      </span>
                      <span class="absolute right-0 top-0 -z-10">
                        <svg width="130" height="97" viewBox="0 0 130 97" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect opacity="0.1" x="0.86792" y="-6.67725" width="155.563" height="140.614" transform="rotate(-42.8643 0.86792 -6.67725)" fill="url(#paint0_linear_1416_215)" />
                          <defs>
                            <linearGradient id="paint0_linear_1416_215" x1="78.6495" y1="-6.67725" x2="78.6495" y2="133.937" gradientUnits="userSpaceOnUse">
                              <stop stop-color="white" />
                              <stop offset="1" stop-color="white" stop-opacity="0" />
                            </linearGradient>
                          </defs>
                        </svg>
                      </span>
                      <span class="absolute bottom-0 right-0 -z-10">
                        <svg width="175" height="104" viewBox="0 0 175 104" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect opacity="0.1" x="175.011" y="108.611" width="101.246" height="148.179" transform="rotate(137.136 175.011 108.611)" fill="url(#paint0_linear_1416_216)" />
                          <defs>
                            <linearGradient id="paint0_linear_1416_216" x1="225.634" y1="108.611" x2="225.634" y2="256.79" gradientUnits="userSpaceOnUse">
                              <stop stop-color="white" />
                              <stop offset="1" stop-color="white" stop-opacity="0" />
                            </linearGradient>
                          </defs>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== About Section End -->
    
    <!-- ====== Popular Section Start -->
    <section id="popular" class="relative z-20 overflow-hidden bg-white pb-12 pt-20 dark:bg-dark lg:pb-[90px] lg:pt-[120px]">
      <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap">
          <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[510px] text-center">
              <span class="mb-2 block text-lg font-semibold text-primary"> Popular </span>
              <h2 class="mb-3 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2]"> Our most popular sports &amp; activities </h2>
              <p class="text-base text-body-color dark:text-dark-6"> We offer a variety of sports and recreational activities, but the most popular and well-attended are &hellip; </p>
            </div>
          </div>
        </div>
        <div class="-mx-4 flex flex-wrap md:justify-center">
          <div class="w-full px-4 md:w-1/2 lg:w-1/3">
            <div class="relative z-10 mb-10 overflow-hidden rounded-xl bg-white px-8 py-10 shadow-pricing dark:bg-dark-2 sm:p-12 lg:px-6 lg:py-10 xl:p-14">
              <span class="mb-5 block text-xl font-medium text-dark dark:text-white"> Self-defence </span>
              <h2 class="mb-11 text-4xl font-semibold text-dark dark:text-white xl:text-[42px] xl:leading-[1.21]">
                <span class="text-xl font-medium">ages</span>
                <span class="-ml-1 -tracking-[2px]">5-15</span>
                <span class="text-base font-normal text-body-color dark:text-dark-6"> Weekly </span>
              </h2>
              <div class="mb-[50px]">
                <h5 class="mb-5 text-lg font-medium text-dark dark:text-white"> Details </h5>
                <div class="flex flex-col gap-[14px]">
                  <p class="text-base text-body-color dark:text-dark-6"> Single sex classes for both boys &amp; girls </p>
                  <p class="text-base text-body-color dark:text-dark-6"> Girls: Wednesdays - 7:15pm-8:30pm </p>
                  <p class="text-base text-body-color dark:text-dark-6"> Boys: Saturdays - 10am-11am </p>
                  <p class="text-base text-body-color dark:text-dark-6"> Venue: Lanarkshire Mosque, Bellshill </p>
                </div>
              </div>
              <a href="/sports/football" class="inline-block rounded-md bg-primary px-7 py-3 text-center text-base font-medium text-white transition hover:bg-blue-dark"> Learn More </a>
            </div>
          </div>
          <div class="w-full px-4 md:w-1/2 lg:w-1/3">
            <div class="relative z-10 mb-10 overflow-hidden rounded-xl bg-white px-8 py-10 shadow-pricing dark:bg-dark-2 sm:p-12 lg:px-6 lg:py-10 xl:p-14">
              <p class="absolute right-[-50px] top-[60px] inline-block -rotate-90 rounded-bl-md rounded-tl-md bg-primary px-5 py-2 text-base font-medium text-white uppercase"> Most popular </p>
              <span class="mb-5 block text-xl font-medium text-dark dark:text-white"> Football </span>
              <h2 class="mb-11 text-4xl font-semibold text-dark dark:text-white xl:text-[42px] xl:leading-[1.21]">
                <span class="text-xl font-medium">ages</span>
                <span class="-ml-1 -tracking-[2px]">4 - 18+</span>
                <span class="text-base font-normal text-body-color dark:text-dark-6"> Weekly </span>
              </h2>
              <div class="mb-[50px]">
                <h5 class="mb-5 text-lg font-medium text-dark dark:text-white"> Details </h5>
                <div class="flex flex-col gap-[14px]">
                  <p class="text-base text-body-color dark:text-dark-6"> Kids football academy: Wednesdays - from 7:20pm </p>
                  <p class="text-base text-body-color dark:text-dark-6"> Under 17s football league: Fridays - 8pm-10pm </p>
                  <p class="text-base text-body-color dark:text-dark-6"> Adults 7s league: Fridays - 9pm-10pm </p>
                </div>
              </div>
              <a href="/sports/football" class="inline-block rounded-md bg-primary px-7 py-3 text-center text-base font-medium text-white transition hover:bg-blue-dark"> Learn More </a>
            </div>
          </div>
          <div class="w-full px-4 md:w-1/2 lg:w-1/3">
            <div class="relative z-10 mb-10 overflow-hidden rounded-xl bg-white px-8 py-10 shadow-pricing dark:bg-dark-2 sm:p-12 lg:px-6 lg:py-10 xl:p-14">
              <span class="mb-5 block text-xl font-medium text-dark dark:text-white"> Cricket </span>
              <h2 class="mb-11 text-4xl font-semibold text-dark dark:text-white xl:text-[42px] xl:leading-[1.21]">
                <span class="text-xl font-medium">ages</span>
                <span class="-ml-1 -tracking-[2px]">Over 18s</span>
                <span class="text-base font-normal text-body-color dark:text-dark-6"> Weekly </span>
              </h2>
              <div class="mb-[50px]">
                <h5 class="mb-5 text-lg font-medium text-dark dark:text-white"> Details </h5>
                <div class="flex flex-col gap-[14px]">
                  <p class="text-base text-body-color dark:text-dark-6"> Indoor cricket: Wednesdays - 7:30pm-9:30pm </p>
                  <p class="text-base text-body-color dark:text-dark-6"> Cricket academy: Thursdays - 9pm-10:30pm </p>
                  <p class="text-base text-body-color dark:text-dark-6"> Outdoor cricket: Weather dependant </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Popular Section End -->
    
    <!-- ====== CTA Section Start -->
    <section class="relative z-10 overflow-hidden bg-primary py-20 lg:py-[115px]">
      <div class="container mx-auto">
        <div class="relative overflow-hidden">
          <div class="-mx-4 flex flex-wrap items-stretch">
            <div class="w-full px-4">
              <div class="mx-auto max-w-[570px] text-center">
                <h2 class="mb-2.5 text-3xl font-bold text-white md:text-[38px] md:leading-[1.44]">
                  <span>What sports or activities are you interested in?</span> <br>
                  <span class="text-3xl font-normal md:text-[40px]"> Get Started Now </span>
                </h2>
                <p class="mx-auto mb-6 max-w-[515px] text-base leading-[1.5] text-white"> With a wide range of sports and activities, we have something to appeal to every interest and skill level. </p>
                <a href="https://linktr.ee/wfcs" class="inline-block rounded-md border border-transparent bg-secondary px-7 py-3 text-base font-medium text-white transition hover:bg-[#0BB489]"> Sign Up For Our Sports &amp; Activities </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <span class="absolute left-0 top-0">
          <svg width="495" height="470" viewBox="0 0 495 470" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="55" cy="442" r="138" stroke="white" stroke-opacity="0.04" stroke-width="50" />
            <circle cx="446" r="39" stroke="white" stroke-opacity="0.04" stroke-width="20" />
            <path d="M245.406 137.609L233.985 94.9852L276.609 106.406L245.406 137.609Z" stroke="white" stroke-opacity="0.08" stroke-width="12" />
          </svg>
        </span>
        <span class="absolute bottom-0 right-0">
          <svg width="493" height="470" viewBox="0 0 493 470" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="462" cy="5" r="138" stroke="white" stroke-opacity="0.04" stroke-width="50" />
            <circle cx="49" cy="470" r="39" stroke="white" stroke-opacity="0.04" stroke-width="20" />
            <path d="M222.393 226.701L272.808 213.192L259.299 263.607L222.393 226.701Z" stroke="white" stroke-opacity="0.06" stroke-width="13" />
          </svg>
        </span>
      </div>
    </section>
    <!-- ====== CTA Section End -->
    
    <!-- ====== Testimonial Section Start -->
    <?= import('/partials/features/testimonials'); ?>
    <!-- ====== Testimonial Section End -->
    
    <!-- ====== FAQ Section Start -->
    <section class="relative z-20 overflow-hidden bg-white pb-8 pt-20 dark:bg-dark lg:pb-[50px] lg:pt-[120px]">
      <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap">
          <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[520px] text-center">
              <span class="mb-2 block text-lg font-semibold text-primary"> FAQ </span>
              <h2 class="mb-3 text-3xl font-bold leading-[1.2] text-dark dark:text-white sm:text-4xl md:text-[40px]"> Any questions? We'll try to answer them </h2>
              <p class="mx-auto max-w-[485px] text-base text-body-color dark:text-dark-6"> We strive to empower the young people we work with, providing them the opportunity to make meaningful, positive changes in their lives. </p>
            </div>
          </div>
        </div>
        <div class="-mx-4 flex flex-wrap">
          <div class="w-full px-4 lg:w-1/2">
            <div class="mb-12 flex lg:mb-[70px]">
              <div class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]">
                <svg width="32" height="32" viewBox="0 0 34 34" class="fill-current">
                  <path d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z" />
                  <path d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z" />
                  <path d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z" />
                </svg>
              </div>
              <div class="w-full">
                <h3 class="mb-6 text-xl font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl"> Are your coaches and mentors registered and accredited? </h3>
                <p class="text-base text-body-color dark:text-dark-6"> All of our coaches and mentors who work with young people are PVG (Protecting Vulnerable Groups) registered. Additionally, many hold accreditations from their respective sporting authorities, and we frequently collaborate with these bodies, including the Scottish Football Association, to run training sessions. </p>
              </div>
            </div>
            <div class="mb-12 flex lg:mb-[70px]">
              <div class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]">
                <svg width="32" height="32" viewBox="0 0 34 34" class="fill-current">
                  <path d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z" />
                  <path d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z" />
                  <path d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z" />
                </svg>
              </div>
              <div class="w-full">
                <h3 class="mb-6 text-xl font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl"> How much do the sessions cost? </h3>
                <p class="text-base text-body-color dark:text-dark-6"> We strive for maximum inclusivity within the community. Sessions are affordably priced, starting at just £3.00 per participant, per class, on a participatory basis. </p>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2">
            <div class="mb-12 flex lg:mb-[70px]">
              <div class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]">
                <svg width="32" height="32" viewBox="0 0 34 34" class="fill-current">
                  <path d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z" />
                  <path d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z" />
                  <path d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z" />
                </svg>
              </div>
              <div class="w-full">
                <h3 class="mb-6 text-xl font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl"> How is Well foundation community sports funded? </h3>
                <p class="text-base text-body-color dark:text-dark-6"> The Well Foundation, a Scottish charity, launched us as an initiative. Our funding comes from a blend of charitable donations, government and local grants, business and individual sponsorships, as well as participatory fees. </p>
              </div>
            </div>
            <div class="mb-12 flex lg:mb-[70px]">
              <div class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]">
                <svg width="32" height="32" viewBox="0 0 34 34" class="fill-current">
                  <path d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z" />
                  <path d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z" />
                  <path d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z" />
                </svg>
              </div>
              <div class="w-full">
                <h3 class="mb-6 text-xl font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl"> Do you provide any recreational sports or activities catered to older adults? </h3>
                <p class="text-base text-body-color dark:text-dark-6"> We offer a wide range of activities for older adults, including outdoor pursuits, winter sports, walking, running, cricket, cycling, and football. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <span class="absolute left-4 top-4 -z-[1]">
          <svg width="48" height="134" viewBox="0 0 48 134" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="45.6673" cy="132" r="1.66667" transform="rotate(180 45.6673 132)" fill="#13C296" />
            <circle cx="45.6673" cy="117.333" r="1.66667" transform="rotate(180 45.6673 117.333)" fill="#13C296" />
            <circle cx="45.6673" cy="102.667" r="1.66667" transform="rotate(180 45.6673 102.667)" fill="#13C296" />
            <circle cx="45.6673" cy="88.0001" r="1.66667" transform="rotate(180 45.6673 88.0001)" fill="#13C296" />
            <circle cx="45.6673" cy="73.3335" r="1.66667" transform="rotate(180 45.6673 73.3335)" fill="#13C296" />
            <circle cx="45.6673" cy="45.0001" r="1.66667" transform="rotate(180 45.6673 45.0001)" fill="#13C296" />
            <circle cx="45.6673" cy="16.0001" r="1.66667" transform="rotate(180 45.6673 16.0001)" fill="#13C296" />
            <circle cx="45.6673" cy="59.0001" r="1.66667" transform="rotate(180 45.6673 59.0001)" fill="#13C296" />
            <circle cx="45.6673" cy="30.6668" r="1.66667" transform="rotate(180 45.6673 30.6668)" fill="#13C296" />
            <circle cx="45.6673" cy="1.66683" r="1.66667" transform="rotate(180 45.6673 1.66683)" fill="#13C296" />
            <circle cx="31.0013" cy="132" r="1.66667" transform="rotate(180 31.0013 132)" fill="#13C296" />
            <circle cx="31.0013" cy="117.333" r="1.66667" transform="rotate(180 31.0013 117.333)" fill="#13C296" />
            <circle cx="31.0013" cy="102.667" r="1.66667" transform="rotate(180 31.0013 102.667)" fill="#13C296" />
            <circle cx="31.0013" cy="88.0001" r="1.66667" transform="rotate(180 31.0013 88.0001)" fill="#13C296" />
            <circle cx="31.0013" cy="73.3335" r="1.66667" transform="rotate(180 31.0013 73.3335)" fill="#13C296" />
            <circle cx="31.0013" cy="45.0001" r="1.66667" transform="rotate(180 31.0013 45.0001)" fill="#13C296" />
            <circle cx="31.0013" cy="16.0001" r="1.66667" transform="rotate(180 31.0013 16.0001)" fill="#13C296" />
            <circle cx="31.0013" cy="59.0001" r="1.66667" transform="rotate(180 31.0013 59.0001)" fill="#13C296" />
            <circle cx="31.0013" cy="30.6668" r="1.66667" transform="rotate(180 31.0013 30.6668)" fill="#13C296" />
            <circle cx="31.0013" cy="1.66683" r="1.66667" transform="rotate(180 31.0013 1.66683)" fill="#13C296" />
            <circle cx="16.3333" cy="132" r="1.66667" transform="rotate(180 16.3333 132)" fill="#13C296" />
            <circle cx="16.3333" cy="117.333" r="1.66667" transform="rotate(180 16.3333 117.333)" fill="#13C296" />
            <circle cx="16.3333" cy="102.667" r="1.66667" transform="rotate(180 16.3333 102.667)" fill="#13C296" />
            <circle cx="16.3333" cy="88.0001" r="1.66667" transform="rotate(180 16.3333 88.0001)" fill="#13C296" />
            <circle cx="16.3333" cy="73.3335" r="1.66667" transform="rotate(180 16.3333 73.3335)" fill="#13C296" />
            <circle cx="16.3333" cy="45.0001" r="1.66667" transform="rotate(180 16.3333 45.0001)" fill="#13C296" />
            <circle cx="16.3333" cy="16.0001" r="1.66667" transform="rotate(180 16.3333 16.0001)" fill="#13C296" />
            <circle cx="16.3333" cy="59.0001" r="1.66667" transform="rotate(180 16.3333 59.0001)" fill="#13C296" />
            <circle cx="16.3333" cy="30.6668" r="1.66667" transform="rotate(180 16.3333 30.6668)" fill="#13C296" />
            <circle cx="16.3333" cy="1.66683" r="1.66667" transform="rotate(180 16.3333 1.66683)" fill="#13C296" />
            <circle cx="1.66732" cy="132" r="1.66667" transform="rotate(180 1.66732 132)" fill="#13C296" />
            <circle cx="1.66732" cy="117.333" r="1.66667" transform="rotate(180 1.66732 117.333)" fill="#13C296" />
            <circle cx="1.66732" cy="102.667" r="1.66667" transform="rotate(180 1.66732 102.667)" fill="#13C296" />
            <circle cx="1.66732" cy="88.0001" r="1.66667" transform="rotate(180 1.66732 88.0001)" fill="#13C296" />
            <circle cx="1.66732" cy="73.3335" r="1.66667" transform="rotate(180 1.66732 73.3335)" fill="#13C296" />
            <circle cx="1.66732" cy="45.0001" r="1.66667" transform="rotate(180 1.66732 45.0001)" fill="#13C296" />
            <circle cx="1.66732" cy="16.0001" r="1.66667" transform="rotate(180 1.66732 16.0001)" fill="#13C296" />
            <circle cx="1.66732" cy="59.0001" r="1.66667" transform="rotate(180 1.66732 59.0001)" fill="#13C296" />
            <circle cx="1.66732" cy="30.6668" r="1.66667" transform="rotate(180 1.66732 30.6668)" fill="#13C296" />
            <circle cx="1.66732" cy="1.66683" r="1.66667" transform="rotate(180 1.66732 1.66683)" fill="#13C296" />
          </svg>
        </span>
        <span class="absolute bottom-4 right-4 -z-[1]">
          <svg width="48" height="134" viewBox="0 0 48 134" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="45.6673" cy="132" r="1.66667" transform="rotate(180 45.6673 132)" fill="#3758F9" />
            <circle cx="45.6673" cy="117.333" r="1.66667" transform="rotate(180 45.6673 117.333)" fill="#3758F9" />
            <circle cx="45.6673" cy="102.667" r="1.66667" transform="rotate(180 45.6673 102.667)" fill="#3758F9" />
            <circle cx="45.6673" cy="88.0001" r="1.66667" transform="rotate(180 45.6673 88.0001)" fill="#3758F9" />
            <circle cx="45.6673" cy="73.3333" r="1.66667" transform="rotate(180 45.6673 73.3333)" fill="#3758F9" />
            <circle cx="45.6673" cy="45.0001" r="1.66667" transform="rotate(180 45.6673 45.0001)" fill="#3758F9" />
            <circle cx="45.6673" cy="16.0001" r="1.66667" transform="rotate(180 45.6673 16.0001)" fill="#3758F9" />
            <circle cx="45.6673" cy="59.0001" r="1.66667" transform="rotate(180 45.6673 59.0001)" fill="#3758F9" />
            <circle cx="45.6673" cy="30.6668" r="1.66667" transform="rotate(180 45.6673 30.6668)" fill="#3758F9" />
            <circle cx="45.6673" cy="1.66683" r="1.66667" transform="rotate(180 45.6673 1.66683)" fill="#3758F9" />
            <circle cx="31.0006" cy="132" r="1.66667" transform="rotate(180 31.0006 132)" fill="#3758F9" />
            <circle cx="31.0006" cy="117.333" r="1.66667" transform="rotate(180 31.0006 117.333)" fill="#3758F9" />
            <circle cx="31.0006" cy="102.667" r="1.66667" transform="rotate(180 31.0006 102.667)" fill="#3758F9" />
            <circle cx="31.0006" cy="88.0001" r="1.66667" transform="rotate(180 31.0006 88.0001)" fill="#3758F9" />
            <circle cx="31.0008" cy="73.3333" r="1.66667" transform="rotate(180 31.0008 73.3333)" fill="#3758F9" />
            <circle cx="31.0008" cy="45.0001" r="1.66667" transform="rotate(180 31.0008 45.0001)" fill="#3758F9" />
            <circle cx="31.0008" cy="16.0001" r="1.66667" transform="rotate(180 31.0008 16.0001)" fill="#3758F9" />
            <circle cx="31.0008" cy="59.0001" r="1.66667" transform="rotate(180 31.0008 59.0001)" fill="#3758F9" />
            <circle cx="31.0008" cy="30.6668" r="1.66667" transform="rotate(180 31.0008 30.6668)" fill="#3758F9" />
            <circle cx="31.0008" cy="1.66683" r="1.66667" transform="rotate(180 31.0008 1.66683)" fill="#3758F9" />
            <circle cx="16.3341" cy="132" r="1.66667" transform="rotate(180 16.3341 132)" fill="#3758F9" />
            <circle cx="16.3341" cy="117.333" r="1.66667" transform="rotate(180 16.3341 117.333)" fill="#3758F9" />
            <circle cx="16.3341" cy="102.667" r="1.66667" transform="rotate(180 16.3341 102.667)" fill="#3758F9" />
            <circle cx="16.3341" cy="88.0001" r="1.66667" transform="rotate(180 16.3341 88.0001)" fill="#3758F9" />
            <circle cx="16.3338" cy="73.3333" r="1.66667" transform="rotate(180 16.3338 73.3333)" fill="#3758F9" />
            <circle cx="16.3338" cy="45.0001" r="1.66667" transform="rotate(180 16.3338 45.0001)" fill="#3758F9" />
            <circle cx="16.3338" cy="16.0001" r="1.66667" transform="rotate(180 16.3338 16.0001)" fill="#3758F9" />
            <circle cx="16.3338" cy="59.0001" r="1.66667" transform="rotate(180 16.3338 59.0001)" fill="#3758F9" />
            <circle cx="16.3338" cy="30.6668" r="1.66667" transform="rotate(180 16.3338 30.6668)" fill="#3758F9" />
            <circle cx="16.3338" cy="1.66683" r="1.66667" transform="rotate(180 16.3338 1.66683)" fill="#3758F9" />
            <circle cx="1.66732" cy="132" r="1.66667" transform="rotate(180 1.66732 132)" fill="#3758F9" />
            <circle cx="1.66732" cy="117.333" r="1.66667" transform="rotate(180 1.66732 117.333)" fill="#3758F9" />
            <circle cx="1.66732" cy="102.667" r="1.66667" transform="rotate(180 1.66732 102.667)" fill="#3758F9" />
            <circle cx="1.66732" cy="88.0001" r="1.66667" transform="rotate(180 1.66732 88.0001)" fill="#3758F9" />
            <circle cx="1.66732" cy="73.3333" r="1.66667" transform="rotate(180 1.66732 73.3333)" fill="#3758F9" />
            <circle cx="1.66732" cy="45.0001" r="1.66667" transform="rotate(180 1.66732 45.0001)" fill="#3758F9" />
            <circle cx="1.66732" cy="16.0001" r="1.66667" transform="rotate(180 1.66732 16.0001)" fill="#3758F9" />
            <circle cx="1.66732" cy="59.0001" r="1.66667" transform="rotate(180 1.66732 59.0001)" fill="#3758F9" />
            <circle cx="1.66732" cy="30.6668" r="1.66667" transform="rotate(180 1.66732 30.6668)" fill="#3758F9" />
            <circle cx="1.66732" cy="1.66683" r="1.66667" transform="rotate(180 1.66732 1.66683)" fill="#3758F9" />
          </svg>
        </span>
      </div>
    </section>
    <!-- ====== FAQ Section End -->
    
    <!-- ====== Coaching Team Section Start -->
    <section id="team" class="overflow-hidden bg-gray-1 pb-12 pt-20 dark:bg-dark-2 lg:pb-[90px] lg:pt-[120px]">
      <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap">
          <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[485px] text-center">
              <span class="mb-2 block text-lg font-semibold text-primary"> Our coaching team </span>
              <h2 class="mb-3 text-3xl font-bold leading-[1.2] text-dark dark:text-white sm:text-4xl md:text-[40px]"> Our sports coaches </h2>
              <p class="text-base text-body-color dark:text-dark-6"> All of our coaches who work with young people are PVG (Protecting Vulnerable Groups) registered </p>
            </div>
          </div>
        </div>
        <?= import('/partials/features/team'); ?>
      </div>
    </section>
    <!-- ====== Coaching Team Section End -->
    
    <!-- ====== Outdoor Section Start -->
    <section class="bg-white pb-10 pt-20 dark:bg-dark lg:pb-20 lg:pt-[120px]">
      <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap justify-center">
          <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[600px] text-center">
              <span class="mb-2 block text-lg font-semibold text-primary"> Mental &amp; physical well-being </span>
              <h2 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2]"> Some of our outdoor pursuits </h2>
              <p class="text-base text-body-color dark:text-dark-6"> We support the overall well-being of our participants through a variety of activities, including winter sports, rafting, archery, clay pigeon shooting, footgolf, and outdoor excursions, all aimed at nurturing both their mental and physical health. </p>
            </div>
          </div>
        </div>
        <div class="-mx-4 flex flex-wrap">

          <? $i = 1; foreach (data('outdoor-activities')->shuffle() as $item) : $i = ($i > 3) ? 1 : $i; ?>
          <!-- ====== Outdoor Activity Start -->
          <div class="w-full px-4 md:w-1/2 lg:w-1/3">
            <div class="wow fadeInUp group mb-10" data-wow-delay=".<?= $i ?>s">
              <div class="mb-8 overflow-hidden rounded-[5px]">
                <a href="javascript:void(0)" class="block">
                  <img src="images://outdoor/<?= $item->img ?>" alt="image" class="w-full transition group-hover:rotate-6 group-hover:scale-125" />
                </a>
              </div>
              <div>
                <h3>
                  <a href="javascript:void(0)" class="mb-4 inline-block text-xl font-semibold text-dark hover:text-primary dark:text-white dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl"> <?= $item->title ?> </a>
                </h3>
                <p class="max-w-[370px] text-base text-body-color dark:text-dark-6"> <?= $item->desc ?> </p>
              </div>
            </div>
          </div>
          <!-- ====== Outdoor Activity End -->
          <? $i++; endforeach ?>

        </div>
      </div>
    </section>
    <!-- ====== Outdoor Section End -->
    
    <!-- ====== How Can You Help Section Start -->
    <section class="relative z-20 overflow-hidden bg-white pb-8 pt-20 dark:bg-dark lg:pb-[50px] lg:pt-[120px]">
      <div class="container mx-auto">
        <div class="wow fadeInUp" data-wow-delay=".2s">
          <div class="-mx-4 flex flex-wrap items-center">
            <div class="w-full px-4 lg:w-1/2 order-last lg:order-first">
              <div class="-mx-2 flex flex-wrap sm:-mx-4 lg:-mx-2 xl:-mx-4">
                <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
                  <div class="mb-4 sm:mb-8 sm:h-[400px] md:h-[540px] lg:h-[400px] xl:h-[500px]">
                    <img src="images://partners/partners-image-01.jpg" alt="partners image" class="h-full w-full object-cover object-center" />
                  </div>
                </div>
                <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
                  <div class="mb-4 sm:mb-8 sm:h-[220px] md:h-[346px] lg:mb-4 lg:h-[225px] xl:mb-8 xl:h-[310px]">
                    <img src="images://partners/partners-image-02.jpg" alt="partners image" class="h-full w-full object-cover object-right" />
                  </div>
                  <div class="relative z-10 mb-4 flex items-center justify-center overflow-hidden bg-primary px-6 py-12 sm:mb-8 sm:h-[160px] sm:p-5 lg:mb-4 xl:mb-8">
                    <div>
                      <span class="block text-5xl font-extrabold text-white"> 102 </span>
                      <span class="block text-base font-semibold text-white"> Businesses &amp; individuals </span>
                      <span class="block text-base font-medium text-white text-opacity-70"> Sponsor our sessions </span>
                    </div>
                    <div>
                      <span class="absolute left-0 top-0 -z-10">
                        <svg width="106" height="144" viewBox="0 0 106 144" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect opacity="0.1" x="-67" y="47.127" width="113.378" height="131.304" transform="rotate(-42.8643 -67 47.127)" fill="url(#paint0_linear_1416_214)" />
                          <defs>
                            <linearGradient id="paint0_linear_1416_214" x1="-10.3111" y1="47.127" x2="-10.3111" y2="178.431" gradientUnits="userSpaceOnUse">
                              <stop stop-color="white" />
                              <stop offset="1" stop-color="white" stop-opacity="0" />
                            </linearGradient>
                          </defs>
                        </svg>
                      </span>
                      <span class="absolute right-0 top-0 -z-10">
                        <svg width="130" height="97" viewBox="0 0 130 97" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect opacity="0.1" x="0.86792" y="-6.67725" width="155.563" height="140.614" transform="rotate(-42.8643 0.86792 -6.67725)" fill="url(#paint0_linear_1416_215)" />
                          <defs>
                            <linearGradient id="paint0_linear_1416_215" x1="78.6495" y1="-6.67725" x2="78.6495" y2="133.937" gradientUnits="userSpaceOnUse">
                              <stop stop-color="white" />
                              <stop offset="1" stop-color="white" stop-opacity="0" />
                            </linearGradient>
                          </defs>
                        </svg>
                      </span>
                      <span class="absolute bottom-0 right-0 -z-10">
                        <svg width="175" height="104" viewBox="0 0 175 104" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect opacity="0.1" x="175.011" y="108.611" width="101.246" height="148.179" transform="rotate(137.136 175.011 108.611)" fill="url(#paint0_linear_1416_216)" />
                          <defs>
                            <linearGradient id="paint0_linear_1416_216" x1="225.634" y1="108.611" x2="225.634" y2="256.79" gradientUnits="userSpaceOnUse">
                              <stop stop-color="white" />
                              <stop offset="1" stop-color="white" stop-opacity="0" />
                            </linearGradient>
                          </defs>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-full px-4 lg:w-1/2 order-first lg:order-last">
              <div class="mb-12 max-w-[540px] lg:mb-0">
                <h2 class="mb-5 text-3xl font-bold leading-tight text-dark dark:text-white sm:text-[40px] sm:leading-[1.2]"> How can you help? </h2>
                <p class="mb-10 text-base leading-relaxed text-body-color dark:text-dark-6"> Join us in empowering the youth of today to shape a brighter tomorrow. <br><br>We continuously seek partnerships with inspirational individuals, innovative organisations, and community members who share our vision. <br><br>Invest your time, resources, and expertise in our cause, and together we will transform the lives of young people.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <span class="absolute left-4 top-4 -z-[1]">
          <svg width="48" height="134" viewBox="0 0 48 134" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="45.6673" cy="132" r="1.66667" transform="rotate(180 45.6673 132)" fill="#13C296" />
            <circle cx="45.6673" cy="117.333" r="1.66667" transform="rotate(180 45.6673 117.333)" fill="#13C296" />
            <circle cx="45.6673" cy="102.667" r="1.66667" transform="rotate(180 45.6673 102.667)" fill="#13C296" />
            <circle cx="45.6673" cy="88.0001" r="1.66667" transform="rotate(180 45.6673 88.0001)" fill="#13C296" />
            <circle cx="45.6673" cy="73.3335" r="1.66667" transform="rotate(180 45.6673 73.3335)" fill="#13C296" />
            <circle cx="45.6673" cy="45.0001" r="1.66667" transform="rotate(180 45.6673 45.0001)" fill="#13C296" />
            <circle cx="45.6673" cy="16.0001" r="1.66667" transform="rotate(180 45.6673 16.0001)" fill="#13C296" />
            <circle cx="45.6673" cy="59.0001" r="1.66667" transform="rotate(180 45.6673 59.0001)" fill="#13C296" />
            <circle cx="45.6673" cy="30.6668" r="1.66667" transform="rotate(180 45.6673 30.6668)" fill="#13C296" />
            <circle cx="45.6673" cy="1.66683" r="1.66667" transform="rotate(180 45.6673 1.66683)" fill="#13C296" />
            <circle cx="31.0013" cy="132" r="1.66667" transform="rotate(180 31.0013 132)" fill="#13C296" />
            <circle cx="31.0013" cy="117.333" r="1.66667" transform="rotate(180 31.0013 117.333)" fill="#13C296" />
            <circle cx="31.0013" cy="102.667" r="1.66667" transform="rotate(180 31.0013 102.667)" fill="#13C296" />
            <circle cx="31.0013" cy="88.0001" r="1.66667" transform="rotate(180 31.0013 88.0001)" fill="#13C296" />
            <circle cx="31.0013" cy="73.3335" r="1.66667" transform="rotate(180 31.0013 73.3335)" fill="#13C296" />
            <circle cx="31.0013" cy="45.0001" r="1.66667" transform="rotate(180 31.0013 45.0001)" fill="#13C296" />
            <circle cx="31.0013" cy="16.0001" r="1.66667" transform="rotate(180 31.0013 16.0001)" fill="#13C296" />
            <circle cx="31.0013" cy="59.0001" r="1.66667" transform="rotate(180 31.0013 59.0001)" fill="#13C296" />
            <circle cx="31.0013" cy="30.6668" r="1.66667" transform="rotate(180 31.0013 30.6668)" fill="#13C296" />
            <circle cx="31.0013" cy="1.66683" r="1.66667" transform="rotate(180 31.0013 1.66683)" fill="#13C296" />
            <circle cx="16.3333" cy="132" r="1.66667" transform="rotate(180 16.3333 132)" fill="#13C296" />
            <circle cx="16.3333" cy="117.333" r="1.66667" transform="rotate(180 16.3333 117.333)" fill="#13C296" />
            <circle cx="16.3333" cy="102.667" r="1.66667" transform="rotate(180 16.3333 102.667)" fill="#13C296" />
            <circle cx="16.3333" cy="88.0001" r="1.66667" transform="rotate(180 16.3333 88.0001)" fill="#13C296" />
            <circle cx="16.3333" cy="73.3335" r="1.66667" transform="rotate(180 16.3333 73.3335)" fill="#13C296" />
            <circle cx="16.3333" cy="45.0001" r="1.66667" transform="rotate(180 16.3333 45.0001)" fill="#13C296" />
            <circle cx="16.3333" cy="16.0001" r="1.66667" transform="rotate(180 16.3333 16.0001)" fill="#13C296" />
            <circle cx="16.3333" cy="59.0001" r="1.66667" transform="rotate(180 16.3333 59.0001)" fill="#13C296" />
            <circle cx="16.3333" cy="30.6668" r="1.66667" transform="rotate(180 16.3333 30.6668)" fill="#13C296" />
            <circle cx="16.3333" cy="1.66683" r="1.66667" transform="rotate(180 16.3333 1.66683)" fill="#13C296" />
            <circle cx="1.66732" cy="132" r="1.66667" transform="rotate(180 1.66732 132)" fill="#13C296" />
            <circle cx="1.66732" cy="117.333" r="1.66667" transform="rotate(180 1.66732 117.333)" fill="#13C296" />
            <circle cx="1.66732" cy="102.667" r="1.66667" transform="rotate(180 1.66732 102.667)" fill="#13C296" />
            <circle cx="1.66732" cy="88.0001" r="1.66667" transform="rotate(180 1.66732 88.0001)" fill="#13C296" />
            <circle cx="1.66732" cy="73.3335" r="1.66667" transform="rotate(180 1.66732 73.3335)" fill="#13C296" />
            <circle cx="1.66732" cy="45.0001" r="1.66667" transform="rotate(180 1.66732 45.0001)" fill="#13C296" />
            <circle cx="1.66732" cy="16.0001" r="1.66667" transform="rotate(180 1.66732 16.0001)" fill="#13C296" />
            <circle cx="1.66732" cy="59.0001" r="1.66667" transform="rotate(180 1.66732 59.0001)" fill="#13C296" />
            <circle cx="1.66732" cy="30.6668" r="1.66667" transform="rotate(180 1.66732 30.6668)" fill="#13C296" />
            <circle cx="1.66732" cy="1.66683" r="1.66667" transform="rotate(180 1.66732 1.66683)" fill="#13C296" />
          </svg>
        </span>
        <span class="absolute bottom-4 right-4 -z-[1]">
          <svg width="48" height="134" viewBox="0 0 48 134" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="45.6673" cy="132" r="1.66667" transform="rotate(180 45.6673 132)" fill="#3758F9" />
            <circle cx="45.6673" cy="117.333" r="1.66667" transform="rotate(180 45.6673 117.333)" fill="#3758F9" />
            <circle cx="45.6673" cy="102.667" r="1.66667" transform="rotate(180 45.6673 102.667)" fill="#3758F9" />
            <circle cx="45.6673" cy="88.0001" r="1.66667" transform="rotate(180 45.6673 88.0001)" fill="#3758F9" />
            <circle cx="45.6673" cy="73.3333" r="1.66667" transform="rotate(180 45.6673 73.3333)" fill="#3758F9" />
            <circle cx="45.6673" cy="45.0001" r="1.66667" transform="rotate(180 45.6673 45.0001)" fill="#3758F9" />
            <circle cx="45.6673" cy="16.0001" r="1.66667" transform="rotate(180 45.6673 16.0001)" fill="#3758F9" />
            <circle cx="45.6673" cy="59.0001" r="1.66667" transform="rotate(180 45.6673 59.0001)" fill="#3758F9" />
            <circle cx="45.6673" cy="30.6668" r="1.66667" transform="rotate(180 45.6673 30.6668)" fill="#3758F9" />
            <circle cx="45.6673" cy="1.66683" r="1.66667" transform="rotate(180 45.6673 1.66683)" fill="#3758F9" />
            <circle cx="31.0006" cy="132" r="1.66667" transform="rotate(180 31.0006 132)" fill="#3758F9" />
            <circle cx="31.0006" cy="117.333" r="1.66667" transform="rotate(180 31.0006 117.333)" fill="#3758F9" />
            <circle cx="31.0006" cy="102.667" r="1.66667" transform="rotate(180 31.0006 102.667)" fill="#3758F9" />
            <circle cx="31.0006" cy="88.0001" r="1.66667" transform="rotate(180 31.0006 88.0001)" fill="#3758F9" />
            <circle cx="31.0008" cy="73.3333" r="1.66667" transform="rotate(180 31.0008 73.3333)" fill="#3758F9" />
            <circle cx="31.0008" cy="45.0001" r="1.66667" transform="rotate(180 31.0008 45.0001)" fill="#3758F9" />
            <circle cx="31.0008" cy="16.0001" r="1.66667" transform="rotate(180 31.0008 16.0001)" fill="#3758F9" />
            <circle cx="31.0008" cy="59.0001" r="1.66667" transform="rotate(180 31.0008 59.0001)" fill="#3758F9" />
            <circle cx="31.0008" cy="30.6668" r="1.66667" transform="rotate(180 31.0008 30.6668)" fill="#3758F9" />
            <circle cx="31.0008" cy="1.66683" r="1.66667" transform="rotate(180 31.0008 1.66683)" fill="#3758F9" />
            <circle cx="16.3341" cy="132" r="1.66667" transform="rotate(180 16.3341 132)" fill="#3758F9" />
            <circle cx="16.3341" cy="117.333" r="1.66667" transform="rotate(180 16.3341 117.333)" fill="#3758F9" />
            <circle cx="16.3341" cy="102.667" r="1.66667" transform="rotate(180 16.3341 102.667)" fill="#3758F9" />
            <circle cx="16.3341" cy="88.0001" r="1.66667" transform="rotate(180 16.3341 88.0001)" fill="#3758F9" />
            <circle cx="16.3338" cy="73.3333" r="1.66667" transform="rotate(180 16.3338 73.3333)" fill="#3758F9" />
            <circle cx="16.3338" cy="45.0001" r="1.66667" transform="rotate(180 16.3338 45.0001)" fill="#3758F9" />
            <circle cx="16.3338" cy="16.0001" r="1.66667" transform="rotate(180 16.3338 16.0001)" fill="#3758F9" />
            <circle cx="16.3338" cy="59.0001" r="1.66667" transform="rotate(180 16.3338 59.0001)" fill="#3758F9" />
            <circle cx="16.3338" cy="30.6668" r="1.66667" transform="rotate(180 16.3338 30.6668)" fill="#3758F9" />
            <circle cx="16.3338" cy="1.66683" r="1.66667" transform="rotate(180 16.3338 1.66683)" fill="#3758F9" />
            <circle cx="1.66732" cy="132" r="1.66667" transform="rotate(180 1.66732 132)" fill="#3758F9" />
            <circle cx="1.66732" cy="117.333" r="1.66667" transform="rotate(180 1.66732 117.333)" fill="#3758F9" />
            <circle cx="1.66732" cy="102.667" r="1.66667" transform="rotate(180 1.66732 102.667)" fill="#3758F9" />
            <circle cx="1.66732" cy="88.0001" r="1.66667" transform="rotate(180 1.66732 88.0001)" fill="#3758F9" />
            <circle cx="1.66732" cy="73.3333" r="1.66667" transform="rotate(180 1.66732 73.3333)" fill="#3758F9" />
            <circle cx="1.66732" cy="45.0001" r="1.66667" transform="rotate(180 1.66732 45.0001)" fill="#3758F9" />
            <circle cx="1.66732" cy="16.0001" r="1.66667" transform="rotate(180 1.66732 16.0001)" fill="#3758F9" />
            <circle cx="1.66732" cy="59.0001" r="1.66667" transform="rotate(180 1.66732 59.0001)" fill="#3758F9" />
            <circle cx="1.66732" cy="30.6668" r="1.66667" transform="rotate(180 1.66732 30.6668)" fill="#3758F9" />
            <circle cx="1.66732" cy="1.66683" r="1.66667" transform="rotate(180 1.66732 1.66683)" fill="#3758F9" />
          </svg>
        </span>
      </div>
    </section>
    <!-- ====== How Can You Help Section End -->
    
    <!-- ====== Contact Start ====== -->
    <section id="contact" class="relative py-20 md:py-[120px]">
      <div class="absolute left-0 top-0 -z-[1] h-full w-full dark:bg-dark"></div>
      <div class="absolute left-0 top-0 -z-[1] h-1/2 w-full bg-[#E9F9FF] dark:bg-dark-700 lg:h-[45%] xl:h-1/2"></div>
      <div class="container px-4">
        <div class="-mx-4 flex flex-wrap items-center">
          <div class="w-full px-4 lg:w-7/12 xl:w-8/12">
            <div class="ud-contact-content-wrapper">
              <div class="ud-contact-title mb-12 lg:mb-[150px]">
                <span class="mb-6 block text-base font-medium text-dark dark:text-white"> CONTACT US </span>
                <h2 class="max-w-[260px] text-[35px] font-semibold leading-[1.14] text-dark dark:text-white"> If we can help you, or you can help us, let's talk. </h2>
              </div>
              <div class="mb-12 flex flex-wrap justify-between lg:mb-0">
                <div class="mb-8 flex w-[330px] max-w-full">
                  <div class="mr-6 text-[32px] text-primary">
                    <svg width="29" height="35" viewBox="0 0 29 35" class="fill-current">
                      <path d="M14.5 0.710938C6.89844 0.710938 0.664062 6.72656 0.664062 14.0547C0.664062 19.9062 9.03125 29.5859 12.6406 33.5234C13.1328 34.0703 13.7891 34.3437 14.5 34.3437C15.2109 34.3437 15.8672 34.0703 16.3594 33.5234C19.9688 29.6406 28.3359 19.9062 28.3359 14.0547C28.3359 6.67188 22.1016 0.710938 14.5 0.710938ZM14.9375 32.2109C14.6641 32.4844 14.2812 32.4844 14.0625 32.2109C11.3828 29.3125 2.57812 19.3594 2.57812 14.0547C2.57812 7.71094 7.9375 2.625 14.5 2.625C21.0625 2.625 26.4219 7.76562 26.4219 14.0547C26.4219 19.3594 17.6172 29.2578 14.9375 32.2109Z" />
                      <path d="M14.5 8.58594C11.2734 8.58594 8.59375 11.2109 8.59375 14.4922C8.59375 17.7188 11.2187 20.3984 14.5 20.3984C17.7812 20.3984 20.4062 17.7734 20.4062 14.4922C20.4062 11.2109 17.7266 8.58594 14.5 8.58594ZM14.5 18.4297C12.3125 18.4297 10.5078 16.625 10.5078 14.4375C10.5078 12.25 12.3125 10.4453 14.5 10.4453C16.6875 10.4453 18.4922 12.25 18.4922 14.4375C18.4922 16.625 16.6875 18.4297 14.5 18.4297Z" />
                    </svg>
                  </div>
                  <div>
                    <h5 class="mb-[18px] text-lg font-semibold text-dark dark:text-white"> Our location </h5>
                    <p class="text-base text-body-color dark:text-dark-6"> 211B Main Street, Bellshill, ML4 1AJ, Scotland </p>
                  </div>
                </div>
                <div class="mb-8 flex w-[330px] max-w-full">
                  <div class="mr-6 text-[32px] text-primary">
                    <svg width="34" height="25" viewBox="0 0 34 25" class="fill-current">
                      <path d="M30.5156 0.960938H3.17188C1.42188 0.960938 0 2.38281 0 4.13281V20.9219C0 22.6719 1.42188 24.0938 3.17188 24.0938H30.5156C32.2656 24.0938 33.6875 22.6719 33.6875 20.9219V4.13281C33.6875 2.38281 32.2656 0.960938 30.5156 0.960938ZM30.5156 2.875C30.7891 2.875 31.0078 2.92969 31.2266 3.09375L17.6094 11.3516C17.1172 11.625 16.5703 11.625 16.0781 11.3516L2.46094 3.09375C2.67969 2.98438 2.89844 2.875 3.17188 2.875H30.5156ZM30.5156 22.125H3.17188C2.51562 22.125 1.91406 21.5781 1.91406 20.8672V5.00781L15.0391 12.9922C15.5859 13.3203 16.1875 13.4844 16.7891 13.4844C17.3906 13.4844 17.9922 13.3203 18.5391 12.9922L31.6641 5.00781V20.8672C31.7734 21.5781 31.1719 22.125 30.5156 22.125Z" />
                    </svg>
                  </div>
                  <div>
                    <h5 class="mb-[18px] text-lg font-semibold text-dark dark:text-white"> How can we help? </h5>
                    <p class="text-base text-body-color dark:text-dark-6"> <a href="mailto:info@wfcs.co.uk">info@wfcs.co.uk</a> </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-5/12 xl:w-4/12">
            <div class="wow fadeInUp rounded-lg bg-white px-8 py-10 shadow-testimonial dark:bg-dark-2 dark:shadow-none sm:px-10 sm:py-12 md:p-[60px] lg:p-10 lg:px-10 lg:py-12 2xl:p-[60px]" data-wow-delay=".2s
                ">
              <h3 class="mb-8 text-2xl font-semibold text-dark dark:text-white md:text-[28px] md:leading-[1.42]"> Send us a message </h3>
              <form method="post" name="emailForm" id="emailForm" class="-koowa-form preventable form" aria-labelledby="message">
                <div class="mb-[22px]">
                    <label class="block">Name<sup>*</sup></label>
                    <div class="grid grid-cols-2">
                        <input class="w-full border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-none dark:border-dark-3 dark:text-dark-6" placeholder="First Name" type="text" name="firstName">
                        <input class="w-full border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-none dark:border-dark-3 dark:text-dark-6" placeholder="Last Name" type="text" name="lastName">
                    </div>
                </div>
                <div class="mb-[22px]">
                  <label for="email" class="mb-4 block text-sm text-body-color dark:text-dark-6">Email*</label>
                  <input type="email" name="email" placeholder="you@yourmailprovider.com" required class="w-full border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-none dark:border-dark-3 dark:text-dark-6" />
                </div>
                <div class="mb-[22px]">
                  <label for="phone" class="mb-4 block text-sm text-body-color dark:text-dark-6">Phone*</label>
                  <input type="text" name="phone" pattern="^0(\d ?){10}$" placeholder="07123456789" required class="w-full border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-none dark:border-dark-3 dark:text-dark-6" />
                </div>
                <div class="mb-[30px]">
                  <label for="message" class="mb-4 block text-sm text-body-color dark:text-dark-6">Message*</label>
                  <textarea name="message" rows="1" placeholder="type your message here" required class="w-full resize-none border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-none dark:border-dark-3 dark:text-dark-6"></textarea>
                </div>
                <?= helper('form')->honeypot(page()->form->honeypot); ?>
                <div class="mb-0">
                  <button type="submit" class="inline-flex items-center justify-center rounded-md bg-primary px-10 py-3 text-base font-medium text-white transition duration-300 ease-in-out hover:bg-blue-dark" data-errormsg="Send message" data-successmsg="Sending"> Send message </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Contact End ====== -->