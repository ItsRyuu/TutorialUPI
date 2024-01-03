// Modal Box
const video = document.querySelector("#kenalan");
const ctamodal = document.querySelector("#item-detail-modal");
const ctabutton = document.querySelector(".cta");
ctabutton.onclick = (e) => {
  ctamodal.style.display = "flex";
  document.getElementById("kenalan").play();
  e.preventDefault();
};


// Klik Tombol CLose
document.querySelector(".modal .close-icon").onclick = (e) => {
  ctamodal.style.display = "none";
  video.pause();
  video.currentTime = 0;
  e.preventDefault();
};

// Klik di luar modal
window.onclick = (e) => {
  if (e.target === ctamodal) {
    ctamodal.style.display = "none";
    video.pause();
    video.currentTime = 0;
  }
};
// 

