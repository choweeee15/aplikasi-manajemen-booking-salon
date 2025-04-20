 <link href="hcttps://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 <style>
     /* Parking Lot Grid */
     /* Parking Lot Grid */
     .parking-map {
         display: grid;
         grid-template-columns: repeat(5, 1fr);
         /* 5 spaces per row */
         gap: 15px;
         justify-content: center;
         padding: 20px;
         background: #e9ecef;
         /* Light grey background */
         border-radius: 10px;
     }

     /* Parking Space Styling */
     .parking-space {
         width: 90px;
         height: 140px;
         border-radius: 10px;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 16px;
         font-weight: bold;
         text-transform: uppercase;
         cursor: pointer;
         transition: 0.3s ease;
         box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
     }

     /* Available and Booked Colors */
     .available {
         background: #28a745;
         /* Green */
         color: white;
     }

     .available:hover {
         background: #218838;
         /* Darker Green */
     }

     .booked {
         background: #dc3545;
         /* Red */
         color: white;
         cursor: not-allowed;
     }

     /* Lane Styling */
     .lane {
         background: #6c757d;
         height: 50px;
         grid-column: span 5;
         text-align: center;
         color: white;
         line-height: 50px;
         font-weight: bold;
         border-radius: 5px;
     }

     .payment-option {
         display: flex;
         flex-direction: column;
         align-items: center;
         cursor: pointer;
     }

     .payment-option input {
         display: none;
     }

     .payment-option img {
         width: 70px;
         height: 70px;
         object-fit: cover;
         border: 2px solid transparent;
         border-radius: 10px;
         padding: 5px;
         transition: 0.3s;
     }

     .payment-option input:checked+img {
         border-color: #007bff;
     }

     .popup-overlay {
         display: none;
         position: fixed;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background: rgba(0, 0, 0, 0.5);
         z-index: 999;
     }

     .popup-container {
         position: fixed;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background: rgba(0, 0, 0, 0.5);
         display: flex;
         justify-content: center;
         align-items: center;
         z-index: 1000;
         visibility: hidden;
         opacity: 0;
         transition: visibility 0s, opacity 0.3s ease-in-out;
     }

     /* Pop-up Box */
     .popup-box {
         background: #fff;
         padding: 20px;
         border-radius: 10px;
         width: 400px;
         box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
         text-align: center;
         transform: translateY(-20px);
         transition: transform 0.3s ease-in-out;
     }

     /* Tombol Tutup */
     .popup-close {
         background: #d9534f;
         color: #fff;
         border: none;
         padding: 10px 20px;
         border-radius: 5px;
         cursor: pointer;
         font-size: 14px;
         margin-top: 10px;
     }

     .popup-close:hover {
         background: #c9302c;
     }

     /* Efek saat pop-up muncul */
     .popup-container.show {
         visibility: visible;
         opacity: 1;
     }

     .popup-box.show {
         transform: translateY(0);
     }

     .icon-container {
         text-align: center;
         margin-bottom: 10px;
     }
 </style>

 <div id="popup" class="popup-container">
     <div class="popup-box">
         <div class="icon-container">
             <svg width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                 <circle cx="12" cy="12" r="10"></circle>
                 <line x1="12" y1="8" x2="12" y2="14"></line>
                 <line x1="12" y1="16" x2="12" y2="16"></line>
             </svg>
         </div>
         <p id="popup-message"></p>
         <button class="popup-close" onclick="closePopup()">Tutup</button>
     </div>
 </div>

 <div class="page-wrapper bg-wrapper">
     <div class="content">
         <div class="row">
             <div class="col-sm-12">
                 <?php
                    $fullParkingTypes = [];
                    $availableMessages = [];
                    $availableSpaces = [
                        'mobil' => 0,
                        'motor' => 0
                    ];
                    ?>

                 <?php if (!empty($groupedSpaces)) {
                        foreach ($groupedSpaces as $tipe => $spaces) {
                            $totalSpaces = count($spaces);
                            $bookedSpaces = count(array_filter($spaces, fn($space) => $space['status'] === 'booked'));
                            $availableSpaces = $totalSpaces - $bookedSpaces;

                            if ($totalSpaces === $bookedSpaces) {
                                $fullParkingTypes[] = ucfirst($tipe);
                            } elseif ($availableSpaces > 0) {
                                $availableMessages[] = "Tersedia $availableSpaces slot parkir " . ucfirst($tipe) . ".";
                            }
                        }
                    }
                    ?>

                 <?php if (!empty($groupedSpaces)) : ?>
                     <?php foreach ($groupedSpaces as $tipe => $spaces) : ?>
                         <div class="card mt-3">
                             <div class="card-body">
                                 <h2>Parking Map <?= ucfirst($tipe) ?></h2>
                                 <p>Click on an available parking space to book it.</p>

                                 <?php if (session()->has('success')) : ?>
                                     <div class="alert alert-success"><?= session('success') ?></div>
                                 <?php endif; ?>

                                 <?php if (session()->has('error')) : ?>
                                     <div class="alert alert-danger"><?= session('error') ?></div>
                                 <?php endif; ?>

                                 <div class="parking-map">
                                     <?php if (!empty($spaces)) : ?>
                                         <?php $columns = 5;
                                            $count = 0; ?>

                                         <?php foreach ($spaces as $space) : ?>
                                             <?php if ($count % $columns === 0 && $count !== 0) : ?>
                                                 <div class="lane">Lane</div>
                                             <?php endif; ?>

                                             <div class="parking-space <?= $space['status'] === 'booked' ? 'booked' : 'available' ?>"
                                                 data-id="<?= $space['id_parkir'] ?>">
                                                 <?= $space['lokasi'] ?> (<?= ucfirst($space['tipe']) ?>)
                                             </div>

                                             <?php $count++; ?>
                                         <?php endforeach; ?>
                                     <?php else : ?>
                                         <p>No parking spaces available for <?= ucfirst($tipe) ?>.</p>
                                     <?php endif; ?>
                                 </div>
                             </div>
                         </div>
                     <?php endforeach; ?>
                 <?php else : ?>
                     <p>No parking spaces available at the moment.</p>
                 <?php endif; ?>
             </div>
         </div>
     </div>
 </div>

 <!-- Modal Form -->
 <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="bookingModalLabel">Book Parking Spot</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form action="<?= base_url('bookParking') ?>" method="post" enctype="multipart/form-data">
                     <input type="hidden" name="id_user" value="<?= session()->get('id') ?>">
                     <input type="hidden" name="id_parkir" id="id_parkir">

                     <div class="mb-3">
                         <label for="kendaraan" class="form-label">Vehicle Type:</label>
                         <select name="kendaraan" id="kendaraan" class="form-select" required>
                             <option value="Mobil">Car</option>
                             <option value="Motor">Motorcycle</option>
                         </select>
                     </div>

                     <div class="mb-3">
                         <label for="awal_waktu_reservasi" class="form-label">Start Time:</label>
                         <input type="datetime-local" name="awal_waktu_reservasi" id="awal_waktu_reservasi" class="form-control" required>
                     </div>

                     <div class="mb-3">
                         <label for="akhir_waktu_reservasi" class="form-label">End Time:</label>
                         <input type="datetime-local" name="akhir_waktu_reservasi" id="akhir_waktu_reservasi" class="form-control" required>
                     </div>

                    <!-- Total Charge -->
                    <div class="mb-3">
                        <label for="total_tagihan" class="form-label">Total Charge:</label>
                        <input type="text" id="total_tagihan_display" class="form-control" readonly>
                        <input type="hidden" name="total_tagihan" id="total_tagihan" value="0">
                    </div>

                    <div class="mb-3">
                        <label for="kode_diskon" class="form-label">(Opsional) Kode Diskon/Cashback:</label>
                        <div class="input-group">
                            <input type="text" id="kode_diskon" class="form-control" placeholder="Masukkan kode diskon/cashback">
                            <button class="btn btn-primary" onclick="applyDiscount()">Apply</button>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="harga_setelah_diskon" class="form-label">Harga Setelah Diskon:</label>
                        <input type="text" id="harga_setelah_diskon" class="form-control" readonly placeholder="Harga setelah diskon">
                    </div>


                     <div class="mb-3">
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
                     <div class="mb-3">
                         <label for="bukti_pembayaran" class="form-label">Upload Payment Proof:</label>
                         <input type="file" name="bukti_pembayaran" class="form-control" required>
                     </div>

                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                         <button type="submit" class="btn btn-primary">Confirm Booking</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>

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

    document.querySelectorAll('.parking-space.available').forEach(space => {
        space.addEventListener('click', () => {
            const spaceId = space.getAttribute('data-id');
            document.getElementById('id_parkir').value = spaceId;

            let bookingModal = new bootstrap.Modal(document.getElementById('bookingModal'));
            bookingModal.show();
        });
    });

    function calculateTotal() {
    let vehicleType = document.getElementById("kendaraan").value;
    let startTime = document.getElementById("awal_waktu_reservasi").value;
    let endTime = document.getElementById("akhir_waktu_reservasi").value;

    if (!startTime || !endTime) return;

    let rate = vehicleType === "Mobil" ? 10000 : 5000;
    let start = new Date(startTime);
    let end = new Date(endTime);
    let diffHours = Math.ceil((end - start) / (1000 * 60 * 60));

    if (diffHours > 0) {
        let total = diffHours * rate;
        document.getElementById("total_tagihan").value = total;
        document.getElementById("total_tagihan_display").value = "Rp" + total.toLocaleString();
    } else {
        document.getElementById("total_tagihan").value = "";
        document.getElementById("total_tagihan_display").value = "";
    }
}

function applyDiscount() {
    let totalCharge = parseFloat(document.getElementById("total_tagihan").value);
    let discountCode = document.getElementById("kode_diskon").value;
    let discount = 0;

    
    if (discountCode === "DISKON10") {
        discount = 0.10;
    } else if (discountCode === "CASHBACK5") {
        discount = 0.05;
    }

    
    let finalCharge = totalCharge;
    if (discount > 0) {
        finalCharge = totalCharge - (totalCharge * discount);
    }

    document.getElementById("harga_setelah_diskon").value = "Rp" + finalCharge.toLocaleString();

    
    document.getElementById("total_tagihan").value = finalCharge;
}

document.getElementById("kendaraan").addEventListener("change", calculateTotal);
document.getElementById("awal_waktu_reservasi").addEventListener("change", calculateTotal);
document.getElementById("akhir_waktu_reservasi").addEventListener("change", calculateTotal);

</script>

<script>
    function showPopup(messages) {
        document.getElementById("popup-message").innerHTML = messages.join("<br>");
        document.getElementById("popup").classList.add("show");
    }

    function closePopup() {
        document.getElementById("popup").classList.remove("show");
    }

    let fullParkingTypes = <?= json_encode($fullParkingTypes) ?>;
    let availableMessages = <?= json_encode($availableMessages) ?>;
    let messages = [];

    if (fullParkingTypes.length > 0) {
        messages.push("Tempat parkir untuk " + fullParkingTypes.join(" & ") + " sudah penuh!");
    }

    if (availableMessages.length > 0) {
        messages = messages.concat(availableMessages);
    }

    if (messages.length > 0) {
        showPopup(messages);
    }
</script>
