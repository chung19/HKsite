var variable = {
    'touchNavigation': true,
    'href': 'https://www.youtube.com/watch?v=4sosXZsdy-s',
    'type': 'video',
    'source': 'youtube', //vimeo, youtube or local
    'width': 900,
    'autoPlayVideos': 'true',
  }
  function btnVideAbout (){
    var videoAbout = document.getElementsByClassName("play-btn")[0];
    variable.href='https://www.youtube.com/watch?v=4sosXZsdy-s';
    var glightbox = GLightbox(variable);
    // videoAbout.classList.add('glightbox')
  }
  function btnVideCounter (){
    var videoAbout = document.getElementsByClassName("play-btn")[1];
    variable.href='https://www.youtube.com/watch?v=qgY134PA4d8';
    var glightbox = GLightbox(variable);
    // videoAbout.classList.add('glightbox')
    console.log("1")
  }

  





    
    