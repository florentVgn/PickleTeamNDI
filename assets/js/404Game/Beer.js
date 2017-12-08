class Beer
{
  constructor(x, y, width, height, speed)
  {
    this.width = width
    this.height = height
    this.x = x
    this.y = y - height
    this.speed = speed
  }

  /**
   * Display the Beer
   * @return void
   */
  show(img)
  {
    fill(0)
    //rect(this.x, this.y, this.width, this.width)
    image(img, this.x, this.y, this.width, this.height)
  }

  /**
   * Move on the Beer
   * @return void
   */
  update()
  {
    this.x -= this.speed
  }

  /**
   * Check if the Beer touch the Xar
   * @param car
   * @returns {boolean}
   */
  hits(car)
  {
    let carBottomY = car.y+(car.height/2)
    if(car.x+car.width >= this.x && car.x <= this.x+this.width)
      if(carBottomY >= this.y)
        return true
    return false;
  }
}
