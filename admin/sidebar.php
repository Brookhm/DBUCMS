<!DOCTYPE html>
<html>
<head>
	<title>Page Title</title>

</head>
<body>

<div class="sidebar">
<div class="logo-container">
      <h1>DBUCMS</h1>
    </div>
<a href="admin_home.php">Dashboard</a>
  <a href="diagnosis_data.php">Diagnosis room data</a>
  <a href="laboratory_result.php">Laboratory room data</a>
  <a href="prescription_data.php">	Pharmacy room data</a>
  <a href="adminsetting.php">Setting</a>
  <a href="usersdata.php">System Users Data</a>
  <a href="logout.php">Logout</a>

</div>



  <h2>Page Title</h2>
  <p>Page content goes here.</p>
</div>
<style>

	/* Style the sidebar */
	.sidebar {
	  height: 100%; /* Full-height: remove this if you want "auto" height */
	  width: 200px; /* Set the width of the sidebar */
	  position: fixed; /* Fixed Sidebar (stay in place on scroll) */
	  z-index: 1; /* Stay on top */
	  top: 0; /* Stay at the top */
	  left: 0;
	  background-color: #f1f1f1; /* Grey background color */
	  overflow-x: hidden; /* Disable horizontal scroll */
	  padding-top: 20px;
	}

	/* The navigation menu links */
	.sidebar a {
	  padding: 6px 8px 6px 16px;
	  text-decoration: none;
	  font-size: 20px;
	  color: #818181;
	  display: block;
	}

	/* When you mouse over the navigation links, change their color */
	.sidebar a:hover {
	  color: #f1f;
	}

	/* Style the main content */
	
	</style>
</body>
</html>
