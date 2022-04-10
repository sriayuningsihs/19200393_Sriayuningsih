<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            margin-top: 200px;
        }

        .border {
            border: 1px solid #000;
            border-width: 50%;
            margin: auto;
            padding: 40px;
            background-color: #ccc;
        }

        td {
            font-size: xx-large;
        }

        input,
        select {
            font-size: xx-large;
            width: 100%;
            border: 1px solid #000;
            border-radius: 4px;
            resize: vertical;
        }



        input[type=submit]:hover {
            background-color: #b3b3b3;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: right;
            width: 75%;
            margin-top: 6px;
        }
    </style>
</head>

<body>

    <center>
        <form action="<?= base_url("sepatu/cetak"); ?>" method="post">
            <table class="border">
                <tr>
                    <td>Nama Pembeli </td>
                    <td class="col-75"><input type="text" name="nama" id="nama" placeholder="Masukkan Nama"></td>
                </tr>
                <tr>
                    <td>No. Hp </td>
                    <td class="col-75"><input type="text" name="nohp" id="nohp" placeholder="Masukkan Nomor HP"></td>
                </tr>
                <tr>
                    <td>Merk Sepatu</td>
                    <td class="col-75">
                        <select name="merk" id="merk">
                            <option value="pilihmerk">-pilih merk sepatu-</option>
                            <option value="Nike">Nike</option>
                            <option value="Adidas">Adidas</option>
                            <option value="Kickers">Kickers</option>
                            <option value="Eiger">Eiger</option>
                            <option value="Bucherri">Bucherri</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Ukuran</td>
                    <td class="col-75">
                        <select name="ukuran" id="ukuran">
                            <option value="pilihukuran">-pilih ukuran-</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td class="col-75"><input type="submit" name="submit" id="submit"></td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>