var nav = document.querySelector('nav');
        var defaultColor = 'rgba(0, 0, 0, 0)'; 
        var defaultColorT = 'rgb(235, 235, 235)';
        var scrolledColor = 'rgba(235, 235, 235, 0.9)';
        
        window.addEventListener('scroll', function() {
            if (window.scrollY > 100) {
              nav.classList.remove('in')  
              nav.classList.add('out')
            } else if (window.scrollY == 0){
                nav.classList.remove('out')
                nav.classList.add('in')
            }
          });
