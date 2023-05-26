
  const links = document.querySelectorAll('.nav-link');
    if (links.length) {
      links.forEach((link) => {
        link.addEventListener('click', (e) => {
          links.forEach((link) => {
              link.classList.remove('span_active');
          });
          e.preventDefault();
          link.classList.add('span_active');
          console.log(link);
        });
      });
    }
    
    // alert("jj");