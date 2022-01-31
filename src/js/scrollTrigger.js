import gsap, {Power1} from 'gsap/gsap-core';
import ScrollTrigger from 'gsap/ScrollTrigger';

export const scrollTrigger = () => {
  movingElements();
};

const movingElements = () => {
  ScrollTrigger.saveStyles('.showMe');

  ScrollTrigger.matchMedia({

    '(min-width: 768px)': function() {
      const showMe = document.querySelectorAll('.showMe');
      showMe.forEach(textAppear => {
        gsap.from(textAppear.querySelectorAll('.char'), {
          scrollTrigger: {
            trigger: textAppear,
            start: 'top bottom',
            end: 'bottom top',
            // scrub: true,
            // markers: true
          },
          opacity: 0,
          // y: - 50,
          // ease: Power4.easOut,
          // duration: 5
          stagger: {
            amount: 1.5
          }
        });
      });
    }
  });

  gsap.to('.creator__registered', {
    scrollTrigger: {
      trigger: '.creator__registered',
    },
    scale: 1.1,
    ease: Power1.easOut,
    duration: 5
  });
};
