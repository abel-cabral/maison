var youtubePlayer;
function onYouTubeIframeAPIReady() {
   youtubePlayer = new YT.Player('youtube-promo-video');
}

$.getScript("https://www.youtube.com/player_api");

$(".video-promo-watch").on("click", function(e){
  e.preventDefault();
  $(".video-promo-hero").addClass("playing-video");
  setTimeout(function (){
    youtubePlayer.playVideo();
  }, 900);
});

$(".video-promo-video-close").on("click", function(e){
  e.preventDefault();
  $(".video-promo-hero").removeClass("playing-video");
  youtubePlayer.pauseVideo();
});