

/*==== 共通====*/


gsap.set(".page_title_en", {
  opacity:0,
  y:-16,
}); 

gsap.to('.page_title_en', {
  opacity:1,
  y:0,
  duration:0.4,
  scrollTrigger: {
      trigger: '.page_title_en',
      start: 'top 80%'
    }
});

gsap.set(".page_title_jp", {
  opacity:0,
  y:-16,
}); 

gsap.to('.page_title_jp', {
  opacity:1,
  y:0,
  duration:0.4,
  scrollTrigger: {
      trigger: '.page_title_jp',
      start: 'top 80%'
    }
});


gsap.set(".section_title", {
  opacity:0,
}); 

 ScrollTrigger.batch(".section_title", {
  onEnter: batch => gsap.to(batch, {duration:0.4, opacity: 1,}),
  start: "top 90%",
  once: true 
});

/*==== ホーム====*/


gsap.set(".service_partner", {
  opacity:0,
  }); 

gsap.to('.service_partner', {
  opacity:1,
  scrollTrigger: {
      trigger: '.service_partner',
      start: 'top 80%'
    }
});

gsap.set(".partner_point div", {
  opacity:0,
  y: 40,
  }); 

gsap.to('.partner_point div', {
  y: 0,
  opacity:1,
  scrollTrigger: {
     trigger: '.partner_point',
     start: 'top 80%'
   },
   stagger: {
     from: "start",
     amount: 0.8,
      }
 });


/*==== 会社概要====*/

gsap.set(".mission_title div", {
  opacity:0,
  x:56,
}); 

gsap.to(".mission_title div", {
  opacity:1,
  x:0,
  duration:0.8,
  scrollTrigger: {
    trigger: '.mission_title',
    start: 'top 80%'
  },
});

gsap.set(".mission_title div h1", {
  opacity:0,
  x:-96,
}); 

gsap.to(".mission_title div h1", {
  opacity:1,
  x:0,
  duration:0.8,
  scrollTrigger: {
    trigger: '.mission_title',
    start: 'top 80%'
  },
});
  

/*==== サービス====*/


gsap.set(".services_block", {
  opacity:0
}); 

gsap.to('.services_block', {
  y: 0,
  opacity:1,
  scrollTrigger: {
     trigger: '.services',
     start: 'top 80%'
   },
   stagger: {
     from: "start",
     amount: 0.4,
      }
 });

gsap.set(".service_point div", {
  opacity:0,
  y: 40,
  }); 


gsap.to('.service_point div', {
  y: 0,
  opacity:1,
  scrollTrigger: {
     trigger: '.service_point',
     start: 'top 90%'
   },
   stagger: {
     from: "start",
     amount: 0.8,
      }
 });

gsap.set(".service_name", {
  opacity:0,
  x: 40,
}); 

gsap.to(".service_name", {
  duration:0.6,
  opacity:1,
  x: 0,
});

gsap.set(".fluid svg", {
  opacity:0,
}); 

gsap.to(".fluid svg", {
  duration:0.4,
  opacity:1,
});



/*==== 制作実績====*/

gsap.set(".work_cat_tag", {
  opacity:0,
  x: -64,
  }); 

gsap.to(".work_cat_tag", {
  duration:0.6,
  opacity:1,
  x: 0,
  });

gsap.set(".works_hp section", {
  opacity:0,
  y: 40,
  }); 

gsap.to(".works_hp section", {
  opacity:1,
  y: 0,
  scrollTrigger: {
    trigger: '.works_hp',
    start: 'top 80%', 
  },
  stagger: {
    from: "start",
    amount: 0.2,
  }
}); 


gsap.set(".works_sns section", {
  opacity:0,
  y: 40,
  }); 

gsap.to(".works_sns section", {
  opacity:1,
  y: 0,
  scrollTrigger: {
    trigger: '.works_sns',
    start: 'top 80%', 
  },
  stagger: {
    from: "start",
    amount: 0.2,
  }
}); 

gsap.set(".works_media section", {
  opacity:0,
  y: 40,
  }); 

gsap.to(".works_media section", {
  opacity:1,
  y: 0,
  scrollTrigger: {
    trigger: '.works_media',
    start: 'top 80%', 
  },
  stagger: {
    from: "start",
    amount: 0.2,
  }
}); 


gsap.set(".voice_block", {
  opacity:0
}); 

gsap.to('.voice_block', {
  opacity:1,
  scrollTrigger: {
     trigger: '.voices',
     start: 'top 90%'
   },
   stagger: {
     from: "start",
     amount: 0.4,
      }
 });

 gsap.set(".balloon", {
  x:-40,
}); 

gsap.to('.balloon', {
  x:0,
  scrollTrigger: {
     trigger: '.voices',
     start: 'top 90%'
   },
 });



/*====ブログ====*/

gsap.set(".category_tag", {
  opacity:0,
  x: -64,
  }); 

gsap.to(".category_tag", {
  duration:0.6,
  opacity:1,
  x: 0,
  }); 


gsap.set(".articles article", {
  opacity:0,
  y: 40,
  }); 

gsap.to('.articles article', {
  y: 0,
  opacity:1,
  scrollTrigger: {
     trigger: '.articles',
     start: 'top 90%'
   },
   stagger: {
     from: "start",
     amount: 0.4,
      }
 });






/*====お問い合わせ====*/


gsap.set(".to_contact", {
  opacity:0,
  y: 40,
}); 

gsap.to('.to_contact', {
  opacity:1,
  y: 0,
  duration:0.4,
  scrollTrigger: {
     trigger: '.to_contact',
     start: 'top 90%'
   },
 });

