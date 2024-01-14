<footer class="bottom-0 mb-0 h-16 bg-gray-200 mt-40">
    <div class="w-full h-full flex justify-center items-center">
        <ul class="flex gap-20">
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
        </ul>
    </div>
</footer>
    
<script>

        let navbar = document.querySelector('#desktop-navbar');
        let mobileNavbar = document.querySelector('#mobile-navbar');
        let mobileNavbarIcon = document.querySelector('#mobile-navbar-icon');
        let main = document.querySelectorAll('.main');

        mobileNavbarIcon.addEventListener("click", () =>
        {
            if (mobileNavbar.style.top === "-100%") {
            mobileNavbar.style.top = "0";
            navbar.classList.remove("backdrop-blur-lg", "shadow-xl");
        } else {
            mobileNavbar.style.top = "-100%";
            navbar.classList.add("backdrop-blur-lg", "shadow-xl");
        }
        });

            for (element of main)
            {
                element.addEventListener("click", () =>
                {
                    if(!(mobileNavbar.style.top === "-100%"))
                    {
                        mobileNavbar.style.top = "-100%";
                    }
                })
            }



    function scrollToElement(elementID) {
        var targetElement = document.getElementById(elementID);
        targetElement.scrollIntoView({
            behavior : "smooth",
        });
        var targetHeading = document.getElementById(elementID + "Heading");
        targetHeading.classList.add('scale-110');
        targetHeading.classList.add('duration-700');
        targetHeading.classList.add('transition-all');

        setTimeout(function() {
            targetHeading.classList.remove('scale-110');
        }, 900);
    }

    function scrollToElementDiffPage(elementID, route) { 
        window.location.pathname = route;
        
        document.addEventListener("DOMContentLoaded", () => {
            console.log(elementID);
            var targetHeading = document.getElementById(elementID + "Heading");
            targetHeading.classList.add('scale-110');
            targetHeading.classList.add('duration-700');
            targetHeading.classList.add('transition-all');

            setTimeout(function() {
                targetHeading.classList.remove('scale-110');
            }, 900);

            setTimeout(function() {
                targetElement.classList.remove('scale-110');
            }, 900);
        });        
     }
</script>


<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.0.9/dist/js/splide.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
      new Splide('.splide', {
        type       : 'fade', // Hier kannst du den Effekt ändern (fade, slide, etc.)
        heightRatio: 0.5,    // Höhe des Carousels im Verhältnis zur Breite
        pagination : false,  // Pagination aktivieren/deaktivieren
        arrows     : true    // Pfeile aktivieren/deaktivieren
      }).mount();
    });
</script>

</body>
</html>