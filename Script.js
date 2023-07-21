function updateFormFields(place, price) {
  const tempatwisataInput = document.getElementById("tempatwisata");
  const hargaInput = document.getElementById("harga");

  tempatwisataInput.value = place;
  hargaInput.value = price;
}

// Add event listeners to each "Pesan" button
const pesanButtons = document.querySelectorAll(".btn-primary[data-bs-toggle='modal']");
pesanButtons.forEach(function (button) {
  button.addEventListener("click", function () {
      const card = button.closest(".card");
      const cardTitle = card.querySelector(".card-title");
      const cardPrice = card.querySelector("h3");
      const place = cardTitle.innerText;
      const price = cardPrice.innerText;

      updateFormFields(place, price);
  });
});

    function calculateTotalBayar() {
        const jumlahDewasaInput = document.getElementById("jumlah_dewasa");
        const jumlahAnakInput = document.getElementById("jumlah_anak");

        let jumlahDewasa = parseInt(jumlahDewasaInput.value);
        let jumlahAnak = parseInt(jumlahAnakInput.value);

        // Check if the fields are empty or contain invalid values, set them to 0
        if (isNaN(jumlahDewasa) || jumlahDewasa < 0) {
            jumlahDewasa = 0;
        }
        if (isNaN(jumlahAnak) || jumlahAnak < 0) {
            jumlahAnak = 0;
        }

        let hargaTiket = 0;

        // Get the selected place (tempat wisata)
        const tempatWisata = document.getElementById("tempatwisata").value;

        // Calculate hargaTiket based on the selected place (card titles)
        if (tempatWisata === "Kedung Pedut Waterfall") {
            hargaTiket = 50000;
        } else if (tempatWisata === "Kebun Teh Nglinggo") {
            hargaTiket = 30000;
        } else if (tempatWisata === "Taman Sungai Mudal") {
            hargaTiket = 70000;
        }

        // Calculate the total bayar with 50% discount for children
        const totalBayar = (jumlahDewasa * hargaTiket) + (jumlahAnak * hargaTiket * 0.5);

        const totalBayarInput = document.getElementById("total_bayar");
        totalBayarInput.value = totalBayar.toLocaleString("id-ID");
    }

    // Add event listeners to input fields to update total bayar on change
    const jumlahDewasaInput = document.getElementById("jumlah_dewasa");
    const jumlahAnakInput = document.getElementById("jumlah_anak");

    jumlahDewasaInput.addEventListener("change", calculateTotalBayar);
    jumlahAnakInput.addEventListener("change", calculateTotalBayar);

    // Add event listener to the "Pesan" button inside the modal to close the modal
    const pesanButtonModal = document.querySelector("#reservationModal .btn-primary");
    pesanButtonModal.addEventListener("click", function () {
        const reservationModal = document.getElementById("reservationModal");
        const modal = bootstrap.Modal.getInstance(reservationModal);
        modal.hide();
    });



