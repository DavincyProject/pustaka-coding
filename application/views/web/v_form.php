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
                        <input type="text" name="kode" id="kode" value="<?php echo set_value('kode'); ?>">
                        <?php echo form_error('kode', '<span class="error">', '</span>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>Nama MTK</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama" value="<?php echo set_value('nama'); ?>">
                        <?php echo form_error('nama', '<span class="error">', '</span>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>SKS</th>
                    <td>:</td>
                    <td>
                        <select name="sks" id="sks">
                            <option value="">Pilih SKS</option>
                            <option value="2" <?php echo set_select('sks', '2'); ?>>2</option>
                            <option value="3" <?php echo set_select('sks', '3'); ?>>3</option>
                            <option value="4" <?php echo set_select('sks', '4'); ?>>4</option>
                        </select>
                        <?php echo form_error('sks', '<span class="error">', '</span>'); ?>
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
