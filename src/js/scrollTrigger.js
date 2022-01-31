import gsap, {Power1, Power4} from 'gsap/gsap-core';

export const scrollTrigger = () => {
  movingElements();
};

const movingElements = () => {
  const showMe = document.querySelectorAll('.showMe');
  showMe.forEach(textAppear => {
    gsap.from(textAppear.querySelectorAll('.char'), {
      scrollTrigger: {
        trigger: textAppear,
        start: 'top center',
        end: 'bottom top',
        // scrub: true,
        markers: true
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

  gsap.to('.creator__registered', {
    scrollTrigger: {
      trigger: '.creator__registered',
    },
    scale: 1.1,
    ease: Power1.easOut,
    duration: 5
  });
};
