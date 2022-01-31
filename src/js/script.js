import gsap from 'gsap/all';
import {cardMovement} from './nftCard.js';
import {scrollTrigger} from './scrollTrigger';

export const init = () => {
  console.log('start executing this JavaScript');
  gsap.registerPlugin(ScrollTrigger);
  // testingGSAP();
  cardMovement();
  scrollTrigger();
  // console.log(bountyGame);
  cardGenerator();
};

const bountyGame = document.querySelector('.board__game');

const getData = () => [
  {imgSrc: 'assets/img/originalApeDesktop.png', name: 'clarendon1'},
  {imgSrc: 'assets/img/wantedWifeApeDesktop.png', name: 'derivative'},
  {imgSrc: 'assets/img/originalApeDesktop.png', name: 'clarendon2'},
  {imgSrc: 'assets/img/originalApeDesktop.png', name: 'clarendon3'},
  {imgSrc: 'assets/img/wantedMutantDesktop.png', name: 'derivative'},
  {imgSrc: 'assets/img/originalApeDesktop.png', name: 'clarendon4'},
  {imgSrc: 'assets/img/originalApeDesktop.png', name: 'clarendon5'},
  {imgSrc: 'assets/img/wantedOldApeDesktop.png', name: 'derivative'},
  {imgSrc: 'assets/img/originalApeDesktop.png', name: 'clarendon6'}
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
  const gameEnd = document.querySelector('.game__end');
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
    gameText.textContent = 'Good job! You caught them!';
    gameEnd.classList.add('caught');
  } else {
    flippedCards.length === 2;
    console.log('wrong');
    flippedCards.forEach(card => {
      card.classList.remove('flipped');
      //remove classList after 1sec
      setTimeout(() => card.classList.remove('toggleCard'), 1000);
    });
    gameText.textContent = 'they got away, try again';
    setTimeout(() => gameText.textContent = '', 1000);
  }
  //}
};
