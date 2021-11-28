

const service_fadeup = gsap.timeline({
    scrollTrigger: {
        trigger: ".services", 
        start: "top 80%"
    }
});

gsap.set(".services_block", {opacity:0}); 

service_fadeup.to('.services_hp_block',
  { keyframes: [
    { duration: 0.3, opacity:1, },
  ]}
);
service_fadeup.to('.services_sns_block', 
  { keyframes: [
    { duration: 0.3, opacity:1, },
  ]},
);
service_fadeup.to('.services_media_block', 
  { keyframes: [
    { duration: 0.3, opacity:1, },
  ]},
);


gsap.set(".work_cat_tag", {
  opacity:0,
  x: -64,
  }); 

gsap.to(".work_cat_tag", {
  duration:0.6,
  opacity:1,
  x: 0,
  });



gsap.set(".category_tag", {
  opacity:0,
  x: -64,
  }); 

gsap.to(".category_tag", {
  duration:0.6,
  opacity:1,
  x: 0,
  }); 

gsap.set(".works_hp", {
  opacity:0,
  y: 64,
  }); 

gsap.to(".works_hp", {
  duration:0.6,
  opacity:1,
  y: 0,
  scrollTrigger: {
    trigger: '.works_hp',
    start: 'top 80%', 
  }
  }); 

gsap.set(".works_sns", {
  opacity:0,
  y: 64,
  }); 

gsap.to(".works_sns", {
  duration:0.6,
  opacity:1,
  y: 0,
  scrollTrigger: {
    trigger: '.works_sns',
    start: 'top 80%', 
  }
  }); 

gsap.set(".works_media", {
  opacity:0,
  y: 64,
  }); 

gsap.to(".works_media", {
  duration:0.6,
  opacity:1,
  y: 0,
  scrollTrigger: {
    trigger: '.works_media',
    start: 'top 80%', 
  }
  }); 


gsap.set(".articles article", {
  opacity:0,
  y: 40,
  }); 

ScrollTrigger.batch(".articles article", {
  onEnter: batch => gsap.to(batch, {duration:0.4, opacity: 1, y: 0,}),
  start: "top 80%",
  once: true //この指定によって１度だけアニメーションされる
});

// gsap.to(".articles", {
//   duration:0.6,
//   opacity:1,
//   y: 0,
//   scrollTrigger: {
//     trigger: '.articles',
//     start: 'top 80%', 
//   }
//   }); 

gsap.set(".to_contact", {
  opacity:0,
  y: 40,
  }); 

gsap.to(".to_contact", {
  duration:0.6,
  opacity:1,
  y: 0,
  scrollTrigger: {
    trigger: '.to_contact',
    start: 'top 96%', 
  }
  }); 


const mission_fade = gsap.timeline({
    scrollTrigger: {
        trigger: ".mission", 
        start: "top 80%"
    }
});

// gsap.set(".mission_title", {opacity:0}); 

// mission_fade.to('.mission_title > div > span',
//   { keyframes: [
//     { duration: 0.3, opacity:1, },
//   ]}
// );
// mission_fade.to('.mission_title > div > h1', 
//   { keyframes: [
//     { duration: 0.3, opacity:1, },
//   ]},
// );
// mission_fade.to('.mission p', 
//   { keyframes: [
//     { duration: 0.3, opacity:1, },
//   ]},
// );


// gsap.set(".mission", {
//   opacity:1,
//   }); 

// gsap.to(".mission_title div h1", {
//     duration: 2,
//     opacity:1,
//     text: {
//         value: 'mission_title',
//     },
//     ease: "none"
// });


