class Car {
  constructor(x, y, width, height){
    this.x = x;
    this.y = y - height;
    this.baseY = y - height
    this.baseX = x
    this.height = height
    this.width = width
  }

  /**
   * Display the Beer
   * @return void
   */
  show(img) {
    fill(255);
    //ellipse(this.x, this.y, this.height, this.height);
    image(img, this.x, this.y, this.width, this.height)
  }

  /**
   * Do a jump
   * @return void
   */
  up(){
    if(this.y >= this.baseY)
      this.y -= 150;
      this.x += 5;
  }

  /**
   * Move down the car until the road
   * @return void
   */
  update(){
    if(this.x > this.baseX)
      this.x = this.baseX
    if(this.y < this.baseY)
      this.y += 5
  }

}
