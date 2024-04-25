// For example trigger on button clicked, or any time you need
const payButton = document.getElementById("pay-button");
const form = document.getElementById("payment-form");

payButton.addEventListener("click", async function (e) {
  e.preventDefault(); // Perbaikan tanda kurung
  const formData = new FormData(form); // Huruf besar pada FormData
  const data = new URLSearchParams(formData);

  try {
    const response = await fetch("function/payment.php", {
      method: "POST",
      body: data,
    });
    const snapToken = await response.text(); // Mengasumsikan server hanya mengembalikan token sebagai teks sederhana

    // Gunakan token untuk membuka Snap popup
    window.snap.pay(snapToken, {
      onSuccess: function (result) {
        // Data yang akan dikirim ke server
        var postData = {
          items: JSON.stringify(data), // Contoh data
        };

        $.ajax({
          url: "function/update_transaction.php", // URL ke file PHP
          type: "POST",
          data: postData,
          dataType: "json",
          success: function (response) {
            if (response.success) {
              Swal.fire({
                title: "Pembayaran Berhasil!",
                text: "Pesanan anda akan diproses segera!",
                icon: "success",
              }).then((result) => {
                if (result.value) {
                  location.reload(); // Refresh halaman
                }
              });
            } else {
              Swal.fire("Error", "Ada masalah saat memproses pembayaran.", "error");
            }
          },
          error: function () {
            Swal.fire("Error", "Tidak dapat terhubung ke server.", "error");
          },
        });
      },
      onPending: function (result) {
        Swal.fire({
          icon: "info",
          title: "Pembayaran Pending",
          text: "Silahkan lakukan pembayaran",
        }).then((result) => {
          if (result.value) {
            location.reload(); // Refresh halaman
          }
        });
      },
      onError: function (result) {
        Swal.fire({
          icon: "error",
          title: "Pembayaran Gagal",
          text: "pembayaran Expired, silahkan lakukan pemesanan dan pembayaran kembali",
        }).then((result) => {
          if (result.value) {
            location.reload(); // Refresh halaman
          }
        });
      },
      onClose: function () {
        Swal.fire({
          icon: "warning",
          title: "you closed the popup without finishing the payment",
        });
      },
    });
  } catch (error) {
    console.log(error.message);
  }
});
