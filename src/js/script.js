const testingGSAP = () => {
  console.log('i am working');
  gsap.to('.img__billboard', {duration: 2, x: 100});
};

export const init = () => {
  console.log('start executing this JavaScript');
  testingGSAP();
};
