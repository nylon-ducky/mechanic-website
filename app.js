var sound = document.createElement('audio');
sound.id = 'audio';
sound.autoplay = 'autoplay';
sound.src = 'assets/2Muscle Car Driving Skid Out.mp3';
sound.type = 'audio/mp3';
document.body.appendChild(sound);

function playAudio() {
  document.getElementById('audio').play();
}
setTimeout("playAudio()", 5000);