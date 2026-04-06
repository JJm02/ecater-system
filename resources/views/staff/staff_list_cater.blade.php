<!DOCTYPE html>
<html>
<head>
    <title>Senarai Cater - eCater</title>
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/staff/staff_list_cater.css') }}">
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
    <h3>Senarai Caterer</h3>

    <div class="account">
        <div class="account-btn">
            <span>Staff</span>
            <span class="account-icon">👤</span>
        </div>
    </div>
</div>

<div class="content">

<div class="form-box">

<h2>Senarai Pengurusan Caterer</h2>

<table class="table">

<thead>
<tr>
<th>No</th>
<th>Nama Caterer</th>
<th>No Lesen</th>
<th>Alamat</th>
<th>No Telefon</th>
<th>Email</th>
<th>Start Lesen</th>
<th>Tamat Lesen</th>
<th>Reminder</th>
<th>Action</th>
</tr>
</thead>

<tbody>

<tr>
<td>1</td>
<td>Jeremia Catering</td>
<td>123456</td>
<td>Sandakan Sabah</td>
<td>0123456789</td>
<td>abc@gmail.com</td>
<td>2026-01-01</td>
<td>2027-01-01</td>
<td>2026-12-01</td>
<td>
<button class="edit-btn">Edit</button>
<button class="delete-btn">Delete</button>
</td>
</tr>

<tr>
<td>2</td>
<td>Habibi Catering</td>
<td>123456</td>
<td>Tawau Sabah</td>
<td>0123456789</td>
<td>abc@gmail.com</td>
<td>2026-01-01</td>
<td>2027-01-01</td>
<td>2026-12-01</td>
<td>
<button class="edit-btn">Edit</button>
<button class="delete-btn">Delete</button>
</td>
</tr>

<tr>
<td>3</td>
<td>Nanna Catering</td>
<td>123456</td>
<td>Labuan</td>
<td>0123456789</td>
<td>abc@gmail.com</td>
<td>2026-01-01</td>
<td>2027-01-01</td>
<td>2026-12-01</td>
<td>
<button class="edit-btn">Edit</button>
<button class="delete-btn">Delete</button>
</td>
</tr>

<tr>
<td>4</td>
<td>Saraza Catering</td>
<td>123456</td>
<td>Lahad Datu Sabah</td>
<td>0123456789</td>
<td>abc@gmail.com</td>
<td>2026-01-01</td>
<td>2027-01-01</td>
<td>2026-12-01</td>
<td>
<button class="edit-btn">Edit</button>
<button class="delete-btn">Delete</button>
</td>
</tr>

<tr>
<td>5</td>
<td>Iqa Catering</td>
<td>123456</td>
<td>Papar Sabah</td>
<td>0123456789</td>
<td>abc@gmail.com</td>
<td>2026-01-01</td>
<td>2027-01-01</td>
<td>2026-12-01</td>
<td>
<button class="edit-btn">Edit</button>
<button class="delete-btn">Delete</button>
</td>
</tr>

<tr>
<td>6</td>
<td>AJ Catering</td>
<td>123456</td>
<td>Telipok Sabah</td>
<td>0123456789</td>
<td>abc@gmail.com</td>
<td>2026-01-01</td>
<td>2027-01-01</td>
<td>2026-12-01</td>
<td>
<button class="edit-btn">Edit</button>
<button class="delete-btn">Delete</button>
</td>
</tr>

<tr>
<td>7</td>
<td>Noel Catering</td>
<td>123456</td>
<td>Tuaran Sabah</td>
<td>0123456789</td>
<td>abc@gmail.com</td>
<td>2026-01-01</td>
<td>2027-01-01</td>
<td>2026-12-01</td>
<td>
<button class="edit-btn">Edit</button>
<button class="delete-btn">Delete</button>
</td>
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