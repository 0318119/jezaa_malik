<!DOCTYPE html>
<html lang="en">


<!-- These are dynamic variables -->

<?php  $page_title="Home Page";?>
<!-- <?php  $description = "Life style vacation club"; ?>  -->

<!-- End -->

    
<?php include "./includes/header.php"?>

<section class="heroBanner">
      <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="heroContent">
                    <div class="innerContent">
                        <h4 data-aos="fade-up"  data-aos-duration="1000">Life style vacation club</h4>
                        <h6 data-aos="fade-down"  data-aos-duration="1000">explore new experience with hotale</h6>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="container-fluid selectedContainer">
         <div class="row">
            <div class="col-12">
                <div class="selectionBox">

                  <div class="innerselectionBox">
                    <label for="">Check in</label>
                      <div class="selectTag">
                        <select name="format" id="format">
                          <option selected disabled>June 3, 2022</option>
                          <option value="June">June 4, 2022</option>
                          <option value="June">June 5, 2022</option>
                          <option value="June">June 6, 2022</option>
                          <option value="June">June 7, 2022</option>
                          <option value="June">June 8, 2022</option>
                        </select>
                      </div>
                  </div>
                  <div class="innerselectionBox">
                    <label for="">Check out</label>
                      <div class="selectTag">
                        <select name="format" id="format">
                          <option selected disabled>June 3, 2022</option>
                          <option value="June">June 4, 2022</option>
                          <option value="June">June 5, 2022</option>
                          <option value="June">June 6, 2022</option>
                          <option value="June">June 7, 2022</option>
                          <option value="June">June 8, 2022</option>
                        </select>
                      </div>
                  </div>
                  <div class="innerselectionBox">
                    <label for="">Room</label>
                      <div class="selectTag">
                        <select name="format" id="format">
                          <option selected disabled>1</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </div>
                  </div>
                  <div class="innerselectionBox">
                    <label for="">Guests</label>
                      <div class="selectTag">
                        <select name="format" id="format">
                          <option selected disabled>ADULTS 2 CHILDREN 0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </div>
                  </div>
                  <div class="innerselectionBox">
                    <a class="searchBtn" type="submit">Random Search</a>
                  </div>
                </div>
            </div>
         </div>  
      </div>
</section>


<section class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="aboutSec" data-aos="fade-left" data-aos-duration="1000">
          <img src="./assets/images/aboutImg01.webp" alt="" class="img-fluid">
          <div class="aboutRightImg" data-aos="fade-up" data-aos-duration="2500">
            <img src="./assets/images/aboutImg02.webp" alt="">
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="aboutTxt">
          <h5>FAMILY RESORT</h5>
          <h4>Best Resort in Our Area</h4>
          <p>
            This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. Only for show. He who searches for meaning here will be sorely disappointed. These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation.Think of them merely as actors on a paper stage, in a performance devoid of content yet rich in form. That being the case, there is really no point in your continuing to read them. After all, you have many other things you should be doing. Who's paying you to waste this time, anyway?
          </p>
          <a href="">Read More..</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="roomsSec pt-5">
  <div class="container">

    <div class="row justify-content-center">
      <h4 class="roomsHead" data-aos="fade-down" data-aos-duration="1000">Our Resorts</h4>
      <p class="roomsPrah mt-3">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio, ipsum natus accusantium, repudiandae nemo incidunt itaque quo voluptas ducimus repellat quaerat quam quis consequuntur. Fugiat obcaecati quis voluptatum aut, atque blanditiis voluptatibus modi corrupti fuga. Possimus quo voluptas, aspernatur similique sequi quasi vitae rerum iure incidunt id accusantium. Neque, consequuntur.
      </p>
    </div>

    <div class="row justify-content-center mt-5">
      <div class="col-lg-4 roomsCol"  data-aos="fade-down" data-aos-duration="1000">
        <a href="ResortsLocate.php">
          <div class="roomsCard">
            <img src="./assets/images/rooms.webp" alt="" class="img-fluid roomsImg">
            <div class="roomsFlex">
              <span>From</span>
              <a href="">$29</a>
              <a href="">$50 / </a>
              <span>night</span>
            </div>
            <div class="innerRooms">
              <h4>Famliy special room</h4>
              <div class="iconFlex">
                <h5>
                  <img src="./assets/images/beds.webp" alt="" class="img-fluid iconsRoom">
                  <span class="roomNumber">2</span>
                  <span class="guestHead">Double Beds</span>
                </h5>
                <h5>
                  <img src="./assets/images/users.webp" alt="" class="img-fluid iconsRoom">
                  <span class="roomNumber">2</span>
                  <span class="guestHead">Guests</span>
                </h5>

              </div>
              <div class="flexLocateBox">
                   <a href="" class="bookNow"><i class="fa-solid fa-arrow-right-from-bracket"></i>Book Now </a>
                   <a href="" class="locateBtn"><i class="fa-solid fa-location-dot"></i>Mexico</a>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 roomsCol"  data-aos="fade-up" data-aos-duration="1500">
        <a href="ResortsLocate.php">
            <div class="roomsCard">
              <div class="discountBox">
                <span>20%</span>
                <span>off</span>
              </div>
              <img src="./assets/images/DominicaRepublic.webp" alt="" class="img-fluid roomsImg">
              <div class="roomsFlex">
                <span>From</span>
                <a href="">$29</a>
                <a href="">$50 / </a>
                <span>night</span>
              </div>
              <div class="innerRooms">
                <h4>Famliy special room</h4>
                <div class="iconFlex">
                  <h5>
                    <img src="./assets/images/beds.webp" alt="" class="img-fluid iconsRoom">
                    <span class="roomNumber">2</span>
                    <span class="guestHead">Double Beds</span>
                  </h5>
                  <h5>
                    <img src="./assets/images/users.webp" alt="" class="img-fluid iconsRoom">
                    <span class="roomNumber">2</span>
                    <span class="guestHead">Guests</span>
                  </h5>

                </div>
                <div class="flexLocateBox">
                   <a href="" class="bookNow"><i class="fa-solid fa-arrow-right-from-bracket"></i>Book Now </a>
                   <a href="" class="locateBtn"><i class="fa-solid fa-location-dot"></i>Dominica Republic</a>
                </div>
              </div>
            </div>
        </a>
      </div>
      <div class="col-lg-4 roomsCol"  data-aos="fade-down" data-aos-duration="1000">
        <a href="ResortsLocate.php">
            <div class="roomsCard">
              <img src="./assets/images/dubai01.webp" alt="" class="img-fluid roomsImg">
              <div class="roomsFlex">
                <span>From</span>
                <a href="">$29</a>
                <a href="">$50 / </a>
                <span>night</span>
              </div>
              <div class="innerRooms">
                <h4>Famliy special room</h4>
                <div class="iconFlex">
                  <h5>
                    <img src="./assets/images/beds.webp" alt="" class="img-fluid iconsRoom">
                    <span class="roomNumber">2</span>
                    <span class="guestHead">Double Beds</span>
                  </h5>
                  <h5>
                    <img src="./assets/images/users.webp" alt="" class="img-fluid iconsRoom">
                    <span class="roomNumber">2</span>
                    <span class="guestHead">Guests</span>
                  </h5>

                </div>
                <div class="flexLocateBox">
                      <a href="" class="bookNow"><i class="fa-solid fa-arrow-right-from-bracket"></i>Book Now </a>
                      <a href="" class="locateBtn"><i class="fa-solid fa-location-dot"></i>Dubai</a>
                </div>
              </div>
            </div>
        </a>
      </div>
      <div class="col-lg-4 roomsCol mt-3"  data-aos="fade-down" data-aos-duration="1000">
        <a href="ResortsLocate.php">
            <div class="roomsCard">
              <img src="./assets/images/Mexico2.webp" alt="" class="img-fluid roomsImg">
              <div class="roomsFlex">
                <span>From</span>
                <a href="">$29</a>
                <a href="">$50 / </a>
                <span>night</span>
              </div>
              <div class="innerRooms">
                <h4>Famliy special room</h4>
                <div class="iconFlex">
                  <h5>
                    <img src="./assets/images/beds.webp" alt="" class="img-fluid iconsRoom">
                    <span class="roomNumber">2</span>
                    <span class="guestHead">Double Beds</span>
                  </h5>
                  <h5>
                    <img src="./assets/images/users.webp" alt="" class="img-fluid iconsRoom">
                    <span class="roomNumber">2</span>
                    <span class="guestHead">Guests</span>
                  </h5>

                </div>
                <div class="flexLocateBox">
                      <a href="" class="bookNow"><i class="fa-solid fa-arrow-right-from-bracket"></i>Book Now </a>
                      <a href="" class="locateBtn"><i class="fa-solid fa-location-dot"></i>Mexico</a>
                </div>
              </div>
            </div>
        </a>
      </div>
      <div class="col-lg-4 roomsCol mt-3"  data-aos="fade-down" data-aos-duration="1000">
        <a href="ResortsLocate.php">
            <div class="roomsCard">
              <img src="./assets/images/dubai03.webp" alt="" class="img-fluid roomsImg">
              <div class="roomsFlex">
                <span>From</span>
                <a href="">$29</a>
                <a href="">$50 / </a>
                <span>night</span>
              </div>
              <div class="innerRooms">
                <h4>Famliy special room</h4>
                <div class="iconFlex">
                  <h5>
                    <img src="./assets/images/beds.webp" alt="" class="img-fluid iconsRoom">
                    <span class="roomNumber">2</span>
                    <span class="guestHead">Double Beds</span>
                  </h5>
                  <h5>
                    <img src="./assets/images/users.webp" alt="" class="img-fluid iconsRoom">
                    <span class="roomNumber">2</span>
                    <span class="guestHead">Guests</span>
                  </h5>

                </div>
                <div class="flexLocateBox">
                      <a href="" class="bookNow"><i class="fa-solid fa-arrow-right-from-bracket"></i>Book Now </a>
                      <a href="" class="locateBtn"><i class="fa-solid fa-location-dot"></i>Dubai</a>
                </div>
              </div>
            </div>
        </a>
      </div>
    </div>
    <div class="row justify-content-center ">
    <a href="" class="viewRoomBtn">view all rooms <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
    </div>

  </div>
</section>


<section class="mt-5">
  <div class="container">
    <div class="row">
      <h4 class="resortHead" data-aos="fade-down" data-aos-duration="1500">Resort Facilities</h4>
      <p class="resortPrah">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum aliquid officiis saepe voluptatum corporis quibusdam mollitia quos praesentium eum. Necessitatibus.
      </p>
      <div class="resortIconsBox" data-aos="fade-up" data-aos-duration="1500">
        <h5>
          <img src="./assets/images/icons/parkingtwo.avi" alt="" class="resortIcons">
          <a href="" class="des">Parking</a>
        </h5>
        <h5>
          <img src="./assets/images/icons/safe.avi" alt="" class="resortIcons">
          <a href="" class="des">Safe</a>
        </h5>
        <h5>
          <img src="./assets/images/icons/swiming-pool.avi" alt="" class="resortIcons">
          <a href="" class="des">Swimming Pool</a>
        </h5>
        <h5>
          <img src="./assets/images/icons/free-wifi.avi" alt="" class="resortIcons">
          <a href="" class="des">Free Wifi</a>
        </h5>
        <h5>
          <img src="./assets/images/icons/breakfast.avi" alt="" class="resortIcons">
          <a href="" class="des">Breakfast</a>
        </h5>
      </div>
    </div>
  </div>
  <div class="p-5" data-aos="fade-down" data-aos-duration="1500">
    <video controls poster="./assets/images/videos/play.png" class="secVideos">
      <source src="./assets/images/videos/GeeksforGeeks2.mp4" type="video/mp4">
    </video>
  </div>
</section>

<section class="testimonialsBg">
  <div class="container">
    <div class="row">
      <h4 class="testiHead" data-aos="fade-up" data-aos-duration="1500">Testimonial</h4>
      <p class="testiPrah">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum soluta odio similique ipsa ad quod vero eveniet perferendis assumenda, eaque veritatis aperiam harum in adipisci. Vel illum molestias magni amet.
      </p>
    </div>
    <div class="row">
      <div class="testiSlider" data-aos="fade-down" data-aos-duration="1500">

        <div class="innerContentBox">
          <div class="">
            <img src="./assets/images/testimonials/testimonial-image.webp" alt="" class="costomerImg">
          </div>
          <div class="">
            <p class="cosReview">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus esse assumenda id reiciendis totam exercitationem dolore ipsum alias voluptatem. Optio.
            </p>
            <h6 class="cosName">williams Jones</h6>
            <h4 class="cosCom">Solo Traveler</h4>
          </div>
        </div>
        <div class="innerContentBox">
          <div class="">
            <img src="./assets/images/testimonials/testimonial-image.webp" alt="" class="costomerImg">
          </div>
          <div class="">
            <p class="cosReview">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus esse assumenda id reiciendis totam exercitationem dolore ipsum alias voluptatem. Optio.
            </p>
            <h6 class="cosName">williams Jones</h6>
            <h4 class="cosCom">Solo Traveler</h4>
          </div>
        </div>
        <div class="innerContentBox">
          <div class="">
            <img src="./assets/images/testimonials/testimonial-image.webp" alt="" class="costomerImg">
          </div>
          <div class="">
            <p class="cosReview">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus esse assumenda id reiciendis totam exercitationem dolore ipsum alias voluptatem. Optio.
            </p>
            <h6 class="cosName">williams Jones</h6>
            <h4 class="cosCom">Solo Traveler</h4>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<?php include "./includes/footer.php"?>

</body>
</html>