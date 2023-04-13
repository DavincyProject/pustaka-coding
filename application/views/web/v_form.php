<section>
    <center>
        <form action="<?= base_url('web/data'); ?>" method="post" onsubmit="return validateForm()">
            <table>
                <tr>
                    <th colspan="3">
                        <div class="judul">Form Input Data Mata Kuliah</div>
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Kode MTK</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="kode" id="kode"> <a id="kodeError" class="error"></a>

                    </td>
                </tr>
                <tr>
                    <th>Nama MTK</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama"><a id="namaError" class="error"></a>

                    </td>
                </tr>
                <tr>
                    <th>SKS</th>
                    <td>:</td>
                    <td>
                        <select name="sks" id="sks">
                            <option value="">Pilih SKS</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        <a id="sksError" class="error"></a>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</section>

<script>
    function validateForm() {
        var kode = document.getElementById("kode").value;
        var nama = document.getElementById("nama").value;
        var sks = document.getElementById("sks").value;
        var kodeError = document.getElementById("kodeError");
        var namaError = document.getElementById("namaError");
        var sksError = document.getElementById("sksError");

        kodeError.style.color = "red";
        kodeError.style.fontWeight = "700";

        namaError.style.color = "red";
        namaError.style.fontWeight = "700";

        sksError.style.color = "red";
        sksError.style.fontWeight = "700";

        // Menghapus pesan error sebelumnya
        kodeError.innerHTML = "";
        namaError.innerHTML = "";
        sksError.innerHTML = "";

        // Validasi kode hanya mengandung huruf dan angka
        var kodeRegex = /^[0-9]+$/;
        if (kode === "") {
            kodeError.innerHTML = "Harap isi Kode MTK!";
            return false;
        } else if (!kode.match(kodeRegex)) {
            kodeError.innerHTML = "Kode MTK hanya boleh mengandung angka!";
            return false;
        }

        // Validasi nama hanya mengandung huruf dan spasi
        var namaRegex = /^[a-zA-Z\s]+$/;
        if (nama === "") {
            namaError.innerHTML = "Harap isi Nama MTK!";
            return false;
        } else if (!nama.match(namaRegex)) {
            namaError.innerHTML = "Nama MTK hanya boleh mengandung huruf dan spasi!";
            return false;
        }

        if (sks === "") {
            sksError.innerHTML = "Harap pilih SKS!";
            return false;
        }

        return true;
    }
</script>