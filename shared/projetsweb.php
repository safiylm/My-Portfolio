
<section id="projetsweb">
       
       <h2>Mes projets web</h2>
       <div class="projets d-flex flex-row flex-wrap align-items-center justify-content-center">
           
           <div class="projets-item" id="div-snapface">
               <!-- <img src="./assets/snapface.png" /> -->


               <div id="carouselSnapfaceAutoplaying" class="carousel slide" data-bs-ride="carousel">
                   <div class="carousel-inner">
                       <div class="carousel-item active">
                           <img src="./assets/snapface/home.jpg" class="d-block w-100" alt="snapface home">
                       </div>
                       <div class="carousel-item">
                           <img src="./assets/snapface/user-page.jpg" class="d-block w-100"
                               alt="snapface user page">
                       </div>
                       
                   </div>
                   <button class="carousel-control-prev" type="button" data-bs-target="#carouselSnapfaceAutoplaying"
                       data-bs-slide="prev">
                       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                       <span class="visually-hidden">Previous</span>
                   </button>
                   <button class="carousel-control-next" type="button" data-bs-target="#carouselSnapfaceAutoplaying"
                       data-bs-slide="next">
                       <span class="carousel-control-next-icon" aria-hidden="true"></span>
                       <span class="visually-hidden">Next</span>
                   </button>

               </div>
               <div class="titre-projet d-flex flex-row flex-wrap align-items-center justify-content-center">
                   <p>Snapface (Réseau social) - NodeJs & Angular & MongoDB</p>
                   <span class="badge text-bg-info"> Full-Stack </span>
                   <a href="https://snapfaceangular.web.app/" class="badge text-bg-warning">Visiter le
                       site</a>
                   <button onclick="expand('div-snapface')">
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                           class="bi bi-arrows-angle-expand" viewBox="0 0 16 16">
                           <path fill-rule="evenodd"
                               d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707m4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707" />
                       </svg>
                   </button>
               </div>
           </div>
           
           <div class="projets-item" id="div-ecommerce">
               <video width="600" height="320" controls poster="./assets/ecommerce.png">
                   <source src="./assets/ecommerce.mp4" type="video/mp4">
               </video>
               <div class="titre-projet d-flex flex-row flex-wrap align-items-center justify-content-center">
                   <p>Ecommerce – React JS</p>
                   <span class="badge text-bg-info">Front-End</span>
                   <a href="https://systeme-authentification.firebaseapp.com" class="badge text-bg-warning">Visiter le
                       site</a>

                   <button onclick="expand('div-ecommerce')">
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                           class="bi bi-arrows-angle-expand" viewBox="0 0 16 16">
                           <path fill-rule="evenodd"
                               d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707m4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707" />
                       </svg>
                   </button>
               </div>
           </div>
           
       </div>
         
       <button class="btn btn-light" id="btnVoirPlus" onClick="showProjets()" style="display:block; margin:20px auto;">Voir plus</button>
          
       <div class="projets" id="projets_hide" >
           <div class="projets d-flex flex-row flex-wrap align-items-center justify-content-center">

               <div class="projets-item" id="div-blog">
                   <img src="./assets/blog-phototeque.png" />
                   <div class="titre-projet d-flex flex-row flex-wrap align-items-center justify-content-center">
                       <p>My-blog – React JS</p>
                       <span class="badge text-bg-info">Front-End</span>
                       <a href="https://blog-sy.web.app/" class="badge text-bg-warning">Visiter le site</a>
   
                       <button onclick="expand('div-blog')">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                               class="bi bi-arrows-angle-expand" viewBox="0 0 16 16">
                               <path fill-rule="evenodd"
                                   d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707m4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707" />
                           </svg>
                       </button>
                   </div>
               </div>
   
               <div class="projets-item" id="div-template-website">
                   <video width="600" height="320" controls poster="./assets/website-template.png">
                       <source src="./assets/template-website.mp4" type="video/mp4">
                   </video>
                   <div class="titre-projet d-flex flex-row flex-wrap align-items-center justify-content-center">
                       <p>Website Template – React JS</p>
                       <span class="badge text-bg-info">Front-End</span>
   
                       <a href="https://template-website-react.web.app/" class="badge text-bg-warning">Visiter le site</a>
   
                       <button onclick="expand('div-template-website')">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                               class="bi bi-arrows-angle-expand" viewBox="0 0 16 16">
                               <path fill-rule="evenodd"
                                   d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707m4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707" />
                           </svg>
                       </button>
                   </div>
               </div>
   
               <div class="projets-item" id="div-cuisine">
                   <img src="./assets/cuisine.png" />
                   <div class="titre-projet d-flex flex-row flex-wrap align-items-center justify-content-center">
                       <p>Cuisine - PHP</p>
   
                    <!--   <a href="https://recettedecuisinefacile.000webhostapp.com/" class="badge text-bg-warning">Visiter le
                           site</a> -->
                       <span class="badge text-bg-info"> Full-Stack</span>
                       <button onclick="expand('div-cuisine')">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                               class="bi bi-arrows-angle-expand" viewBox="0 0 16 16">
                               <path fill-rule="evenodd"
                                   d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707m4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707" />
                           </svg>
                       </button>
                   </div>
               </div>
   
               <div class="projets-item" id="div-articlequizz">
                   <!-- <img src="./assets/snapface.png" /> -->
   
   
                   <div id="carouselArticleQuizzAutoplaying" class="carousel slide" data-bs-ride="carousel">
                       <div class="carousel-inner">
                           <div class="carousel-item active">
                               <img src="./assets/articlequizz/home.jpg" class="d-block w-100" alt="snapface home">
                           </div>
                           <div class="carousel-item">
                               <img src="./assets/articlequizz/articlequizz2.png" class="d-block w-100"
                                   alt="my account page">
                           </div>
                           <div class="carousel-item">
                               <img src="./assets/articlequizz/articlequizz3.png" class="d-block w-100"
                                   alt="user account page">
                           </div>
                           <div class="carousel-item">
                               <img src="./assets/articlequizz/articlequizz4.png" class="d-block w-100"
                                   alt="user account page">
                           </div>
   
                       </div>
                       <button class="carousel-control-prev" type="button" data-bs-target="#carouselArticleQuizzAutoplaying"
                           data-bs-slide="prev">
                           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                           <span class="visually-hidden">Previous</span>
                       </button>
                       <button class="carousel-control-next" type="button" data-bs-target="#carouselArticleQuizzAutoplaying"
                           data-bs-slide="next">
                           <span class="carousel-control-next-icon" aria-hidden="true"></span>
                           <span class="visually-hidden">Next</span>
                       </button>
   
                   </div>
                 
                   <div class="titre-projet d-flex flex-row flex-wrap align-items-center justify-content-center">
                       <p>Article Quizz - PHP Json</p>
                       <span class="badge text-bg-info"> Full-Stack</span>
                      <!-- <a href="https://learnandquizz.000webhostapp.com/index.php" class="badge text-bg-warning">Visiter le
                           site</a> --> 
                       <button onclick="expand('div-articlequizz')">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                               class="bi bi-arrows-angle-expand" viewBox="0 0 16 16">
                               <path fill-rule="evenodd"
                                   d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707m4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707" />
                           </svg>
                       </button>
                   </div>
               </div>
               
               <div class="projets-item" id="div-forum-discussion">
                   <video width="600" height="320" controls poster="./assets/Form-discussion/forum-discussion.png">
                       <source src="./assets/Form-discussion/forum-discussion.mp4" type="video/mp4">
   
                   </video>
                   <div class="titre-projet d-flex flex-row flex-wrap align-items-center justify-content-center">
                       <p>Forum discussion - .Net Core MVC</p>
                       <span class="badge text-bg-info"> Full-Stack</span>
   
                       <button onclick="expand('div-forum-discussion')">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                               class="bi bi-arrows-angle-expand" viewBox="0 0 16 16">
                               <path fill-rule="evenodd"
                                   d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707m4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707" />
                           </svg>
                       </button>
                   </div>
               </div>
   
   
               <div class="projets-item" id="div-todolist">
                   <div id="carouselToDolistAutoplaying" class="carousel slide" data-bs-ride="carousel">
                       <div class="carousel-inner">
                           <div class="carousel-item active">
                               <img src="./assets/Todolist/todolist.png" class="d-block w-100" alt="snapface home">
                           </div>
                           <div class="carousel-item">
                               <img src="./assets/Todolist/pomodoro.png" class="d-block w-100" alt="my account page">
                           </div>
   
                       </div>
                       <button class="carousel-control-prev" type="button" data-bs-target="#carouselToDolistAutoplaying"
                           data-bs-slide="prev">
                           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                           <span class="visually-hidden">Previous</span>
                       </button>
                       <button class="carousel-control-next" type="button" data-bs-target="#carouselToDolistAutoplaying"
                           data-bs-slide="next">
                           <span class="carousel-control-next-icon" aria-hidden="true"></span>
                           <span class="visually-hidden">Next</span>
                       </button>
   
                   </div>
                   <div class="titre-projet d-flex flex-row flex-wrap align-items-center justify-content-center">
                       <p>To do list & Pomodoro- .Net Core MVC</p>
                       <span class="badge text-bg-info"> Full-Stack</span>
   
                       <button onclick="expand('div-todolist')">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                               class="bi bi-arrows-angle-expand" viewBox="0 0 16 16">
                               <path fill-rule="evenodd"
                                   d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707m4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707" />
                           </svg>
                       </button>
                   </div>
               </div>
               </div>
               
           <button class="btn btn-light"  id="btnVoirMoins" onClick="hideProjets()" style="display:block; margin:20px auto;">Voir Mois</button>

               
        </div>
            

      

   </section>

   <script>

       document.getElementById('projets_hide').style.display= "none";

       function showProjets(){
           document.getElementById('projets_hide').style.display= "block";
            document.getElementById('btnVoirPlus').style.display= "none";
       }
       
       function hideProjets(){
           document.getElementById('projets_hide').style.display= "none";
           document.getElementById('btnVoirPlus').style.display= "block";

       }

       function expand(id) {

           if (document.getElementById(id).classList.contains("expand")) {
               document.getElementById(id).classList.remove("expand");
           } else {
               document.getElementById(id).classList.add("expand");
           }
       }
       
       

   </script>