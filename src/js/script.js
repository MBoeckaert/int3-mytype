import {cardMovement} from './nftCard.js';

export const init = () => {
  console.log('start executing this JavaScript');
  // testingGSAP();
  cardMovement();
  // console.log(bountyGame);
  cardGenerator();
};

// const testingGSAP = () => {
//   console.log('i am working');
//   gsap.to('.img__billboard', {duration: 2, x: 100});
// };

const bountyGame = document.querySelector('.board__game');

const getData = () => [
  {imgSrc: 'assets/img/sherifApeDesktop.png', name: 'clarendon1'},
  {imgSrc: 'assets/img/wifeApeDesktop.png', name: 'derivative'},
  {imgSrc: 'assets/img/sherifApeDesktop.png', name: 'clarendon2'},
  {imgSrc: 'assets/img/sherifApeDesktop.png', name: 'clarendon3'},
  {imgSrc: 'assets/img/mutantApeDesktop.png', name: 'derivative'},
  {imgSrc: 'assets/img/sherifApeDesktop.png', name: 'clarendon4'},
  {imgSrc: 'assets/img/sherifApeDesktop.png', name: 'clarendon5'},
  {imgSrc: 'assets/img/oldApeDesktop.png', name: 'derivative'},
  {imgSrc: 'assets/img/sherifApeDesktop.png', name: 'clarendon6'}
];

const randomize = () => {
  const cardData = getData();
  cardData.sort(() => Math.random() - .5);
  return cardData;
};

console.log(bountyGame);

//Card generator function
const cardGenerator = () => {
  const cardData = randomize();
  //html
  cardData.forEach(item => {
    const card = document.createElement('div');
    const front = document.createElement('img');
    const back = document.createElement('div');
    card.classList = 'card';
    front.classList = 'front';
    back.classList = 'back';
    //attach info to cards
    front.src = item.imgSrc;
    card.setAttribute('name', item.name);
    //attach cards to bountyGame
    bountyGame.appendChild(card);
    card.appendChild(front);
    card.appendChild(back);

    card.addEventListener('click', e => {
      card.classList.toggle('toggleCard');
      checkCards(e);
    });
  });
};

//check cards
const checkCards = e => {
  const clickedCard = e.target;
  clickedCard.classList.add('flipped');
  const flippedCards = document.querySelectorAll('.flipped');
  const gameText = document.querySelector('.game__text');
  //logic
  //if (flippedCards.length === 3) {
  if (
    flippedCards[0].getAttribute('name') ===
      flippedCards[1].getAttribute('name') &&
    flippedCards[0].getAttribute('name') ===
      flippedCards[2].getAttribute('name')
  ) {
    flippedCards.length === 3;
    console.log('match');
    flippedCards.forEach(card => {
      card.classList.remove('flipped');
      //if cards match they don't return & are non-clickable
      card.style.pointerEvents = 'none';
    });
    bountyGame.style.pointerEvents = 'none';
    gameText.textContent = 'CAUGHT!';
  } else {
    flippedCards.length === 2;
    console.log('wrong');
    flippedCards.forEach(card => {
      card.classList.remove('flipped');
      //remove classList after 1sec
      setTimeout(() => card.classList.remove('toggleCard'), 1000);
    });
    gameText.textContent = 'they got away, try again';
  }
  //}
};
