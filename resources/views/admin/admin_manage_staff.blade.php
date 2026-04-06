<!DOCTYPE html>
<html>
<head>

<title>Manage Staff</title>
<link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin/admin_manage_staff.css') }}">

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
    <h3>Pengurusan Staff</h3>
</div>

<div class="content">

<div class="card">
<h3>Pengurusan Staff</h3>

<button style="margin-bottom:15px;">Tambah Staff</button>

<table class="table">
<tr>
<th>Nama</th>
<th>Email</th>
<th>Role</th>
<th>Action</th>
</tr>

<tr>
<td>John Doe</td>
<td>john@gmail.com</td>
<td>Staff</td>
<td>
<button class="edit-btn">Edit</button>
<button class="delete-btn">Delete</button>
</td>
</tr>

<tr>
<td>Sarah Lee</td>
<td>sarah@gmail.com</td>
<td>Admin</td>
<td>
<button class="edit-btn">Edit</button>
<button class="delete-btn">Delete</button>
</td>
</tr>

<tr>
<td>Michael Tan</td>
<td>michael@gmail.com</td>
<td>Staff</td>
<td>
<button class="edit-btn">Edit</button>
<button class="delete-btn">Delete</button>
</td>
</tr>

</table>

</div>

</div>

</div>

<div class="footer">
Copyright © 2026 IMS JPKN. All rights reserved.
</div>

</body>
</html>