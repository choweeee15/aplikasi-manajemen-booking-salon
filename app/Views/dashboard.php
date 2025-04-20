<div class="page-wrapper bg-wrapper" style="padding-top: 65px;">
  <div class="content">
    <div class="row justify-content-center">
      <div class="col-sm-12">

        <?php if (session()->get('level') == 2): ?>
          <!-- Welcome Section -->
          <section id="welcome" class="text-center py-5" style="background-image: url('<?= base_url('img/welcome2.jpg') ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="container">
              <h1 class="display-3 text-white">Welcome to Ayo Arena!</h1>
              <p class="lead text-white mb-4">Book your court, bring the squad!</p>
              <a href="#fields" class="btn btn-outline-light btn-lg">Explore Our Fields</a>
            </div>
          </section>

          <!-- Fields Section -->
          <section id="fields" class="bg-light py-5">
            <div class="container">
              <h2 class="text-center fw-bold mb-4 text-dark">🎯 Available Fields</h2>

              <!-- Search and Filter Section -->
              <div class="row justify-content-center mb-4">
                <div class="col-lg-8 d-flex flex-wrap justify-content-center gap-3">

                  <!-- Search Bar -->
                  <div style="flex: 1 1 0%">
                    <input type="text" id="search-field" class="form-control search-modern" placeholder="🔍 Search for a field..." onkeyup="filterFields()">
                  </div>

                  <!-- Filter Dropdown -->
                  <div>
                    <select id="field-filter" class="form-select filter-modern" onchange="filterFields()">
                      <option value="">🎯 Filter by Field Type</option>
                      <option value="basketball">Basketball Court</option>
                      <option value="futsal">Futsal Field</option>
                      <option value="badminton">Badminton Court</option>
                      <option value="volleyball">Volleyball Court</option>
                      <option value="table-tennis">Table Tennis</option>
                      <option value="baseball">Baseball Field</option>
                    </select>
                  </div>

                </div>
              </div>
            </div>

            <!-- Fields List Container -->
            <div class="row g-4" id="fields-list">
              <!-- Cards will be injected dynamically or statically -->
            </div>
      </div>
      </section>



      <!-- Field 1 - Basketball Court -->
      <div class="col-md-4 mb-4 field-card basketball">
        <div class="card shadow-sm border-0">
          <img src="<?= base_url('img/basket.jpg') ?>" class="card-img-top rounded" style="height: 250px;" alt="Basketball Court">
          <div class="card-body">
            <h5 class="card-title text-dark">Basketball Court</h5>
            <p class="card-text text-muted">Perfect for 5v5 matches or casual shootarounds. Designed for the ideal bounce and grip for all levels.</p>
            <div class="d-flex justify-content-between">
              <button class="btn btn-primary mt-2 rounded-pill transition-effect" data-bs-toggle="modal" data-bs-target="#bookingModal" style="flex-grow: 1; text-align: center; padding: 12px 20px; font-weight: 600; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-right: 10px;">Book Now</button>
              <button class="btn btn-danger mt-2 rounded-pill transition-effect" data-bs-toggle="modal" data-bs-target="#basketballModal" style="flex-grow: 1; text-align: center; padding: 12px 20px; font-weight: 600; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">Detail</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal for Basketball Court Details -->
      <div class="modal fade" id="basketballModal" tabindex="-1" aria-labelledby="basketballModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="basketballModalLabel">Basketball Court Details</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row justify-content-center">
                <!-- Image Gallery -->
                <div class="col-md-6 mb-4">
                  <div id="basketballGallery" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="<?= base_url('img/basket.jpg') ?>" class="d-block w-100 rounded" alt="Basketball Court Image 1">
                      </div>
                      <div class="carousel-item">
                        <img src="<?= base_url('img/basket2.jpg') ?>" class="d-block w-100 rounded" alt="Basketball Court Image 2">
                      </div>
                      <div class="carousel-item">
                        <img src="<?= base_url('img/basket3.jpg') ?>" class="d-block w-100 rounded" alt="Basketball Court Image 3">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#basketballGallery" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#basketballGallery" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>

                <!-- Basketball Court Information -->
                <div class="col-md-6 mb-4">
                  <h6 class="text-dark">Location:</h6>
                  <p class="text-muted" style="font-size: 1.1rem;">Located in the heart of the city, this basketball court is easily accessible and offers a great atmosphere for both friendly matches and training sessions.</p>

                  <h6 class="text-dark">Type:</h6>
                  <p class="text-muted" style="font-size: 1.1rem;">Indoor/Outdoor Basketball Court</p>

                  <h6 class="text-dark">Price per Hour:</h6>
                  <p class="text-muted" style="font-size: 1.1rem;"><strong>Rp 125.000</strong> per hour</p>

                  <p class="text-muted" style="font-size: 1.1rem;">The court is designed to provide excellent bounce and grip, making it perfect for all levels of play. Whether you're organizing a 5v5 match or just shooting around, you'll enjoy a high-quality experience.</p>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-end">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="padding: 14px 24px; font-weight: 600; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">Close</button>
            </div>
          </div>
        </div>
      </div>


      <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content rounded-4 shadow-lg">

            <!-- Modal Header -->
            <div class="modal-header border-bottom-0">
              <h5 class="modal-title text-center" id="bookingModalLabel">
                <strong class="highlight-title">BasketBall Court! 🏀</strong>
              </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <div class="modal-body">


              <p class="text-muted fs-4">
                <strong>Rp 125.000</strong> per hour
              </p>


              <p class="text-muted mb-4">
                Perfect for 5v5 matches or casual shootarounds. Designed for the ideal bounce and grip for all levels.
              </p>


              <div class="mb-4">
                <p class="text-muted">
                  <strong>Type:</strong> Indoor/Outdoor Basketball Court
                </p>
                <p class="text-muted">
                  <strong>Location:</strong> Central City Area, near the stadium.
                </p>
              </div>


              <div class="mb-3">
                <label for="bookingDate" class="form-label">Pilih Tanggal Booking</label>
                <input type="date" class="form-control shadow-sm" id="bookingDate" name="bookingDate">
              </div>


              <div class="mb-5">
                <label class="form-label">Pilih Jam:</label>
                <div class="d-flex flex-wrap gap-3">

                  <label class="time-option">
                    <input type="radio" name="time_slot" value="09:00 AM - 10:00 AM" required>
                    <span>09:00 AM - 10:00 AM</span>
                  </label>


                  <label class="time-option unavailable">
                    <input type="radio" name="time_slot" value="10:00 AM - 11:00 AM" disabled>
                    <span>10:00 AM - 11:00 AM</span>
                  </label>


                  <label class="time-option">
                    <input type="radio" name="time_slot" value="11:00 AM - 12:00 PM" required>
                    <span>11:00 AM - 12:00 PM</span>
                  </label>


                  <label class="time-option">
                    <input type="radio" name="time_slot" value="12:00 PM - 01:00 PM" required>
                    <span>12:00 PM - 01:00 PM</span>
                  </label>


                  <label class="time-option">
                    <input type="radio" name="time_slot" value="01:00 PM - 02:00 PM" required>
                    <span>01:00 PM - 02:00 PM</span>
                  </label>


                  <label class="time-option unavailable">
                    <input type="radio" name="time_slot" value="02:00 PM - 03:00 PM" disabled>
                    <span>02:00 PM - 03:00 PM</span>
                  </label>


                  <label class="time-option">
                    <input type="radio" name="time_slot" value="03:00 PM - 04:00 PM" required>
                    <span>03:00 PM - 04:00 PM</span>
                  </label>


                  <label class="time-option">
                    <input type="radio" name="time_slot" value="04:00 PM - 05:00 PM" required>
                    <span>04:00 PM - 05:00 PM</span>
                  </label>


                  <label class="time-option">
                    <input type="radio" name="time_slot" value="05:00 PM - 06:00 PM" required>
                    <span>05:00 PM - 06:00 PM</span>
                  </label>
                </div>
              </div>

              <div class="mb-4">
                <p class="fs-5">
                  <strong>Total: </strong><span id="totalPrice">Rp 125.000</span>
                </p>
              </div>

              <div class="mb-8">
                <label class="form-label">Payment Method:</label>
                <div class="d-flex flex-wrap gap-3">
                  <label class="payment-option">
                    <input type="radio" name="metode_pembayaran" value="Ovo" required>
                    <img src="/ovo.png" alt="Ovo">
                  </label>
                  <label class="payment-option">
                    <input type="radio" name="metode_pembayaran" value="Dana" required>
                    <img src="/dana.jpg" alt="Dana">
                  </label>
                  <label class="payment-option">
                    <input type="radio" name="metode_pembayaran" value="Gopay" required>
                    <img src="/gopay.png" alt="Gopay">
                  </label>
                  <label class="payment-option">
                    <input type="radio" name="metode_pembayaran" value="Bank Transfer" required>
                    <img src="/bank.jpg" alt="Bank Transfer">
                  </label>
                </div>
                <p id="info_pembayaran" class="mt-2 text-muted"></p>
              </div>

              <div class="mb-4">
                <label for="paymentProof" class="form-label">Upload Bukti Pembayaran</label>
                <input class="form-control shadow-sm" type="file" id="paymentProof" name="paymentProof" accept="image/*">
                <div class="form-text">Format gambar: JPG, PNG, atau JPEG. Max 2MB.</div>
              </div>

              <
                <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-outline-secondary me-2 rounded-3 shadow-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary ms-3 rounded-3 shadow-sm" onclick="bookNow()">Book Now</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <style>
      .time-option {
        border: 2px solid transparent;
        border-radius: 12px;
        padding: 10px 20px;
        background-color: #f8f9fa;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-block;
        min-width: 180px;
        text-align: center;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        font-weight: 500;
        position: relative;
      }

      .time-option input[type="radio"] {
        display: none;
      }

      .time-option span {
        display: inline-block;
        color: #000;
      }

      .time-option input[type="radio"]:checked+span {
        background-color: #198754;
        color: #fff;
        padding: 6px 12px;
        border-radius: 8px;
      }

      .time-option.unavailable {
        background-color: #f8d7da;
        cursor: not-allowed;
        opacity: 0.7;
        border: 2px solid #dc3545;
      }

      .time-option.unavailable span {
        color: #dc3545;
      }
    </style>


    <style>
      .time-option {
        border: 2px solid transparent;
        border-radius: 10px;
        padding: 10px 15px;
        background-color: #f8f9fa;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-block;
        min-width: 180px;
        text-align: center;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        font-weight: 500;
      }

      .time-option input[type="radio"] {
        display: none;
      }

      .time-option input[type="radio"]:checked+span {
        color: white;
        background-color: #198754;
        border-radius: 8px;
        padding: 6px 12px;
        display: inline-block;
        transition: all 0.3s ease;
      }
    </style>

    <script>
      document.querySelectorAll(".time-option input").forEach(input => {
        input.addEventListener("change", function() {
          console.log("Jam dipilih:", this.value);
          // atau tampilkan di halaman:
          // document.getElementById("info_jam").textContent = "Jam dipilih: " + this.value;
        });
      });
    </script>

    <script>
      document.querySelectorAll(".payment-option input").forEach(input => {
        input.addEventListener("change", function() {
          let infoPembayaran = document.getElementById("info_pembayaran");
          switch (this.value) {
            case "Ovo":
              infoPembayaran.textContent = "Payment via Ovo: 08125364789";
              break;
            case "Dana":
              infoPembayaran.textContent = "Payment via Dana: 08125364789";
              break;
            case "Gopay":
              infoPembayaran.textContent = "Payment via Gopay: 08125364789";
              break;
            case "Bank Transfer":
              infoPembayaran.textContent = "Bank Transfer to Permata Bank: 004171122223";
              break;
            default:
              infoPembayaran.textContent = "";
          }
        });
      });
    </script>

    <style>
      .payment-option {
        border: 2px solid transparent;
        border-radius: 10px;
        padding: 5px;
        cursor: pointer;
        transition: all 0.3s ease;
      }

      .payment-option input[type="radio"] {
        display: none;
      }

      .payment-option img {
        width: 80px;
        height: auto;
        object-fit: contain;
        display: block;
      }

      .payment-option input[type="radio"]:checked+img {
        border: 2px solid #007bff;
        border-radius: 10px;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
      }
    </style>

    <!-- Add Bootstrap Icons (for clock icon) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom Styles for Modern, Bold Title -->
    <style>
      .highlight-title {
        font-size: 2.5rem;
        /* Increase the font size */
        color: #FF6347;
        /* Use a bright color like tomato */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        /* Add a shadow effect */
        font-weight: bold;
        /* Make the text bold */
      }

      .modal-header {
        border-bottom: none;
        /* Remove bottom border */
      }
    </style>

    <!-- JavaScript -->
    <script>
      // Array to store booking status (true = booked, false = available)
      let bookingStatus = [false, false, false, false, false, false, false, false, false]; // Slots 1-9

      // Function to toggle booking status
      function toggleBooking(slotId) {
        const slotButton = document.getElementById(`slot-${slotId}`);
        const badge = slotButton.querySelector('.badge');

        if (bookingStatus[slotId - 1]) {
          // If the slot is already booked, release it
          bookingStatus[slotId - 1] = false;
          slotButton.classList.remove('btn-outline-danger');
          slotButton.classList.add('btn-outline-success');
          badge.classList.remove('bg-danger');
          badge.classList.add('bg-success');
          badge.textContent = 'Available';
        } else {
          // If the slot is available, book it
          bookingStatus[slotId - 1] = true;
          slotButton.classList.remove('btn-outline-success');
          slotButton.classList.add('btn-outline-danger');
          badge.classList.remove('bg-success');
          badge.classList.add('bg-danger');
          badge.textContent = 'Booked';
        }

        // Recalculate price based on booked hours
        const bookedSlots = bookingStatus.filter(status => status === true).length;
        const price = bookedSlots * 125000; // Assuming each hour is 125.000
        document.getElementById('totalPrice').textContent = `Rp ${price.toLocaleString()}`;
      }

      // Function to handle the "Book Now" button click
      function bookNow() {
        alert('Booking Successful!');
        // Here you would send the booking information to your server or controller
        // Reset booking status
        bookingStatus = [false, false, false, false, false, false, false, false, false];
        const buttons = document.querySelectorAll('.slot-btn');
        buttons.forEach(button => {
          button.classList.remove('btn-outline-danger');
          button.classList.add('btn-outline-success');
          const badge = button.querySelector('.badge');
          badge.classList.remove('bg-danger');
          badge.classList.add('bg-success');
          badge.textContent = 'Available';
        });
      }
    </script>

    <!-- Field 2 - Futsal Field -->
    <div class="col-md-4 mb-4 field-card futsal">
      <div class="card shadow-sm border-0">
        <img src="<?= base_url('img/futsal.jpg') ?>" class="card-img-top rounded" style="height: 250px;" alt="Futsal Field">
        <div class="card-body">
          <h5 class="card-title text-dark">Futsal Field</h5>
          <p class="card-text text-muted">Ideal for 5v5 matches or friendly practice sessions. Offering excellent turf and goalposts.</p>
          <div class="d-flex justify-content-between">
            <button class="btn btn-primary mt-2 rounded-pill transition-effect" data-bs-toggle="modal" data-bs-target="#bookingModal" style="flex-grow: 1; text-align: center; padding: 12px 20px; font-weight: 600; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-right: 10px;">Book Now</button>
            <button class="btn btn-danger mt-2 rounded-pill transition-effect" data-bs-toggle="modal" data-bs-target="#futsalModal" style="flex-grow: 1; text-align: center; padding: 12px 20px; font-weight: 600; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">Detail</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal for Futsal Field Details -->
    <div class="modal fade" id="futsalModal" tabindex="-1" aria-labelledby="futsalModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="futsalModalLabel">Futsal Field Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row justify-content-center">
              <!-- Image Gallery -->
              <div class="col-md-6 mb-4">
                <div id="futsalGallery" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="<?= base_url('img/futsal.jpg') ?>" class="d-block w-100 rounded" alt="Futsal Field Image 1">
                    </div>
                    <div class="carousel-item">
                      <img src="<?= base_url('img/futsal2.jpg') ?>" class="d-block w-100 rounded" alt="Futsal Field Image 2">
                    </div>
                    <div class="carousel-item">
                      <img src="<?= base_url('img/futsal3.jpg') ?>" class="d-block w-100 rounded" alt="Futsal Field Image 3">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#futsalGallery" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#futsalGallery" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>

              <!-- Futsal Field Information -->
              <div class="col-md-6 mb-4">
                <h6 class="text-dark">Location:</h6>
                <p class="text-muted" style="font-size: 1.1rem;">Located in the prime sports area, this futsal field is perfect for teams or friends to enjoy a fun match.</p>

                <h6 class="text-dark">Type:</h6>
                <p class="text-muted" style="font-size: 1.1rem;">Indoor/Outdoor Futsal Field</p>

                <h6 class="text-dark">Price per Hour:</h6>
                <p class="text-muted" style="font-size: 1.1rem;"><strong>Rp 150.000</strong> per hour</p>

                <p class="text-muted" style="font-size: 1.1rem;">The field is equipped with premium turf and goalposts, providing the best playing conditions for futsal enthusiasts of all levels.</p>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-end">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="padding: 14px 24px; font-weight: 600; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">Close</button>
          </div>
        </div>
      </div>
    </div>



    <!-- Field 3 - Badminton Court -->
    <div class="col-md-4 mb-4 field-card badminton">
      <div class="card shadow-sm border-0">
        <img src="<?= base_url('img/badminton.jpg') ?>" class="card-img-top rounded" style="height: 250px;" alt="Badminton Court">
        <div class="card-body">
          <h5 class="card-title text-dark">Badminton Court</h5>
          <p class="card-text text-muted">Smash, serve, and rally on our indoor court. Designed for all skill levels with ample space and excellent lighting.</p>
          <div class="d-flex justify-content-between">
            <a href="<?= base_url('gudang/fancytipekamar') ?>" class="btn btn-primary mt-2 rounded-pill transition-effect" style="flex-grow: 1; text-align: center; padding: 12px 20px; font-weight: 600; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-right: 10px;">Book Now</a>
            <button class="btn btn-danger mt-2 rounded-pill transition-effect" data-bs-toggle="modal" data-bs-target="#badmintonModal" style="flex-grow: 1; text-align: center; padding: 12px 20px; font-weight: 600; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">Detail</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal for Badminton Court Details -->
    <div class="modal fade" id="badmintonModal" tabindex="-1" aria-labelledby="badmintonModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl"> <!-- Adjusted modal size to 'modal-xl' for larger view -->
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="badmintonModalLabel">Badminton Court Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row justify-content-center">
              <!-- Image Gallery -->
              <div class="col-md-6 mb-4">
                <div id="badmintonGallery" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="<?= base_url('img/badminton.jpg') ?>" class="d-block w-100 rounded" alt="Badminton Court Image 1">
                    </div>
                    <div class="carousel-item">
                      <img src="<?= base_url('img/badminton2.jpg') ?>" class="d-block w-100 rounded" alt="Badminton Court Image 2">
                    </div>
                    <div class="carousel-item">
                      <img src="<?= base_url('img/badminton3.jpg') ?>" class="d-block w-100 rounded" alt="Badminton Court Image 3">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#badmintonGallery" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#badmintonGallery" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>

              <!-- Badminton Court Information -->
              <div class="col-md-6 mb-4">
                <h6 class="text-dark">Location:</h6>
                <p class="text-muted" style="font-size: 1.1rem;">Located in the heart of the city, this indoor badminton court is perfect for recreational and competitive players alike.</p>

                <h6 class="text-dark">Type:</h6>
                <p class="text-muted" style="font-size: 1.1rem;">Indoor Badminton Court</p>

                <h6 class="text-dark">Price per Hour:</h6>
                <p class="text-muted" style="font-size: 1.1rem;"><strong>Rp 100.000</strong> per hour</p>

                <p class="text-muted" style="font-size: 1.1rem;">The court is designed with professional-grade flooring and excellent lighting, providing the ideal space for a game of badminton, whether you're training or having fun with friends.</p>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-end"> <!-- Changed to right-align the button -->
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="padding: 14px 24px; font-weight: 600; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">Close</button>
            <a href="<?= base_url('gudang/fancytipekamar') ?>" class="btn btn-primary" style="padding: 14px 24px; font-weight: 600; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">Book Now</a>
          </div>
        </div>
      </div>
    </div>


    <!-- Field 4 - Volleyball Court -->
    <div class="col-md-4 mb-4 field-card volleyball">
      <div class="card shadow-sm border-0">
        <img src="<?= base_url('img/volley.jpg') ?>" class="card-img-top rounded" style="height: 250px;" alt="Volleyball Court">
        <div class="card-body">
          <h5 class="card-title text-dark">Volleyball Court</h5>
          <p class="card-text text-muted">Enjoy thrilling volleyball matches on our high-quality court. Perfect for friendly and competitive matches alike.</p>
          <div class="d-flex justify-content-between">
            <a href="<?= base_url('gudang/fancytipekamar') ?>" class="btn btn-primary mt-2 rounded-pill transition-effect" style="flex-grow: 1; text-align: center; padding: 12px 20px; font-weight: 600; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-right: 10px;">Book Now</a>
            <button class="btn btn-danger mt-2 rounded-pill transition-effect" data-bs-toggle="modal" data-bs-target="#volleyballModal" style="flex-grow: 1; text-align: center; padding: 12px 20px; font-weight: 600; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">Detail</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal for Volleyball Court Details -->
    <div class="modal fade" id="volleyballModal" tabindex="-1" aria-labelledby="volleyballModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl"> <!-- Adjusted modal size to 'modal-xl' for larger view -->
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="volleyballModalLabel">Volleyball Court Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row justify-content-center">
              <!-- Image Gallery -->
              <div class="col-md-6 mb-4">
                <div id="volleyballGallery" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="<?= base_url('img/volley.jpg') ?>" class="d-block w-100 rounded" alt="Volleyball Court Image 1">
                    </div>
                    <div class="carousel-item">
                      <img src="<?= base_url('img/volley2.jpg') ?>" class="d-block w-100 rounded" alt="Volleyball Court Image 2">
                    </div>
                    <div class="carousel-item">
                      <img src="<?= base_url('img/volley3.jpg') ?>" class="d-block w-100 rounded" alt="Volleyball Court Image 3">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#volleyballGallery" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#volleyballGallery" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>

              <!-- Volleyball Court Information -->
              <div class="col-md-6 mb-4">
                <h6 class="text-dark">Location:</h6>
                <p class="text-muted" style="font-size: 1.1rem;">Located in the heart of the city, our volleyball court is the perfect spot for both competitive and casual games.</p>

                <h6 class="text-dark">Type:</h6>
                <p class="text-muted" style="font-size: 1.1rem;">Outdoor Volleyball Court</p>

                <h6 class="text-dark">Price per Hour:</h6>
                <p class="text-muted" style="font-size: 1.1rem;"><strong>Rp 120.000</strong> per hour</p>

                <p class="text-muted" style="font-size: 1.1rem;">Our volleyball court features professional-grade netting and ample space, making it ideal for intense matches or just a friendly game with friends.</p>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-end"> <!-- Changed to right-align the button -->
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="padding: 14px 24px; font-weight: 600; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">Close</button>
            <a href="<?= base_url('gudang/fancytipekamar') ?>" class="btn btn-primary" style="padding: 14px 24px; font-weight: 600; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">Book Now</a>
          </div>
        </div>
      </div>
    </div>


    <!-- Field 5 - Table Tennis -->
    <div class="col-md-4 mb-4 field-card table-tennis">
      <div class="card shadow-sm border-0">
        <img src="<?= base_url('img/tennismeja.jpg') ?>" class="card-img-top rounded" style="height: 250px;" alt="Table Tennis Court">
        <div class="card-body">
          <h5 class="card-title text-dark">Table Tennis</h5>
          <p class="card-text text-muted">Enjoy fast-paced indoor play with our top-quality table tennis setup. Ideal for singles or doubles matches.</p>
          <div class="d-flex justify-content-between">
            <a href="<?= base_url('gudang/fancytipekamar') ?>" class="btn btn-primary mt-2 rounded-pill transition-effect" style="flex-grow: 1; text-align: center; padding: 12px 20px; font-weight: 600; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-right: 10px;">Book Now</a>
            <button class="btn btn-danger mt-2 rounded-pill transition-effect" data-bs-toggle="modal" data-bs-target="#tableTennisModal" style="flex-grow: 1; text-align: center; padding: 12px 20px; font-weight: 600; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">Detail</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal for Table Tennis Court Details -->
    <div class="modal fade" id="tableTennisModal" tabindex="-1" aria-labelledby="tableTennisModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl"> <!-- Adjusted modal size to 'modal-xl' for larger view -->
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="tableTennisModalLabel">Table Tennis Court Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row justify-content-center">
              <!-- Image Gallery -->
              <div class="col-md-6 mb-4">
                <div id="tableTennisGallery" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="<?= base_url('img/tennismeja.jpg') ?>" class="d-block w-100 rounded" alt="Table Tennis Court Image 1">
                    </div>
                    <div class="carousel-item">
                      <img src="<?= base_url('img/tennismeja2.jpg') ?>" class="d-block w-100 rounded" alt="Table Tennis Court Image 2">
                    </div>
                    <div class="carousel-item">
                      <img src="<?= base_url('img/tennismeja3.jpg') ?>" class="d-block w-100 rounded" alt="Table Tennis Court Image 3">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#tableTennisGallery" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#tableTennisGallery" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>

              <!-- Table Tennis Court Information -->
              <div class="col-md-6 mb-4">
                <h6 class="text-dark">Location:</h6>
                <p class="text-muted" style="font-size: 1.1rem;">Our indoor table tennis setup provides the perfect environment for fast-paced games, whether you're a beginner or a seasoned pro.</p>

                <h6 class="text-dark">Type:</h6>
                <p class="text-muted" style="font-size: 1.1rem;">Indoor Table Tennis Setup</p>

                <h6 class="text-dark">Price per Hour:</h6>
                <p class="text-muted" style="font-size: 1.1rem;"><strong>Rp 80.000</strong> per hour</p>

                <p class="text-muted" style="font-size: 1.1rem;">Enjoy a competitive or casual game with our state-of-the-art table tennis equipment. It's ideal for singles, doubles, and even group matches.</p>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-end"> <!-- Changed to right-align the button -->
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="padding: 14px 24px; font-weight: 600; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">Close</button>
            <a href="<?= base_url('gudang/fancytipekamar') ?>" class="btn btn-primary" style="padding: 14px 24px; font-weight: 600; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">Book Now</a>
          </div>
        </div>
      </div>
    </div>


    <!-- Field 6 - Baseball Field -->
    <div class="col-md-4 mb-4 field-card baseball">
      <div class="card shadow-sm border-0">
        <img src="<?= base_url('img/bolakasti.jpg') ?>" class="card-img-top rounded" style="height: 250px;" alt="Baseball Field">
        <div class="card-body">
          <h5 class="card-title text-dark">Baseball Field</h5>
          <p class="card-text text-muted">A professional field for all levels of play. Great for batting practice or a fun match with friends.</p>
          <div class="d-flex justify-content-between">
            <a href="<?= base_url('gudang/fancytipekamar') ?>" class="btn btn-primary mt-2 rounded-pill transition-effect" style="flex-grow: 1; text-align: center; padding: 12px 20px; font-weight: 600; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-right: 10px;">Book Now</a>
            <button class="btn btn-danger mt-2 rounded-pill transition-effect" data-bs-toggle="modal" data-bs-target="#baseballModal" style="flex-grow: 1; text-align: center; padding: 12px 20px; font-weight: 600; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">Detail</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal for Baseball Field Details -->
    <div class="modal fade" id="baseballModal" tabindex="-1" aria-labelledby="baseballModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl"> <!-- Adjusted modal size to 'modal-xl' for larger view -->
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="baseballModalLabel">Baseball Field Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row justify-content-center">
              <!-- Image Gallery -->
              <div class="col-md-6 mb-4">
                <div id="baseballGallery" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="<?= base_url('img/bolakasti.jpg') ?>" class="d-block w-100 rounded" alt="Baseball Field Image 1">
                    </div>
                    <div class="carousel-item">
                      <img src="<?= base_url('img/bolakasti2.jpg') ?>" class="d-block w-100 rounded" alt="Baseball Field Image 2">
                    </div>
                    <div class="carousel-item">
                      <img src="<?= base_url('img/bolakasti3.jpg') ?>" class="d-block w-100 rounded" alt="Baseball Field Image 3">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#baseballGallery" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#baseballGallery" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>

              <!-- Baseball Field Information -->
              <div class="col-md-6 mb-4">
                <h6 class="text-dark">Location:</h6>
                <p class="text-muted" style="font-size: 1.1rem;">Our professional baseball field is perfect for both practice and matches, offering the ideal setup for players of all skill levels.</p>

                <h6 class="text-dark">Type:</h6>
                <p class="text-muted" style="font-size: 1.1rem;">Professional Baseball Field</p>

                <h6 class="text-dark">Price per Hour:</h6>
                <p class="text-muted" style="font-size: 1.1rem;"><strong>Rp 100.000</strong> per hour</p>

                <p class="text-muted" style="font-size: 1.1rem;">Whether you're practicing batting or playing a casual game, our baseball field is a great place to have fun and improve your skills.</p>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-end"> <!-- Changed to right-align the button -->
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="padding: 14px 24px; font-weight: 600; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">Close</button>
            <a href="<?= base_url('gudang/fancytipekamar') ?>" class="btn btn-primary" style="padding: 14px 24px; font-weight: 600; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">Book Now</a>
          </div>
        </div>
      </div>
    </div>



  </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-5" style="background-image: url('<?= base_url('img/welcome.jpg') ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container text-center">
      <h2 class="text-white">Contact Us</h2>
      <p class="text-white">Need assistance? We're here to help you book and play with ease!</p>
      <p class="text-white"><strong>Email:</strong> contact@ayoarena.com</p>
      <p class="text-white"><strong>Phone:</strong> +62 823 8762 8115</p>
    </div>
  </section>
</div>
</div>
</div>
</div>
<?php endif; ?>


<?php if (in_array(session()->get('level'), [1, 3, 10])): ?>
  <div class="container mt-4">
    <h2 class="text-center mb-4">Dashboard Manajemen Lapangan Olahraga</h2>
    <div class="row justify-content-center mt-3">

      <div class="col-md-3 mb-4">
        <div class="card text-center shadow-lg border-radius-10 zoom-card" style="transition: transform 0.3s ease;">
          <div class="card-body">
            <h5 class="card-title text-primary">Total Reservasi</h5>
            <p class="card-text text-primary mb-3">
              <strong><?= $total_reservasi; ?></strong>
            </p>
            <div class="card-footer">
              <small class="text-muted">Jumlah keseluruhan reservasi yang telah dilakukan di lapangan.</small>
            </div>
          </div>
        </div>
      </div>


      <div class="col-md-3 mb-4">
        <div class="card text-center shadow-lg border-radius-10 zoom-card" style="transition: transform 0.3s ease;">
          <div class="card-body">
            <h5 class="card-title text-success">Total Pembayaran</h5>
            <p class="card-text text-success mb-3">
              <strong>Rp<?= number_format($total_pembayaran, 0, ',', '.'); ?></strong>
            </p>
            <div class="card-footer">
              <small class="text-muted">Total pembayaran yang sudah diterima untuk reservasi lapangan.</small>
            </div>
          </div>
        </div>
      </div>


      <div class="col-md-3 mb-4">
        <div class="card text-center shadow-lg border-radius-10 zoom-card" style="transition: transform 0.3s ease;">
          <div class="card-body">
            <h5 class="card-title text-warning">Total Pengguna</h5>
            <p class="card-text text-warning mb-3">
              <strong><?= $total_pengguna; ?></strong>
            </p>
            <div class="card-footer">
              <small class="text-muted">Jumlah pengguna yang telah terdaftar untuk menggunakan lapangan.</small>
            </div>
          </div>
        </div>
      </div>

      <!-- Total Parkir Card -->
      <!-- <div class="col-md-3 mb-4">
                <div class="card text-center shadow-lg border-radius-10 zoom-card" style="transition: transform 0.3s ease;">
                    <div class="card-body">
                        <h5 class="card-title text-danger">Total Parkir</h5>
                        <p class="card-text text-danger mb-3">
                            <strong><?= $total_parkir; ?></strong>
                        </p>
                        <div class="card-footer">
                            <small class="text-muted">Total kendaraan yang sudah diparkir di area lapangan.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->


    </div>
  </div>
  </div>
  </div>
  </div>
<?php endif; ?>

<style>
  .zoom-card {
    position: relative;
    overflow: hidden;
    border-radius: 15px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .zoom-card:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
  }

  .card-footer {
    background-color: #f8f9fa;
    font-size: 0.875rem;
    color: #6c757d;
    border-top: 1px solid #e0e0e0;
    padding: 10px;
  }

  .card-body {
    padding: 20px;
  }

  .card-title {
    font-size: 1.25rem;
    margin-bottom: 15px;
  }

  .card-text {
    font-size: 1.5rem;
    font-weight: bold;
  }
</style>




<!-- CSS for hover and visual improvements -->
<style>
  .field-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .field-card:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  }

  .card-body {
    background-color: #fff;
    border-radius: 8px;
  }

  .facility-item {
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .facility-card {
    height: 250px;
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    border-radius: 8px;
    background-size: cover;
    background-position: center;
  }

  .facility-item i {
    font-size: 50px;
    margin-bottom: 15px;
  }

  .facility-item h5 {
    font-size: 22px;
    font-weight: bold;
  }

  /* Custom CSS for search bar and filter */
  #search-filter .row {
    display: flex;
    justify-content: center;
    gap: 10px;
  }

  #search-filter .col-md-6,
  #search-filter .col-md-4 {
    max-width: 350px;
  }

  #search-filter .col-md-4 {
    margin-left: 15px;
  }

  .form-control {
    height: 40px;
    font-size: 14px;
  }
</style>

<style>
  /* Input & Select Modern Look - no resizing */
  .search-modern,
  .filter-modern {
    border-radius: 8px;
    transition: 0.3s ease;
    border: 1px solid #ccc;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.04);
  }

  .search-modern:focus,
  .filter-modern:focus {
    border-color: #0d6efd;
    box-shadow: 0 0 0 0.15rem rgba(13, 110, 253, 0.25);
    outline: none;
  }
</style>



<!-- JavaScript for search and filter -->
<script>
  function filterFields() {
    let searchValue = document.getElementById('search-field').value.toLowerCase();
    let filterValue = document.getElementById('field-filter').value.toLowerCase();
    let fields = document.getElementsByClassName('field-card');

    Array.from(fields).forEach(function(field) {
      let fieldTitle = field.getElementsByClassName('card-title')[0].innerText.toLowerCase();
      let fieldType = field.classList.contains(filterValue) || filterValue === '';

      if (fieldTitle.includes(searchValue) && fieldType) {
        field.style.display = '';
      } else {
        field.style.display = 'none';
      }
    });
  }
</script>