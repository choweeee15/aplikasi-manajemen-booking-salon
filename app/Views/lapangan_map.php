<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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
<div class="page-wrapper bg-wrapper" style="padding-top: 65px;">
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <section id="welcome" class="text-center py-5" style="background-image: url('<?= base_url('img/salonhead3.jpg') ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                    <div class="container">
                        <h1 class="display-3 text-white">Welcome to Velour Salon!</h1>
                        <p class="lead text-white mb-4">Be Your Most Beautiful, Most Confident Self!</p>
                        <a href="#fields" class="btn btn-outline-light btn-lg">Explore Our Service</a>
                    </div>
                </section>

                <section id="fields" class="bg-light py-5">
                    <div class="container">
                        <h2 class="text-center fw-bold mb-4 text-dark">💅 Available Salon Services</h2>

                        <div class="row justify-content-center mb-4">
                            <div class="col-lg-8 d-flex flex-wrap justify-content-center gap-3">

                                <div style="flex: 1 1 0%">
                                    <input type="text" id="search-field" class="form-control search-modern" placeholder="🔍 Search for a field..." onkeyup="filterFields()">
                                </div>
                                <div>
                                    <select id="field-filter" class="form-select filter-modern" onchange="filterFields()">
                                        <option value="">💇‍♀️ Filter by Service</option>
                                        <option value="Haircut">Hair Cut 🎨</option>
                                        <option value="Hair coloring">Hair coloring 🎨</option>
                                        <option value="Hair styling">Hair styling 💇‍♀️</option>
                                        <option value="Hair treatment">Hair treatment 💆‍♀️</option>
                                        <option value="Updo Styling">Updo Styling  💁‍♀️</option>
                                        <option value="Perming">Perming 🔄</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif; ?>

            <?php foreach ($lapangan as $l): ?>
                <div class="col-md-4 mb-4 field-card <?= strtolower(str_replace(' ', '-', $l['tipe'])) ?>">
                    <div class="card shadow-sm border-0">
                        <?php
                        $gambarPertama = isset($l['gambar'][0]) ? base_url('uploads/lapangan/' . $l['gambar'][0]['file']) : base_url('img/default.jpg');
                        ?>
                        <img src="<?= $gambarPertama ?>" class="card-img-top rounded" style="height: 250px; object-fit: cover;" alt="<?= $l['tipe'] ?>">
                        <div class="card-body">
                            <h5 class="card-title text-dark"><?= esc($l['tipe']) ?></h5>
                            <p class="card-text text-muted"><?= esc($l['deskripsi']) ?></p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-primary mt-2 rounded-pill transition-effect" data-bs-toggle="modal" data-bs-target="#bookingModal<?= $l['id'] ?>" style="flex-grow: 1; text-align: center; padding: 12px 20px; font-weight: 600; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-right: 10px;">Make Appointment</button>
                                <button class="btn btn-danger mt-2 rounded-pill transition-effect" data-bs-toggle="modal" data-bs-target="#detailModal<?= $l['id'] ?>" style="flex-grow: 1; text-align: center; padding: 12px 20px; font-weight: 600; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">Detail</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Detail -->
                <div class="modal fade" id="detailModal<?= $l['id'] ?>" tabindex="-1" aria-labelledby="detailModalLabel<?= $l['id'] ?>" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="detailModalLabel<?= $l['id'] ?>"><?= esc($l['tipe']) ?> Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row justify-content-center">
                                    <div class="col-md-6 mb-4">
                                        <div id="gallery<?= $l['id'] ?>" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <?php foreach ($l['gambar'] as $key => $image): ?>
                                                    <div class="carousel-item <?= $key === 0 ? 'active' : '' ?>">
                                                        <img src="<?= base_url('uploads/lapangan/' . $image['file']) ?>" class="d-block w-100 rounded" alt="<?= esc($l['tipe']) ?> Image <?= $key + 1 ?>">
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#gallery<?= $l['id'] ?>" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#gallery<?= $l['id'] ?>" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <h6 class="text-dark">Stylist:</h6>
                                        <p class="text-muted" style="font-size: 1.1rem;"><?= esc($l['lokasi']) ?></p>

                                        <h6 class="text-dark">Type:</h6>
                                        <p class="text-muted" style="font-size: 1.1rem;"><?= esc($l['tipe']) ?></p>

                                        <h6 class="text-dark">Price per Treatment:</h6>
                                        <p class="text-muted" style="font-size: 1.1rem;"><strong>Rp <?= number_format($l['harga'], 0, ',', '.') ?></strong> per Treatment</p>

                                        <p class="text-muted" style="font-size: 1.1rem;"><?= esc($l['deskripsi']) ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-end">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="padding: 14px 24px; font-weight: 600; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Booking -->
                <div class="modal fade" id="bookingModal<?= $l['id'] ?>" tabindex="-1" aria-labelledby="bookingModalLabel<?= $l['id'] ?>" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content rounded-4 shadow-lg">
                            <form id="bookingForm<?= $l['id'] ?>" action="<?= base_url('booking/simpan') ?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="lapangan_id" value="<?= $l['id'] ?>">
                                <div class="modal-header border-bottom-0">
                                    <h5 class="modal-title text-center" id="bookingModalLabel<?= $l['id'] ?>">
                                        <strong class="highlight-title"><?= esc($l['tipe']) ?> ✂️</strong>
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p class="text-muted fs-4">
                                        <strong>Rp <?= number_format($l['harga'], 0, ',', '.') ?></strong> per treatment
                                    </p>
                                    <p class="text-muted mb-4"><?= esc($l['deskripsi']) ?></p>
                                    <div class="mb-4">
                                        <p class="text-muted">
                                            <strong>Stylist:</strong> <?= esc($l['lokasi']) ?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggal<?= $l['id'] ?>" class="form-label">Pilih Tanggal Booking</label>
                                        <input type="date" class="form-control shadow-sm" id="tanggal<?= $l['id'] ?>" name="tanggal">
                                    </div>
                                    <div class="mb-5">
                                        <label class="form-label">Pilih Jam:</label>
                                        <div class="d-flex flex-wrap gap-3">
                                            <!-- <?php foreach ($waktu as $w): ?>
                                                <label class="time-option">
                                                    <input type="checkbox" name="waktu_id[]" value="<?= $w['id'] ?>">
                                                    <span><?= esc($w['mulai']) . ' - ' . esc($w['selesai']) . ' ' . esc($w['satuan']) ?></span>
                                                </label>
                                            <?php endforeach; ?> -->
                                            <?php foreach ($waktu as $w): ?>
                                        <label class="time-option">
                                            <input type="checkbox" name="waktu_id[]" value="<?= $w['id'] ?>">
                                            <span><?= esc($w['mulai']) . ' ' . esc($w['satuan']) ?></span>
                                        </label>
                                    <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <p class="fs-5">
                                            <strong>Total: </strong><span id="totalPrice<?= $l['id'] ?>">Rp <?= number_format($l['harga'], 0, ',', '.') ?></span>
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
                                        <p class="info_pembayaran mt-2 text-muted"></p>
                                    </div>
                                    <div class="mb-4">
                                        <label for="bukti_pembayaran<?= $l['id'] ?>" class="form-label">Upload Bukti Pembayaran</label>
                                        <input class="form-control shadow-sm" type="file" id="bukti_pembayaran<?= $l['id'] ?>" name="bukti_pembayaran" accept="image/*">
                                        <div class="form-text">Format gambar: JPG, PNG, atau JPEG. Max 2MB.</div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="button" class="btn btn-outline-secondary me-2 rounded-3 shadow-sm" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary ms-3 rounded-3 shadow-sm">Make Appointment</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll("form").forEach(form => {
        const infoPembayaran = form.querySelector(".info_pembayaran");

        form.querySelectorAll(".payment-option input").forEach(input => {
            input.addEventListener("change", function () {
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

<script>
    function filterFields() {
        const searchInput = document.getElementById("search-field").value.toLowerCase();
        const filterSelect = document.getElementById("field-filter").value.toLowerCase();
        const cards = document.querySelectorAll(".field-card");

        cards.forEach(card => {
            const title = card.querySelector(".card-title").textContent.toLowerCase();
            const cardClass = card.className.toLowerCase();

            const matchesSearch = title.includes(searchInput);
            const matchesFilter = !filterSelect || cardClass.includes(filterSelect);

            if (matchesSearch && matchesFilter) {
                card.style.display = "block";
            } else {
                card.style.display = "none";
            }
        });
    }
</script>