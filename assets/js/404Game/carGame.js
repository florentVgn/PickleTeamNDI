let bg
let img
let imgPerso
let imgEnnemy
let perso = new Car(10,10,10,10)// The car we control
let ennemies = [] // Beers display on screen
let points = 0 // Points of the player
let rand // Random number to display beers
let loose = false
let speed = 5
let canvasWidth
let canvasHeight

function preload()
{
  imgPerso = loadImage("/assets/img/404Game/perso.png")
  imgEnnemy = loadImage("/assets/img/404Game/ennemy.png")
}

function setup() {
	canvasWidth = windowWidth-(windowWidth*0.1)
	canvasHeight = windowHeight/2.5
  let canvas = createCanvas(canvasWidth, canvasHeight)
	let x = (windowWidth - width) / 2
	let y = (windowHeight - height) / 2
	canvas.position(x,y)
  stroke(0)

  perso = new Car(50, canvasHeight - (canvasHeight*0.1), 50, 50)
  ennemies.push(new Beer(canvasWidth-(canvasWidth*0.05), canvasHeight - (canvasHeight*0.1), 50, 50, speed))
}

function draw() {
  background(255)
  if(!loose)
  {
    textSize(20)
    fill(0)
    text("Points : "+points, canvasWidth - (canvasWidth*0.15), 20)
    line(0, canvasHeight - (canvasHeight*0.1), canvasWidth, canvasHeight - (canvasHeight*0.1))

    rand = int(random(1, 3))

    for(let i=ennemies.length-1;i >= 0;i--) {
      ennemies[i].show(imgEnnemy)
      ennemies[i].update()

      if (ennemies[i].hits(perso)) {
        // Ce qu'on fait quand on perd
        loose = true
      }

      // When a beer leaves the screen -> delete it from the array and add a point
      if (ennemies[i].x < -20) {
        points++
        ennemies.splice(i, 1)
      }
    }

    perso.update()
    perso.show(imgPerso)
    if(points >= 5 && points % 5 == 0)
    {
      speed += 0.05
      ennemies.forEach(function(ennemy){
        ennemy.speed = speed
      })
    }
    if(points >= 10)
    {
      if((frameCount*rand) % 20 == 0)
      {
        ennemies.push(new Beer(canvasWidth-(canvasWidth*0.05), canvasHeight - (canvasHeight*0.1), 50, 50, speed))
      }
    }
    else
    {
      if((frameCount*rand) % 100 == 0)
      {
        ennemies.push(new Beer(canvasWidth-(canvasWidth*0.05), canvasHeight - (canvasHeight*0.1), 50, 50, speed))
      }
    }

  }
  else
  {
    textSize(50)
    fill(0)
		text("Vous avez perdu", canvasWidth/2 - 200, canvasHeight/2+10)
  }



}

function mouseClicked()
{
	if(loose)
	{
		speed = 5
		loose=false
		points = 0
		ennemies = []
		perso = new Car(50, canvasHeight - (canvasHeight*0.1), 50, 50)
		ennemies.push(new Beer(canvasWidth-(canvasWidth*0.05), canvasHeight - (canvasHeight*0.1), 50, 50, speed))
	}
	else
	{
		perso.up()
	}
}

function keyPressed() {
  if (key == ' ') {
    if(loose)
    {
      speed = 5
      loose=false
      points = 0
      ennemies = []
      perso = new Car(50, canvasHeight - (canvasHeight*0.1), 50, 50)
      ennemies.push(new Beer(canvasWidth-(canvasWidth*0.05), canvasHeight - (canvasHeight*0.1), 50, 50, speed))
    }
    else
      perso.up();
  }
}
