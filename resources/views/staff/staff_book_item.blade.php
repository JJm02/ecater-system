<!DOCTYPE html>
<html>
<head>
    <title>Tempahan - eCater</title>
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/staff/staff_book_item.css') }}">
</head>

<body>

<div class="sidebar">
    <h2>eCater</h2>

    <a href="/staff/staff_dashboard" class="{{ Request::is('staff/staff_dashboard') ? 'active' : '' }}">
    Menu Utama
    </a>
    
    <a href="/staff/staff_add_cater" class="{{ Request::is('staff/staff_add_cater') ? 'active' : '' }}">
    Tambah Cater
    </a>

    <a href="/staff/staff_list_cater" class="{{ Request::is('staff/staff_list_cater') ? 'active' : '' }}">
    Senarai Cater
    </a>

    <a href="/staff/staff_book_item" class="{{ Request::is('staff/staff_book_item') ? 'active' : '' }}">
    Tempahan
    </a>

    <a href="/staff/staff_book_item_status" class="{{ Request::is('staff/staff_book_item_status') ? 'active' : '' }}">
    Status Tempahan
    </a>
</div>

<div class="main">

<div class="topbar">
    <h3>Tempahan Caterer</h3>

    <div class="account">
        <div class="account-btn">
            <span>Staff</span>
            <span class="account-icon">👤</span>
        </div>
    </div>
</div>

<div class="content">

<div class="form-box">

<h2>Borang Tempahan</h2>

<form>

<!-- Choose Cater -->
<div class="form-group">
<label>Pilih Caterer</label>
<select onchange="showCaterInfo(this.value)">
<option value="">-- Pilih Caterer --</option>
<option value="jeremia">Jeremia Catering</option>
<option value="habibi">Habibi Catering</option>
<option value="nanna">Nanna Catering</option>
</select>
</div>

<!-- Cater Info -->
<!-- Cater Info -->
<div class="form-group cater-info" id="caterInfo" style="display:none;">
<label>Maklumat Caterer</label>

<table class="table">
<tr>
<td>Nama Caterer</td>
<td id="nama"></td>
</tr>

<tr>
<td>No Lesen</td>
<td id="lesen"></td>
</tr>

<tr>
<td>Alamat</td>
<td id="alamat"></td>
</tr>

<tr>
<td>No Telefon</td>
<td id="telefon"></td>
</tr>

<tr>
<td>Email</td>
<td id="email"></td>
</tr>

<tr>
<td>Start Lesen</td>
<td id="start"></td>
</tr>

<tr>
<td>Tamat Lesen</td>
<td id="tamat"></td>
</tr>

<tr>
<td>Reminder</td>
<td id="reminder"></td>
</tr>

</table>

</div>

<div class="form-group">
<label>Program</label>
<textarea rows="6" placeholder="Tulis maklumat program di sini..."></textarea>
</div>

<div class="form-group">
<label>Account Number</label>
<input type="text" placeholder="Masukkan Account Number">
</div>

<div class="form-group">
<label>Total Budget (RM)</label>
<input type="text" placeholder="Contoh: 5000">
</div>

<div class="form-group">
<label>Senarai Tempahan</label>
<textarea rows="6" placeholder="Tulis maklumat tempahan di sini..."></textarea>
</div>

<div class="button-group">
<button class="confirm-btn">Confirm</button>
<button class="cancel-btn">Cancel</button>
</div>

</form>

</div>

</div>

</div>

<div class="footer">
Copyright © 2026 IMS JPKN. All rights reserved.
</div>

<script>

function showCaterInfo(value){

document.getElementById("caterInfo").style.display = "block";

if(value == "jeremia"){
document.getElementById("nama").innerText = "Jeremia Catering";
document.getElementById("lesen").innerText = "123456";
document.getElementById("alamat").innerText = "Sandakan Sabah";
document.getElementById("telefon").innerText = "0123456789";
document.getElementById("email").innerText = "abc@gmail.com";
document.getElementById("start").innerText = "2026-01-01";
document.getElementById("tamat").innerText = "2027-01-01";
document.getElementById("reminder").innerText = "2026-12-01";
}

if(value == "habibi"){
document.getElementById("nama").innerText = "Habibi Catering";
document.getElementById("lesen").innerText = "123456";
document.getElementById("alamat").innerText = "Tawau Sabah";
document.getElementById("telefon").innerText = "0123456789";
document.getElementById("email").innerText = "abc@gmail.com";
document.getElementById("start").innerText = "2026-01-01";
document.getElementById("tamat").innerText = "2027-01-01";
document.getElementById("reminder").innerText = "2026-12-01";
}

if(value == "nanna"){
document.getElementById("nama").innerText = "Nanna Catering";
document.getElementById("lesen").innerText = "123456";
document.getElementById("alamat").innerText = "Labuan";
document.getElementById("telefon").innerText = "0123456789";
document.getElementById("email").innerText = "abc@gmail.com";
document.getElementById("start").innerText = "2026-01-01";
document.getElementById("tamat").innerText = "2027-01-01";
document.getElementById("reminder").innerText = "2026-12-01";
}

}

</script>

</body>
</html>