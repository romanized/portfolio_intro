document.addEventListener("DOMContentLoaded", function() {
    let trackIndex = 0;
    const tracks = [
        "https://open.spotify.com/embed/track/1cdqNRXIRrvT4HnApj6yw6?utm_source=generator&theme=0", 
        "https://open.spotify.com/embed/track/7LrF02rTQPIofHzbXhAOXZ?utm_source=generator&theme=0",
        "https://open.spotify.com/embed/track/7IZ4uRJfJrkLg2EpU4Qfcn?utm_source=generator&theme=0",
        "https://open.spotify.com/embed/track/5V5MLkWV11SxdrRwIbPDGn?utm_source=generator&theme=0",
        "https://open.spotify.com/embed/track/6zFwJ2CbGdBGQ7CBfEX7pu?utm_source=generator&theme=0",
        "https://open.spotify.com/embed/track/2ExQHyULPXMFyfwLadlmCg?utm_source=generator&theme=0",
        "https://open.spotify.com/embed/track/6qyAMxx8th14kYK4LlxpTc?utm_source=generator&theme=0"
    ];
  
    const spotifyFrame = document.getElementById("spotifyFrame");
    const nextTrackBtn = document.getElementById("nextTrackBtn");
  
    nextTrackBtn.addEventListener("click", function() {
        trackIndex = (trackIndex + 1) % tracks.length;
        spotifyFrame.src = tracks[trackIndex];
    });
});

let modal = document.getElementById("myModal");

let btn = document.getElementById("myBtn");

let span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
