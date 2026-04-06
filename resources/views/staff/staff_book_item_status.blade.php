<!DOCTYPE html>
<html>
<head>
    <title>Status Tempahan - eCater</title>
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/staff/staff_book_item_status.css') }}">
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
    <h3>Status Tempahan Caterer</h3>

    <div class="account">
        <div class="account-btn">
            <span>Staff</span>
            <span class="account-icon">👤</span>
        </div>
    </div>
</div>

<div class="content">

<div class="form-box">

<h2>Senarai Tempahan Caterer</h2>

<table class="table">

<thead>
<tr>
<th>No</th>
<th>Nama Cater</th>
<th>Program</th>
<th>Account Number</th>
<th>Total Budget (RM)</th>
<th>Senarai Tempahan</th>
<th>Status</th>
</tr>
</thead>

<tbody>

<tr>
<td>1</td>
<td>Jeremia Catering</td>
<td>Program Latihan 3 Hari</td>
<td>123456789</td>
<td>5000</td>
<td>Kopi, Teh Pandan, Buah-buahan</td>
<td><span class="status pending">Pending</span></td>
</tr>

<tr>
<td>2</td>
<td>Habibi Catering</td>
<td>Mesyuarat Jabatan</td>
<td>987654321</td>
<td>3500</td>
<td>Mee Goreng Daging, Rendang Ayam, Nasi Lemak</td>
<td><span class="status approved">Approved</span></td>
</tr>

<tr>
<td>3</td>
<td>Nanna Catering</td>
<td>Kursus Kakitangan</td>
<td>456789123</td>
<td>4200</td>
<td>Nasi Goreng Ayam, Ayam Goreng, Sayur Sawi</td>
<td><span class="status rejected">Rejected</span></td>
</tr>

<tr>
<td>4</td>
<td>Saraza Catering</td>
<td>Program Hari Sukan</td>
<td>112233445</td>
<td>2800</td>
<td>Nasi Lemak, Kuih Muih, Air Sirap</td>
<td><span class="status pending">Pending</span></td>
</tr>

<tr>
<td>5</td>
<td>Iqa Catering</td>
<td>Bengkel ICT</td>
<td>223344556</td>
<td>3100</td>
<td>Nasi Ayam, Sup Sayur, Buah-buahan</td>
<td><span class="status approved">Approved</span></td>
</tr>

<tr>
<td>6</td>
<td>AJ Catering</td>
<td>Program Motivasi</td>
<td>334455667</td>
<td>4600</td>
<td>Nasi Putih, Ayam Masak Merah, Sayur Campur</td>
<td><span class="status pending">Pending</span></td>
</tr>

<tr>
<td>7</td>
<td>Noel Catering</td>
<td>Mesyuarat Tahunan</td>
<td>445566778</td>
<td>3900</td>
<td>Nasi Goreng Cina, Ayam Goreng, Teh O</td>
<td><span class="status approved">Approved</span></td>
</tr>

<tr>
<td>8</td>
<td>Habibi Catering</td>
<td>Kursus Kepimpinan</td>
<td>556677889</td>
<td>5200</td>
<td>Nasi Minyak, Daging Masak Hitam, Kuih</td>
<td><span class="status pending">Pending</span></td>
</tr>

</tbody>

</table>

</div>

</div>

</div>

<div class="footer">
Copyright © 2026 IMS JPKN. All rights reserved.
</div>

</body>
</html>