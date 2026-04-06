<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - eCater</title>
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/staff/staff_dashboard.css') }}">
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
    <h3>Dashboard</h3>

    <div class="account">
        <div class="account-btn" onclick="toggleMenu()">
            <span>Staff</span>
            <span class="account-icon">👤</span>
        </div>

        <div class="account-menu" id="accountMenu">
            <a href="#">Profile</a>
            <a href="#" onclick="confirmLogout()">Logout</a>
        </div>
    </div>
</div>

<div class="content">

<!-- Summary Cards -->
<div class="dashboard-cards">

<div class="card-box">
<h4>Total Caterer</h4>
<h2>7</h2>
</div>

<div class="card-box">
<h4>Total Tempahan</h4>
<h2>12</h2>
</div>

<div class="card-box">
<h4>Pending</h4>
<h2>4</h2>
</div>

<div class="card-box">
<h4>Approved</h4>
<h2>8</h2>
</div>

</div>

<!-- Recent Tempahan -->
<div class="form-box">

<h2>Recent Tempahan</h2>

<table class="table">
<thead>
<tr>
<th>No</th>
<th>Nama Cater</th>
<th>Program</th>
<th>Budget</th>
<th>Status</th>
</tr>
</thead>

<tbody>

<tr>
<td>1</td>
<td>Jeremia Catering</td>
<td>Kursus</td>
<td>5000</td>
<td><span class="status pending">Pending</span></td>
</tr>

<tr>
<td>2</td>
<td>Habibi Catering</td>
<td>Mesyuarat</td>
<td>3500</td>
<td><span class="status approved">Approved</span></td>
</tr>

<tr>
<td>3</td>
<td>Nanna Catering</td>
<td>Program</td>
<td>4200</td>
<td><span class="status approved">Approved</span></td>
</tr>

</tbody>

</table>

</div>

<!-- Reminder Section -->

<div class="form-box">

<h2>Reminder Lesen Tamat</h2>

<table class="table">

<thead>
<tr>
<th>No</th>
<th>Nama Cater</th>
<th>Tamat Lesen</th>
</tr>
</thead>

<tbody>

<tr>
<td>1</td>
<td>Jeremia Catering</td>
<td>2026-12-01</td>
</tr>

<tr>
<td>2</td>
<td>Habibi Catering</td>
<td>2026-11-15</td>
</tr>

</tbody>

</table>

</div>

</div>

</div>

<div class="footer">
Copyright © 2026 IMS JPKN. All rights reserved.
</div>


<script>

function toggleMenu() {
    document.getElementById("accountMenu").classList.toggle("show");
}

function confirmLogout() {
    if(confirm("Are you sure you want to logout?")) {
        window.location.href = "/logout";
    }
}

// close dropdown when click outside
window.onclick = function(event) {
    if (!event.target.closest('.account')) {
        var dropdown = document.getElementById("accountMenu");
        if (dropdown.classList.contains('show')) {
            dropdown.classList.remove('show');
        }
    }
}

</script>

</body>
</html>