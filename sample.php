<!-- fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

.container {
  height: 100vh;
  width: 100%;
  background-color: azure;
  display: grid;
  place-items: center;
  padding: 30px 25px;
}

.box {
  background-color: white;
  max-width: 900px;
  width: 100%;
  padding: 40px;
  padding-bottom: 50px;
  border-radius: 10px;
  box-shadow: 0 10px 15px 5px rgba(0, 0, 0, 0.2);
}

.box .main-title {
  font-size: 28px;
  font-weight: 600;
  color: indigo;
}

.box .card {
  margin-top: 20px;
  display: flex;
  justify-content: space-between;
  gap: 30px;
}

/* To make radio button hidden */
.card input[type="radio"] {
  display: none;
}

.card .list {
  width: 130px;
  display: flex;
  flex-direction: column;
  position: relative;
}

.list label {
  width: 100%;
  height: 50px;
  display: flex;
  padding-left: 20px;
  align-items: center;
  gap: 5px;
  font-size: 17px;
  color: gray;
  z-index: 5;
  cursor: pointer;
}

.list label:hover {
  color: blue;
}

/* To make label color white */
#home:checked ~ .list .home,
#blog:checked ~ .list .blog,
#help:checked ~ .list .help,
#code:checked ~ .list .code,
#about:checked ~ .list .about {
  color: white;
}

.list label i {
  font-size: 22px;
}

.list .topic {
  font-size: 17px;
  font-weight: 500;
}

.indicator {
  width: 100%;
  height: 50px;
  background-color: blue;
  border-radius: 10px;
  position: absolute;
  top: 0;
  transition: 0.3s ease-in;
}

/* To move the indicatore based on click */
#home:checked ~ .list .indicator {
  top: 0;
}

#blog:checked ~ .list .indicator {
  top: 50px;
}

#help:checked ~ .list .indicator {
  top: 100px;
}

#code:checked ~ .list .indicator {
  top: 150px;
}

#about:checked ~ .list .indicator {
  top: 200px;
}

.card .content {
  width: calc(100% - 150px);
}

/* To hide all the content */
.content .home,
.content .blog,
.content .help,
.content .code,
.content .about {
  display: none;
}

.content .sub-title {
  font-size: 21px;
  font-weight: 600;
}

.content hr {
  height: 3px;
  background-color: black;
}

.content .txt {
  margin-top: 5px;
  color: gray;
  text-align: justify;
  font-size: 16px;
}

/* To show the content based on selection */

#home:checked ~ .content .home {
  display: block;
}

#blog:checked ~ .content .blog {
  display: block;
}

#help:checked ~ .content .help {
  display: block;
}

#code:checked ~ .content .code {
  display: block;
}

#about:checked ~ .content .about {
  display: block;
}

</style>
<div class="container">
  <div class="box">
    <div class="main-title">
      Vertical Tabs
    </div>
    <div class="card">
      <input type="radio" name="tab" checked id="home">
      <input type="radio" name="tab" id="blog">
      <input type="radio" name="tab" id="help">
      <input type="radio" name="tab" id="code">
      <input type="radio" name="tab" id="about">
      <div class="list">
        <label for="home" class="home">
          <i class="fas fa-home"></i>
          <span class="topic">Home</span>
        </label>
        <label for="blog" class="blog">
          <i class="fas fa-blog"></i>
          <span class="topic">Blog</span>
        </label>
        <label for="help" class="help">
          <i class="fas fa-envelope"></i>
          <span class="topic">Help</span>
        </label>
        <label for="code" class="code">
          <i class="fas fa-code"></i>
          <span class="topic">Code</span>
        </label>
        <label for="about" class="about">
          <i class="fas fa-user"></i>
          <span class="topic">About</span>
        </label>
        <div class="indicator"></div>
      </div>
      <div class="content">
        <div class="home">
          <div class="sub-title">
            Home Content
          </div>
          <hr>
          <div class="txt">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. In commodi animi vitae vel, et ratione tenetur nemo voluptatem, laboriosam culpa architecto ut minima deleniti. Earum perspiciatis ullam voluptates consequuntur rem.
            </p>
          </div>
        </div>
        <div class="blog">
          <div class="sub-title">
            Blog Content
          </div>
          <hr>
          <div class="txt">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. In commodi animi vitae vel, et ratione tenetur nemo voluptatem, laboriosam culpa architecto ut minima deleniti. Earum perspiciatis ullam voluptates consequuntur rem.
            </p>
          </div>
        </div>
        <div class="help">
          <div class="sub-title">
            Help Content
          </div>
          <hr>
          <div class="txt">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. In commodi animi vitae vel, et ratione tenetur nemo voluptatem, laboriosam culpa architecto ut minima deleniti. Earum perspiciatis ullam voluptates consequuntur rem.
            </p>
          </div>
        </div>
        <div class="code">
          <div class="sub-title">
            Code Content
          </div>
          <hr>
          <div class="txt">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. In commodi animi vitae vel, et ratione tenetur nemo voluptatem, laboriosam culpa architecto ut minima deleniti. Earum perspiciatis ullam voluptates consequuntur rem.
            </p>
          </div>
        </div>
        <div class="about">
          <div class="sub-title">
            About Content
          </div>
          <hr>
          <div class="txt">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. In commodi animi vitae vel, et ratione tenetur nemo voluptatem, laboriosam culpa architecto ut minima deleniti. Earum perspiciatis ullam voluptates consequuntur rem.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>