<!DOCTYPE html>
<html>
<head>
    <title>Admin - eCater</title>
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/admin_add_cater.css') }}">
</head>

<body>

<div class="sidebar">
    <h2>eCater</h2>

    <a href="/admin/admin_add_cater">Tambah Cater</a>
    <a href="/admin/admin_list_cater">Senarai Cater</a>
    <a href="/admin/admin_manage_staff">Pengurusan Staff</a>

</div>

<div class="main">

<div class="topbar">
    <h3>Tambah Caterer</h3>
</div>

<div class="content">

<div class="form-box">

<h2>Pengurusan Caterer</h2>

<form>

<div class="form-group">
<label>Nama Caterer / Syarikat</label>
<input type="text" placeholder="Enter name">
</div>

<div class="form-group">
<label>No Lesen / Daftar Syarikat</label>
<input type="text">
</div>

<div class="form-group">
<label>Upload Lesen</label>
<input type="file">
</div>

<div class="form-group">
<label>Alamat Surat Menyurat / Kedai</label>
<textarea></textarea>
</div>

<div class="form-group">
<label>No Telefon Bimbit / Syarikat</label>
<input type="text">
</div>

<div class="form-group">
<label>Email (Optional)</label>
<input type="email">
</div>

<div class="form-group">
<label>Tarikh Start Lesen Perniagaan</label>
<input type="date">
</div>

<div class="form-group">
<label>Tarikh Tamat Lesen Perniagaan</label>
<input type="date">
</div>

<div class="form-group">
<label>Reminder Tahunan Upload Lesen</label>
<input type="date">
</div>

<button type="submit">Save</button>

</form>

</div>

</div>

</div>

<div class="footer">
Copyright © 2026 IMS JPKN. All rights reserved.
</div>

</body>
</html>