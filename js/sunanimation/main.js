let sunAnimationContainer = document.querySelector("#sunanimation-container");

var game = new Phaser.Game(
  sunAnimationContainer.offsetWidth,
  600,
  Phaser.CANVAS,
  "sunanimation-container",
  {
    preload: preload,
    create: create,
    update: update,
  }
);

function preload() {
  game.load.image("solarPanel", "./js/sunanimation/solar-panel.svg");
  game.load.image("sun", "./js/sunanimation/sun.svg");
}

var solarPanel;
var orb;

const INITIAL_POSITION_SUN_X = 200;
const INITIAL_POSITION_SUN_Y = -40;
const END_POSITION_SUN_X = 378;
const END_POSITION_SUN_Y = 43.23;
const DELAY = 10000;

function create() {
  game.stage.backgroundColor = "#add8e6";

  solarPanel = game.add.sprite(0, 0, "solarPanel");
  solarPanel.anchor.setTo(0.3, 0.7);

  game.physics.arcade.enable(solarPanel);

  orb = game.add.sprite(0, 0, "sun");
  orb.anchor.setTo(0.75);
  orb.pivot.x = INITIAL_POSITION_SUN_X;
  orb.pivot.y = INITIAL_POSITION_SUN_Y;
}

function update() {
  moveSun(END_POSITION_SUN_X, END_POSITION_SUN_Y, this.game);
  resizeAnimation(this.game);
}

function moveSun(endPositionX, endPositionY, game) {
  if (orb.getBounds().x < endPositionX && orb.getBounds().y > endPositionY) {
    orb.rotation += 0.005;
  } else {
    orb.rotation == 0;
    game.time.events.add(
      DELAY,
      function () {
        game.state.restart();
      },
      this
    );
  }
}

function preRender() {
  orb.x = solarPanel.x;
  orb.y = solarPanel.y;
}

function resizeAnimation(game) {
  game.scale.setGameSize(sunAnimationContainer.offsetWidth, 600);
  solarPanel.x = game.width / 2 + 20;
  solarPanel.y = game.height / 2;
  orb.x = game.width / 2;
  orb.y = game.height / 2;
}
