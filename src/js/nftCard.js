export const cardMovement = () => {
  movingCard();
};

const movingCard = () => {
  console.log('i am connected');
  const card = document.querySelector('.reasons__img');
  const container = document.querySelector('.why__reasons');

  //moving animation Event
  container.addEventListener('mousemove', e => {
    // console.log(e.pageY, e.pageX);
    const xAxis = (window.innerWidth / 4 - e.pageX) / - 10;
    const yAxis = (window.innerHeight / 2 - e.pageY) / - 25;
    card.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis + 180}deg)`;
    console.log(xAxis, yAxis);
    // if (window.matchMedia('(min-width:1025px')) {
    //   card.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
    //   console.log(`i am big`);
    // } else {
    //   card.style.transform = `none`;
    //   console.log(`i am small`);
    // }

  });
  //animate in
  container.addEventListener('mouseenter', () => {
    card.style.transition = 'none';
  });

  //animate out
  container.addEventListener('mouseleave', () => {
    card.style.transition = 'all .5s ease';
    card.style.transform = `rotateY(0deg) rotateX(0deg)`;
  });
};
