const swup = new Swup(); 

function allScripts () {

      var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 1000,
        easing: 'easeInOutQuint',
        updateURL: false
      });

      // scrolltop
        window.scrollTo({
            top: 0,
            left: 0,
            behavior: 'smooth'
          });

    // nav add mobile close attribute
      function navAttribute(x) {
          if (x.matches) { // If media query matches
              let nav = document.querySelectorAll(".nav-item");
              let i;
              for (i = 0; i < nav.length; i++) {
                  nav[i].setAttribute("data-toggle", "collapse");
                  nav[i].setAttribute("data-target", ".navbar-collapse");
              }
          }
        }
        
        var x = window.matchMedia("(max-width: 992px)")
        navAttribute(x) // Call listener function at run time
        x.addListener(navAttribute) // Attach listener function on state changes

        // copyright get current year
          const d = new Date();
          document.getElementById("copyright").innerHTML = "&copy; Advance Therapy " + d.getFullYear();

          AOS.init({
            offset: 0,
            duration: 1500,
            easing: 'ease-in-out-back',
            delay: 0
        });
        
    }

allScripts();
document.addEventListener('swup:contentReplaced', allScripts);