const pageLink = document.querySelectorAll(".pageLink"),
        
      for (let i = 0; i < pageLink.length; i++) {
        pageLink[i].addEventListener("click", function(e) {
          e.preventDefault();
        });
      }