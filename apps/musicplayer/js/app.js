let fillbar = document.querySelector(".fill");
let audios = ["Audio_One.mp3", "Audio_Two.mp3", "Audio_Three.mp3", "Audio_Four.mp3"];
let covers = ["cover1.jpg", "cover2.jpg", "cover3.jpg", "cover4.jpg"];
let currentTime = document.querySelector(".time");

function boombap() {

 var program = document.getElementsByClassName('boombap');  
  $(program).toggleClass('active') ;
 
}

function boombap3() {

 var program = document.getElementsByClassName('boombap');  
  $(program).toggleClass('activeb') ;
 
}

function boombap4() {

 var program = document.getElementsByClassName('boombap');  
  $(program).toggleClass('activebb') ;
 
}

function boombap5() {

 var program = document.getElementsByClassName('boombap');  
  $(program).toggleClass('activebbb') ;
 
}

function boombap6() {

 var program = document.getElementsByClassName('boombap');  
  $(program).toggleClass('activebbb2') ;
 
}

function boombap7() {

 var program = document.getElementsByClassName('boombap');  
  $(program).toggleClass('activebbb3') ;
 
}



//function startass(){


//var ass = function boombap2() {
//  window.setInterval(function(){
//  boombap();
//}, Math.floor(Math.random() * 300) + 150  );

//  window.setInterval(function(){
//  boombap3();
//}, Math.floor(Math.random() * 250) + 150  );
//
//window.setInterval(function(){
//  boombap4();
//}, Math.floor(Math.random() * 200) + 150  );
//
//window.setInterval(function(){
// boombap5();
//}, Math.floor(Math.random() * 150) + 150  );


//}
//
//ass();
//}

var myVar;
function myBoombap() {
  myVar =  setInterval(boombap, Math.floor(Math.random() * 275) + 150);
  myVar3 = setInterval(boombap3, Math.floor(Math.random() * 150) + 150);
  myVar4 = setInterval(boombap4, Math.floor(Math.random() * 175) + 150);
  myVar5 = setInterval(boombap5, Math.floor(Math.random() * 200) + 150);
  myVar6 = setInterval(boombap6, Math.floor(Math.random() * 225) + 150);
  myVar7 = setInterval(boombap7, Math.floor(Math.random() * 250) + 150);
  

}


function myStopFunction() {
  clearInterval(myVar);
  clearInterval(myVar3);
  clearInterval(myVar4);
  clearInterval(myVar5);
  clearInterval(myVar6);
  clearInterval(myVar7);
}




// Create An Object Of Audio

let audio = new Audio();
let currentSong = 0;

// whenever the window load, song should play automaticly

window.onload = playSong;

// let's play the song by this function whenever window load

function playSong() {
  audio.src = audios[currentSong];
  audio.play();
}

function togglePlayPause() {
  if (audio.paused) {
    audio.play();
    let playBtn = document.querySelector(".play-pause");
    playBtn.innerHTML = '<i class="fa fa-pause"></i>';
    playBtn.style.paddingLeft = "30px";   
    myBoombap();

    
    
  } else {
    audio.pause();
    playBtn = document.querySelector(".play-pause");
    playBtn.innerHTML = '<i class="fa fa-play"></i>';
    playBtn.style.paddingLeft = "33px"; 
    var program = document.getElementsByClassName('boombap');  
    $(program).toggleClass('stop') ;
    myStopFunction();
         
    

  }
}

// Now let's make dynamic the fillbar

audio.addEventListener("timeupdate", function() {
  let position = audio.currentTime / audio.duration;
  fillbar.style.width = position * 100 + "%";

  // let's work on the duration
  convertTime(Math.round(audio.currentTime));

  // let's work on the play next song when current song completed

  if (audio.ended) {
    nextAudio();
  }
});

function convertTime(seconds) {
  let min = Math.floor(seconds / 60);
  let sec = seconds % 60;
  // lets fix the songle digit
  min = min < 10 ? "0" + min : min;
  sec = sec < 10 ? "0" + sec : sec;
  currentTime.textContent = min + ":" + sec;

  // Fix the total time
  totalTime(Math.round(audio.duration));
}

function totalTime(seconds) {
  let min = Math.floor(seconds / 60);
  let sec = seconds % 60;

  // lets fix the songle digit

  min = min < 10 ? "0" + min : min;
  sec = sec < 10 ? "0" + sec : sec;
  currentTime.textContent += " & " + min + ":" + sec;
}

// Now let's Work on next and prev buttons

function disable() { 
            
            var assf = document.getElementsByClassName('prev-audio');  
            var assf2 = document.getElementsByClassName('next-audio');  
            $(assf).toggleClass('disabled') ;
            $(assf2).toggleClass('disabled') ;  
        } 

function nextAudio() {
  currentSong++;
  if (currentSong > 3) {
    currentSong = 0;
  }
  playSong();
  myStopFunction();
  setTimeout(function() { myBoombap(); }, 3000);
  disable(); 
  setTimeout(disable, 4000);     

  playBtn = document.querySelector(".play-pause");
  setTimeout(function(){document.querySelector(".play-pause") = false;},3000);
  playBtn.innerHTML = '<i class="fa fa-pause"></i>';
  playBtn.style.paddingLeft = "30px";
  // just one line jquery for changing the covers

  $(".img img").attr("src", covers[currentSong]);
}

function prevAudio() {
  currentSong--;
  if (currentSong < 0) {
    currentSong = 3;
  }
  playSong();
  myStopFunction();
   setTimeout(function() { myBoombap(); }, 3000);
   disable();
   setTimeout(disable, 4000);    
 

  playBtn = document.querySelector(".play-pause");
  playBtn.innerHTML = '<i class="fa fa-pause"></i>';
  playBtn.style.paddingLeft = "30px";
  // just one line jquery for changing the covers

  $(".img img").attr("src", covers[currentSong]);
}

// let's work on the volume up , down and mute

function decreaseVolume() {
  audio.volume -= 0.25;
}

function increaseVolume() {
  audio.volume += 0.25;
}

// fix the speaker muted button

let volumeUp = document.querySelector(".volume-up");
volumeUp.addEventListener("click", function() {
  if (audio.volume === 1) {
    audio.volume = 0;
    document.querySelector(".volume-up i").className = "fa fa-volume-mute";
  } else {
    audio.volume = 1;
    document.querySelector(".volume-up i").className = "fa fa-volume-up";
  }
});
