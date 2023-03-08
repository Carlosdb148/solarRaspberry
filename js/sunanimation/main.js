const INITIAL_POSITION_SUN_X = 200;
const INITIAL_POSITION_SUN_Y = -40;
const END_POSITION_SUN_X = 378;
const END_POSITION_SUN_Y = 43.23;
const DELAY = 10000;

let sunAnimationContainer = document.querySelector("#sunanimation-container");

var solarPanel;
var sun;

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
  game.load.image("solarPanel", "./js/sunanimation/solar-panel.png");
  game.load.image("sun", "./js/sunanimation/sun.svg");
}

function create() {
  game.stage.backgroundColor = "#add8e6";

  solarPanel = game.add.sprite(0, 0, "solarPanel");
  solarPanel.anchor.setTo(0.5);

  game.physics.arcade.enable(solarPanel);

  sun = game.add.sprite(0, 0, "sun");
  sun.anchor.setTo(0.5);
  sun.pivot.x = INITIAL_POSITION_SUN_X;
  sun.pivot.y = INITIAL_POSITION_SUN_Y;
}

function update() {
  moveSun(END_POSITION_SUN_X, END_POSITION_SUN_Y, this.game);
  resizeAnimation(this.game);
}

function moveSun(endPositionX, endPositionY, game) {
  if (sun.getBounds().x < endPositionX && sun.getBounds().y > endPositionY) {
    sun.rotation += 0.005;
  } else {
    sun.rotation == 0;
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
  sun.x = solarPanel.x;
  sun.y = solarPanel.y;
}

function resizeAnimation(game) {
  game.scale.setGameSize(sunAnimationContainer.offsetWidth, 600);
  solarPanel.x = game.width / 2 + 20;
  solarPanel.y = game.height / 2;
  sun.x = game.width / 2;
  sun.y = game.height / 2;
}
